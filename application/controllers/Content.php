<?php

/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 09/08/2016
 * Time: 20:17
 */
class Content extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');

        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login');
        }
    }

    public function page()
    {
        $data['title'] = 'View All Page';
        $data['sub_title'] = 'Tabel Page';
        $table = 'm_posting';
        $con['tipe'] = 'page';
        $data['page'] = $this->base_model->getData($table,$con)->result();
        foreach($data['page'] as $key => $page)
        {
            $condition['id'] = $page->id_pengguna;
            $data['page'][$key]->author = $this->base_model->getData('users',$condition)->result();
        }

        $content = "admin/page/view_page";
        $this->template_admin->output($data,$content);
    }

    public function tambah_page()
    {
        $data['title'] = 'Add New Page';
        $data['sub_title'] = 'Form Page';
        $data['other_title'] = 'Atrribut Page';
        $content = "admin/page/tambah_page";
        $this->template_admin->output($data,$content);
    }

    public function create_page()
    {
        $judul = $this->input->post('judul');
        $slug = $this->input->post('slug');
        $konten = $this->input->post('konten');
        $meta_description = $this->input->post('meta_description');
        $meta_keyword = $this->input->post('meta_keyword');
        $tipe = 'page';
        $created_at = date('Y-m-d');
        $id_pengguna =  $this->ion_auth->user()->row()->id;

        $table = 'm_posting';
        $data = array(
            'id_pengguna' => $id_pengguna,
            'judul' => $judul,
            'slug' => $slug,
            'konten' => $konten,
            'tipe' => $tipe,
            'created_at' => $created_at,
            'meta_description' => $meta_description,
            'meta_keyword' => $meta_keyword,
        );

        $this->load->library('upload');
        $nmfile = $slug."-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './upload/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '0'; //lebar maksimum 1288 px
        $config['max_height']  = '0'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data['gambar'] = $gbr['file_name'];

                $this->base_model->addData($table, $data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Masuk !!</div></div>");
                redirect('content/page'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('content/page'); //jika gagal maka akan ditampilkan form upload
            }
        }
        else
        {
            $this->base_model->addData($table, $data); //akses model untuk menyimpan ke database
            //pesan yang muncul jika berhasil diupload pada session flashdata
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil Masuk!!</div></div>");
            redirect('content/page'); //jika berhasil maka akan ditampilkan view vupload
        }
    }

    public function edit_page($id)
    {
        $data['title'] = 'Edit Page';
        $data['sub_title'] = 'Update Page';
        $data['other_title'] = 'Atrribut Page';
        $table = 'm_posting';
        $condition['id']=$id;

        $data['page'] = $this->base_model->getData($table,$condition);
        $content = "admin/page/update_page";
        $this->template_admin->output($data,$content);
    }

    public function update_page()
    {
        $judul = $this->input->post('judul');
        $slug = $this->input->post('slug');
        $konten = $this->input->post('konten');
        $id = $this->input->post('id');
        $meta_description = $this->input->post('meta_description');
        $meta_keyword = $this->input->post('meta_keyword');

        $table = 'm_posting';
        $condition['id'] = $id;
        $data = array(
            'judul' => $judul,
            'slug' => $slug,
            'konten' => $konten,
        );

        $this->load->library('upload');
        $nmfile = $slug."-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './upload/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '0'; //lebar maksimum 1288 px
        $config['max_height']  = '0'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data['gambar'] = $gbr['file_name'];

                //cari file data lama yang akan dihapus
                $temp_data = $this->base_model->getData($table,$condition);
                $temp_data = $temp_data->row();
                $path = 'upload/images/'.$temp_data->gambar;
                if(file_exists($path) and $temp_data->gambar!='')
                {
                    $this->load->helper("file");
                    unlink($path);
                }


                $this->base_model->updateData($table, $data, $condition); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Update !!</div></div>");
                redirect('content/page'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('content/page'); //jika gagal maka akan ditampilkan form upload
            }
        }
        else
        {
            $this->base_model->updateData($table, $data,$condition); //akses model untuk menyimpan ke database
            //pesan yang muncul jika berhasil diupload pada session flashdata
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil Update!!</div></div>");
            redirect('content/page'); //jika berhasil maka akan ditampilkan view vupload
        }
    }

    public function delete_page($id)
    {
        $table = 'm_posting';
        $condition['id'] = $id;

        //cari file data lama yang akan dihapus
        $temp_data = $this->base_model->getData($table,$condition);
        $temp_data = $temp_data->row();
        $path = 'upload/images/'.$temp_data->gambar;
        if(file_exists($path) and $temp_data->gambar!='')
        {
            $this->load->helper("file");
            unlink($path);
        }

        $this->base_model->deleteData($table, $condition);
        redirect('content/page');
    }

    public function posting()
    {
        $data['title'] = 'View All Post';
        $data['sub_title'] = 'Tabel Post';
        $table = 'm_posting';
        $con['tipe'] = 'post';
        $data['page'] = $this->base_model->getData($table,$con)->result();

        foreach($data['page'] as $key => $page)
        {
            $condition['id'] = $page->id_pengguna;
            $conkategori['id'] = $page->kategori;
            $concomment['posting'] = $page->id;
            $data['page'][$key]->author = $this->base_model->getData('users',$condition)->result();
            $data['page'][$key]->kategori = $this->base_model->getData('m_kategori',$conkategori)->result();
            $data['page'][$key]->komentar = $this->base_model->getData('m_komentar',$concomment)->result();
        }


        $content = "admin/posting/view_posting";
        $this->template_admin->output($data,$content);
    }

    public function tambah_posting()
    {
        $data['title'] = 'Add New Post';
        $data['sub_title'] = 'Form Post';
        $data['other_title'] = 'Atrribut Post';
        $data['kategori'] = $this->base_model->get('m_kategori');
        $content = "admin/posting/tambah_posting";
        $this->template_admin->output($data,$content);
    }

    public function create_posting()
    {
        $judul = $this->input->post('judul');
        $slug = $this->input->post('slug');
        $konten = $this->input->post('konten');
        $kategori = $this->input->post('kategori');
        $meta_description = $this->input->post('meta_description');
        $meta_keyword = $this->input->post('meta_keyword');
        $tipe = 'post';
        $created_at = date('Y-m-d');
        $id_pengguna =  $this->ion_auth->user()->row()->id;

        $table = 'm_posting';
        $data = array(
            'id_pengguna' => $id_pengguna,
            'judul' => $judul,
            'slug' => $slug,
            'konten' => $konten,
            'tipe' => $tipe,
            'kategori' => $kategori,
            'created_at' => $created_at,
            'meta_description' => $meta_description,
            'meta_keyword' => $meta_keyword,
        );

        $this->load->library('upload');
        $nmfile = $slug."-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './upload/posting/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '0'; //lebar maksimum 1288 px
        $config['max_height']  = '0'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data['gambar'] = $gbr['file_name'];

                $this->base_model->addData($table, $data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Masuk !!</div></div>");
                redirect('content/posting'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('content/posting'); //jika gagal maka akan ditampilkan form upload
            }
        }
        else
        {
            $this->base_model->addData($table, $data); //akses model untuk menyimpan ke database
            //pesan yang muncul jika berhasil diupload pada session flashdata
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil Masuk!!</div></div>");
            redirect('content/posting'); //jika berhasil maka akan ditampilkan view vupload
        }
    }

    public function edit_posting($id)
    {
        $data['title'] = 'Edit Post';
        $data['sub_title'] = 'Update Post';
        $data['other_title'] = 'Atrribut Post';
        $data['kategori'] = $this->base_model->get('m_kategori');
        $table = 'm_posting';
        $condition['id']=$id;

        $data['page'] = $this->base_model->getData($table,$condition);
        $content = "admin/posting/update_posting";
        $this->template_admin->output($data,$content);
    }

    public function update_posting()
    {
        $judul = $this->input->post('judul');
        $slug = $this->input->post('slug');
        $konten = $this->input->post('konten');
        $id = $this->input->post('id');
        $kategori = $this->input->post('kategori');
        $meta_description = $this->input->post('meta_description');
        $meta_keyword = $this->input->post('meta_keyword');

        $table = 'm_posting';
        $condition['id'] = $id;
        $data = array(
            'judul' => $judul,
            'slug' => $slug,
            'konten' => $konten,
            'kategori' => $kategori,
            'meta_description' => $meta_description,
            'meta_keyword' => $meta_keyword,
        );

        $this->load->library('upload');
        $nmfile = $slug."-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './upload/posting/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '0'; //lebar maksimum 1288 px
        $config['max_height']  = '0'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data['gambar'] = $gbr['file_name'];

                //cari file data lama yang akan dihapus
                $temp_data = $this->base_model->getData($table,$condition);
                $temp_data = $temp_data->row();
                $path = 'upload/posting/'.$temp_data->gambar;
                if(file_exists($path) and $temp_data->gambar!='')
                {
                    $this->load->helper("file");
                    unlink($path);
                }
                $this->base_model->updateData($table, $data, $condition); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Update !!</div></div>");
                redirect('content/posting'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('content/posting'); //jika gagal maka akan ditampilkan form upload
            }
        }
        else
        {
            $this->base_model->updateData($table, $data,$condition); //akses model untuk menyimpan ke database
            //pesan yang muncul jika berhasil diupload pada session flashdata
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil Update!!</div></div>");
            redirect('content/posting'); //jika berhasil maka akan ditampilkan view vupload
        }
    }

    public function delete_posting($id)
    {
        $table = 'm_posting';
        $condition['id'] = $id;

        //cari file data lama yang akan dihapus
        $temp_data = $this->base_model->getData($table,$condition);
        $temp_data = $temp_data->row();
        $path = 'upload/posting/'.$temp_data->gambar;

        if(file_exists($path) and $temp_data->gambar!='')
        {
            $this->load->helper("file");
            unlink($path);
        }

        $this->base_model->deleteData($table, $condition);
        redirect('content/posting');
    }

    public function galeri()
    {
        $data['title'] = 'View All Gallery';
        $data['sub_title'] = 'Tabel Gallery';
        $table = 'm_galeri';
        $data['galeri'] = $this->base_model->get($table)->result();

        foreach($data['galeri'] as $key => $gal)
        {
            $conkategori['id'] = $gal->kategori;
            $data['galeri'][$key]->kategori = $this->base_model->getData('m_kategori',$conkategori)->result();
        }
        $content = "admin/galeri/view_galeri";
        $this->template_admin->output($data,$content);
    }

    public function tambah_galeri()
    {
        $data['title'] = 'Add New Galeri';
        $data['sub_title'] = 'Form Galeri';
        $data['other_title'] = 'Atrribut Galeri';
        $data['kategori'] = $this->base_model->get('m_kategori');
        $content = "admin/galeri/tambah_galeri";
        $this->template_admin->output($data,$content);
    }

    public function create_galeri()
    {
        $judul = $this->input->post('judul');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');

        $table = 'm_galeri';
        $data = array(
            'judul' => $judul,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
        );

        $this->load->library('upload');
        $nmfile = "pic-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './upload/gallery/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '0'; //lebar maksimum 1288 px
        $config['max_height']  = '0'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data['gambar'] = $gbr['file_name'];

                $this->base_model->addData($table, $data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Masuk !!</div></div>");
                redirect('content/galeri'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('content/galeri'); //jika gagal maka akan ditampilkan form upload
            }
        }
        else
        {
            $this->base_model->addData($table, $data); //akses model untuk menyimpan ke database
            //pesan yang muncul jika berhasil diupload pada session flashdata
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil Masuk!!</div></div>");
            redirect('content/galeri'); //jika berhasil maka akan ditampilkan view vupload
        }
    }

    public function edit_galeri($id)
    {
        $data['title'] = 'Edit Galeri';
        $data['sub_title'] = 'Update Galeri';
        $data['other_title'] = 'Atrribut Galeri';
        $data['kategori'] = $this->base_model->get('m_kategori');
        $table = 'm_galeri';
        $condition['id']=$id;

        $data['galeri'] = $this->base_model->getData($table,$condition);
        $content = "admin/galeri/update_galeri";
        $this->template_admin->output($data,$content);
    }

    public function update_galeri()
    {
        $judul = $this->input->post('judul');
        $keterangan = $this->input->post('keterangan');
        $id = $this->input->post('id');
        $kategori = $this->input->post('kategori');

        $table = 'm_galeri';
        $condition['id'] = $id;
        $data = array(
            'judul' => $judul,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
        );

        $this->load->library('upload');
        $nmfile = "pic-".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './upload/gallery/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '0'; //lebar maksimum 1288 px
        $config['max_height']  = '0'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data['gambar'] = $gbr['file_name'];

                //cari file data lama yang akan dihapus
                $temp_data = $this->base_model->getData($table,$condition);
                $temp_data = $temp_data->row();
                $path = 'upload/gallery/'.$temp_data->gambar;
                if(file_exists($path) and $temp_data->gambar!='')
                {
                    $this->load->helper("file");
                    unlink($path);
                }
                $this->base_model->updateData($table, $data, $condition); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Update !!</div></div>");
                redirect('content/galeri'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('content/galeri'); //jika gagal maka akan ditampilkan form upload
            }
        }
        else
        {
            $this->base_model->updateData($table, $data,$condition); //akses model untuk menyimpan ke database
            //pesan yang muncul jika berhasil diupload pada session flashdata
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil Update!!</div></div>");
            redirect('content/galeri'); //jika berhasil maka akan ditampilkan view vupload
        }
    }

    public function delete_galeri($id)
    {
        $table = 'm_galeri';
        $condition['id'] = $id;

        //cari file data lama yang akan dihapus
        $temp_data = $this->base_model->getData($table,$condition);
        $temp_data = $temp_data->row();
        $path = 'upload/gallery/'.$temp_data->gambar;

        if(file_exists($path) and $temp_data->gambar!='')
        {
            $this->load->helper("file");
            unlink($path);
        }

        $this->base_model->deleteData($table, $condition);
        redirect('content/galeri');
    }

    public function komentar($id=null)
    {
        $table = 'm_komentar';
        $condition['posting'] = $id;

        $data['title'] = 'View All Comment';
        $data['sub_title'] = 'Tabel Comment';
        $table = 'm_komentar';
        $data['komentar'] = $this->base_model->getData($table,$condition);
        $data['post'] = $this->base_model->getData('m_posting',array('id'=>$id,'tipe'=>'post'));
        $content = "admin/komentar/view_komentar";
        $this->template_admin->output($data,$content);
    }

    public function detail_komentar($id)
    {
        $data['title'] = 'Komentar';
        $data['sub_title'] = 'Lihat Komentar';
        $table = 'm_komentar';
        $condition['id']=$id;
        $data['komentar'] = $this->base_model->getData($table,$condition);
        $content = "admin/komentar/detail_komentar";
        $this->template_admin->output($data, $content);
    }

    public function update_komentar()
    {
        $publish = $this->input->post('publish');
        $id = $this->input->post('id');

        $table = 'm_komentar';
        $condition['id'] = $id;
        $data['publish'] = $publish;

        $this->base_model->updateData($table,$data,$condition);
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Komentar berhasil dipublish</div></div>");
        redirect('content/detail_komentar/'.$id);
    }

    public function delete_komentar($id)
    {
        $table = 'm_komentar';
        $condition['id'] = $id;
        $this->base_model->deleteData($table,$condition);
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Dihapus !!</div></div>");
    }
}