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

        $table = 'm_posting';
        $condition['tipe']='page';
        $this->data['menu'] = $this->base_model->getData($table,$condition,'ASC');
        $this->data['link_social'] = $this->base_model->get('m_linksocial','ASC');
        $this->data['popnews'] = $this->news_model->getLimit();
        $this->data['side_kategori'] = $this->base_model->get('m_kategori');
        $this->data['foot_testimoni'] = $this->base_model->getData('m_testimoni',array('publish'=>1));
        $this->data['alamat'] = $this->base_model->get('m_address');
        $this->data['active'] = 'berita';
        $this->data['title'] = 'Berita Sehati Terkini';
    }

    public function index($id=null)
    {
        $this->data['title'] = 'Berita';
        $content = "news";
        $jml = $this->news_model->getAll();

        //pengaturan pagination
        $config['base_url'] = base_url().'berita/page';
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

    public function search($id=null)
    {
        $text = $this->input->post('keyword');
        //return var_dump($text);
        $this->data['title'] = $text;
        $content = "news";
        $jml = $this->news_model->getText($text);

        //pengaturan pagination
        $config['base_url'] = base_url().'news/search';
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
        $this->data['news'] = $this->news_model->getText($text,$config['per_page'],$id);

        $this->template->output($this->data,$content);

    }

    public function view($slug)
    {
        $this->data['title'] = 'Berita';
        $content = "post";
        $this->data['posting'] = $this->news_model->getSlug($slug)->result();

        foreach($this->data['posting'] as $key => $row)
        {
            $this->data['posting'][$key]->komentar = $this->base_model->getData('m_komentar',array('posting'=>$row->id,'publish'=>1))->result();
        }
        //return var_dump($this->data['posting']);
        $this->template_single->output($this->data,$content);
    }

    public function kategori($slug,$id=null)
    {
        $this->data['title'] = 'Berita';
        $content = "news";
        $jml = $this->news_model->getSlugKategori($slug);

        //pengaturan pagination
        $config['base_url'] = base_url().'news/kategori/'.$slug;
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
        $this->data['news'] = $this->news_model->getSlugKategori($slug,$config['per_page'], $id);

        $this->template->output($this->data,$content);
    }

    public function comment()
    {
        $posting = $this->input->post('posting');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $url = $this->input->post('url');
        $pesan = $this->input->post('pesan');
        $created_at = date('Y-m-d');
        $publish = 0;

        $slug = $this->input->post('slug');

        $table = 'm_komentar';
        $data = array(
          'posting' => $posting,
          'nama' => $nama,
          'email' => $email,
          'url' => $url,
          'pesan' => $pesan,
          'created_at' => $created_at,
          'publish' => $publish,
        );
        $this->base_model->addData($table,$data);
        //pesan yang muncul jika berhasil diupload pada session flashdata
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pesan komentar terkirim !!</div></div>");
        redirect('news/view/'.$slug); //jika berhasil maka akan ditampilkan view vupload
    }
}