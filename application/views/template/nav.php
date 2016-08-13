<!-- header starts
================================================== -->
<section id="top-bar">

</section>
<section id="header" class="clearfix">
    <div class="container">
        <div class="row">
            <!--logo starts-->
            <div class="span4 logo"><a href="#"><img src="<?= base_url('assets/images/logo.png')?>" width="217" height="73" alt="logo"></a></div>
            <!--logo ends-->
            <div class="span8 clearfix">
                <!--social starts-->
                <form action="#search" method="post" accept-charset="utf-8" id="search-head" onSubmit="return searchCheck();">						<ul class="social clearfix">
                        <!--<li>
                            <a href="ymsgr:sendim?nhcs1">
                                <img id="yahooImg" src="http://opi.yahoo.com/online?u=rama_nurulhayat&amp;m=g&amp;t=1" title="Hubungi Kami dengan Yahoo! Messenger" alt="Hubungi Kami dengan Yahoo! Messenger" />
                            </a>
                            <a href="ymsgr:sendim?nhcs2">
                                <img id="yahooImg" src="http://opi.yahoo.com/online?u=dhony_iyp&amp;m=g&amp;t=1" title="Hubungi Kami dengan Yahoo! Messenger" alt="Hubungi Kami dengan Yahoo! Messenger" />
                            </a>
                        </li>-->
                        <li>
                            <a href="https://www.facebook.com/Aqiqah-Sehati-936299933159726/" target="_blank"><img src="<?=base_url('assets/images/icons/social-icon-facebook.png')?>" width="28" height="28" alt="icon"></a>
                            <a href="https://www.instagram.com/aqiqahsehati/" target="_blank"><img src="<?= base_url('assets/images/icons/social-icon-insta.png')?>" width="28" height="28" alt="icon"></a>
                            <input type="text" id="keyword" name="keyword" class="keyword-text" placeholder="Cari..." />
                            <a id="search-button" class="search-button-action"><img src="<?= base_url('assets/images/icons/search_icon_aqiqah.png')?>" width="28" height="28" alt="icon"></a>
                        </li>
                    </ul>
                </form>						<!--social ends-->

                <!--menu starts-->
                <div id="smoothmenu" class="ddsmoothmenu">
                    <a href='order' class="menu_mobile" style="float: right; background: #ff720b; color: white; padding: 10px 30px; border-radius: 4px; font-size: 17px; font-family: 'Raleway', sans-serif; font-weight:400;">Order</a>

                    <ul>
                        <li><a href="<?=site_url('/')?>" class="menu">Beranda</a></li>
                        <li>
                            <a href="#" class="menu">Tentang Sehati</a>
                           <ul>
                               <?php foreach($menu->result() as $row){?>
                                <li><a href="<?=site_url('page/'.$row->slug)?>"><?=$row->judul?></a></li>
                               <?php } ?>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=site_url('home/harga')?>" class="menu harga">Harga</a>
                            <!-- Menu_mobile_hilang_hendrick <ul>
                                <li><a href="http://aqiqahnurulhayat.com/jawa-timur">Jawa Timur</a></li>
                                <li><a href="http://aqiqahnurulhayat.com/jabodetabek">JABODETABEK</a></li>
                                <li><a href="http://aqiqahnurulhayat.com/balikpapan">Balikpapan</a></li>
                                <li><a href="http://aqiqahnurulhayat.com/yogjakarta">Yogjakarta</a></li>
                                <li><a href="http://aqiqahnurulhayat.com/jawa-tengah">Jawa Tengah</a></li>
                                <li><a href="http://aqiqahnurulhayat.com/medan">Medan</a></li>
                                <li><a href="http://aqiqahnurulhayat.com/bandung">Bandung</a></li>
                            </ul>-->
                        </li>
                        <li><a href="<?=site_url('news')?>" class="menu news">Berita</a></li>
                        <li>
                            <a href="<?=site_url('contact')?>" class="menu kontak">Kontak</a>
                            <ul>
                                <!--<li><a href="http://aqiqahnurulhayat.com/order">Order</a></li>-->
                            </ul>
                        </li>
                        <li><a href="<?=site_url('galeri')?>" class="menu gallery">Galeri</a></li>

                        <li class='menu_baru'><a href='<?=site_url('order')?>' style='background-color:#ff720b;color:white; border-radius:5px; font-weight:600; font-size:14px; padding:10px 20px;'>Order</a></li>
                        <!--<li><a href="http://aqiqahnurulhayat.com/testimonial" class="menu testimonial">Testimonial</a></li>-->

                    </ul>
                </div>
                <!--menu ends-->
            </div>
        </div>
    </div>
</section>
<!-- header ends