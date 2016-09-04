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
        $this->data['menu'] = $this->base_model->getData($table,$condition,'ASC');
        $this->data['link_social'] = $this->base_model->get('m_linksocial','ASC');
        $this->data['up_kategori'] = $this->base_model->get('m_kategori');
        $this->data['foot_testimoni'] = $this->base_model->getData('m_testimoni',array('publish'=>1));
        $this->data['alamat'] = $this->base_model->get('m_address');
        $this->data['active'] = 'galeri';
        $this->data['title'] = 'Galeri Sehati';
    }

    public function index()
    {
        $content = "galeri";
        $table = 'm_galeri';
        $this->data['galeri'] = $this->base_model->get($table)->result();
        foreach($this->data['galeri'] as $key => $g)
        {
            $condition['id'] = $g->kategori;
            $this->data['galeri'][$key]->kategori = $this->base_model->getData('m_kategori',$condition)->row();
        }
//        return var_dump($this->data['galeri'][0]->kategori);
        $this->template->output($this->data,$content);
    }

    public function upload()
    {
        $data['kategori'] = $this->base_model->get('m_kategori');
        $this->load->view('upload',$data);
    }

    public function send()
    {
        $nama_uploader = $this->input->post('nama_uploader');
        $email = $this->input->post('email');
        $telp = $this->input->post('telp');
        $judul = $this->input->post('judul');
        $kategori = $this->input->post('kategori');
        $keterangan = $this->input->post('keterangan');

        $table = 'm_upload';
        $data = array(
            'nama_uploader' => $nama_uploader,
            'email' => $email,
            'telp' => $telp,
            'judul' => $judul,
            'kategori' => $kategori,
            'keterangan' => $keterangan
        );

//        echo $_FILES['gambar']['type'];
//        return false;

        $this->load->library('upload');
        $nmfile = "upload-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './upload/request/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '0'; //lebar maksimum 1288 px
        $config['max_height']  = '0'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        //return var_dump($_FILES['gambar']);
        $type = array('image/jpeg','image/png');

        if($_FILES['gambar']['name'])
        {
            if(!in_array($_FILES['gambar']['type'],$type))
            {
                echo "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar tidak sesuai format !!</div></div>";
            }
            else
            {
                if ($this->upload->do_upload('gambar')) {
                    $gbr = $this->upload->data();
                    $data['gambar'] = $gbr['file_name'];

                    $this->base_model->addData($table, $data); //akses model untuk menyimpan ke database
                    //pesan yang muncul jika berhasil diupload pada session flashdata
                    //$this->session->set_flashdata("pesan", "");
                    //redirect('content/galeri'); //jika berhasil maka akan ditampilkan view vupload
                    echo "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Masuk !!</div></div>";
                } else {
                    //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                    echo "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar melebihi kapasitas !!</div></div>";
                    //return false;
                    //redirect('content/galeri'); //jika gagal maka akan ditampilkan form upload
                }
            }
        }
        else
        {
//            $this->base_model->addData($table, $data); //akses model untuk menyimpan ke database
            //pesan yang muncul jika berhasil diupload pada session flashdata
            //$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil Masuk!!</div></div>");
            //redirect('content/galeri'); //jika berhasil maka akan ditampilkan view vupload
            echo "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Anda tidak melampirkan gambar !!</div></div>";
        }


    }
}