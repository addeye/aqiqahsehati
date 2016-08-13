
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.6/select2-bootstrap.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.6/select2-bootstrap.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">

    $(document).ready(function() {

        $('.js-select2').select2({
            theme: "bootstrap"
        });
    });

</script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?=$title?>
            <small><?=$sub_title?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?=site_url('front')?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"><?=$title?></a></li>
            <li class="active"><?=$sub_title?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <form action="<?=site_url('fitur/create_order')?>" method="post">
            <div class="col-xs-6">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Pemesanan</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <textarea class="form-control" placeholder="Alamat" name="alamat" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kota</label>
                                <select id="kota" name="kota" class="form-control js-select2" required>
                                    <option value="">Pilih Kota/Kabupaten</option>
                                    <?php foreach($kota->result() as $row) { ?>
                                        <option value="<?=$row->id?>"><?=$row->name?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kecamatan</label>
                                <select id="kec" name="kec" class="form-control js-select2" required>
                                    <option value="">Pilih Kecamatan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kelurahan</label>
                                <select id="kel" name="kel" class="form-control js-select2" required>
                                    <option value="">Pilih Kelurahan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Telp</label>
                                <input type="text" class="form-control" placeholder="telp" name="telp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Hp</label>
                                <input type="text" class="form-control" placeholder="Nomor Hp" name="nohp" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" placeholder="Email" name="email" required>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Pelaksanaan Ibadah Aqiqah</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sedap 4</label>
                                <input type="number" class="form-control" value="0" name="sedap_4">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sedap 3</label>
                                <input type="number" class="form-control" value="0" name="sedap_3">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sedap 2</label>
                                <input type="number" class="form-control" value="0" name="sedap_2">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sedap 1</label>
                                <input type="number" class="form-control" value="0" name="sedap_1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Syukur</label>
                                <input type="number" class="form-control" value="0" name="syukur">
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
            <div class="col-xs-6">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Yang Diaqiqah</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_anak" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Bin /Binti</label>
                                <input type="text" class="form-control" placeholder="Bin /Binti" name="nama_ortu" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tempat Lahir</label>
                                <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Lahir</label>
                                <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" required>
                            </div>
                            <div class="form-group">
                                <label class="radio-inline">
                                    <input type="radio" name="jenis_kelamin" id="inlineRadio1" value="L" checked> Laki-laki
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="jenis_kelamin" id="inlineRadio2" value="P"> Perempuan
                                </label>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-xs-6">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Pelaksanaan Ibadah Aqiqah</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hari</label>
                                <select class="form-control" name="pesan_hari">
                                    <?php foreach(hari_indo() as $key => $val){?>
                                        <option value="<?=$key?>" ><?=$val?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal</label>
                                <input type="date" class="form-control" placeholder="Tanggal Pelaksanaan" name="pesan_tanggal" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jam</label>
                                <input type="time" class="form-control" placeholder="Jam" name="pesan_waktu" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <textarea class="form-control" name="pesan_alamat" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hajat Aqiqah</label>
                                <select class="form-control" name="aqiqah_utk" required>
                                    <option value="">-pilih aqiqoh-</option>
                                    <option value="program pemberdayaan anak yatim / dhuafa LMI">Program pemberdayaan anak yatim / dhuafa LMI</option>
                                    <option value="pribadi">Pribadi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="<?=site_url('fitur/order')?>" class="btn btn-warning">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
            </form>
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<input type="hidden" id="urlkec" value="<?=site_url('order/getkec')?>">
<input type="hidden" id="urlkel" value="<?=site_url('order/getkel')?>">

<script>
    $('#kota').change(function(){
        var id = this.value;
        var url = $('#urlkec').val();
        console.log(id);

        $.ajax({
            url : url+'/'+id,
            type: 'get',
            cache: false,
        })
            .success(function(response){
                /*optional stuff to do after success */
                $('#kec').html(response);
            });
    });

    $('#kec').change(function(){
        var id = this.value;
        var url = $('#urlkel').val();
        console.log(id);

        $.ajax({
            url : url+'/'+id,
            type: 'get',
            cache: false,
        })
            .success(function(response){
                /*optional stuff to do after success */
                $('#kel').html(response);
            });
    });

</script>
