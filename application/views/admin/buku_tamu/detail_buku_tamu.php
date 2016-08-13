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
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"><?=$sub_title?></h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <form class="form-horizontal">
                            <?php $data = $buku_tamu->row() ?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nama</label>
                                <div class="col-sm-5">
                                    <p class="form-control-static"><?=$data->nama?></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Alamat</label>
                                <div class="col-sm-5">
                                    <p class="form-control-static"><?=$data->alamat?></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Perusahaan</label>
                                <div class="col-sm-5">
                                    <p class="form-control-static"><?=$data->perusahaan?></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">No Telepon</label>
                                <div class="col-sm-5">
                                    <p class="form-control-static"><?=$data->telp?></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-5">
                                    <p class="form-control-static"><?=$data->email?></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Pesan</label>
                                <div class="col-sm-5">
                                    <p class="form-control-static"><textarea class="form-control" readonly><?=$data->pesan?></textarea></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-5">
                                    <a href="<?=site_url('fitur/buku_tamu')?>" class="btn btn-warning">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<script src="<?=base_url('bower_components/speakingurl/speakingurl.min.js')?>"></script>
<script src="<?=base_url('bower_components/jquery-slugify/dist/slugify.min.js')?>"></script>

<script>
    jQuery(function($) {
        $.slugify("Ätschi Bätschi"); // "aetschi-baetschi"
        $('#slug-target').slugify('#slug-source'); // Type as you slug

        $("#slug-target").slugify("#slug-source", {
            separator: '-' // If you want to change separator from hyphen (-) to underscore (_).
        });
    });
</script>

