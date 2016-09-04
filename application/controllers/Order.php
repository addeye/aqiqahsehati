<?php

/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 12/08/2016
 * Time: 9:46
 */
class Order extends CI_Controller
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
        $this->data['active'] = 'order';
        $this->data['title'] = 'Form Order Aqiqah Sehati';
    }

    public function index()
    {
        $content = "order";
        $this->data['kota']=$this->base_model->get('regencies');
        $this->template->output($this->data,$content);
    }

    public function getkec($idkota,$idselect=0)
    {
        $table='districts';
        $condition['regency_id'] = $idkota;
        $result = $this->base_model->getData($table,$condition);
        $html = "<option value=''>Pilih Kecamatan</option>";
        foreach($result->result() as $row)
        {
            $sel = $row->id==$idselect?'selected':'';
            $html .= "<option value='$row->id' $sel >$row->name</option>";
        }

        echo $html;
    }

    public function getkel($idkec,$idselect=0)
    {
        $table='villages';
        $condition['district_id'] = $idkec;
        $result = $this->base_model->getData($table,$condition);
        $html = "<option value=''>Pilih Kelurahan</option>";
        foreach($result->result() as $row)
        {
            $sel = $row->id==$idselect?'selected':'';
            $html .= "<option value='$row->id' $sel>".$row->name."</option>";
        }

        echo $html;
    }

    public function send()
    {
        $nama = $this->input->post('name');
        $kota = $this->input->post('kota');
        $kecamatan = $this->input->post('kec');
        $kelurahan = $this->input->post('kel');
        $alamat = $this->input->post('address');
        $telp = $this->input->post('phone');
        $nohape = $this->input->post('mobile');
        $email = $this->input->post('email');
        $nama_anak = $this->input->post('child');
        $nama_ortu = $this->input->post('parent');
        $tempat_lahir = $this->input->post('birth_place');
        $tgl_lahir = $this->input->post('birth_date');
        $jenis_kelamin = $this->input->post('gender');
        $pesan_hari = $this->input->post('shipping_day');
        $pesan_tanggal = $this->input->post('shipping_date');
        $pesan_waktu = $this->input->post('shipping_time');
        $pesan_alamat = $this->input->post('shipping_address');
        $aqiqah_untuk = $this->input->post('aqiqah');
        $sedap_4 = $this->input->post('sedap_4');
        $sedap_3 = $this->input->post('sedap_3');
        $sedap_2 = $this->input->post('sedap_2');
        $sedap_1 = $this->input->post('sedap_1');
        $syukur = $this->input->post('syukur');
        $input_asal = 'pengunjung';
        $created_at = date('Y-m-d');

        $htmlContent = '<h1>Pemesanan Dari Website aqiqahsehati.com </h1>';
        $htmlContent .= '<div>Data-data Pemesan</div>';
        $htmlContent .= '<p>Nama : '.$nama.' </p>';
        $htmlContent .= '<p>Alamat : '.$alamat.'</p>';
        $htmlContent .= '<p>No Telp : '.$telp.'</p>';
        $htmlContent .= '<p>No Hp : '.$nohape.'</p>';
        $htmlContent .= '<p>Email : '.$email.'</p>';
        $htmlContent .= '<p>Nama Anak : '.$nama_anak.'</p>';
        $htmlContent .= '<p>Bin/Binti : '.$nama_ortu.'</p>';
        $htmlContent .= '<p>Tempat Lahir : '.$tempat_lahir.'</p>';
        $htmlContent .= '<p>Tanggal Lahir : '.$tgl_lahir.'</p>';
        $htmlContent .= '<p>Jenis Kelamin : '.$jenis_kelamin.'</p>';
        $htmlContent .= '<p>Pelaksanaan</p>';
        $htmlContent .= '<p>Hari : '.$pesan_hari.'</p>';
        $htmlContent .= '<p>Tanggal : '.$pesan_tanggal.'</p>';
        $htmlContent .= '<p>Jam : '.$pesan_waktu.'</p>';
        $htmlContent .= '<p>Alamat : '.$pesan_alamat.'</p>';
        $htmlContent .= '<p>Aqiqah Untuk : '.$aqiqah_untuk.'</p>';
        $htmlContent .= '<p>Tipe Aqiqah</p>';
        $htmlContent .= '<p>Sedap 4 : '.$sedap_4.'</p>';
        $htmlContent .= '<p>Sedap 3 : '.$sedap_3.'</p>';
        $htmlContent .= '<p>Sedap 2 : '.$sedap_2.'</p>';
        $htmlContent .= '<p>Sedap 1 : '.$sedap_1.'</p>';
        $htmlContent .= '<p>Syukur : '.$syukur.'</p>';


        $this->load->library('email'); // Note: no $config param needed
        $this->email->from('order@aqiqahsehati.com', $nama);
        $this->email->to('aqiqahsehati@gmail.com');
        $this->email->subject('Order AqiqahSehati');
        $this->email->message($htmlContent);
        $this->email->send();

        $this->email->from('order@aqiqahsehati.com', 'Aqiqah Sehati');
        $this->email->to($email);
        $this->email->subject('Ucapan Aqiqah Sehati');
        $this->email->message("Terimaksih sudah mengorder di Aqiqah Sehati");
        $this->email->send();
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
            'nohp' =>$nohape,
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
            'aqiqah_utk' => $aqiqah_untuk,
            'sedap_4' =>$sedap_4,
            'sedap_3' => $sedap_3,
            'sedap_2' =>$sedap_2,
            'sedap_1' => $sedap_1,
            'syukur' => $syukur,
            'input_asal' => $input_asal,
            'created_at' => $created_at
        );

        $this->base_model->addData($table,$data);

        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil Di Kirim Anda akan segera dihubungi !!</div></div>");
        redirect('order');
    }
}