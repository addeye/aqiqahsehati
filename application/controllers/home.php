<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 26/07/2016
 * Time: 14:41
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    private $data;
    public function __construct()
    {
        parent::__construct();
        $table = 'm_posting';
        $condition['tipe']='page';
        $this->data['menu'] = $this->base_model->getData($table,$condition,'ASC');
        $this->data['link_social'] = $this->base_model->get('m_linksocial','ASC');
        $this->data['alamat'] = $this->base_model->get('m_address');
        $this->data['foot_testimoni'] = $this->base_model->getData('m_testimoni',array('publish'=>1));
    }

    public function index()
    {
        $content = "home";
        $this->data['active'] = 'beranda';
        $this->data['title'] = 'Beranda';
        $this->data['testimoni'] = $this->base_model->getData('m_galeri',array('kategori'=>3));
        $this->template->output($this->data,$content);
    }

    public function harga()
    {
        $content = "harga";
        $this->data['active'] = 'harga';
        $this->data['title'] = 'Harga Paket Aqiqah Murah Terbaik 2016';
        $this->template->output($this->data,$content);
    }

    public function visitor()
    {
        $this->load->view('visitor');
    }

//    public function user()
//    {
//        $username = 'admin';
//        $password = '12345678';
//        $email = 'mokhamad27@gmail.com';
//        $additional_data = array(
//            'first_name' => 'Mokhamad',
//            'last_name' => 'Ariadi',
//        );
//        $group = array('1'); // Sets user to admin.
//
//        $this->ion_auth->register($username, $password, $email, $additional_data, $group);
//    }
}