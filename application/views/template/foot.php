<!-- footer starts
================================================== -->
<footer id="footer" class="clearfix">
    <div class="container">
        <!--row starts-->
        <div class="row"> </div>
        <!--row ends-->
        <!--spacer here-->
        <div class="spacer-30px"></div>
        <!--row starts-->
        <div class="row">
            <!--column one starts-->
            <div class="span4">
                <h5>Aqiqah Sehati</h5>
                <p>Alhamdulillah kami bangga menjadi bagian dari sebuah gerakan dakwah dan kemanusiaan yang bahu-membahu dalam wadah : </p>
                <!--logo starts-->
                <div><a href="#" target="_blank"><img src="<?=base_url('assets/images/logo2.png')?>" width="217" height="73" alt="logo"></a></div>
                <!--logo ends--></div>
            <!--column one ends-->
            <!--column two starts-->
            <div class="span4 timeline-box">
                <h5>Testimonial</h5>
                <ul class="list-info scrollable">
                    <?php foreach($foot_testimoni->result() as $row){?>
                    <li>
                        <img src="<?=base_url('upload/testimonial/'.$row->gambar)?>" alt="testimoni aqiqah sehati - <?=$row->nama?>" />
                        <div class="testimonial">
                            <span><?=$row->pesan?></span>
                            <h6 class="bottom">
                                <small class="left"><?=tgl_indo($row->created_at)?></small>
                                <span class="separator">|</span>
                                <a href="<?=site_url('testimonial#'.$row->gambar)?>" class="testi-link"><?=$row->nama?></a>
                            </h6>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!--column two ends-->
            <!--column three starts-->
            <div class="span4 timeline-box">
                <?php $address = $alamat->row();?>
                <h5>Alamat Aqiqah Sehati</h5>
                <?=$address->keterangan?>
                <!--<a class="twitter-timeline" href="https://twitter.com/aqiqahnh" data-widget-id="697323422573957120">Tweet oleh @aqiqahnh</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                <<h5>Kicauan</h5>
                ul class="list-info scrollable" id="results">
                                                            <li>
                                    <h6>
                                        <a target="_blank" href="http://twitter.com/aqiqahnh" class="twitter-link">@aqiqahnh</a>
                                        <small class="right">07 May</small>
                                    </h6>
                                    <span>@armanooooo bisa ke humas.nurulhayat@gmail.com</span>

                                </li>
                                                                        <li>
                                    <h6>
                                        <a target="_blank" href="http://twitter.com/aqiqahnh" class="twitter-link">@aqiqahnh</a>
                                        <small class="right">06 May</small>
                                    </h6>
                                    <span>@armanooooo pembagiannya sesuai dengan porsi gule, contoh paket puas bisa untuk 80 kotak, masig2 kotak ada 3 tsk sete, dan 1 cup gule</span>

                                </li>
                                                                        <li>
                                    <h6>
                                        <a target="_blank" href="http://twitter.com/aqiqahnh" class="twitter-link">@aqiqahnh</a>
                                        <small class="right">30 Apr</small>
                                    </h6>
                                    <span>Aqiqoh Nurul Hayat - Nanti, Pesan Aqiqah Nurul Hayat bisa di Indomaret terdekat http://t.co/fb5Wn7U3Ve</span>

                                </li>
                                                                        <li>
                                    <h6>
                                        <a target="_blank" href="http://twitter.com/aqiqahnh" class="twitter-link">@aqiqahnh</a>
                                        <small class="right">29 Apr</small>
                                    </h6>
                                    <span>RT @nurulhayatku: Kak Ria Enes 'Susan"  Sate Kambing &amp; Gule Kambingnya uenaak, uempuk…Sumprit ! @aqiqahnh http://t.co/DkyExj2Uez</span>

                                </li>
                                                                        <li>
                                    <h6>
                                        <a target="_blank" href="http://twitter.com/aqiqahnh" class="twitter-link">@aqiqahnh</a>
                                        <small class="right">26 Apr</small>
                                    </h6>
                                    <span>1. Sakit itu ujian, bkn menguji ketangguhan &amp; kemampuan Sebab sakit Allah beri sesuai dgn takaran.Ia sejatinya menguji kemauan memberi makna</span>

                                </li>
                            </ul>-->
            </div>
            <!--column three ends-->
        </div>
        <!--row ends-->
    </div>
</footer>
<!-- footer ends
================================================== -->
<!-- copyright starts
================================================== -->
<section id="copyright" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="span12">
                <p> &copy; Copyright 2016 Deye | Aqiqah Sehati</p>
                <!--copyright menu starts-->
                <ul class="copyright-menu">
                    <li><a href="<?=base_url('/')?>" class="menu home">Beranda</a></li>
                    <li><a href="<?=site_url('harga')?>" class="menu harga">Harga</a></li>
                    <li><a href="<?=site_url('berita')?>" class="menu harga">Berita</a></li>
                    <li><a href="<?=base_url('kontak')?>" class="menu contact">Kontak</a></li>
                    <li><a href="<?=base_url('galeri')?>" class="menu gallery">Galeri</a></li>
                    <li><a href="<?=site_url('testimonial')?>" class="menu testimonial">Testimonial</a></li>
                </ul>
                <!--copyright menu ends-->
            </div>
        </div>
    </div>
</section>
<!-- copyright ends
================================================== -->
<!--other jqueries required-->
<script src="<?=base_url('assets/js/bootstrap.js')?>" type="text/javascript" ></script>
<script src="<?=base_url('assets/js/ddsmoothmenu.js')?>" type="text/javascript" ></script>
<script src="<?=base_url('assets/js/jquery.quicksand.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/js/twitter.js')?>" type="text/javascript" ></script>
<script src="<?=base_url('assets/js/jquery.easing.1.3.js')?>" type="text/javascript" ></script>
<script src="<?=base_url('assets/js/custom.js')?>" type="text/javascript" ></script>
</body>
</html>