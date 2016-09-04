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
            <form action="<?=site_url('content/update_galeri')?>" method="post" enctype="multipart/form-data">
                <?php $data = $galeri->row(); ?>
                <input type="hidden" name="id" value="<?=$data->id?>">
                <div class="col-xs-8">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><?=$sub_title?></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Judul</label>
                                    <input type="text" class="form-control" name="judul" placeholder="Judul" value="<?=htmlspecialchars($data->judul)?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Keterangan</label>
                                    <textarea class="form-control" id="editor1" name="keterangan" rows="15"><?=$data->keterangan?></textarea>
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
                                    <label for="exampleInputFile">File Gambar</label>
                                    <input type="file" name="gambar" id="exampleInputFile">
                                    <p class="help-block">*Kosongi Jika Tidak Diganti</p>
                                </div>
                                <div class="form-group">
                                    <img src="<?=base_url('upload/gallery/'.$data->gambar)?>" class="img-responsive" alt="Gambar">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Kategori</label>
                                    <select name="kategori" class="form-control" required>
                                        <?php foreach($kategori->result() as $row){?>
                                            <option value="<?=$row->id?>" <?=$data->kategori==$row->id?'selected':''?> ><?=$row->kategori?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="<?=site_url('content/galeri')?>" class="btn btn-warning">Kembali</a>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </form>
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
