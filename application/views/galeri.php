<!--prettyphoto scripts starts-->
<script type="text/javascript">
    $(document).ready(function() {

        $('a[data-rel]').each(function() {
            $(this).attr('rel', $(this).data('rel'));
        });

    });

    $(window).load(function(){

        $('.gallery-list').find('img').each(function(){
            var compare = $(this).width() / $(this).height();
            var imgClass = (compare > 1) ? 'wide' : 'tall';
            $(this).addClass(imgClass);
        });

    });

    var site_url = 'http://localhost/aqiqahsehati/';

    $(document).ready(function(){
        $(".gallery-upload").live('mouseover',function(){
            $(".gallery-upload").fancybox({

                'width'				: '60%',
                'height'			: '80%',
                'autoScale'			: false,
                'autoDimensions'    : true,
                'centerOnScroll'    : true,
                'transitionIn'      : 'elastic',
                'transitionOut'     : 'fade',
                'speedOut'          : 150,
                'enableEscapeButton': true,
                'showCloseButton'   : false,
                'type'              : 'iframe',
                'href' 				: site_url+'home/upload',
                'onStart'           : function() {

                    // on start function

                },
                'onComplete'        : function() {

                },
                'onCleanUp'        : function() {

                    $('body').html('');

                }
            });
        });
    });

    $(function(){
        $('.blackscroll').mCustomScrollbar({
            scrollEasing:"easeOutQuint",
            autoDraggerLength:false
        });
    });
</script>
<!--prettyphoto scripts ends-->

<style type="text/css">
    .gallery-upload {
        background-image: url('http://aqiqahnurulhayat.com/assets/images/upload.jpg');
    }
    .gallery-upload:hover {
        cursor: pointer;
    }
    #result {
        padding-left: 0 !important;
        font-weight: bold;
    }
    .gallery-list h5 {
        height: 20px;
        margin-bottom: 0;
        font-size: 12px;
    }
    .gallery-list p {
        height: 50px;
        margin: 0;
        font-size: 12px;
    }
</style>

<!-- header-btm starts
================================================== -->

<section id="header-btm" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h4 class="heading-icon"> <img src="http://aqiqahnurulhayat.com/assets/images/icons/heading-icon-blocks.png" width="40" height="40" alt="icon" class="icon-small-bg"> Sehabat Sehati</h4>
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
            <div class="span12">
                <!--portfolio filter navigation starts-->
                <div class="clearfix"></div>
                <div id="result" class="upload-result"></div>
                <ul class="filter_nav">
                    <li class="active"><a href="#" class="all">All</a></li>
                    <li><a href="#" class="serba-serbi">Serba-serbi</a></li>
                    <li><a href="#" class="testimoni">Testimoni</a></li>
                </ul>
                <!--portfolio filter navigation ends-->
                <!--3 column portfolio starts-->
                <ul class="portfolio_3column filter_content gallery-list">
                    <li data-id="id-upload" data-type="upload">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/assets/images/upload.jpg" class="gallery-upload" />
                        </div>
                    </li>
                    <li data-id="id-130902143035875" data-type="serba-serbi">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/e97920ad2bff2f1f78c36a25487b075b.jpg" alt="Hj. Neno Warisman" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/e97920ad2bff2f1f78c36a25487b075b.jpg" data-rel="prettyPhoto[gallery]" title="Hj. Neno Warisman" class="icon-zoom"></a>
                        </div>
                        <h5>Hj. Neno Warisman</h5>
                        <p class="blackscroll"> "Sate dan Gulai Aqiqah Nurul Hayat sedap, resik dengan tampilan yang baik dan bersertifikasi MUI "</p>
                    </li>
                    <li data-id="id-130903160341845" data-type="testimoni">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/7db78c55a092014a047ec875b6731470.jpg" alt="Ustd. Wijayanto" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/7db78c55a092014a047ec875b6731470.jpg" data-rel="prettyPhoto[gallery]" title="Ustd. Wijayanto" class="icon-zoom"></a>
                        </div>
                        <h5>Ustd. Wijayanto</h5>
                        <p class="blackscroll">“Subhanallah...uenak habis! Satenya sangat berasa.
                            EMHAB banget! Alias enak Murah Halal Barakah”</p>
                    </li>
                    <li data-id="id-130903161819810" data-type="testimoni">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/540c88bd8bcbeea45882586d137c346c.jpg" alt="Bpk. M. Nuh-Menteri Pendidikan Nasional RI)" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/540c88bd8bcbeea45882586d137c346c.jpg" data-rel="prettyPhoto[gallery]" title="Bpk. M. Nuh-Menteri Pendidikan Nasional RI)" class="icon-zoom"></a>
                        </div>
                        <h5>Bpk. M. Nuh-Menteri Pendidikan Nasional RI)</h5>
                        <p class="blackscroll">“Satenya Mantab...!”
                            (Bpk. Muhammad Nuh, Menteri Pendidikan Nasional RI 2009-2015)</p>
                    </li>
                    <li data-id="id-130904092009825" data-type="testimoni">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/7bbfd2e1f3eb685490620d01ebd7e970.jpg" alt="Bpk. Syaifullah Yusuf - Wakil Gubernur Jawa Timur" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/7bbfd2e1f3eb685490620d01ebd7e970.jpg" data-rel="prettyPhoto[gallery]" title="Bpk. Syaifullah Yusuf - Wakil Gubernur Jawa Timur" class="icon-zoom"></a>
                        </div>
                        <h5>Bpk. Syaifullah Yusuf - Wakil Gubernur Jawa Timur</h5>
                        <p class="blackscroll">"Empat Jempol untuk Aqiqah Nurul Hayat, Uenaak..!"
                        </p>
                    </li>
                    <li data-id="id-130904092152082" data-type="serba-serbi">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/e59d104194fdfbc00bfcb9f04b2cf312.jpg" alt="Asma Nadia - Novelis Best Seller" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/e59d104194fdfbc00bfcb9f04b2cf312.jpg" data-rel="prettyPhoto[gallery]" title="Asma Nadia - Novelis Best Seller" class="icon-zoom"></a>
                        </div>
                        <h5>Asma Nadia - Novelis Best Seller</h5>
                        <p class="blackscroll">"Bagi saya ini aqiqah plus-plus, karena ber-Aqiqah sembari bersedekah."</p>
                    </li>
                    <li data-id="id-131203164722671" data-type="testimoni">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/cc6825e2e3339f4684b315567b9adc6c.jpg" alt="Ustad Felix Siauw dan Aqiqah Nurul Hayat" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/cc6825e2e3339f4684b315567b9adc6c.jpg" data-rel="prettyPhoto[gallery]" title="Ustad Felix Siauw dan Aqiqah Nurul Hayat" class="icon-zoom"></a>
                        </div>
                        <h5>Ustad Felix Siauw dan Aqiqah Nurul Hayat</h5>
                        <p class="blackscroll">"Aqiqah Nurul Hayat Masakanya Enak, Varian Menunya juga Komplit, RECOMMENDED deh !"</p>
                    </li>
                    <li data-id="id-131203164958406" data-type="testimoni">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/4a303db4ad684697c48341af0de41bb3.jpg" alt="KH. Muhammad Arifin Ilham" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/4a303db4ad684697c48341af0de41bb3.jpg" data-rel="prettyPhoto[gallery]" title="KH. Muhammad Arifin Ilham" class="icon-zoom"></a>
                        </div>
                        <h5>KH. Muhammad Arifin Ilham</h5>
                        <p class="blackscroll">KH. Muhammad Arifin Ilham, mengapreasiasi kemandirian Yayasan Nurul Hayat dengan usaha aqiqahnya</p>
                    </li>
                    <li data-id="id-140429165536405" data-type="serba-serbi">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/4951dee5866cfcd2bc6533d41098bc08.jpg" alt="Kak Ria Enes 'Susan"" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/4951dee5866cfcd2bc6533d41098bc08.jpg" data-rel="prettyPhoto[gallery]" title="Kak Ria Enes 'Susan"" class="icon-zoom"></a>
                        </div>
                        <h5>Kak Ria Enes 'Susan"</h5>
                        <p class="blackscroll">Sate Kambing & Gule Kambingnya uenaak, uempuk…Sumprit ! </p>
                    </li>
                    <li data-id="id-140429170937652" data-type="testimoni">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/e4f766682f462c9a9bd98344f3551b7e.jpg" alt="Salman AL Jugjawy "SAKTI EX SHEILA ON 7" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/e4f766682f462c9a9bd98344f3551b7e.jpg" data-rel="prettyPhoto[gallery]" title="Salman AL Jugjawy "SAKTI EX SHEILA ON 7" class="icon-zoom"></a>
                        </div>
                        <h5>Salman AL Jugjawy "SAKTI EX SHEILA ON 7</h5>
                        <p class="blackscroll">"Aqiqah Nurul Hayat, Aqiqah Berkah" : Salman AL Jugjawy "SAKTI EX SHEILA ON 7 </p>
                    </li>
                    <li data-id="id-140630210617628" data-type="testimoni">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/ca876bebe701955bd1e47c6b3d415c5a.jpg" alt="Ahmad Fuadi "Negeri 5 Menara"" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/ca876bebe701955bd1e47c6b3d415c5a.jpg" data-rel="prettyPhoto[gallery]" title="Ahmad Fuadi "Negeri 5 Menara"" class="icon-zoom"></a>
                        </div>
                        <h5>Ahmad Fuadi "Negeri 5 Menara"</h5>
                        <p class="blackscroll">"Hidangan Aqiqah Nurul Hayat Baik dalam Cita Rasa, berkelas Restoran. Semoga Berkah" </p>
                    </li>
                    <li data-id="id-140826144315216" data-type="testimoni">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/2b2ee5dad77e8d81dbf716831688bcb9.jpg" alt="Syeikh Ali Jabber" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/2b2ee5dad77e8d81dbf716831688bcb9.jpg" data-rel="prettyPhoto[gallery]" title="Syeikh Ali Jabber" class="icon-zoom"></a>
                        </div>
                        <h5>Syeikh Ali Jabber</h5>
                        <p class="blackscroll">“Selama di Indonesia, pertama kali saya rasakan enaknya nasi Kebuli di Aqiqah Nurul Hayat”</p>
                    </li>
                    <li data-id="id-150218131711072" data-type="serba-serbi">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/d11b3e70aa4f4b54218704f00a6ae8ac.jpg" alt="Meida Syafira" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/d11b3e70aa4f4b54218704f00a6ae8ac.jpg" data-rel="prettyPhoto[gallery]" title="Meida Syafira" class="icon-zoom"></a>
                        </div>
                        <h5>Meida Syafira</h5>
                        <p class="blackscroll">Meida Syafira saja bilang aqiqah Nurul Hayat Mantab, Yuk pesan sekarang juga  </p>
                    </li>
                    <li data-id="id-150225155952614" data-type="serba-serbi">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/c470fd70891e330408c1366b84285c44.jpg" alt="Venna Melinda" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/c470fd70891e330408c1366b84285c44.jpg" data-rel="prettyPhoto[gallery]" title="Venna Melinda" class="icon-zoom"></a>
                        </div>
                        <h5>Venna Melinda</h5>
                        <p class="blackscroll">Venna Melinda : " Alhamdulillah, Aqiqah Nurul Hayat enak,
                            empuk dan bumbunya ngresep banget "</p>
                    </li>
                    <li data-id="id-150402142709268" data-type="testimoni">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/fbe2aad380eab0e2641994ffaa64356c.jpg" alt="Aa Gym " />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/fbe2aad380eab0e2641994ffaa64356c.jpg" data-rel="prettyPhoto[gallery]" title="Aa Gym " class="icon-zoom"></a>
                        </div>
                        <h5>Aa Gym </h5>
                        <p class="blackscroll">Aa Gym : "Alhamdulillah. Nikmat Sajiannya
                            Yang biasa tak makan malam bisa nambah 2X</p>
                    </li>
                    <li data-id="id-150413180948854" data-type="testimoni">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/e7ca5ca4f4a6a6a5948f9b7535493c3c.jpg" alt="Salim A.Fillah" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/e7ca5ca4f4a6a6a5948f9b7535493c3c.jpg" data-rel="prettyPhoto[gallery]" title="Salim A.Fillah" class="icon-zoom"></a>
                        </div>
                        <h5>Salim A.Fillah</h5>
                        <p class="blackscroll">“Mudah pesannya, syar’ie prosesnya dan tepat waktu layanannya. Aqiqah jadi tak Ribet lagi</p>
                    </li>
                    <li data-id="id-150512163640780" data-type="serba-serbi">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/b1cffe5f635388434a6f6799702975fb.jpg" alt="Oki Setiana Dewi" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/b1cffe5f635388434a6f6799702975fb.jpg" data-rel="prettyPhoto[gallery]" title="Oki Setiana Dewi" class="icon-zoom"></a>
                        </div>
                        <h5>Oki Setiana Dewi</h5>
                        <p class="blackscroll"> "Makanannya Nikmat, Jadi pengen nambah terus !,
                            Sukses dan Berkah, InsyaAllah"
                        </p>
                    </li>
                    <li data-id="id-150608154306871" data-type="testimoni">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/9505ff52edc27e74d9d3875bef7d2ac8.jpg" alt="Aqiqah putri ustadz Reza Muhammad" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/9505ff52edc27e74d9d3875bef7d2ac8.jpg" data-rel="prettyPhoto[gallery]" title="Aqiqah putri ustadz Reza Muhammad" class="icon-zoom"></a>
                        </div>
                        <h5>Aqiqah putri ustadz Reza Muhammad</h5>
                        <p class="blackscroll">Ustadz Reza Muhammad dan Istri : "Aqiqah Nurul Hayat Enak dan Pasti Halal"</p>
                    </li>
                    <li data-id="id-150813110454651" data-type="testimoni">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/4b79c1cf504e52c7ed76ac532d8f7a30.jpg" alt="Dr. Aam Amiruddin, Msi" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/4b79c1cf504e52c7ed76ac532d8f7a30.jpg" data-rel="prettyPhoto[gallery]" title="Dr. Aam Amiruddin, Msi" class="icon-zoom"></a>
                        </div>
                        <h5>Dr. Aam Amiruddin, Msi</h5>
                        <p class="blackscroll">"Alhamdulillah, Aqiqah Nurul Hayat enak dan thoyib"</p>
                    </li>
                    <li data-id="id-150819103705859" data-type="testimoni">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/c4a3519422b4a51480398a6dc5cb2c33.jpg" alt="Opick "Tombo Ati"" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/c4a3519422b4a51480398a6dc5cb2c33.jpg" data-rel="prettyPhoto[gallery]" title="Opick "Tombo Ati"" class="icon-zoom"></a>
                        </div>
                        <h5>Opick "Tombo Ati"</h5>
                        <p class="blackscroll">Terimakasih Bang Opick telah mendukung program Yayasan Nurul Hayat di Milad yang ke 14 tahun.</p>
                    </li>
                    <li data-id="id-150827164838368" data-type="testimoni">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/45b6ed1986c26651d28eb5d854994e86.jpg" alt="Caisar "YKS" Aditya" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/45b6ed1986c26651d28eb5d854994e86.jpg" data-rel="prettyPhoto[gallery]" title="Caisar "YKS" Aditya" class="icon-zoom"></a>
                        </div>
                        <h5>Caisar "YKS" Aditya</h5>
                        <p class="blackscroll">“ Rasanya lebih gurih, penuh kelezatan semoga berkah ”</p>
                    </li>
                    <li data-id="id-160308063322092" data-type="testimoni">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/bc66e326c338a26e87a1e67a3c9e33e7.jpg" alt="Derry Sulaiman - Ex. Madinah Nasid" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/bc66e326c338a26e87a1e67a3c9e33e7.jpg" data-rel="prettyPhoto[gallery]" title="Derry Sulaiman - Ex. Madinah Nasid" class="icon-zoom"></a>
                        </div>
                        <h5>Derry Sulaiman - Ex. Madinah Nasid</h5>
                        <p class="blackscroll">Aqiqah Nurul Hayat Lezat..
                            Alhamdulillah ..

                            Derry Sulaiman
                            Ex. Personil Medina Nasid
                        </p>
                    </li>
                    <li data-id="id-160308063429197" data-type="testimoni">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/b9524f65a1cc28cf55619c1954f2e968.jpg" alt="Reyhan Ghita Umara" />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/b9524f65a1cc28cf55619c1954f2e968.jpg" data-rel="prettyPhoto[gallery]" title="Reyhan Ghita Umara" class="icon-zoom"></a>
                        </div>
                        <h5>Reyhan Ghita Umara</h5>
                        <p class="blackscroll">Aqiqah Nurul Hayat
                            banyak varian menunya,
                            Rasanyapun Pas di lidah
                            Reyhan Ex Vokalis Kangen Band</p>
                    </li>
                    <li data-id="id-160308063522271" data-type="testimoni">
                        <div class="folio-thumb">
                            <img src="http://aqiqahnurulhayat.com/upload/gallery/07b510c39b1e545a41eba27a7c60d010.jpg" alt="Reza Ex Noah " />
                            <a href="http://aqiqahnurulhayat.com/upload/gallery/07b510c39b1e545a41eba27a7c60d010.jpg" data-rel="prettyPhoto[gallery]" title="Reza Ex Noah " class="icon-zoom"></a>
                        </div>
                        <h5>Reza Ex Noah </h5>
                        <p class="blackscroll">Salut buat Nurul Hayat
                            yang menyediakan layanan
                            Aqiqah praktis untuk umat.

                            Reza Ex. Noah Band</p>
                    </li>
                </ul>
                <!--3 column portfolio ends-->
            </div>
        </div>
    </div>
</section>
<!-- content ends
================================================== -->
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