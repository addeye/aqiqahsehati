<?php

/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 09/08/2016
 * Time: 20:13
 */
class Page extends CI_Controller
{
    private $data;
    public function __construct()
    {
        parent::__construct();
        $table = 'm_posting';
        $condition['tipe']='page';
        $this->data['menu'] = $this->base_model->getData($table,$condition);
    }

    public function index($slug)
    {
        $table = 'm_posting';
        $condition['slug'] = $slug;
        $condition['tipe'] = 'page';
        $this->data['konten'] = $this->base_model->getData($table,$condition);

        if(!$this->data['konten']->num_rows())
        {
            show_404();
        }

        $content = "page";
        $this->template->output($this->data,$content);
    }
}