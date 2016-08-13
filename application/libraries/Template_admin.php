<?php

/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 08/08/2016
 * Time: 11:17
 */
class Template_admin
{
    protected 	$ci;

    public function __construct()
    {
        $this->ci =& get_instance();
    }

    public function output($data=null, $content)
    {
        $this->ci->load->view('admin/template/head', $data);
        $this->ci->load->view('admin/template/nav', $data);
        $this->ci->load->view('admin/template/menu', $data);
        $this->ci->load->view($content, $data);
        $this->ci->load->view('admin/template/foot', $data);
    }
}