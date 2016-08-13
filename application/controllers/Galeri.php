<?php

/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 13/08/2016
 * Time: 10:29
 */
class Galeri extends CI_Controller
{
    private $data;
    public function __construct()
    {
        parent::__construct();
        $table = 'm_posting';
        $condition['tipe']='page';
        $this->data['menu'] = $this->base_model->getData($table,$condition);
    }

    public function index()
    {
        $content = "galeri";
        $this->template->output($this->data,$content);
    }

    public function upload()
    {
        $this->load->view('upload');
    }
}