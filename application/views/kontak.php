<!--contact form script starts-->
<script src="<?=base_url('assets/js/jquery.validate.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/js/jquery.form.js')?>" type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(function() {
        //Contact form
        $(function() {
            var v = $("#contactform").validate({
                submitHandler: function(form) {
                    $(form).ajaxSubmit({
                        target: "#result",
                        beforeSubmit: function() {
                            $('#contact-loader').show();
                            $('#contact-button').val('Please wait').attr('disabled','disabled');
                        },
                        error: function() {
                            $('#contact-button').val('Send message').removeAttr('disabled');
                            $('#contact-loader').hide();
                        },
                        complete: function() {
                            $('#contact-button').val('Send message').removeAttr('disabled');
                            $('#contact-loader').hide();
                        },
                        success: function(data) {
                            if(data == 'success') {
                                //document.location.href = window.location.pathname;
                                $('#result').html('<strong class="success">Pesan telah berhasil dikirim. Terima Kasih!</strong>');
                                $('#contactform')[0].reset();
                                $('#contactform').slideUp('fast');
                            }
                        },
                        clearForm: false
                    });
                }
            });
        });
        //To clear message field on page refresh (you may clear other fields too, just give the 'id to input field' in html and mention it here, as below)
        $('#contactform #message').val('');
    });

</script>
<!--contact form script ends-->

<!-- header-btm starts
================================================== -->
<section id="header-btm" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h4 class="heading-icon">
                    <img src="http://aqiqahnurulhayat.com/assets/images/icons/heading-icon-mail.png" width="40" height="40" alt="icon" class="icon-small-bg">
                    Hubungi Kami
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
                <div class="inner-content"><h3>Silahkan hubungi kami melalui form berikut ini :</h3><hr /></div>

                <div class="clearfix"></div>
                <div id="result"></div>

                <form action="http://aqiqahnurulhayat.com/kontak/send" method="post" accept-charset="utf-8" id="contactform">
                    <fieldset>
                        <p>
                            <label>Nama Lengkap :</label>
                            <input name="name" class="required"  type="text">
                        </p>
                        <p>
                            <label>Alamat :</label>
                            <textarea  rows="4" name="address" id="address" class="required"></textarea>
                        </p>
                        <p>
                            <label>Perusahaan :</label>
                            <input name="company"  type="text">
                        </p>
                        <p>
                            <label>Nomor Telepon :</label>
                            <input name="phone" class="number" type="text">
                        </p>
                        <p>
                            <label>Email :</label>
                            <input name="email"  class="required email" type="text">
                        </p>
                        <p>
                            <label>Pesan :</label>
                            <textarea  rows="4" name="message" id="message" class="required"></textarea>
                        </p>
                        <p>
                            <label></label>
                            <img src="http://aqiqahnurulhayat.com/captcha/1469667067.jpg" width=" 250" height="100" style="border:0;" alt=" " />            </p>
                        <p>
                            <label>Kode Captcha :</label>
                            <input name="captcha" class="required" type="text">
                        </p>

                        <p>
                            <input type="submit" value="Send Message" class="submit" id="contact-button" />
                            <input type="button" class="preloader" id="contact-loader" />
                        </p>
                    </fieldset>
                </form>
            </div>
            <!--main content ends-->

            <!--sidebar starts-->
            <div class="sidebar span4 contact">

                <div class="information">
                    <aside>
                        <div class="widget-2 sidebarBox widget-container widget_recent_entries" id="brochure-2">
                            <h4 class="widget-title">Brosur</h4>
                            <ul>
                                <li>
                                    <a href="http://aqiqahnurulhayat.com/download/30-03-2016_-_Brosur_Aqiqah_NH.pdf" title="Download Brosur Brosur_Aqiqah_NH">
                                        <div class="brochure-list">Brosur_AqiqahSehati</div>
                                    </a>
                                </li>
                            </ul>
                        </div>


                        <div class="widget-2 sidebarBox widget-container widget_recent_entries" id="recent-posts-2">
                            <p>Aqiqah Nurul Hayat merupakan perusahaan layanan aqiqah terbesar di Indonesia dengan jangkauan layanan terluas hingga 64 kota besar di Indonesia.<br /><br />Kini ibadah aqiqah Anda semakin mudah dan tidak ribet lagi bersama kami, silahkan hubungi kami kantor Aqiqah Nurul Hayat terdekat dikota Anda dibawah ini:<br />&nbsp;<br />KANTOR PUSAT<br /><br />Telp. 031.8783344, Fax. 031.8782074<br />Perum IKIP Gunung Anyar B-48 Surabaya.<br />Email : humas.nurulhayat@gmail.com<br />www.nurulhayat.org<br /><br />KANTOR CABANG<br /><br />Surabaya Barat<br />Telp. 031.7535153<br />Jalan Raya Menganti Kramat 48 Surabay<br /><br />Sidoarjo<br />Telp. 031 8070283 , 031 99701700<br />Ruko Citra Indah C8<br />Jalan KH. Mukmin no 11&nbsp; Kota Sidoarjo<br /><br />Malang<br />Telp. 0341.9046060,359090, 085104546060<br />Jalan S.Supriadi No.7A Sukun Kota Malang.<br /><br />Kediri<br />Telp. 0354.7417744, 085102672000<br />Jalan Penanggungan 64 Mojoroto Kota Kediri.<br /><br />Tuban<br />Telp. 0356.32 6060<br />Jalan Delima 70, Kelurahan Perbon Tuban<br /><br />Gresik<br />Telp.031.9910 3377&nbsp; , 03199701700<br />Jalan TSiti Fatimah binti Maimun gg Tambang II no.9 Gresik Kota Baru (GKB) Gresik<br /><br />Madiun<br />Telp. 0351.452425<br />Jalan Mayjend Panjaitan 17 Ruko Madiun Indah no.18, Madiun<br /><br />Bojonegoro<br />Telp. 0353.571144, 0851 0095 9294<br />Jalan Pemuda No.12A, Bojonegoro<br /><br />Jember<br />Telp. 0331.412818, 082234567469<br />Jalan Nusantara R-8 (GOR Kaliwates) Jember<br /><br />Banyuwangi<br />Telp. 0333.417773, 085108775555<br />Jalan Kolonel Sugiono No.49, Ruko Stendo No. 1 Banyuwangi.<br /><br />Semarang<br />Telp. 024.6735778, 085777555699<br />Ruko Perum Kampoeng Semawis A8, Kedungmundu (Depan Rektorat Universitas Muhammadyah) Semarang<br /><br />Yogyakarta<br />Telp. 0274.277444<br />Jalan Veteran No. 160 DI Yogyakarta<br /><br />Solo<br />Telp. 0271.630387, 081229775752<br />Jalan Brigjen Katamso No.62C Jebres Surakarta<br />(depan RS.DR.OEN, Kandang Sapi Jebres)<br /><br />Bekasi<br />Telp. 021.28084028, 082210311175/082817079751<br />Jalan Jati Makmur Kemang no 45 Pondok Gede, BekaSI<br /><br />Tangerang Selatan<br />Telp. 021.7444096, 085107205005<br />Jalan Ir. Juanda 55 (Raya Ciputat) Tangerang Selatan<br /><br />Tangerang<br />Telp. 0215526309 - 082123456309<br />Jalan Jalan Daan Mogot nomer 955, Tangerang<br /><br />Depok<br />Telp. 021.77207021, 085100557587<br />Jalan Margonda Raya No 1 Depok</p>
                            <p>Bandung<br />Telp. 022.7271686 / 087823536000<br />Jalan&nbsp; Ahmad Yani nomor 1005, Cicaheum, Bandung.<br />(100 meter dr Terminal Cicaheum)</p>
                            <p>Bogor<br />Telp. 0251.8353612 / 087873824000<br />Jalan&nbsp; K.H Adnawidjaya Blok D1 , Bogor<br /><br />Balikpapan<br />Telp. 0542.791344<br />Jalan DI Panjaitan RT.029 No. 30 D Gunung Guntur, Balikpapan<br /><br />Medan<br />Telp.061.8228592, 082274999994<br />Jalan Ring Road 18G Medan<br /><br />Makassar<br />Telp. 082344466699, 082188444369<br />Jl. Abu Bakar Lambogo No 58<br />Kel. Bara Baraya Selatan Kec.Makassar, Kota Makassar.<br /><br /><br /></p>            </div>


                    </aside>
                </div>

            </div>
            <!--sidebar ends-->

        </div>
    </div>
</section>
<!-- content ends ================================================== -->
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