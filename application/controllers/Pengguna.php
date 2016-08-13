<?php

/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 08/08/2016
 * Time: 14:30
 */
class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');

        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['title'] = 'Pengguna';
        $data['sub_title'] = 'Tabel Pengguna';
        $data['user'] = $this->ion_auth->users()->result();
        foreach ($data['user'] as $k => $user)
        {
            $data['user'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
        }
        $content = "admin/pengguna/view_pengguna";
        $this->template_admin->output($data,$content);
    }

    public function tambah()
    {
        $data['title'] = 'Pengguna';
        $data['sub_title'] = 'Tambah Pengguna';
        $data['groups'] = $this->base_model->get('groups');
        $content = "admin/pengguna/tambah_pengguna";
        $this->template_admin->output($data,$content);
    }

    public function create()
    {
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $group = $this->input->post('group');
        $active = $this->input->post('active');

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $additional_data = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'active' => $active,
        );
        $group = array($group); // Sets user to admin.

        $this->ion_auth->register($username, $password, $email, $additional_data, $group);

        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Masuk</div></div>");
        redirect('pengguna');

    }

    public function edit($id)
    {
        $table = 'users';
        $condition['id'] = $id;

        $data['title'] = 'Pengguna';
        $data['sub_title'] = 'Edit Pengguna';
        $data['groups'] = $this->base_model->get('groups');

        $data['pengguna'] = $this->base_model->getData($table,$condition)->result();
        foreach($data['pengguna'] as $k => $pengguna)
        {
            $data['pengguna'][$k]->groups = $this->ion_auth->get_users_groups($pengguna->id)->result();
        }
        $content = "admin/pengguna/update_pengguna";
        $this->template_admin->output($data,$content);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $active = $this->input->post('active');

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');

        $data = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'username' => $username,
            'email' => $email,
            'active' => $active,
        );

        if($password!='')
        {
            $data['password'] = $password;
        }

        $this->ion_auth->update($id, $data);

        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Update</div></div>");
        redirect('pengguna');

    }

    public function delete($id)
    {
        $this->ion_auth->delete_user($id);
    }
}