<?php

/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 12/08/2016
 * Time: 1:25
 */
class Contact extends CI_Controller
{
    private $data;
    public function __construct()
    {
        parent::__construct();
        $table = 'm_posting';
        $condition['tipe']='page';
        $this->data['menu'] = $this->base_model->getData($table,$condition,'ASC');
        $this->data['link_social'] = $this->base_model->get('m_linksocial','ASC');
        $this->data['foot_testimoni'] = $this->base_model->getData('m_testimoni',array('publish'=>1));
        $this->data['alamat'] = $this->base_model->get('m_address');
        $this->data['active'] = 'kontak';
        $this->data['title'] = 'Kontak';
    }

    public function index()
    {
        $content = "kontak";
        $this->template->output($this->data,$content);
    }

    public function send()
    {
        $nama = $this->input->post('name');
        $alamat = $this->input->post('address');
        $company = $this->input->post('company');
        $nohape = $this->input->post('phone');
        $email = $this->input->post('email');
        $pesan = $this->input->post('message');
        $created_at = date('Y-m-d');

        $htmlContent = '<h1>Pesan Dari Website Halaman Kontak aqiqahsehati.com </h1>';
        $htmlContent .= '<div>Data-data</div>';
        $htmlContent .= '<p>Nama : '.$nama.'</p>';
        $htmlContent .= '<p>Alamat : '.$alamat.'</p>';
        $htmlContent .= '<p>No Hp : '.$nohape.'</p>';
        $htmlContent .= '<p>Perusahaan : '.$company.'</p>';
        $htmlContent .= '<p>Email : '.$email.'</p>';
        $htmlContent .= '<p>Pesan : '.$pesan.'</p>';

        $this->load->library('email'); // Note: no $config param needed
        $this->email->from('order@aqiqahsehati.com', $nama);
        $this->email->to('aqiqahsehati@gmail.com');
        $this->email->subject('Kontak AqiqahSehati');
        $this->email->message($htmlContent);
        $this->email->send();

//        if($this->email->send())
//        {
//            echo 'Email sent. <a href="'.site_url('home/order').'">KEMBALI</a>';
//        }
//        else
//        {
//            show_error($this->email->print_debugger());
//        }

        $table = 'm_bukutamu';
        $data = array(
            'nama'=>$nama,
            'alamat'=>$alamat,
            'perusahaan'=>$company,
            'telp'=>$nohape,
            'email'=>$email,
            'pesan'=>$pesan,
            'created_at'=>$created_at,
        );

        $this->base_model->addData($table,$data);

        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pesan telah berhasil dikirim. Terima Kasih!</div></div>");
        redirect('contact');
    }

    public function tesemail()
    {
        $this->load->library('email'); // Note: no $config param needed
        $this->email->from('order@aqiqahsehati.com', 'deye');
        $this->email->to('aqiqahsehati@gmail.com');
        $this->email->subject('Kontak AqiqahSehati');
        $this->email->message('aku tes dari sini');

        if($this->email->send())
        {
            echo 'Email sent. <a href="'.site_url('home/order').'">KEMBALI</a>';
        }
        else
        {
            show_error($this->email->print_debugger());
        }
    }
}