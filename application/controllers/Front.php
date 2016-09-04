<?php

/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 08/08/2016
 * Time: 9:29
 */
class Front extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $content = "admin/home";
        $data['order'] = $this->base_model->get('m_order');
        $data['posting'] = $this->base_model->get('m_posting');
        $data['testimoni'] = $this->base_model->get('m_testimoni');
        $data['btamu'] = $this->base_model->get('m_bukutamu');
        $this->template_admin->output($data, $content);
    }

    public function linksocial()
    {
        $data['title'] = 'Link Social';
        $data['sub_title'] = 'Tabel Link Social';
        $data['social'] = $this->base_model->get('m_linksocial');
        $content = "admin/linksocial/view_linksocial";
        $this->template_admin->output($data, $content);
    }

    public function edit_linksocial($id)
    {
        $data['title'] = 'Link Social';
        $data['sub_title'] = 'Update Link Social';

        $condition['id'] = $id;
        $data['linksocial'] = $this->base_model->getData('m_linksocial', $condition);

        $content = "admin/linksocial/update_linksocial";
        $this->template_admin->output($data, $content);
    }

    public function update_linksocial()
    {
        $table = 'm_linksocial';
        $id = $this->input->post('id');
        $link = $this->input->post('link');
        $icon = $this->input->post('icon');
        $condition['id'] = $id;
        $data = array(
            'link' => $link,
            'icon' => $icon
        );
        $this->base_model->updateData($table, $data, $condition);
        redirect('front/linksocial');
    }

    public function identitas()
    {
        $data['title'] = 'Alamat ID';
        $data['sub_title'] = 'Form Update';
        $condition['id'] = 1;
        $data['identitas'] = $this->base_model->getData('m_address', $condition);
        $content = "admin/identitas/view_identitas";
        $this->template_admin->output($data, $content);
    }

    public function update_identitas()
    {
        $table = 'm_address';
        $id = $this->input->post('id');
        $keterangan = $this->input->post('keterangan');
        $condition['id'] = $id;
        $data = array(
            'keterangan' => $keterangan
        );

        $this->base_model->updateData($table, $data, $condition);
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Update</div></div>");
        redirect('front/identitas');
    }

    public function kategori()
    {
        $data['title'] = 'Kategori';
        $data['sub_title'] = 'Tabel Kategori';
        $data['kategori'] = $this->base_model->get('m_kategori');
        $content = "admin/kategori/view_kategori";
        $this->template_admin->output($data, $content);
    }

    public function tambah_kategori()
    {
        $data['title'] = 'Kategori';
        $data['sub_title'] = 'Tambah Kategori';
        $content = "admin/kategori/tambah_kategori";
        $this->template_admin->output($data,$content);
    }

    public function create_kategori()
    {
        $kategori = $this->input->post('kategori');
        $slug = $this->input->post('slug');
        $table = 'm_kategori';
        $data = array(
            'kategori'=>$kategori,
            'slug' => $slug,
        );

        $this->base_model->addData($table,$data);
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Masuk !!</div></div>");
        redirect('front/kategori');
    }

    public function edit_kategori($id)
    {
        $table='m_kategori';
        $condition['id'] = $id;
        $data['title'] = 'Kategori';
        $data['sub_title'] = 'Edit Kategori';
        $data['kategori'] = $this->base_model->getData($table,$condition);

        $content = "admin/kategori/update_kategori";
        $this->template_admin->output($data,$content);
    }

    public function update_kategori()
    {
        $kategori = $this->input->post('kategori');
        $slug = $this->input->post('slug');
        $id = $this->input->post('id');
        $table = 'm_kategori';
        $condition['id'] = $id;
        $data = array(
            'kategori'=>$kategori,
            'slug' => $slug,
        );

        $this->base_model->updateData($table,$data,$condition);
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Update !!</div></div>");
        redirect('front/kategori');
    }

    public function delete_kategori($id)
    {
        $table = 'm_kategori';
        $condition['id'] = $id;
        $this->base_model->deleteData($table,$condition);
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Dihapus !!</div></div>");
    }

    public function password()
    {
        $data['title'] = 'Password';
        $data['sub_title'] = 'Update Password';
        $content = "admin/password/update_password";
        $this->template_admin->output($data,$content);
    }

    public function update_password()
    {
        $password = $this->input->post('password');
        $id = $this->ion_auth->user()->row()->id;
        $data = array(
            'password' => $password,
        );
        $this->ion_auth->update($id, $data);
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Password Berhasil Dirubah !!</div></div>");
        redirect('front/password');
    }
}