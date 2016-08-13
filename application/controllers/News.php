<?php

/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 11/08/2016
 * Time: 16:55
 */
class News extends CI_Controller
{
    private $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('text');

        $table = 'm_posting';
        $condition['tipe']='page';
        $this->data['menu'] = $this->base_model->getData($table,$condition);
        $this->data['popnews'] = $this->news_model->getLimit();
    }

    public function index($id=null)
    {
        $this->data['title'] = 'Berita';
        $content = "news";
        $jml = $this->news_model->getAll();

        //pengaturan pagination
        $config['base_url'] = base_url().'news/index';
        $config['total_rows'] = $jml->num_rows();
        $config['per_page'] = "5";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['first_page'] = 'Awal';
        $config['last_page'] = 'Akhir';
        $config['next_page'] = '&laquo;';
        $config['prev_page'] = '&raquo;';
        $config['cur_tag_open'] = '<span class="current">';
        $config['cur_tag_close'] = '</span>';
        $config['use_page_numbers']  = TRUE;

        //inisialisasi config
        $this->pagination->initialize($config);

        //buat pagination
        $this->data['halaman'] = $this->pagination->create_links();

        //tamplikan data
        $this->data['news'] = $this->news_model->getData($config['per_page'],$id);

        $this->template->output($this->data,$content);

    }

    public function view($slug)
    {
        $this->data['title'] = 'Berita';
        $content = "post";
        $this->data['posting'] = $this->news_model->getSlug($slug);

        $this->template->output($this->data,$content);
    }

    public function kategori($slug)
    {

    }
}