

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
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <form class="form-inline" method="post" action="<?=site_url('report/excel')?>">
                            <div class="form-group">
                                <label class="sr-only">Mulai</label>
                                <input type="text" id="tgl_awal" name="tgl_awal" class="form-control datepicker" placeholder="Mulai">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Sampai</label>
                                <input type="text" id="tgl_akhir" name="tgl_akhir" class="form-control datepicker" placeholder="Sampai">
                            </div>
                            <button type="button" class="btn btn-default view_rekap">Lihat</button>
                            <button type="submit" class="btn btn-default">Excel</button>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Hasil Rekap</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div id="result_view"></div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->

        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<input type="hidden" id="idshow">
<input type="hidden" id="url" value="<?=site_url('report/rekap')?>">

<!-- page script -->
<script type="text/javascript">
    $(function () {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
        });

        $('.view_rekap').click(function(){
            var tgl_awal = $('#tgl_awal').val();
            var tgl_akhir = $('#tgl_akhir').val();
            var url = $('#url').val();
            $.ajax({
                url : url,
                type: 'post',
                data : {tgl_awal:tgl_awal,tgl_akhir:tgl_akhir},
                cache: false,
            })
                .success(function(response){
                    /*optional stuff to do after success */
                    $('#result_view').html(response);

                });
        });
    });
</script>