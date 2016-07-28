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
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $content = "home";
        $this->template->output(null,$content);
    }

    public function page()
    {
        $content = "page";
        $this->template->output(null,$content);
        //$this->load->view('page2');
    }

    public function news()
    {
        $content = "news";
        $this->template->output(null,$content);
    }

    public function post()
    {
        $content = "post";
        $this->template->output(null,$content);
    }

    public function kontak()
    {
        $content = "kontak";
        $this->template->output(null,$content);
    }

    public function galeri()
    {
        $content = "galeri";
        $this->template->output(null,$content);
    }

    public function upload()
    {
        $this->load->view('upload');
    }

    public function order()
    {
        $content = "order";
        $this->template->output(null,$content);
    }
}