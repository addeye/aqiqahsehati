<?php

/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 11/08/2016
 * Time: 14:24
 */
class Fitur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }
    }

    public function buku_tamu()
    {
        $data['title'] = 'Buku Tamu';
        $data['sub_title'] = 'Tabel Buku Tamu';
        $data['buku_tamu'] = $this->base_model->get('m_bukutamu');
        $content = "admin/buku_tamu/view_buku_tamu";
        $this->template_admin->output($data, $content);
    }
    public function create_buku_tamu()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $perusahaan = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $email = $this->input->post('email');
        $pesan = $this->input->post('pesan');
        $created_at = date('Y-m-d');

        $table = 'm_bukutamu';
        $data = array(
            'nama'=>$nama,
            'alamat'=>$alamat,
            'perusahaan'=>$perusahaan,
            'telp'=>$telp,
            'email'=>$email,
            'pesan'=>$pesan,
            'created_at'=>$created_at,
        );

        $this->base_model->addData($table,$data);
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pesan Berhasil Terkirim !!</div></div>");
    }
    public function detail_buku_tamu($id)
    {
        $data['title'] = 'Buku Tamu';
        $data['sub_title'] = 'Lihat Buku Tamu';
        $table = 'm_bukutamu';
        $condition['id']=$id;
        $data['buku_tamu'] = $this->base_model->getData($table,$condition);
        $content = "admin/buku_tamu/detail_buku_tamu";
        $this->template_admin->output($data, $content);
    }
    public function delete_buku_tamu($id)
    {
        $table = 'm_bukutamu';
        $condition['id'] = $id;
        $this->base_model->deleteData($table,$condition);
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Dihapus !!</div></div>");
        redirect('fitur/buku_tamu');
    }

    public function order()
    {
        $data['title'] = 'Order';
        $data['sub_title'] = 'Tabel Order';
        $data['order'] = $this->base_model->get('m_order');
        $content = "admin/order/view_order";
        $this->template_admin->output($data, $content);
    }

    public function tambah_order()
    {
        $data['title'] = 'Order';
        $data['sub_title'] = 'Tabel Order';
        $data['kota']=$this->base_model->get('regencies');
        $content = "admin/order/tambah_order";
        $this->template_admin->output($data, $content);
    }

    public function create_order()
    {
        $nama = $this->input->post('nama');
        $kota = $this->input->post('kota');
        $kecamatan = $this->input->post('kec');
        $kelurahan = $this->input->post('kel');

        //return var_dump($kelurahan);

        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $nohp = $this->input->post('nohp');
        $email = $this->input->post('email');
        $nama_anak = $this->input->post('nama_anak');
        $nama_ortu = $this->input->post('nama_ortu');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $pesan_hari = $this->input->post('pesan_hari');
        $pesan_tanggal = $this->input->post('pesan_tanggal');
        $pesan_waktu = $this->input->post('pesan_waktu');
        $pesan_alamat = $this->input->post('pesan_alamat');
        $aqiqah_utk = $this->input->post('aqiqah_utk');
        $sedap_4 = $this->input->post('sedap_4');
        $sedap_3 = $this->input->post('sedap_3');
        $sedap_2 = $this->input->post('sedap_2');
        $sedap_1 = $this->input->post('sedap_1');
        $syukur = $this->input->post('syukur');
        $input_asal = 'admin';
        $created_at = date('Y-m-d');
        /*if($this->email->send())
        {
            echo 'Email sent. <a href="'.site_url('home/order').'">KEMBALI</a>';
        }
        else
        {
            show_error($this->email->print_debugger());
        } */

        $table = 'm_order';
        $data = array(
            'nama'=>$nama,
            'kota'=>$kota,
            'kecamatan'=>$kecamatan,
            'kelurahan'=>$kelurahan,
            'alamat'=>$alamat,
            'telp' => $telp,
            'nohp' =>$nohp,
            'email' => $email,
            'nama_anak' => $nama_anak,
            'nama_ortu' => $nama_ortu,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'pesan_hari' => $pesan_hari,
            'pesan_tanggal' => $pesan_tanggal,
            'pesan_waktu' =>$pesan_waktu,
            'pesan_alamat' => $pesan_alamat,
            'aqiqah_utk' => $aqiqah_utk,
            'sedap_4' =>$sedap_4,
            'sedap_3' => $sedap_3,
            'sedap_2' =>$sedap_2,
            'sedap_1' => $sedap_1,
            'syukur' => $syukur,
            'input_asal' => $input_asal,
            'created_at' => $created_at
        );

//        return var_dump($data);

        $this->base_model->addData($table,$data);

        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil Masuk</div></div>");
        redirect('fitur/order');
    }

    public function edit_order($id)
    {
        $data['title'] = 'Order';
        $data['sub_title'] = 'Tabel Order';
        $data['kota']=$this->base_model->get('regencies');
        $table = 'm_order';
        $condition['id'] = $id;
        $data['order'] = $this->base_model->getData($table,$condition);

        $content = "admin/order/update_order";
        $this->template_admin->output($data, $content);
    }

    public function update_order()
    {
        $nama = $this->input->post('nama');
        $kota = $this->input->post('kota');
        $kecamatan = $this->input->post('kec');
        $kelurahan = $this->input->post('kel');

        //return var_dump($kelurahan);

        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $nohp = $this->input->post('nohp');
        $email = $this->input->post('email');
        $nama_anak = $this->input->post('nama_anak');
        $nama_ortu = $this->input->post('nama_ortu');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $pesan_hari = $this->input->post('pesan_hari');
        $pesan_tanggal = $this->input->post('pesan_tanggal');
        $pesan_waktu = $this->input->post('pesan_waktu');
        $pesan_alamat = $this->input->post('pesan_alamat');
        $aqiqah_utk = $this->input->post('aqiqah_utk');
        $sedap_4 = $this->input->post('sedap_4');
        $sedap_3 = $this->input->post('sedap_3');
        $sedap_2 = $this->input->post('sedap_2');
        $sedap_1 = $this->input->post('sedap_1');
        $syukur = $this->input->post('syukur');
        $id = $this->input->post('id');

        $table = 'm_order';
        $condition['id'] = $id;
        $data = array(
            'nama'=>$nama,
            'kota'=>$kota,
            'kecamatan'=>$kecamatan,
            'kelurahan'=>$kelurahan,
            'alamat'=>$alamat,
            'telp' => $telp,
            'nohp' =>$nohp,
            'email' => $email,
            'nama_anak' => $nama_anak,
            'nama_ortu' => $nama_ortu,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'pesan_hari' => $pesan_hari,
            'pesan_tanggal' => $pesan_tanggal,
            'pesan_waktu' =>$pesan_waktu,
            'pesan_alamat' => $pesan_alamat,
            'aqiqah_utk' => $aqiqah_utk,
            'sedap_4' =>$sedap_4,
            'sedap_3' => $sedap_3,
            'sedap_2' =>$sedap_2,
            'sedap_1' => $sedap_1,
            'syukur' => $syukur,
        );

//        return var_dump($data);

        $this->base_model->updateData($table,$data,$condition);

        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil Diupdate</div></div>");
        redirect('fitur/order');
    }

    public function delete_order($id)
    {
        $table = 'm_order';
        $condition['id'] = $id;
        $this->base_model->deleteData($table,$condition);
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil Dihapus !!</div></div>");
    }
}