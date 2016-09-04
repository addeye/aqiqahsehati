<?php

/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 08/08/2016
 * Time: 11:17
 */
class Template_single
{
    protected 	$ci;

    public function __construct()
    {
        $this->ci =& get_instance();
    }

    public function output($data=null, $content)
    {
        $this->ci->load->view('template/head_single', $data);
        $this->ci->load->view('template/nav', $data);
        $this->ci->load->view($content, $data);
        $this->ci->load->view('template/foot', $data);
    }
}