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
                controlNav: false,
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
                                    <div class="span6">
                                        <h2 style="white-space:pre-line;">Mumpung Liburan, Aqiqah Jangan Terlewatkan</h2>
                                        <p style="white-space:pre-line;">Libur telah tiba, saat tepat untuk meng-aqiqoi putra-putri kita.
                                            Nikmati berbagai pilihan menu dan paket aqiqah untuk moment istimewa Anda.

                                            Pesan sekarang juga..</p>
                                    </div>
                                    <div class="span6">
                                        <img src="<?=base_url('upload/banner/banner.png')?>" alt="slide"/>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="span6">
                                        <h2 style="white-space:pre-line;">Pastikan Kesyar'ian Ibadah Aqiqah Anda</h2>
                                        <p style="white-space:pre-line;">Jangan tergoda dengan iming-iming harga murah tapi diragukan ke-Syarian aqiqahnya.

                                            Hanya di Aqiqah Sehati terjamin kesyariaan dibawah pengawasan MUI dan telah direkomendasikan banyak tokoh dan  ulama nasional.
                                        </p>
                                    </div>
                                    <div class="span6">
                                        <img src="<?=base_url('upload/banner/banner2.png')?>" alt="slide"/>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="span6">
                                        <h2 style="white-space:pre-line;">Aqiqah Desa Miskin</h2>
                                        <p style="white-space:pre-line;">Setiap ibadah akan memberikan nilai lebih jika tak hanya hubungan dengan Allah yang menjadi tujuan, namun juga nilai kemanfaatan bagi umat menjadi nafas setiap prosesnya. Kami bantu salurkan Aqiqah Anda untuk dakwah di desa-desa miskin</p>
                                    </div>
                                    <div class="span6">
                                        <img src="<?=base_url('upload/banner/banner3.png')?>" alt="slide"/>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="span6">
                                        <h2 style="white-space:pre-line;">Distribusi pengiriman Gratis</h2>
                                        <p style="white-space:pre-line;">Hadir di Surabaya, Sidoarjo, Malang, Kediri, Tuban, Gresik, Lamongan, Madiun, Mojokerto, Bojonegoro, Jember, Banyuwangi, Semarang, Yogyakarta, Solo, Tangerang Selatan, Jakarta, Bandung, Balikpapan, Medan, dll</p>
                                    </div>
                                    <div class="span6">
                                        <img src="<?=base_url('upload/banner/banner.png')?>" alt="slide"/>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="span6">
                                        <h2 style="white-space:pre-line;"> Hanya di sini, Aqiqah sekaligus bersedakah</h2>
                                        <p style="white-space:pre-line;">InsyaAllah lebih berkah,
                                            Karena seluruh laba usaha ini digunakan untuk mendukung program pemberdayaan yatim dan dhuafa dibawah naungan Lembaga Amil Zakat Nasional Nurul Hayat.</p>
                                    </div>
                                    <div class="span6">
                                        <img src="<?=base_url('upload/banner/banner.png')?>" alt="slide"/>
                                    </div>
                                </div>
                            </li>
                            <!--slide ends-->
                        </ul>
                    </div>
                </div>
                <!--slides ends-->

                <!--thumbnails starts-->
                <div class="span12">
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
                                    <p>Pastikan Kesyar'ian Aqiqah Anda</p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-text clearfix">
                                    <img src="<?= base_url('upload/icon/0b7433df6e8c2c6e2c9963dde577dc2b.png')?>" width="64" height="64" alt="icon">
                                    <p>Aqiqah lebih manfaat dan pahala</p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-text clearfix">
                                    <img src="<?= base_url('upload/icon/333dff69219c3d60ca0993c93996a105.png')?>" width="64" height="64" alt="icon">
                                    <p>Jangkauan Luas</p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-text clearfix">
                                    <img src="<?= base_url('upload/icon/67e9b8426bd099371b8f39340ae2bee8.png')?>" width="64" height="64" alt="icon">
                                    <p>Aqiqah sekaligus bersedakah</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--thumbnails ends-->
            </div>
        </div>
    </div>
    <!--slider-bg ends-->
    <div class="container">
        <!--features starts-->
        <div class="row">
            <div class="span12">
                <h1>Mengapa pilih AQIQAH SEHATI?</h1>
                <ul class="list-3col text-center">
                    <li>
                        <div class="icon-bg">
                            <a href="#">
                                <img src="<?= base_url('upload/icon/44cee429553624d48cc3e994ad4f6266.png')?>" width="120" height="120" alt="icon">
                            </a>
                        </div>
                        <a href="#">
                            <h2>TERBESAR </h2>
                        </a>
                        Berpengalaman dan telah dipercaya puluhan ribu pelanggan. Membantu ibadah Aqiqah ummat lebih dari 3000 kambing setiap bulannya. dan terdistribusi hingga 60 kota di seluruh Indonesia.
                    </li>
                    <li>
                        <div class="icon-bg">
                            <a href="#">
                                <img src="<?=base_url('upload/icon/95b16d4c6bca29e3504d7f681e2e07b0.png')?>" width="120" height="120" alt="icon">
                            </a>
                        </div>
                        <a href="#">
                            <h2>HALAL</h2>
                        </a>
                        Pilihan hewan, proses penyembelihan dan masak dijamin memenuhi syarat sahnya Aqiqah dan telah tersertifikasi HALAL dari majelis Ulama Indonesia MUI
                    </li>
                    <li>
                        <div class="icon-bg">
                            <a href="http://www.nurulhayat.org/ina/submenu/sekilas/">
                                <img src="<?=base_url('upload/icon/6b1981c008f925cc04a3087d18b07678.png')?>" width="120" height="120" alt="icon">
                            </a>
                        </div>
                        <a href="http://www.nurulhayat.org/ina/submenu/sekilas/">
                            <h2>BERNILAI SEDEKAH</h2>
                        </a>
                        Aqiqah Anda Insya Allah semakin berkah karena  semua keuntungan penjualan  digunakan untuk  mendukung program dakwah dan sosial. Hanya disini Anda beraqiqah sekaligus bernilai sedekah
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
                    <img src="http://aqiqahnurulhayat.com/assets/images/icons/heading-icon-1.png" width="40" height="40" alt="icon" class="icon-small-bg">
                    Testimoni
                </h4>
                <!--carousel list starts-->
                <div id="carousel" class="es-carousel-wrapper">
                    <div class="es-carousel">
                        <ul>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Reza Ex Noah </h5>
                                <p>Salut buat Nurul Hayat
                                    yang menyediakan layanan
                                    Aqiqah praktis untuk umat.

                                    Reza Ex. Noah Band</p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Reyhan Ghita Umara</h5>
                                <p>Aqiqah Sehati
                                    banyak varian menunya,
                                    Rasanyapun Pas di lidah
                                    Reyhan Ex Vokalis Kangen Band</p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Derry Sulaiman - Ex. Madinah Nasid</h5>
                                <p>Aqiqah Sehati Lezat..
                                    Alhamdulillah ..

                                    Derry Sulaiman
                                    Ex. Personil Medina Nasid
                                </p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Caisar "YKS" Aditya</h5>
                                <p>“ Rasanya lebih gurih, penuh kelezatan semoga berkah ”</p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Opick "Tombo Ati"</h5>
                                <p>Terimakasih Bang Opick telah mendukung program Yayasan Nurul Hayat di Milad yang ke 14 tahun.</p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Dr. Aam Amiruddin, Msi</h5>
                                <p>"Alhamdulillah, Aqiqah Sehati enak dan thoyib"</p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Aqiqah putri ustadz Reza Muhammad</h5>
                                <p>Ustadz Reza Muhammad dan Istri : "Aqiqah Sehati Enak dan Pasti Halal"</p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Oki Setiana Dewi</h5>
                                <p> "Makanannya Nikmat, Jadi pengen nambah terus !,
                                    Sukses dan Berkah, InsyaAllah"
                                </p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Salim A.Fillah</h5>
                                <p>“Mudah pesannya, syar’ie prosesnya dan tepat waktu layanannya. Aqiqah jadi tak Ribet lagi</p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Aa Gym </h5>
                                <p>Aa Gym : "Alhamdulillah. Nikmat Sajiannya
                                    Yang biasa tak makan malam bisa nambah 2X</p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Venna Melinda</h5>
                                <p>Venna Melinda : " Alhamdulillah, Aqiqah Sehati enak,
                                    empuk dan bumbunya ngresep banget "</p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Meida Syafira</h5>
                                <p>Meida Syafira saja bilang Aqiqah Sehati Mantab, Yuk pesan sekarang juga  </p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="http://aqiqahnurulhayat.com/upload/gallery/2b2ee5dad77e8d81dbf716831688bcb9.jpg" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Syeikh Ali Jabber</h5>
                                <p>“Selama di Indonesia, pertama kali saya rasakan enaknya nasi Kebuli di Aqiqah Sehati”</p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Ahmad Fuadi "Negeri 5 Menara"</h5>
                                <p>"Hidangan Aqiqah Sehati Baik dalam Cita Rasa, berkelas Restoran. Semoga Berkah" </p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Salman AL Jugjawy "SAKTI EX SHEILA ON 7</h5>
                                <p>"Aqiqah Sehati, Aqiqah Berkah" : Salman AL Jugjawy "SAKTI EX SHEILA ON 7 </p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Kak Ria Enes 'Susan"</h5>
                                <p>Sate Kambing & Gule Kambingnya uenaak, uempuk…Sumprit ! </p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>KH. Muhammad Arifin Ilham</h5>
                                <p>KH. Muhammad Arifin Ilham, mengapreasiasi kemandirian Yayasan Nurul Hayat dengan usaha aqiqahnya</p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Ustad Felix Siauw dan Aqiqah Sehati</h5>
                                <p>"Aqiqah Sehati Masakanya Enak, Varian Menunya juga Komplit, RECOMMENDED deh !"</p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Asma Nadia - Novelis Best Seller</h5>
                                <p>"Bagi saya ini aqiqah plus-plus, karena ber-Aqiqah sembari bersedekah."</p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Bpk. Syaifullah Yusuf - Wakil Gubernur Jawa Timur</h5>
                                <p>"Empat Jempol untuk Aqiqah Sehati, Uenaak..!"
                                </p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Bpk. M. Nuh-Menteri Pendidikan Nasional RI)</h5>
                                <p>“Satenya Mantab...!”
                                    (Bpk. Muhammad Nuh, Menteri Pendidikan Nasional RI 2009-2015)</p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Ustd. Wijayanto</h5>
                                <p>“Subhanallah...uenak habis! Satenya sangat berasa.
                                    EMHAB banget! Alias enak Murah Halal Barakah”</p>
                            </li>
                            <li>
                                <div class="folio-thumb">
                                    <img src="<?=base_url('upload/gallery/testimoni.jpg')?>" alt="image" />
                                    <a href="<?=base_url('upload/gallery/testimoni.jpg')?>" data-rel="prettyPhoto[gallery]" title="" class="icon-zoom"></a>
                                </div>

                                <h5>Hj. Neno Warisman</h5>
                                <p> "Sate dan Gulai Aqiqah Sehati sedap, resik dengan tampilan yang baik dan bersertifikasi MUI "</p>
                            </li>
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
                    <img src="http://aqiqahnurulhayat.com/assets/images/icons/heading-icon-2.png" width="40" height="40" alt="icon" class="icon-small-bg">
                    Aqiqah Kambing Murah				</h4>
                <div class="inner-content"><div class="media_embed youtube float_left" style="width: 0px; height: 0px;">
                        </div>
                    <p style="text-align: left;">&nbsp;<img class="float_right" src="<?=base_url('assets/images/preview/img-window.png?w=460&amp;h=280')?>" alt="kambing, aqiqah, akikah, aqiqoh murah" />Aqiqah atau aqiqoh atau Akikah &nbsp;yang berarti memutus dan melubangi, dan ada yang mengatakan bahwa akikah adalah nama bagi hewan yang disembelih, dinamakan demikian karena lehernya dipotong, dan dikatakan juga bahwa akikah merupakan rambut yang dibawa sibayi ketika lahir. Adapun maknanya secara syari&rsquo;at adalah hewan yang disembelih untuk menebus bayi yang dilahirkan aqiqah&nbsp;tidak hanya berhubungan dengan sebuah perayaan biasa, lebih dari itu Aqiqah adalah ibadah. Ketika mengambil bagian di dalamnya, Aqiqah Sehati berusaha memberikan yang terbaik.</p>
                    <p>Aqiqah Sehati dapat dijangkau diantaranya:</p>
                    <p>&nbsp;</p>
                    <table style="width: 100%; height: auto;" border="0" cellpadding="5">
                        <tbody>
                        <tr class="first even" bgcolor="#FF720B">
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
                            <td>+6282-2600-860-09</td>
                            <td class="last" style="text-align: center;"><a href="https://goo.gl/maps/ajguqyxmgWR2" target="_blank">&nbsp;LOKASI</a>&nbsp;</td>
                        </tr>
                        <tr class="even">
                            <td class="first" style="text-align: center;">2</td>
                            <td>SIDOARJO</td>
                            <td>Jl Perum Tenggulunan Mega Asri Blok A-125</td>
                            <td>+6282-3100-620-07</td>
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
                    <h1>Aqiqah Sehati</h1>
                    <div>
                        Kami siap melayani pesanan Anda !					</div>
                    <a href="<?=base_url('home/order')?>" class="mybtn">Ya.. saya tertarik, PESAN SEKARANG !</a> </div>
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