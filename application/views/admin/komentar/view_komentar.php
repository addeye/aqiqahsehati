<!-- DATA TABLES -->
<link href="<?=base_url('assets/adminlte/plugins/datatables/dataTables.bootstrap.css')?>" rel="stylesheet" type="text/css" />

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
            <?=$this->session->flashdata('pesan')?>
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"><?=$sub_title?></h3>
                        <div class="pull-right"><a href="<?=site_url('content/posting')?>" class="btn btn-warning">Kembali</a></div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Komentar</th>
                                <th>Publish</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no=1; foreach($komentar->result() as $row) {?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td><?=$row->nama?> <br> <a target="_blank" href="<?=$row->url?>"> <?=$row->url?> </a></td>
                                    <td><?=$row->email?></td>
                                    <td><?=character_limiter($row->pesan,20)?></td>
                                    <td><?=$row->publish?></td>
                                    <td>
                                        <a class="btn btn-success btn-xs" href="<?=site_url('content/detail_komentar/'.$row->id)?>">Lihat</a>
                                        <a class="btn btn-danger btn-xs del" href="javascript:void(0);" id="<?=$row->id?>">Del</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<input type="hidden" id="iddel">
<input type="hidden" id="url" value="<?=site_url('content/delete_komentar/')?>">

<!-- DATA TABES SCRIPT -->
<script src="<?=base_url('assets/adminlte/plugins/datatables/jquery.dataTables.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/adminlte/plugins/datatables/dataTables.bootstrap.min.js')?>" type="text/javascript"></script>

<!-- page script -->
<script type="text/javascript">
    $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
        $('.del').click(function(){
            $('#mymodal').modal('show');
            $('#iddel').val(this.id);
        });
        $('.act_del').click(function(){
            var $url = $('#url').val();
            var id = $('#iddel').val();
            $.ajax({
                url : $url+'/'+id,
                type: 'get',
                cache: false,
            })
                .success(function(){
                    /*optional stuff to do after success */
                    $('#mymodal').modal('hide');
                })
                .done(function(){
                    location.reload(true);
                });
        });
    });
</script>