<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=daftar_pemesan_".tgl_indo($tgl_awal)."-".tgl_indo($tgl_akhir).".xls" );
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
header("Pragma: public");

$workbook = new Workbook();
$worksheet1 =& $workbook->add_worksheet(date('dmY_His'));

$header =& $workbook->add_format();
$header->set_color('black'); // set warna huruf
$header->set_border_color('black'); // set warna border

$header->set_size(14); // Set ukuran font 

$header->set_align("center"); // set align rata tengah

$header->set_top(2); // set ketebalan border bagian atas cell 0 = border tidak tampil
$header->set_bottom(2); // set ketebalan border bagian atas cell 0 = border tidak tampil
$header->set_left(2); // set ketebalan border bagian atas cell 0 = border tidak tampil
$header->set_right(2); // set ketebalan border bagian atas cell 0 = border tidak tampil

$worksheet1->write_string(0,0,'No Order',$header);  // Set Nama kolom
$worksheet1->set_column(0,0,5); // Set lebar kolom
$worksheet1->write_string(0,1,'Nama Lengkap',$header);  // Set Nama kolom
$worksheet1->set_column(0,1,20); // Set lebar kolom 
$worksheet1->write_string(0,2,'Alamat',$header);  // Set Nama kolom
$worksheet1->set_column(0,2,50); // Set lebar kolom
$worksheet1->write_string(0,3,'Kota',$header);  // Set Nama kolom
$worksheet1->set_column(0,3,30); // Set lebar kolom
$worksheet1->write_string(0,4,'Kecamatan',$header);  // Set Nama kolom
$worksheet1->set_column(0,4,30); // Set lebar kolom
$worksheet1->write_string(0,5,'Kelurahan',$header);
$worksheet1->set_column(0,5,30);
$worksheet1->write_string(0,6,'Telp',$header);
$worksheet1->set_column(0,6,15);
$worksheet1->write_string(0,7,'No Hp',$header);
$worksheet1->set_column(0,7,15);
$worksheet1->write_string(0,8,'Email',$header);
$worksheet1->set_column(0,8,30);
$worksheet1->write_string(0,9,'Nama Anak',$header);
$worksheet1->set_column(0,9,15);
$worksheet1->write_string(0,10,'Bin/Binti',$header);
$worksheet1->set_column(0,10,15);
$worksheet1->write_string(0,11,'Tempat Lahir',$header);
$worksheet1->set_column(0,11,20);
$worksheet1->write_string(0,12,'Tanggal Lahir',$header);
$worksheet1->set_column(0,12,15);
$worksheet1->write_string(0,13,'Jenis Kelamin',$header);
$worksheet1->set_column(0,13,20);
$worksheet1->write_string(0,14,'Hari Pelaksanaan',$header);
$worksheet1->set_column(0,14,25);
$worksheet1->write_string(0,15,'Tanggal',$header);
$worksheet1->set_column(0,15,15);
$worksheet1->write_string(0,16,'Jam',$header);
$worksheet1->set_column(0,16,15);
$worksheet1->write_string(0,17,'Alamat Acara',$header);
$worksheet1->set_column(0,17,50);
$worksheet1->write_string(0,18,'Hajat Aqiqah',$header);
$worksheet1->set_column(0,18,15);
$worksheet1->write_string(0,19,'Paket 4',$header);
$worksheet1->set_column(0,19,15);
$worksheet1->write_string(0,20,'Paket 3',$header);
$worksheet1->set_column(0,20,15);
$worksheet1->write_string(0,21,'Paket 2',$header);
$worksheet1->set_column(0,21,15);
$worksheet1->write_string(0,22,'Paket 1',$header);
$worksheet1->set_column(0,22,15);
$worksheet1->write_string(0,23,'Syukur',$header);
$worksheet1->set_column(0,23,15);
$worksheet1->write_string(0,24,'Dibuat',$header);
$worksheet1->set_column(0,24,15);

$content =& $workbook->add_format();
$content->set_size(11);

$content->set_top(1); // set ketebalan border bagian atas cell 0 = border tidak tampil
$content->set_bottom(1); // set ketebalan border bagian atas cell 0 = border tidak tampil
$content->set_left(1); // set ketebalan border bagian atas cell 0 = border tidak tampil
$content->set_right(1); // set ketebalan border bagian atas cell 0 = border tidak tampil

foreach ($data->result() as $key) {
    $worksheet1->write_string($row,0,  '00'.$key->id ,$content);
    $worksheet1->write_string($row,1,  $key->nama ,$content);
    $worksheet1->write_string($row,2,  $key->alamat ,$content);
    $worksheet1->write_string($row,3,  $key->nama_kota ,$content);
    $worksheet1->write_string($row,4,  $key->nama_kecamatan ,$content);
    $worksheet1->write_string($row,5,  $key->nama_kelurahan ,$content);
    $worksheet1->write_string($row,6,  $key->telp ,$content);
    $worksheet1->write_string($row,7,  $key->nohp ,$content);
    $worksheet1->write_string($row,8,  $key->email ,$content);
    $worksheet1->write_string($row,9,  $key->nama_anak ,$content);
    $worksheet1->write_string($row,10,  $key->nama_ortu ,$content);
    $worksheet1->write_string($row,11,  $key->tempat_lahir ,$content);
    $worksheet1->write_string($row,12,  $key->tgl_lahir ,$content);
    $worksheet1->write_string($row,13,  $key->jenis_kelamin ,$content);
    $worksheet1->write_string($row,14,  $key->pesan_hari ,$content);
    $worksheet1->write_string($row,15,  $key->pesan_tanggal ,$content);
    $worksheet1->write_string($row,16,  $key->pesan_waktu ,$content);
    $worksheet1->write_string($row,17,  $key->pesan_alamat ,$content);
    $worksheet1->write_string($row,18,  $key->aqiqah_utk ,$content);
    $worksheet1->write_string($row,19,  $key->sedap_4 ,$content);
    $worksheet1->write_string($row,20,  $key->sedap_3 ,$content);
    $worksheet1->write_string($row,21,  $key->sedap_2 ,$content);
    $worksheet1->write_string($row,22,  $key->sedap_1 ,$content);
    $worksheet1->write_string($row,23,  $key->syukur ,$content);
    $worksheet1->write_string($row,24,  $key->created_at ,$content);
}

$workbook->close();

/* 
 * Created by Pudyasto Adi Wibowo
 * Email : mr.pudyasto@gmail.com
 */