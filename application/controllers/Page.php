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
        $this->data['menu'] = $this->base_model->getData($table,$condition,'ASC');
        $this->data['link_social'] = $this->base_model->get('m_linksocial','ASC');
        $this->data['foot_testimoni'] = $this->base_model->getData('m_testimoni',array('publish'=>1));
        $this->data['alamat'] = $this->base_model->get('m_address');
        $this->data['active'] = 'tentang';
    }

    public function index($slug)
    {
        $table = 'm_posting';
        $condition['slug'] = $slug;
        $condition['tipe'] = 'page';
        $this->data['title'] = 'Halaman Tentang Sehati';
        $this->data['posting'] = $this->base_model->getData($table,$condition)->result();

        if(!count($this->data['posting']))
        {
            show_404();
        }

        $content = "page";
        $this->template_single->output($this->data,$content);
    }
}