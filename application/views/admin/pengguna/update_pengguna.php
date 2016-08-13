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
                        <form class="form-horizontal" action="<?=site_url('pengguna/update')?>" method="post">
                            <?php $data = $pengguna[0]; ?>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">First Name</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name" value="<?=$data->first_name?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Last Name</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?=$data->last_name?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Username</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?=$data->username?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="email" placeholder="Email" value="<?=$data->email?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Password</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="password" placeholder="Password">
                                    <p class="help-block">*Kosongkan jika tidak dirubah</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Group</label>
                                <div class="col-sm-3">
                                    <select name="group" class="form-control">
                                        <option value="">Pilih Group</option>
                                        <?php foreach($groups->result() as $group) { ?>
                                            <option value="<?=$group->id?>" <?=$data->groups[0]->id==$group->id?'selected':''?> ><?=$group->description?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input name="active" value="1" type="checkbox" <?=$data->active==1?'checked':''?> > Active
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="<?=site_url('pengguna')?>" class="btn btn-warning">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
