================================================== --><!--elastislide carousel script starts-->
<link rel="stylesheet" media="screen" href="<?= base_url('assets/css/elastislide.css') ?>"/>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.elastislide.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#carousel').elastislide({
            imageW 		: 300,
            margin		: 20,
            border		: 0,
            easing		: 'easeInBack'
        });
    });
</script>
<!--elastislide carousel script ends-->

<!--flexslider scripts starts-->
<link rel="stylesheet" media="screen" href="<?= base_url('assets/css/flexslider.css')?>"/>
<script src="<?= base_url('assets/js/jquery.flexslider-min.js') ?>" type="text/javascript"></script>
<script type="text/javascript">
    // Slider with thumbnail
    $(document).ready(function() {
        if($(window).width() < 959) {

            $('#slider').flexslider({
                directionNav: true,
                controlNav: false,
            });

        } else {

            $('#thumb-slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: true,
                directionNav: false,
                controlNav: false,
                itemWidth: 180,
                itemMargin: 0,
                asNavFor: '#slider'
            });

            $('#slider').flexslider({
                animation: "slide",
                controlNav: true,
                directionNav: false,
                animationLoop: true,
                slideshow: true,
                sync: "#thumb-slider"
            });

        }
    });
</script>
<!--flexslider scripts ends-->

<!-- content starts
	================================================== -->
<section id="content" class="clearfix">
    <!--slider-bg starts-->
    <div id="slider-bg">
        <div class="container">
            <div class="row content-top">
                <!--slides starts-->
                <div class="span12">
                    <div id="slider" class="flexslider">
                        <ul class="slides">
                            <!--slide starts-->
                            <li>
                                <div class="row">
                                    <!-- <div class="span6">
                                        <h2 style="white-space:pre-line;">Mumpung Liburan, Aqiqah Jangan Terlewatkan</h2>
                                        <p style="white-space:pre-line;">Libur telah tiba, saat tepat untuk meng-aqiqoi putra-putri kita.
                                            Nikmati berbagai pilihan menu dan paket aqiqah untuk moment istimewa Anda.

                                            Pesan sekarang juga..</p>
                                    </div> -->
                                    <div class="span12">
                                        <img src="<?=base_url('upload/banner/aqiqah-sehati-aqiqah-dapat-infaqnya-berlipat.png')?>" alt="image"/>
                                        <!-- <div class="flex-caption">Libur telah tiba, saat tepat untuk meng-aqiqoi putra-putri kita.
                                            Nikmati berbagai pilihan menu dan paket aqiqah untuk moment istimewa Anda.</div> -->
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <!-- <div class="span6">
                                        <h2 style="white-space:pre-line;">Pastikan Kesyar'ian Ibadah Aqiqah Anda</h2>
                                        <p style="white-space:pre-line;">Jangan tergoda dengan iming-iming harga murah tapi diragukan ke-Syarian aqiqahnya.

                                            Hanya di Aqiqah Sehati terjamin kesyariaan dibawah pengawasan MUI dan telah direkomendasikan banyak tokoh dan  ulama nasional.
                                        </p>
                                    </div> -->
                                    <div class="span12">
                                        <img src="<?=base_url('upload/banner/aqiqah-sehati-melayani-dengan-sepenuh-hati.png')?>" alt="image"/>
                                       <!--  <p class="flex-caption">Jangan tergoda dengan iming-iming harga murah tapi diragukan ke-Syarian aqiqahnya.

                                            Hanya di Aqiqah Sehati terjamin kesyariaan dibawah pengawasan MUI dan telah direkomendasikan banyak tokoh dan  ulama nasional.</p> -->
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <!-- <div class="span6">
                                        <h2 style="white-space:pre-line;">Aqiqah Desa Miskin</h2>
                                        <p style="white-space:pre-line;">Setiap ibadah akan memberikan nilai lebih jika tak hanya hubungan dengan Allah yang menjadi tujuan, namun juga nilai kemanfaatan bagi umat menjadi nafas setiap prosesnya. Kami bantu salurkan Aqiqah Anda untuk dakwah di desa-desa miskin</p>
                                    </div> -->
                                    <div class="span12">
                                        <img src="<?=base_url('upload/banner/aqiqah-sehati-rasanya-tak-mau-diganti.png')?>" alt="image"/>
                                        <!-- <div class="flex-caption">Libur telah tiba, saat tepat untuk meng-aqiqoi putra-putri kita.
                                            Nikmati berbagai pilihan menu dan paket aqiqah untuk moment istimewa Anda.</div> -->
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <!-- <div class="span6">
                                        <h2 style="white-space:pre-line;">Distribusi pengiriman Gratis</h2>
                                        <p style="white-space:pre-line;">Hadir di Surabaya, Sidoarjo, Malang, Kediri, Tuban, Gresik, Lamongan, Madiun, Mojokerto, Bojonegoro, Jember, Banyuwangi, Semarang, Yogyakarta, Solo, Tangerang Selatan, Jakarta, Bandung, Balikpapan, Medan, dll</p>
                                    </div> -->
                                    <div class="span12">
                                        <img src="<?=base_url('upload/banner/aqiqah-sehati-sedapnya-sampai-ke-hati.png')?>" alt="image"/>
                                        <!-- <div class="flex-caption">Libur telah tiba, saat tepat untuk meng-aqiqoi putra-putri kita.
                                            Nikmati berbagai pilihan menu dan paket aqiqah untuk moment istimewa Anda.</div> -->
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <!-- <div class="span6">
                                        <h2 style="white-space:pre-line;"> Hanya di sini, Aqiqah sekaligus bersedakah</h2>
                                        <p style="white-space:pre-line;">InsyaAllah lebih berkah,
                                            Karena seluruh laba usaha ini digunakan untuk mendukung program pemberdayaan yatim dan dhuafa dibawah naungan Lembaga Amil Zakat Nasional Nurul Hayat.</p>
                                    </div> -->
                                    <div class="span12">
                                        <img src="<?=base_url('upload/banner/aqiqah-sehati-rasanya-tak-mau-diganti.png')?>" alt="image"/>
                                        <!-- <div class="flex-caption">Libur telah tiba, saat tepat untuk meng-aqiqoi putra-putri kita.
                                            Nikmati berbagai pilihan menu dan paket aqiqah untuk moment istimewa Anda.</div> -->
                                    </div>
                                </div>
                            </li>
                            <!--slide ends-->
                        </ul>
                    </div>
                </div>
                <!--slides ends-->

                <!--thumbnails starts-->
                <!-- <div class="span12">
                    <div id="thumb-slider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="thumb-text clearfix">
                                    <img src="<?= base_url('upload/icon/3835f741ce011257302514000225dcd5.png')?>" width="64" height="64" alt="icon">
                                    <p>Saatnya Aqiqah</p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-text clearfix">
                                    <img src="<?= base_url('upload/icon/217ad7099c8c64d13c104661f8da40d0.png')?>" width="64" height="64" alt="icon">
                                    <p>Terjaga secara syar'i dan berkualitas</p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-text clearfix">
                                    <img src="<?= base_url('upload/icon/0b7433df6e8c2c6e2c9963dde577dc2b.png')?>" width="64" height="64" alt="icon">
                                    <p>Aqiqah untuk pemberdayaan umat</p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-text clearfix">
                                    <img src="<?= base_url('upload/icon/333dff69219c3d60ca0993c93996a105.png')?>" width="64" height="64" alt="icon">
                                    <p>Jaringan Luas</p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-text clearfix">
                                    <img src="<?= base_url('upload/icon/67e9b8426bd099371b8f39340ae2bee8.png')?>" width="64" height="64" alt="icon">
                                    <p>Aqiqah dapat infaqnya berlipat</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> -->
                <!--thumbnails ends-->
            </div>
        </div>
    </div>
    <!--slider-bg ends-->
    <div class="container">
        <!--features starts-->
        <div class="row">
            <div class="span12">
                <h1>Alasan Utama memilih AQIQAH SEHATI ?</h1>
                <ul class="list-3col text-center">
                    <li>
                        <div class="icon-bg">
                            <a href="#">
                                <img src="<?= base_url('upload/icon/icon2.png')?>" width="120" height="120" alt="icon">
                            </a>
                        </div>
                        <a href="#">
                            <h2>Berkualitas</h2>
                        </a>
                        Aqiqah Sehati memiliki kualitas, diverifikasi langsung oleh ahlinya, kambing yang kami gunakan adalah produk unggulan.
                    </li>
                    <li>
                        <div class="icon-bg">
                            <a href="#">
                                <img src="<?=base_url('upload/icon/icon1.png')?>" width="120" height="120" alt="icon">
                            </a>
                        </div>
                        <a href="#">
                            <h2>Pelayanan Ok!</h2>
                        </a>
                        Mengedepankan pelayanan kepada pelanggan dengan sepenuh hati.
                    </li>
                    <li>
                        <div class="icon-bg">
                            <a href="<?=site_url('harga-paket-aqiqah-murah')?>">
                                <img src="<?=base_url('upload/icon/icon3.png')?>" width="120" height="120" alt="icon">
                            </a>
                        </div>
                        <a href="#">
                            <h2>Harga Bersahabat</h2>
                        </a>
                        Dengan harga yang bersahabat Aqiqah Sehati siap menerima pesanan anda, serta tetap menjaga kualitas.
                    </li>
                </ul>
            </div>
        </div>
        <!--features ends-->
        <!--spacer here-->
        <div class="spacer-40px"></div>
        <!--carousel starts-->
        <div class="row">
            <div class="span12">
                <!--icon and heading-->
                <h4 class="heading-icon clearfix">
                    <img src="<?=base_url('assets/images/icons/heading-icon-1.png')?>" width="40" height="40" alt="icon" class="icon-small-bg">
                    Testimoni
                </h4>
                <!--carousel list starts-->
                <div id="carousel" class="es-carousel-wrapper">
                    <div class="es-carousel">
                        <ul>
                            <?php foreach($testimoni->result() as $row) {?>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/'.$row->gambar)?>" alt="sahabat sehati - <?=$row->judul?>" />
                                    <a href="<?=base_url('upload/gallery/'.$row->gambar)?>" data-rel="prettyPhoto[gallery]" title="<?=$row->judul?>" class="icon-zoom"></a>
                                </div>

                                <h5><?=$row->judul?></h5>
                                <div class="blackscroll" id="pesan">
                                    <?=$row->keterangan?>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <!--carousel list ends-->
            </div>
        </div>
        <!--carousel ends-->
        <!--spacer here-->
        <div class="spacer-40px"></div>
        <!--row starts-->
        <div class="row">
            <div class="span12">
                <h4 class="heading-icon clearfix">
                    <img src="<?=base_url('assets/images/icons/heading-icon-2.png')?>" width="40" height="40" alt="icon" class="icon-small-bg">
                    Syarat Hewan Aqiqah
                </h4>
                <div class="inner-content">
                    <p style="text-align: left;"><img class="float_right" src="<?=base_url('assets/images/preview/img-window.png?w=460&amp;h=280')?>" alt="kambing, aqiqah, akikah, aqiqoh murah" />
                    <ol>
                        <li>Mata tidak buta total atau sebelah</li>
                        <li>Telinga tidak terpotong lebih dari sepertiga</li>
                        <li>Tidak ompong</li>
                        <li>Tidak pincang</li>
                        <li>Tidak kurus kering atau tulang tak bersumsum</li>
                        <li>Ekor tidak terpotong lebih dari sepertiga</li>
                        <li>Tidak gila</li>
                        <li>Cukup umur (sekitar satu tahun) Jantan atau Betina yang sedang tidak hamil</li>
                    </ol>
                    </p>
                    <p>&nbsp;</p>
                    <div class="span12" style="text-align: center; font-weight: bold;">Coming Soon akan dibuka 23 cabang Aqiqah Sehati sejawa timur.</div>
                    <table class="table responsive">
                        <tbody>
                        <tr class="first even" bgcolor="#03884b">
                            <td class="first"><strong><span style="color: #ffffff;">NO</span></strong></td>
                            <td><strong><span style="color: #ffffff;">CABANG</span></strong></td>
                            <td><strong><span style="color: #ffffff;">ALAMAT</span></strong></td>
                            <td><strong><span style="color: #ffffff;">TELP</span></strong></td>
                            <td class="last" style="text-align: center;"><strong><span style="color: #ffffff;">LOKASI</span></strong></td>
                        </tr>
                        <tr>
                            <td class="first" style="text-align: center;">1</td>
                            <td>PUSAT</td>
                            <td>Graha TI Lantai 1 Jl Ahmad Yani No 153 Surabaya</td>
                            <td>0822-6008-6009</td>
                            <td class="last" style="text-align: center;"><a href="https://goo.gl/maps/ajguqyxmgWR2" target="_blank">&nbsp;LOKASI</a>&nbsp;</td>
                        </tr>
                        <tr class="even">
                            <td class="first" style="text-align: center;">2</td>
                            <td>SIDOARJO</td>
                            <td>Jl Perum Larangan Mega Asri D-33 Candi Sidoarjo</td>
                            <td>0823-1006-2007</td>
                            <td class="last" style="text-align: center;"><a href="#">&nbsp;LOKASI</a></td>
                        </tr>
                        </tbody>
                    </table>
                    <p>&nbsp;</p>
                    </div>
            </div>
        </div>
        <!--row ends-->
        <!--spacer here-->
        <div class="spacer-30px"></div>
        <!--box starts-->
        <div class="row">
            <div class="span12">
                <div class="dark-box">
                    <h1 style="font-weight: bold; color: black;">Aqiqah Sehati</h1>
                    <div style="color: black">
                        Kami siap melayani pesanan Anda !					</div>
                    <a href="<?=base_url('order')?>" class="mybtn">PESAN SEKARANG !</a> </div>
            </div>
        </div>
        <!--box ends-->
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