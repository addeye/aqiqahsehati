<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 16/08/2016
 * Time: 11:15
 */
?>

<!-- DATA TABLES -->
<link href="<?=base_url('assets/adminlte/plugins/datatables/dataTables.bootstrap.css')?>" rel="stylesheet" type="text/css" />

<p style="font-weight: bold">Jumlah Data : <?=$data?$data->num_rows():''?> Record</p>
<p style="font-weight: bold">Tanggal : <?=tgl_indo($tgl_awal)?> - <?=tgl_indo($tgl_akhir)?></p>
<div class="box-body">
    <div class="table-responsive">
        <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>No</th>
                <th>Order</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>Telp</th>
                <th>No Hp</th>
                <th>Email</th>
                <th>Sedap 4</th>
                <th>Sedap 3</th>
                <th>Sedap 2</th>
                <th>Sedap 1</th>
                <th>Sedap syukur</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if(!$data){
                echo "Data Kosong";
            }
            else {
                ?>
                <?php $no=1;
                foreach ($data->result() as $row) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td>00<?= $row->id ?></td>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->alamat ?></td>
                        <td><?= $row->nama_kota ?></td>
                        <td><?= $row->nama_kecamatan ?></td>
                        <td><?= $row->nama_kelurahan ?></td>
                        <td><?= $row->telp ?></td>
                        <td><?= $row->nohp ?></td>
                        <td><?= $row->email ?></td>
                        <td><?= $row->sedap_4 ?></td>
                        <td><?= $row->sedap_3 ?></td>
                        <td><?= $row->sedap_2 ?></td>
                        <td><?= $row->sedap_1 ?></td>
                        <td><?= $row->syukur ?></td>
                        <td>
                            <button class="btn btn-info detail" id="<?=$row->id?>">Detail</button>
                        </td>
                    </tr>
                <?php }
            }?>
            </tbody>
        </table>
    </div>
</div><!-- /.box-body -->

<input type="hidden" id="urlrekap" value="<?=site_url('report/detail_rekap/')?>">

<!-- DATA TABES SCRIPT -->
<script src="<?=base_url('assets/adminlte/plugins/datatables/jquery.dataTables.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/adminlte/plugins/datatables/dataTables.bootstrap.min.js')?>" type="text/javascript"></script>

<script>
    $('.detail').click(function(){
        var id = this.id;
        var url = $('#urlrekap').val();
        $.ajax({
            url : url+'/'+id,
            type: 'get',
            cache: false,
        })
            .success(function(response){
                /*optional stuff to do after success */
                $('#result_view').html(response);

            });
    });

    $("#example1").dataTable();
    $('#example2').dataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": false,
        "bSort": true,
        "bInfo": true,
        "bAutoWidth": false
    });
</script>

