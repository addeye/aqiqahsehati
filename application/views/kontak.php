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
                <?=$this->session->flashdata('pesan')?>
                <div class="inner-content"><h3>Silahkan hubungi kami melalui form berikut ini :</h3><hr /></div>

                <div class="clearfix"></div>
                <div id="result"></div>

                <form action="<?=site_url('contact/send')?>" method="post" accept-charset="utf-8" id="">
                    <fieldset>
                        <p>
                            <label>Nama Lengkap :</label>
                            <input name="name" class="required" type="text" required>
                        </p>
                        <p>
                            <label>Alamat :</label>
                            <textarea  rows="4" name="address" id="address" class="required" required></textarea>
                        </p>
                        <p>
                            <label>Perusahaan :</label>
                            <input name="company"  type="text">
                        </p>
                        <p>
                            <label>Nomor Telepon :</label>
                            <input name="phone" class="number" type="text" required>
                        </p>
                        <p>
                            <label>Email :</label>
                            <input name="email"  class="required email" type="text" required>
                        </p>
                        <p>
                            <label>Pesan :</label>
                            <textarea  rows="4" name="message" id="" class="required" required></textarea>
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
                                    <a href="<?=base_url('upload/share/brosur-harga-aqiqah-sehati.jpg')?>" target="_blank" title="Download Brosur Brosur_AqiqahSehati">
                                        <div class="brochure-list">Brosur_AqiqahSehati</div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget-2 sidebarBox widget-container widget_recent_entries" id="recent-posts-2">
                            <p>Aqiqah Sehati merupakan perusahaan layanan aqiqah terbesar di Indonesia dengan jangkauan layanan terluas hingga kota besar di Indonesia.<br /><br />Kini ibadah aqiqah Anda semakin mudah dan tidak ribet lagi bersama kami, silahkan hubungi kami kantor Aqiqah Sehati terdekat dikota Anda dibawah ini:<br />&nbsp;<br />KANTOR PUSAT<br />Telp. +62 82-2600-860-09<br />	Graha TI Lantai 1 Jl Ahmad Yani No 153 Surabaya.<br /><br />KANTOR CABANG<br />Sidoarjo<br />Telp. +62 82-3100-620-07<br />
                                Perum Larangan Mega Asri D-33 Candi<br /></p>
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