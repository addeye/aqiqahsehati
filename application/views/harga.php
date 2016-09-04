<!--contact form script starts-->
<script src="<?=base_url('assets/js/jquery.validate.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/js/jquery.form.js')?>" type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(function() {
        var page_hash = window.location.hash;
        if(!page_hash) {
            $('.accordion-group:first .accordion-body').toggleClass('in');
        }
        $('.accordion-group '+page_hash).toggleClass('in');
    });

    $(window).bind('hashchange', function() {
        var page_hash = window.location.hash;
        $('.accordion-group .accordion-body').each(function(){

            if($(this).hasClass('in')){
                if('#'+$(this).attr('id') != page_hash) {
                    $(this).prev().find('a').trigger('click');
                }
            } else if('#'+$(this).attr('id') == page_hash) {
                $(this).prev().find('a').trigger('click');
            }

        });

    });

    $(document).ready(function() {
        //Contact form
        $(function() {
            var v = $("#contactform").validate({
                submitHandler: function(form) {
                    $(form).ajaxSubmit({
                        target: "#result",
                        clearForm: true
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
                <h4 class="heading-icon"> <img src="<?=base_url('assets/images/icons/heading-icon-support.png')?>" width="40" height="40" alt="icon" class="icon-small-bg">Harga</h4>
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

            <!--sidebar starts-->
            <div class="sidebar span4 contact">

                <div class="information">
                    <aside>
                        <div class="widget-2 sidebarBox widget-container widget_recent_entries" id="recent-posts-2">
                        </div>

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

                    </aside>
                </div>

                <div class="other-page">
                    <div class="space"></div>
                    <aside>
                        <div class="widget-2 sidebarBox widget-container widget_recent_entries" id="recent-posts-2">
                            <h4 class="widget-title">Other Page</h4>
                            <ul>
                                <?php foreach($menu->result() as $row ) {?>
                                    <li><a href="<?=base_url('page/'.$row->slug)?>" title="Kontak"><?=$row->judul?></a></li>
                                <?php } ?>
                                <li><a href="<?=base_url('contact')?>" title="Kontak">Kontak</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
            <!--sidebar ends-->

            <!--main content starts-->
            <div class="main-content span8">
                <h2>Harga Paket Aqiqah Murah Surabaya dan Sidoarjo</h2>
                <p>Cuma ada disini dengan harga yang bersahabat semua bisa beraqiqah dengan mudah, enak, dan nggak ribet.
                    segera hubungi <span style="font-size: 20px;">0822-1006-2007</span> atau Pesan <a href="order">Disini</a></p>
                                <p><strong>Harga paket Aqiqah (harga perekor Kambing) sebagai berikut:</strong></p>
                                <table width="100%" border="1" cellpadding="5" cellspacing="0">
                                    <tbody>
                                    <tr class="first even" style="background-color: #ff720b;">
                                        <td class="first" style="text-align: center;"><strong>No.</strong></td>
                                        <td style="text-align: center;"><strong>Paket </strong></td>
                                        <td style="text-align: center;"><strong>Kambing Betina</strong></td>
                                        <td style="text-align: center;"><strong>&nbsp; Kambing Jantan</strong></td>
                                        <td style="text-align: center;"><strong>Sate</strong></td>
                                        <td class="last" style="text-align: center;"><strong>Gule</strong></td>
                                    </tr>
                                    <tr>
                                        <td class="first">
                                            <p><strong>&nbsp;1.</strong></p>
                                        </td>
                                        <td>
                                            <p><strong>Sedap 4</strong></p>
                                        </td>
                                        <td style="text-align: center;">
                                            <p><strong>&nbsp;2.220.000</strong></p>
                                        </td>
                                        <td style="text-align: center;">
                                            <p><strong>2.950.000</strong></p>
                                        </td>
                                        <td style="text-align: center;">
                                            <p><strong>550 tusuk</strong></p>
                                        </td>
                                        <td class="last" style="text-align: center;">
                                            <p><strong>180 porsi</strong></p>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="first">
                                            <p><strong><span style="color: #ff720b;">&nbsp;2.</span></strong></p>
                                        </td>
                                        <td>
                                            <p><strong><span style="color: #ff720b;">Sedap 3</span></strong></p>
                                        </td>
                                        <td style="text-align: center;">
                                            <p><strong><span style="color: #ff720b;">&nbsp;1.850.000</span></strong></p>
                                        </td>
                                        <td style="text-align: center;">
                                            <p><strong><span style="color: #ff720b;">2.600.000</span></strong></p>
                                        </td>
                                        <td style="text-align: center;">
                                            <p><strong><span style="color: #ff720b;">450 tusuk</span></strong></p>
                                        </td>
                                        <td class="last" style="text-align: center;">
                                            <p><strong><span style="color: #ff720b;">&nbsp;140 porsi</span></strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="first">
                                            <p><strong>&nbsp;3.</strong></p>
                                        </td>
                                        <td>
                                            <p><strong>Sedap 2</strong></p>
                                        </td>
                                        <td style="text-align: center;">
                                            <p><strong>&nbsp;1.400.000</strong></p>
                                        </td>
                                        <td style="text-align: center;">
                                            <p><strong>&nbsp;1.850.000</strong></p>
                                        </td>
                                        <td style="text-align: center;">
                                            <p><strong>300 tusuk</strong></p>
                                        </td>
                                        <td class="last" style="text-align: center;">
                                            <p><strong>&nbsp;100 porsi</strong></p>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="first">
                                            <p><strong><span style="color: #ff720b;">&nbsp;4.</span></strong></p>
                                        </td>
                                        <td>
                                            <p><strong><span style="color: #ff720b;">Sedap 1</span></strong></p>
                                        </td>
                                        <td style="text-align: center;">
                                            <p><strong><span style="color: #ff720b;">&nbsp;1.300.000</span></strong></p>
                                        </td>
                                        <td style="text-align: center;">
                                            <p><strong><span style="color: #ff720b;">&nbsp; 1.750.000<br /></span></strong></p>
                                        </td>
                                        <td style="text-align: center;">
                                            <p><strong><span style="color: #ff720b;">250 tusuk</span></strong></p>
                                        </td>
                                        <td class="last" style="text-align: center;">
                                            <p><strong><span style="color: #ff720b;">&nbsp;80 porsi</span></strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="first">
                                            <p><strong>&nbsp;5.</strong></p>
                                        </td>
                                        <td>
                                            <p><strong>Syukur*</strong></p>
                                        </td>
                                        <td style="text-align: center;">
                                            <p><strong>&nbsp;1.000.000</strong></p>
                                        </td>
                                        <td style="text-align: center;">-</td>
                                        <td style="text-align: center;">
                                            <p><strong>150 tusuk</strong></p>
                                        </td>
                                        <td class="last" style="text-align: center;">
                                            <p><strong>&nbsp;40 porsi</strong></p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h2>&nbsp;</h2>
                                <p><strong>Aqiqah Sehati bisa dengan Nasi Kotak. Siap langsung diantarkan :</strong></p>
                                <table width="100%" border="1" cellpadding="5" cellspacing="0">
                                    <tbody>
                                    <tr class="first even" style="background-color: #ff720b;">
                                        <td class="first" style="text-align: center;">
                                            <p><strong>No. <br /></strong></p>
                                        </td>
                                        <td style="text-align: center;"><strong>Paket </strong></td>
                                        <td style="text-align: center;"><strong>Kambing Betina<br /></strong></td>
                                        <td style="text-align: center;"><strong>kambing Jantan</strong></td>
                                        <td class="last" style="text-align: center;"><strong>Jumlah Kotakan</strong></td>
                                    </tr>
                                    <tr>
                                        <td class="first"><strong>&nbsp;1.</strong></td>
                                        <td><strong>Sedap 4</strong></td>
                                        <td style="text-align: center;"><strong>4.900.000</strong></td>
                                        <td style="text-align: center;"><strong>&nbsp;5.650.000</strong></td>
                                        <td class="last" style="text-align: center;"><strong>180 kotak</strong></td>
                                    </tr>
                                    <tr class="even">
                                        <td class="first"><span style="color: #ff720b;"><strong>&nbsp;2.</strong></span></td>
                                        <td><span style="color: #ff720b;"><strong>Sedap 3 </strong></span></td>
                                        <td style="text-align: center;">
                                            <p><span style="color: #ff720b;"><strong>3.950.000</strong></span></p>
                                        </td>
                                        <td style="text-align: center;"><span style="color: #ff720b;"><strong>&nbsp;4.700.000</strong></span></td>
                                        <td class="last" style="text-align: center;"><span style="color: #ff720b;"><strong>140 kotak</strong></span></td>
                                    </tr>
                                    <tr>
                                        <td class="first"><strong>&nbsp;3.</strong></td>
                                        <td><strong>Sedap 2</strong></td>
                                        <td style="text-align: center;"><strong>&nbsp;2.900.000</strong></td>
                                        <td style="text-align: center;"><strong>&nbsp;3.350.000</strong></td>
                                        <td class="last" style="text-align: center;"><strong>100 kotak</strong></td>
                                    </tr>
                                    <tr class="even">
                                        <td class="first"><span style="color: #ff720b;"><strong>&nbsp;4.</strong></span></td>
                                        <td><span style="color: #ff720b;"><strong>Sedap 1</strong></span></td>
                                        <td style="text-align: center;"><span style="color: #ff720b;"><strong>2.500.000</strong></span></td>
                                        <td style="text-align: center;"><span style="color: #ff720b;"><strong>&nbsp;2.950.000</strong></span></td>
                                        <td class="last" style="text-align: center;"><span style="color: #ff720b;"><strong>&nbsp;80 kotak</strong></span></td>
                                    </tr>
                                    <tr>
                                        <td class="first"><strong>&nbsp;5.</strong></td>
                                        <td><strong>Syukur*</strong></td>
                                        <td style="text-align: center;"><strong>1.600.000</strong></td>
                                        <td style="text-align: center;"><strong>- <br /></strong></td>
                                        <td class="last" style="text-align: center;"><strong>&nbsp; 40 kotak</strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p><strong>&nbsp;</strong>* Type Syukur belum memenuhi ketentuan kambing Aqiqah.<strong><br /></strong></p>
                                <p><strong>&nbsp;</strong></p>
                                <table style="width: 560px; height: 315px;" border="0">
                                    <tbody>
                                    <tr class="first even">
                                        <td class="first"><img class="display_block float_right" src="<?=base_url('upload/images/mockupkardus.png')?>" alt="" /></td>
                                        <td class="last">
                                            <p><strong><strong>+ Rp. 14.000 Menu Nasi Kotak terdiri dari :</strong></strong></p>
                                            <p>1. Nasi putih<br />2. Tiga tusuk sate <br />3. Sambal goreng kentang sehati atau mie <br />4. Satu cup gule<br />5. Acar kuning<br />6. Sambal<br />7. Krupuk Udang<br />8. Buah <br />9. Alat makan (tisue, sendok, tusuk gigi)<br />10. Box Nasi Esklusif ukuran 22x22 cm</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!--<p><span style="color: #ff6600;">Tersedia pula aneka pilihan menu lainnya, silhakan lihat di buku <a href="http://www.aqiqahnurulhayat.com/menu" rel="external">menu</a> kami.</span></p>-->
                                <p>&nbsp;</p>

                <!--accordion ends-->

                <div class="clear"></div>

                <hr style="margin:5px 0;" />

                <!-- AddThis Button BEGIN -->
                <a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=300&amp;pubid=xa-50d2e8791dc7aabc">
                    <img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/>
                </a>
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50d2e8791dc7aabc"></script>
                <!-- AddThis Button END -->

            </div>

            <!--main content ends-->
        </div>
    </div>
</section>
<!-- content ends
================================================== -->		<style type="text/css">
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