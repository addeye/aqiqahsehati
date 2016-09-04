
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

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <form action="<?=site_url('fitur/update_order')?>" method="post">
                <?php $data = $order->row(); ?>
                <input type="hidden" name="id" value="<?=$data->id?>">
                <div class="col-xs-6">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Pemesanan</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" readonly value="<?=$data->nama?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <textarea class="form-control" placeholder="Alamat" name="alamat" readonly><?=$data->alamat?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kota</label>
                                    <select id="kota" name="kota" class="form-control js-select2" readonly>
                                        <option value="">Pilih Kota/Kabupaten</option>
                                        <?php foreach($kota->result() as $row) { ?>
                                            <option value="<?=$row->id?>" <?=$data->kota==$row->id?'selected':'' ?> ><?=$row->name?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kecamatan</label>
                                    <select id="kec" name="kec" class="form-control js-select2" readonly>
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kelurahan</label>
                                    <select id="kel" name="kel" class="form-control js-select2" readonly>
                                        <option value="">Pilih Kelurahan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Telp</label>
                                    <input type="text" class="form-control" placeholder="telp" name="telp" value="<?=$data->telp?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Hp</label>
                                    <input type="text" class="form-control" placeholder="Nomor Hp" name="nohp" value="<?=$data->nohp?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" placeholder="Email" name="email" value="<?=$data->email?>" readonly>
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
                                    <input type="number" class="form-control" value="<?=$data->sedap_4?>" name="sedap_4" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sedap 3</label>
                                    <input type="number" class="form-control" value="<?=$data->sedap_3?>" name="sedap_3" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sedap 2</label>
                                    <input type="number" class="form-control" value="<?=$data->sedap_2?>" name="sedap_2" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sedap 1</label>
                                    <input type="number" class="form-control" value="<?=$data->sedap_1?>" name="sedap_1" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Syukur</label>
                                    <input type="number" class="form-control" value="<?=$data->syukur?>" name="syukur" readonly>
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
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_anak" value="<?=$data->nama_anak?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bin /Binti</label>
                                    <input type="text" class="form-control" placeholder="Bin /Binti" name="nama_ortu" value="<?=$data->nama_ortu?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tempat Lahir</label>
                                    <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="<?=$data->tempat_lahir?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                                    <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" value="<?=$data->tgl_lahir?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline">
                                        <input disabled type="radio" name="jenis_kelamin" id="inlineRadio1" value="L" <?= $data->jenis_kelamin=='L'?'checked':'' ?> > Laki-laki
                                    </label>
                                    <label class="radio-inline">
                                        <input disabled type="radio" name="jenis_kelamin" id="inlineRadio2" value="P" <?= $data->jenis_kelamin=='P'?'checked':'' ?> > Perempuan
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
                                    <select class="form-control" name="pesan_hari" readonly>
                                        <?php foreach(hari_indo() as $key => $val){?>
                                            <option value="<?=$key?>" <?=$key==$data->pesan_hari? 'selected':'' ?> ><?=$val?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal</label>
                                    <input type="date" class="form-control" placeholder="Tanggal Pelaksanaan" name="pesan_tanggal" value="<?=$data->pesan_tanggal?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jam</label>
                                    <input type="time" class="form-control" placeholder="Jam" name="pesan_waktu" value="<?=$data->pesan_waktu?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <textarea class="form-control" name="pesan_alamat" readonly><?=$data->pesan_alamat?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hajat Aqiqah</label>
                                    <select class="form-control" name="aqiqah_utk" readonly>
                                        <option value="">-pilih aqiqoh-</option>
                                        <option value="program pemberdayaan anak yatim / dhuafa LMI" <?=$data->aqiqah_utk=="program pemberdayaan anak yatim / dhuafa LMI"?'selected':'' ?> >Program pemberdayaan anak yatim / dhuafa LMI</option>
                                        <option value="pribadi" <?=$data->aqiqah_utk=="pribadi"?'selected':'' ?> >Pribadi</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </form>
        </div><!-- /.row -->
    </section><!-- /.content -->

<input type="hidden" id="urlkec" value="<?=site_url('order/getkec')?>">
<input type="hidden" id="urlkel" value="<?=site_url('order/getkel')?>">

<input type="hidden" id="idselectkec" value="<?=$data->kecamatan?>">
<input type="hidden" id="idselectkel" value="<?=$data->kelurahan?>">

<script>

    var urlkec = $('#urlkec').val();
    var idkota = $('#kota').val();
    var urlkel = $('#urlkel').val();
    var idkec = $('#kec').val();

    var idselectkec = $('#idselectkec').val();
    var idselectkel = $('#idselectkel').val();


    $('#kota').change(function(){
        var id = this.value;
        var url = $('#urlkec').val();
        console.log(id);
        getkec(url,id);
    });

    $('#kec').change(function(){
        var id = this.value;
        var url = $('#urlkel').val();
        console.log(id);

        getkel(url,id);
    });

    var valkota = $('#kota').val();



    if(valkota!='')
    {
        getkec(urlkec,idkota,idselectkec);
        getkel(urlkel,idselectkec,idselectkel);
    }

    function getkec(url,id,idselect)
    {
        $.ajax({
            url : url+'/'+id+'/'+idselect,
            type: 'get',
            cache: false,
        })
            .success(function(response){
                /*optional stuff to do after success */
                $('#kec').html(response);
            });
    }

    function getkel(url,id,idselect)
    {
        $.ajax({
            url : url+'/'+id+'/'+idselect,
            type: 'get',
            cache: false,
        })
            .success(function(response){
                /*optional stuff to do after success */
                $('#kel').html(response);
            });
    }


</script>
