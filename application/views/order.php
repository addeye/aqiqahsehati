<!--order form script starts-->
<script src="<?=base_url('assets/js/jquery.validate.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/js/jquery.form.js')?>" type="text/javascript"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<!--Jquery datepicker-->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/jquery.ui.datepicker.css')?>" />
<script src="<?=base_url('assets/js/jquery.ui.datepicker.js')?>" type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(function() {

        $('.datepicker').datepicker({ changeMonth: true,
            changeYear: true,
            yearRange: "1950:2020",
            dateFormat: 'yy-mm-dd'});
        $('.js-select2').select2();
    });

</script>

<style type="text/css">
    .detail-form {
        float: left;
        width: 68%;
    }
    .detail-form span {
        float: left;
        width: 100%;
        margin-top: 18px;
    }
    .detail-form span label {
        width: auto;
        min-width: 30% !important;
        line-height: 1.2em;
    }
    .detail-form span label.error {
        padding-left: 22% !important;
    }
    .detail-form span input {
        float: left;
        margin: 0 5px;
    }
    .detail-form span input[type="text"]{
        margin-top: -12px;
        width: 30% !important;
    }
    .radio-list span input {
        clear: left;
        margin: 0;
        float: left;
    }
    select {
        width: 68% !important;
    }
    @media only screen and (max-width: 767px) {
        .detail-form {
            width: 99%;
        }
        .detail-form span {
            margin-top: 18px;
        }
        .detail-form span label {
            float: left;
            width: auto !important;
            min-width: 30% !important;
            line-height: 1.2em;
        }
        .detail-form span input[type="text"] {
            margin: 0 5px;
            margin-top: -12px;
            width: 30% !important;
            float: left;
        }
        select {
            width: 99% !important;
        }
    }
</style>
<!--order form script ends-->

<!-- header-btm starts
================================================== -->
<section id="header-btm" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h4 class="heading-icon">
                    <img src="http://aqiqahnurulhayat.com/assets/images/icons/heading-icon-mail.png" width="40" height="40" alt="icon" class="icon-small-bg">
                    Pemesanan
                </h4>
            </div>
        </div>
    </div>
</section>
<!-- header-btm ends
================================================== -->
<!-- content starts
================================================== -->
<section id="content" class="clearfix">
    <div class="container">
        <div class="row">

            <!--main content starts-->
            <div class="main-content span8">
                <?=$this->session->flashdata('pesan')?>
                <div class="inner-content">Silahkan isi form pemesanan di bawah ini dengan benar, agar kami dapat membantu <hr /></div>
                <div class="clearfix"></div>
                <div id="result"></div>

                <form action="<?=site_url('order/send')?>" method="post" accept-charset="utf-8">
                    <fieldset>
                        <p style="border-bottom:1px solid #e2e2e2;"><strong>Data Pemesanan</strong></p>
                        <p>
                            <label>Nama Lengkap :</label>
                            <input name="name" class="required" type="text" required />
                        </p>
                        <p>
                            <label>Kota :</label>
                            <select id="kota" name="kota" class="js-select2">
                                <option value="">Pilih Kota</option>
                                <?php foreach($kota->result() as $city) {?>
                                    <option value="<?=$city->id?>"><?=$city->name?></option>
                                <?php } ?>
                            </select>
                        </p>
                        <br>
                        <p>
                            <label>Kecamatan :</label>
                            <select id="kec" name="kec" class="js-select2" disabled>
                                <option value="">Pilih Kecamatan</option>
                            </select>
                        </p>
                        <br>
                        <p>
                            <label>Kelurahan :</label>
                            <select id="kel" name="kel" class="js-select2" disabled>
                                <option value="">Pilih Kelurahan</option>
                            </select>
                        </p>
                        <br>
                        <p>
                            <label>Alamat :</label>
                            <textarea  rows="4" name="address" id="address" class="required" required></textarea>
                        </p>
                        <p>
                            <label>Nomor Telepon :</label>
                            <input name="phone" class="number" type="text"/>
                        </p>
                        <p>
                            <label>Nomor HP :</label>
                            <input name="mobile" class="number" type="text" required/>
                        </p>
                        <p>
                            <label>Email :</label>
                            <input name="email"  class="required email" type="text" required/>
                        </p>

                        <p style="margin-top:10px;border-bottom:1px solid #e2e2e2;"><strong>Data Yang Akan Di Aqiqoh</strong></p>

                        <p>
                            <label>Nama :</label>
                            <input name="child" class="required" type="text" required/>
                        </p>
                        <p>
                            <label>Bin/Binti :</label>
                            <input name="parent" class="required" type="text" required/>
                        </p>
                        <p>
                            <label>Tempat Lahir :</label>
                            <input name="birth_place" class="required" type="text" required/>
                        </p>
                        <p>
                            <label>Tanggal Lahir :</label>
                            <input name="birth_date" class="required datepicker" type="text" readonly="readonly" style="cursor:default;" required/>
                        </p>
                        <p>
                            <label>Jenis Kelamin :</label>
              <span class="detail-form">
                <span>
                  <input type="radio" name="gender" value="Laki-laki" id="L" checked="checked"/><label for="L">Laki laki</label>
                </span>
                <span>
                  <input type="radio" name="gender" value="Perempuan" id="P"/><label for="P">Perempuan</label>
                </span>
              </span>
                        <div class="clear"></div>
                        </p>

                        <div class="clear"></div>

                        <p style="margin-top:10px;border-bottom:1px solid #e2e2e2;"><strong>Pelaksanaan Ibadah Aqiqoh</strong></p>
                        <p>
                            <label>Hari/Tanggal :</label>
                            <input style="width: 30% !important; background-color: #eee !important;" name="help-text-day" id="help-text-day" type="text" placeholder="Isi Tanggal" disabled/>
                            <input style="width: 30% !important;" name="shipping_date" id="pesan_tgl" class="required datepicker" type="text" placeholder="Tanggal" required/>
                            <input name="shipping_day" id="pesan_hari" class="required" type="hidden"/>
                        </p>
                        <p>
                            <label>Jam :</label>
                            <input name="shipping_time" class="required" type="time" required/>
                        </p>
                        <p>
                            <label>Alamat :</label>
                            <textarea  rows="4" name="shipping_address" id="shipping_address" class="required" required></textarea>
                        </p>
                        <p>
                            <label>Aqiqah :</label>
                            <select name="aqiqah" class="required" required>
                                <option value="">-pilih aqiqoh-</option>
                                <option value="Program pemberdayaan anak yatim / dhuafa LMI">Program pemberdayaan anak yatim / dhuafa LMI</option>
                                <option value="pribadi">Pribadi</option>
                            </select>
                        </p>

                        <p>
                            <label>Tipe Aqiqoh :</label>
              <span class="detail-form">
                  <span>
                  <label><a href="<?=site_url('harga-paket-aqiqah-murah')?>" target="_blank">Lihat Detail Paket</a>
                </span>
                <span>
                  <label>Sedap 4 :</label><input name="sedap_4" type="text" class="number" value="0" /><!-- <label>Ekor</label> -->
                </span>
                <span>
                  <label>Sedap 3 :</label><input name="sedap_3" type="text" class="number" value="0" /><!-- <label>Ekor</label> -->
                </span>

                <span>
                  <label>Sedap 2 :</label><input name="sedap_2" type="text" class="number" value="0" /><!-- <label>Ekor</label> -->
                </span>

                <span>
                  <label>Sedap 1 :</label><input name="sedap_1" type="text" class="number" value="0" /><!-- <label>Ekor</label> -->
                </span>

                <span>
                  <label>Syukur :</label><input name="syukur" type="text" class="number" value="0" /><!-- <label>Ekor</label> -->
                </span>

              </span>
                        </p>

                        <p class="clear"></p>

                        <p>
                            <input type="submit" value="Order" class="submit" id="order-button" />
                            <input type="button" class="preloader" id="order-loader" />
                        </p>
                    </fieldset>
                </form>      </div>

            <!--main content ends-->
            <!--main content ends-->
            <!--sidebar starts-->
            <div class="sidebar span4 order">

                <div class="information">
                    <aside>

                        <div class="widget-2 sidebarBox widget-container widget_recent_entries" id="brochure-2">
                            <h4 class="widget-title">Brosur</h4>
                            <ul>
                                <li>
                                    <a href="<?=base_url('upload/share/brosur-harga-aqiqah-sehati.jpg')?>" target="_blank" title="Download Brosur Brosur_AqiqahSehati">
                                        <div class="brochure-list">Brosur_AqiqahSehati</div>
                                    </a>
                                </li>
                            </ul>
                        </div>


                        <div class="widget-2 sidebarBox widget-container widget_recent_entries" id="recent-posts-2">
                        </div>

                    </aside>
                </div>
            </div>
            <!--sidebar ends-->

        </div>
    </div>
</section>

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
            cache: true,
        })
            .success(function(response){
                /*optional stuff to do after success */
                $('#kec').removeAttr('disabled');
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
            cache: true,
        })
            .success(function(response){
                /*optional stuff to do after success */
                $('#kel').removeAttr('disabled');
                $('#kel').html(response);
            });
    });


    var days = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];
    //var months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
    //var month = months[ now.getMonth() ];

    //console.log(day);

    $('#pesan_tgl').change(function()
    {
        var pesan_tgl = $('#pesan_tgl').val();
        var now = new Date(pesan_tgl);
        var day = days[ now.getDay() ];
        $('#pesan_hari').val(day);
        $('#help-text-day').val(day);
    });

</script>

<!-- content ends-->
<style type="text/css">
    .timeline-box {
        margin-bottom: 5px;
    }
    .timeline-box ul {
        max-height: 180px !important;
        overflow: hidden;
        text-align: left;
    }
    .timeline-box ul li {
        float: left;
        width: 100%;
        margin-right: 5px;
        color: #767676;
        line-height: 1.3em !important;
    }
    .timeline-box span {
        display: inline;
        font-size: 12px;
        line-height: 1.2em !important;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    .timeline-box span.separator {
        margin: 0 5px;
    }
    .timeline-box li:hover span {
        color: #a2a2a2;
    }
    .timeline-box h6 {
        font-size: 12px;
    }
    .timeline-box h6.bottom {
        margin-top: 5px;
        line-height: 12px;
    }
    .timeline-box h6 small.right {
        float: right;
    }
    .timeline-box h6 small.left {
        line-height: 12px;
        float: left;
    }
    .timeline-box img {
        float: left;
        margin: 5px 5px 0 0 !important;
        max-height:42px;
        max-width:15%;
    }
    .timeline-box .testimonial {
        float: right;
        width: 80%;
    }
    .twitter-link {
        color: #FF720B;
        font-size: 11px;
    }
    .twitter-link:hover {
        color: #646464;
    }
    .testi-link {
        color: #FF720B;
        font-size: 11px;
    }
    .testi-link:hover {
        color: #646464;
    }
    .list-unstyled h6 {
        font-weight: normal !important;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    .list-unstyled li:hover h6{
        color: #a2a2a2;
    }
</style>