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
                        <form class="form-horizontal" method="post" action="<?=site_url('fitur/update_testimoni')?>">
                            <?php $data = $testimoni->row() ?>
                            <input type="hidden" name="id" value="<?=$data->id?>">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nama</label>
                                <div class="col-sm-5">
                                    <p class="form-control-static"><?=$data->nama?></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-5">
                                    <p class="form-control-static"><?=$data->email?></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Gambar</label>
                                <div class="col-sm-5">
                                    <p class="form-control-static"><img alt='' src="<?=base_url('upload/testimonial/'.$data->gambar)?>" class="avatar avatar-40 photo" height="40px" width="40px" /></p>
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
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="publish" value="1" <?=$data->publish==1?'checked':''?> > Publish
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-5">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="<?=site_url('fitur/testimoni')?>" class="btn btn-warning">Kembali</a>
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

