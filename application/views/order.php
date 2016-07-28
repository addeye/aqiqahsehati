<!--order form script starts-->
<script src="<?=base_url('assets/js/jquery.validate.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/js/jquery.form.js')?>" type="text/javascript"></script>

<!--Jquery datepicker-->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/jquery.ui.datepicker.css')?>" />
<script src="<?=base_url('assets/js/jquery.ui.datepicker.js')?>" type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(function() {

        $('.datepicker').datepicker();

        //Contact form
        $(function() {
            var v = $("#orderform").validate({
                submitHandler: function(form) {
                    $(form).ajaxSubmit({
                        target: "#result",
                        beforeSubmit: function() {
                            $('#order-loader').show();
                            $('#order-button').val('Please wait').attr('disabled','disabled');
                        },
                        error: function() {
                            $('#order-button').val('Send message').removeAttr('disabled');
                            $('#order-loader').hide();
                        },
                        complete: function() {
                            $('#order-button').val('Send message').removeAttr('disabled');
                            $('#order-loader').hide();
                        },
                        success: function(data) {
                            if(data == 'success') {
                                //document.location.href = window.location.pathname;
                                $('#result').html('<strong class="success">Pesan telah berhasil dikirim. Terima Kasih!</strong>');
                                $('#orderform')[0].reset();
                                $('#orderform').slideUp('fast');
                            }
                        },
                        clearForm: false
                    });
                }
            });
        });
        //To clear message field on page refresh (you may clear other fields too, just give the 'id to input field' in html and mention it here, as below)
        $('#orderform #message').val('');
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
                <div class="inner-content">Silahkan isi form pemesanan di bawah ini dengan benar, agar kami dapat membantu <hr /></div>

                <div class="clearfix"></div>
                <div id="result"></div>

                <form action="http://aqiqahnurulhayat.com/order/send" method="post" accept-charset="utf-8" id="orderform">          <fieldset>
                        <p style="border-bottom:1px solid #e2e2e2;"><strong>Data Pemesanan</strong></p>
                        <p>
                            <label>Nama Lengkap :</label>
                            <input name="name" class="required"  type="text" />
                        </p>
                        <p>
                            <label>Alamat :</label>
                            <textarea  rows="4" name="address" id="address" class="required"></textarea>
                        </p>
                        <p>
                            <label>Nomor Telepon :</label>
                            <input name="phone" class="number" type="text" />
                        </p>
                        <p>
                            <label>Nomor HP :</label>
                            <input name="mobile" class="number" type="text" />
                        </p>
                        <p>
                            <label>Email :</label>
                            <input name="email"  class="required email" type="text" />
                        </p>

                        <p style="margin-top:10px;border-bottom:1px solid #e2e2e2;"><strong>Data Yang Akan Di Aqiqoh</strong></p>

                        <p>
                            <label>Nama :</label>
                            <input name="child" class="required" type="text" />
                        </p>
                        <p>
                            <label>Bin/Binti :</label>
                            <input name="parent" class="required" type="text" />
                        </p>
                        <p>
                            <label>Tempat Lahir :</label>
                            <input name="birth_place" class="required" type="text" />
                        </p>
                        <p>
                            <label>Tanggal Lahir :</label>
                            <input name="birth_date" class="required datepicker" type="text" readonly="readonly" style="cursor:default;" />
                        </p>
                        <p>
                            <label>Jenis Kelamin :</label>
              <span class="detail-form">
                <span>
                  <input type="radio" name="gender" value="Laki-laki" id="L" checked="checked" /><label for="L">Laki laki</label>
                </span>
                <span>
                  <input type="radio" name="gender" value="Perempuan" id="P" /><label for="P">Perempuan</label>
                </span>
              </span>
                        <div class="clear"></div>
                        </p>

                        <div class="clear"></div>

                        <p style="margin-top:10px;border-bottom:1px solid #e2e2e2;"><strong>Pelaksanaan Ibadah Aqiqoh</strong></p>

                        <p>
                            <label>Hari :</label>
                            <input name="shipping_day" class="required" type="text" />
                        </p>
                        <p>
                            <label>Tanggal :</label>
                            <input name="shipping_date" class="required datepicker" type="text" readonly="readonly" style="cursor:default;" />
                        </p>
                        <p>
                            <label>Jam :</label>
                            <input name="shipping_time" class="required" type="text" maxlength="5" />
                        </p>
                        <p>
                            <label>Alamat :</label>
                            <textarea  rows="4" name="shipping_address" id="shipping_address" class="required"></textarea>
                        </p>




                        <p>
                            <label>Aqiqoh :</label>
                            <select name="aqiqoh" class="required">
                                <option value="">-pilih aqiqoh-</option>
                                <option value="aqiqoh peduli dan berbagi untuk yatim dan desa miskin">Aqiqoh Peduli & Berbagi untuk yatim dan desa miskin</option>
                                <option value="pribadi">Pribadi</option>
                                <option value="tasyakuran">Tasyakuran</option>
                            </select>
                        </p>

                        <p>
                            <label>Tipe Aqiqoh :</label>
              <span class="detail-form">

                <span>
                  <label>Platinum :</label><input name="istimewa" type="text" class="number" value="0" /><!-- <label>Ekor</label> -->
                </span>

                <span>
                  <label>Istimewa :</label><input name="super" type="text" class="number" value="0" /><!-- <label>Ekor</label> -->
                </span>

                <span>
                  <label>Super :</label><input name="puas" type="text" class="number" value="0" /><!-- <label>Ekor</label> -->
                </span>

                <span>
                  <label>Puas :</label><input name="hemat" type="text" class="number" value="0" /><!-- <label>Ekor</label> -->
                </span>

                <span>
                  <label>Tasyakuran :</label><input name="tasyakuran" type="text" class="number" value="0" /><!-- <label>Ekor</label> -->
                </span>

              </span>
                        </p>

                        <p class="clear"></p>




                        <!--p>
                          <label>Paket Aqiqoh :</label>
                          <select name="paket" class="required">
                            <option value="">-pilih paket aqiqoh-</option>
                            <option value="mentah siap masak">Mentah Siap Masak</option>
                            <option value="masak siap saji">Masak Siap Saji</option>
                            <option value="masak paket nasi kotak">Masak Paket Nasi Kotak</option>
                          </select>
                        </p-->

                        <!--selipan tabel mulai-->
                        <!--label>Tabel Tipe Aqiqah :</label-->
                        <!--span class="detail-form">
                      <!--p>
          <!--table border="2" bordercolor="f2f2f2" align="left" cellpadding="10">
              <tr>
                <td width="125" bgcolor="#b7b7b7" align="center">Type</td>
                <td width="87" bgcolor="#c5c5c5" align="center">Sete dalam tusuk</td>
                <td width="98" bgcolor="#b7b7b7"align="center">Gulai dalam porsi cup</td>
              </tr>
              <tr>
                <td width="125" bgcolor="#d4d4d4">Platinum</td>
                <td width="87" align="center" bgcolor="#e4e4e4">550</td>
                <td width="98" align="center" bgcolor="#d4d4d4">180</td>
              </tr>
              <tr>
                <td width="125" bgcolor="#d4d4d4">Istimewa</td>
                <td width="87" align="center" bgcolor="#e4e4e4">450</td>
                <td width="98" align="center" bgcolor="#d4d4d4">140</td>
              </tr>
              <tr>
                <td width="125" bgcolor="#d4d4d4">Super</td>
                <td width="87" align="center" bgcolor="#e4e4e4">300</td>
                <td width="98" align="center" bgcolor="#d4d4d4">100</td>
              </tr>
              <tr>
                <td width="125" bgcolor="#d4d4d4">Puas</td>
                <td width="87" align="center" bgcolor="#e4e4e4">250</td>
                <td width="98" align="center" bgcolor="#d4d4d4">80</td>
              </tr>
              <tr>
                <td width="125" bgcolor="#d4d4d4">Tasyakuran</td>
                <td width="87" align="center" bgcolor="#e4e4e4">150</td>
                <td width="98" align="center" bgcolor="#d4d4d4">40</td>
              </tr>
          </table-->
                        </p-->
                        </span-->
                        <div class="clearfix"></div>
                        <!--selipan tabel selesai-->

                        <!--p>
                          <!--label>Olahan Aqiqoh :</label-->
                        <!--span class="detail-form"-->

                        <!--span>
                          <label>Sate (tusuk) :</label><input name="sate" type="text" class="number" value="0" /><!-- <label>Ekor</label> -->
                        </span-->

                        <!--span>
                          <label>Gule (panci) :</label><input name="gule" type="text" class="number" value="0" /><!-- <label>Ekor</label> -->
                        </span-->

                        <!--span>
                          <label>Tongseng :</label><input name="tongseng" type="text" class="number" value="0" /><!-- <label>Ekor</label> -->
                        </span-->

                        <!--span>
                          <label>kambing Guling :</label><input name="kambing_guling" type="text" class="number" value="0" /><!-- <label>Ekor</label> -->
                        </span-->

                        <!--span>
                          <label>Kikil :</label><input name="kikil" type="text" class="number" value="0" /><!-- <label>Ekor</label> -->
                        </span-->

                        <!--span>
                          <label>Olahan Lain :</label><input name="other" type="text" style="width:50% !important;" />
                        </span-->

                        <!--span>
                          <label>Kepala :</label><input name="kepala" type="text" style="width:50% !important;" />
                        </span-->

                        <!--span>
                          <!--label>Kaki :</label--><!--input name="kaki" type="text" style="width:50% !important;" /-->
                        </span-->

                        </span-->
                        </p-->



                        <p class="clear"></p>

                        <p>
                            <label></label>
                            <img src="http://aqiqahnurulhayat.com/captcha/1469669951.jpg" width=" 250" height="100" style="border:0;" alt=" " />            </p>
                        <p>
                            <label>Kode Captcha :</label>
                            <input name="captcha" class="required" type="text">
                        </p>

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
                                    <a href="#" title="Download Brosur Brosur_Aqiqah_NH">
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