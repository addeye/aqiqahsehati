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
            <form action="<?=site_url('content/update_posting')?>" method="post" enctype="multipart/form-data">
                <?php $data = $page->row(); ?>
                <input type="hidden" name="id" value="<?=$data->id_posting?>">
                <div class="col-xs-8">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><?=$sub_title?></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Judul</label>
                                    <input type="text" class="form-control" id="slug-source" name="judul" placeholder="Judul" value="<?=$data->judul?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Konten</label>
                                    <textarea class="form-control" id="editor1" name="konten" rows="15"><?=$data->konten?></textarea>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><?=$other_title?></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" class="form-control" id="slug-target" name="slug" placeholder="Judul" value="<?=$data->slug?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File Gambar</label>
                                    <input type="file" name="gambar" id="exampleInputFile">
                                    <p class="help-block">*Kosongi Jika Tidak Diganti</p>
                                </div>
                                <div class="form-group">
                                    <img src="<?=base_url('upload/posting/'.$data->gambar)?>" class="img-responsive" alt="Gambar">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kategori</label>
                                    <select name="kategori" class="form-control">
                                        <option value="">Pilih Kategori</option>
                                        <?php foreach($kategori->result() as $row) { ?>
                                            <option value="<?=$row->id?>" <?=$data->kategori==$row->id?'selected':''?> ><?=$row->kategori?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?=site_url('content/posting')?>" class="btn btn-warning">Kembali</a>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </form>
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
