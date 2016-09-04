<?php

/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 14/08/2016
 * Time: 22:06
 */
class Testimonial extends CI_Controller
{
    private $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');

        $table = 'm_posting';
        $condition['tipe']='page';
        $this->data['menu'] = $this->base_model->getData($table,$condition,'ASC');
        $this->data['link_social'] = $this->base_model->get('m_linksocial','ASC');
        $this->data['popnews'] = $this->news_model->getLimit();
        $this->data['foot_testimoni'] = $this->base_model->getData('m_testimoni',array('publish'=>1));
        $this->data['alamat'] = $this->base_model->get('m_address');
        $this->data['active'] = 'testimonial';
        $this->data['title'] = 'Testimonial Sehati';
    }

    public function index()
    {
        $content = "testimonial";
        $table = 'm_testimoni';
        $condition['publish'] = 1;
        $this->data['testimonial'] = $this->base_model->getData($table,$condition);
        $this->template->output($this->data,$content);
    }

    public function send()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $pesan = $this->input->post('pesan');

        $table = 'm_testimoni';
        $data = array(
            'nama' => $nama,
            'email' => $email,
            'pesan' => $pesan,
            'created_at' => date('Y-m-d'),
            'publish' => '0'
        );

        $this->load->library('upload');
        $nmfile = "comment-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './upload/testimonial/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '0'; //lebar maksimum 1288 px
        $config['max_height']  = '0'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data['gambar'] = $gbr['file_name'];

                $this->base_model->addData($table, $data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Terkirim, Terimakasih data akan tampil setelah terverifikasi !!</div></div>");
                redirect('testimonial'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('testimonial'); //jika gagal maka akan ditampilkan form upload
            }
        }
        else
        {
            $this->base_model->addData($table, $data); //akses model untuk menyimpan ke database
            //pesan yang muncul jika berhasil diupload pada session flashdata
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Terkirim, Terimakasih data akan tampil setelah terverifikasi !!</div></div>");
            redirect('testimonial'); //jika berhasil maka akan ditampilkan view vupload
        }
    }
}