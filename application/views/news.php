================================================== --><!--contact form script starts-->
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
                <h4 class="heading-icon"> <img src="http://aqiqahnurulhayat.com/assets/images/icons/heading-icon-support.png" width="40" height="40" alt="icon" class="icon-small-bg">Berita</h4>
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
                <div class="one-fourth last">
                    <div class="space"></div>
                    <aside>

                        <div class="widget-2 sidebarBox widget-container widget_recent_entries" id="recent-posts-2">
                            <h4 class="widget-title">Berita Terbaru</h4>
                            <ul>
                                <li><a href="http://aqiqahnurulhayat.com/news/we-are-new-open-in-bogor-tangerang" title="We are New Open in Bogor & Tangerang">We are New Open in Bogor & Tangerang</a></li>
                                <li><a href="http://aqiqahnurulhayat.com/news/selamat-idul-fitri-1437-h" title="Selamat Idul Fitri 1437 H">Selamat Idul Fitri 1437 H</a></li>
                                <li><a href="http://aqiqahnurulhayat.com/news/nama-terbaik-untuk-anak-ketika-di-aqiqah" title="Nama Terbaik Untuk Anak Ketika di Aqiqah">Nama Terbaik Untuk Anak Ketika di Aqiqah</a></li>
                                <li><a href="http://aqiqahnurulhayat.com/news/ngabuburit-yang-nggak-ribet-ya-pesan-di-aqiqah-nurul-hayat-aja" title="Ngabuburit Yang Nggak Ribet, Ya Pesan di Aqiqah Nurul Hayat Aja!">Ngabuburit Yang Nggak Ribet, Ya Pesan di Aqiqah Nurul Hayat Aja!</a></li>
                                <li><a href="http://aqiqahnurulhayat.com/news/penutupan-tajil-on-the-road-aqiqah-nurul-hayat" title="Penutupan Ta男il On The Road Aqiqah Nurul Hayat">Penutupan Ta男il On The Road Aqiqah Nurul Hayat</a></li>
                                <li><a href="http://aqiqahnurulhayat.com/news/aqiqah-nurul-hayat-menyalurkan-daging-kurban-untuk-desa-desa-miskin" title="Aqiqah Nurul Hayat Menyalurkan Daging Kurban untuk Desa-desa Miskin">Aqiqah Nurul Hayat Menyalurkan Daging Kurban untuk Desa-desa Miskin</a></li>
                            </ul>
                        </div>

                        <div class="widget-3 sidebarBox widget-container widget_categories" id="categories-2">
                            <h4 class="widget-title">Kategori</h4>
                            <ul>
                                <li class="cat-item cat-item-160610040410439"><a href="http://aqiqahnurulhayat.com/news/categories/serba-serbi" title="Serba-serbi">Serba-serbi</a></li>
                            </ul>
                        </div>

                    </aside>
                </div>

                <div class="information">
                    <aside>
                        <div class="widget-2 sidebarBox widget-container widget_recent_entries" id="brochure-2">
                            <h4 class="widget-title">Brosur</h4>
                            <ul>
                                <li>
                                    <a href="http://aqiqahnurulhayat.com/download/30-03-2016_-_Brosur_Aqiqah_NH.pdf" title="Download Brosur Brosur_Aqiqah_NH">
                                        <div class="brochure-list">Brosur_Aqiqah_NH</div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </aside>
                </div>

            </div>
            <!--sidebar ends-->
            <!--main content starts-->
            <div class="main-content span8">
                <div id="main" role="main">
                    <article id="post-160715073443709" class="post-160715073443709 post type-post status-publish format-standard sticky hentry clearfix" role="article">
                        <div class="entry-body">
                            <header>

                                <h3 class="permalink">
                                    <a href="<?=site_url('home/post')?>#we-are-new-open-in-bogor-tangerang" rel="bookmark" title="Permanent Link to We are New Open in Bogor & Tangerang">We are New Open in Bogor & Tangerang</a>
                                </h3>

                                <ul class="post-meta">

                                    <div class="post-author">

                                        <li>
                                            <span class="title">by</span>
                                            <a href="#" title="Posts by Aqiqah Nurul Hayat Surabaya" rel="author">Aqiqah Nurul Hayat Surabaya</a>
                                            <time class="post-date" datetime="15-07-2016">
                                                <span class="post-month">Juli 15, 2016</span>
                                            </time>

                                        </li>
                                    </div>
                                </ul>

                            </header>
                            <!-- end article header -->

                            <div class="inner-content">
                                <p style="text-align: justify;"><img class=" " src="http://aqiqahnurulhayat.com/upload/images/43a93887698ea5808a391ab1c3f27bff.jpg?w=588&amp;h=588" alt="" width="588" height="588" /></p>
                                <p style="text-align: justify;">Alhamdulillah, <br /> We are NEW OPEN Bogor &amp; Tangerang.</p>
                                <p style="text-align: justify;">Kami haturkan,<br /> Terima kasih kepada Sahabat ANH yang telah, masih dan selalu mempercayai kami sebagai penyedia jasa pelayanan Aqiqah.<span class="text_exposed_show"><br /> Terima kasih juga atas pengertian sahabat jika ada ketidak sempurnaan kami selama ini.</span></p>
                                <div class="text_exposed_show">
                                    <p style="text-align: justify;">Alhamdulillah, hingga kini kami terus menerima pertanyaan dan pemesanan Aqiqah baik datang ke kantor, menghubungi hotline kami, melalui web, dari messages facebook maupun twitter. Doakan kami selalu menjadi pribadi yang rendah hati, jauh dari sombong, senantiasa dekat dengan Allah dan istiqomah memberikan pelayanan terbaik.</p>
                                    <p style="text-align: justify;">Bogor &amp; Tangerang sekitarnya, dapat berjumpa di Jl. KH. Achmad Adnawidjaya Blok D1 No.1 Bogor dan Jl. Daan Mogot 955 Suka Asih, Tangerang.</p>
                                    <p style="text-align: justify;"><a class="_58cn" href="https://www.facebook.com/hashtag/aqiqahnurulhayat?source=feed_text&amp;story_id=1186647694733056" data-ft="{&quot;tn&quot;:&quot;*N&quot;,&quot;type&quot;:104}"><span class="_58cl">#&lrm;</span><span class="_58cm">AqiqahNurulHayat</span></a></p>
                                </div></br></br></br></img>                </div>

                            <p class="readmore">
                                <a href="http://aqiqahnurulhayat.com/news/we-are-new-open-in-bogor-tangerang" title="Read We are New Open in Bogor & Tangerang">Read more&#8230;</a>
                            </p>

                            <div class="clear"></div>
                            <div class="horizontal-line"></div>
                        </div>
                        <!-- end article section -->
                    </article>
                    <!-- end article -->
                    <article id="post-160714065421043" class="post-160714065421043 post type-post status-publish format-standard sticky hentry clearfix" role="article">
                        <div class="entry-body">
                            <header>

                                <h3 class="permalink">
                                    <a href="http://aqiqahnurulhayat.com/news/selamat-idul-fitri-1437-h" rel="bookmark" title="Permanent Link to Selamat Idul Fitri 1437 H">Selamat Idul Fitri 1437 H</a>
                                </h3>

                                <ul class="post-meta">

                                    <div class="post-author">

                                        <li>
                                            <span class="title">by</span>
                                            <a href="#" title="Posts by Aqiqah Nurul Hayat Surabaya" rel="author">Aqiqah Nurul Hayat Surabaya</a>
                                            <time class="post-date" datetime="14-07-2016">
                                                <span class="post-month">Juli 14, 2016</span>
                                            </time>

                                        </li>
                                    </div>
                                </ul>

                            </header>
                            <!-- end article header -->

                            <div class="inner-content">
                                <p><img class=" " src="http://aqiqahnurulhayat.com/upload/images/be6316a2bfc8988beadb54af2ce33ed4.jpg?w=607&amp;h=607" alt="" width="607" height="607" /></p>
                                <p style="text-align: center;"><span id="fbPhotoSnowliftCaption" class="fbPhotosPhotoCaption" data-ft="{&quot;tn&quot;:&quot;K&quot;}"><span class="hasCaption">Assalamualaikum Sahabat Aqiqah Nurul Hayat<em>.</em><br /> <br /> Masih dalam suasana Bulan Syawal,<br /> Kami Yayasan Nurul Hayat dan Aqiqah Nurul Hayat mengucapkan <br /> SELAMAT HARI RAYA IDUL FITRI 1437 H<span class="text_exposed_show"><br /> <br /> Taqobbalallohu Minna Wa Minkum.<br /> Semoga Allah SWT. menerima ibadah kita, memberi Taufiq untuk selalu melaksanakan perintahNya dan menjadikan kita manusia yang bertaqwa.<br /> <br /> Mohon maaf lahir dan batin atas segala kesalahan dan kekurang sempurnaan kami selama ini. Terima kasih Sahabat Aqiqah yang telah, masih dan tetap mempercayai kami.</span></span></span></p></br></br></img>                </div>

                            <p class="readmore">
                                <a href="http://aqiqahnurulhayat.com/news/selamat-idul-fitri-1437-h" title="Read Selamat Idul Fitri 1437 H">Read more&#8230;</a>
                            </p>

                            <div class="clear"></div>
                            <div class="horizontal-line"></div>
                        </div>
                        <!-- end article section -->
                    </article>
                    <!-- end article -->
                    <article id="post-160627042411861" class="post-160627042411861 post type-post status-publish format-standard sticky hentry clearfix" role="article">
                        <div class="entry-body">
                            <header>

                                <h3 class="permalink">
                                    <a href="http://aqiqahnurulhayat.com/news/nama-terbaik-untuk-anak-ketika-di-aqiqah" rel="bookmark" title="Permanent Link to Nama Terbaik Untuk Anak Ketika di Aqiqah">Nama Terbaik Untuk Anak Ketika di Aqiqah</a>
                                </h3>

                                <ul class="post-meta">

                                    <div class="post-author">

                                        <li>
                                            <span class="title">by</span>
                                            <a href="#" title="Posts by Aqiqah Nurul Hayat Surabaya" rel="author">Aqiqah Nurul Hayat Surabaya</a>
                                            <time class="post-date" datetime="27-06-2016">
                                                <span class="post-month">Juni 27, 2016</span>
                                            </time>

                                        </li>
                                    </div>
                                </ul>

                            </header>
                            <!-- end article header -->

                            <div class="inner-content">
                                <p style="text-align: justify;">&nbsp;<img class=" " src="http://aqiqahnurulhayat.com/upload/images/5ca1195c47f3b19050269b0f9714f6a8.jpg?w=602&amp;h=484" alt="" width="602" height="484" /></p>
                                <p style="text-align: justify;">Belakangan ini, sudah banyak para orang tua yang sudah mengerti pentingnya memberikan nama yang memiliki arti baik. Yang dulunya memberikan nama tidak berdasarkan pengetahuan, Alhamdulillah kini banyak nama diambil dari Al-Qur'an yang artinya sangat indah nan bermakna dan mendapat harapan penuh dari orang tua agar sang anak bersikap seperti arti namanya, insyaAllah.</p>
                                <p style="text-align: justify;">Dalam penyembelihan aqiqah dan pencukuran rambut inilah bayi tersebut diberi nama yang baik. Sebagaimana sabda Nabi Muhammad SAW sebagai berikut:</p>
                                <p style="text-align: justify;"><em>Sabda Nabi SAW &ldquo;Sesungguhnya diantara kewajiban orang tua terhadap anaknya mengajarinya menulis, memberikan nama yang baik dan menikahkannya bila telah dewasa</em>.&rdquo; (H.R. Ibnu Najar).</p>
                                <p style="text-align: justify;">Hakikat dari nama bayi adalah sebagai identitas dan tanda pengenal yang dapat dibedakan sesuai dengan kemuliannya sebagai anak Adam dan sebagai kaum muslimin. Oleh karena itu, para ulama sepakat menetapkan wajibnya memberi nama kepada laki-laki atau perempuan. Nama juga memiliki pengaruh yang cukup kuat terhadap akhlak dan cara hidup umat ini. (www.muslimah.or.id).</p>
                                <p style="text-align: justify;">Yuk beri nama yang terbaik untuk buah hati kita.</p></img>                </div>

                            <p class="readmore">
                                <a href="http://aqiqahnurulhayat.com/news/nama-terbaik-untuk-anak-ketika-di-aqiqah" title="Read Nama Terbaik Untuk Anak Ketika di Aqiqah">Read more&#8230;</a>
                            </p>

                            <div class="clear"></div>
                            <div class="horizontal-line"></div>
                        </div>
                        <!-- end article section -->
                    </article>
                    <!-- end article -->
                    <article id="post-160623074324807" class="post-160623074324807 post type-post status-publish format-standard sticky hentry clearfix" role="article">
                        <div class="entry-body">
                            <header>

                                <h3 class="permalink">
                                    <a href="http://aqiqahnurulhayat.com/news/ngabuburit-yang-nggak-ribet-ya-pesan-di-aqiqah-nurul-hayat-aja" rel="bookmark" title="Permanent Link to Ngabuburit Yang Nggak Ribet, Ya Pesan di Aqiqah Nurul Hayat Aja!">Ngabuburit Yang Nggak Ribet, Ya Pesan di Aqiqah Nurul Hayat Aja!</a>
                                </h3>

                                <ul class="post-meta">

                                    <div class="post-author">

                                        <li>
                                            <span class="title">by</span>
                                            <a href="#" title="Posts by Aqiqah Nurul Hayat Surabaya" rel="author">Aqiqah Nurul Hayat Surabaya</a>
                                            <time class="post-date" datetime="23-06-2016">
                                                <span class="post-month">Juni 23, 2016</span>
                                            </time>

                                        </li>
                                    </div>
                                </ul>

                            </header>
                            <!-- end article header -->

                            <div class="inner-content">
                                <p>&nbsp;<img class=" " src="http://aqiqahnurulhayat.com/upload/images/1a2e8c80c0b2aa0cf817b7f65c16cdcf.jpg?w=590&amp;h=411" alt="" width="590" height="411" /></p>
                                <p style="text-align: justify;">Assalamualaikum 18 Ramadhan.</p>
                                <p style="text-align: justify;">Sedih deh, Ramadhan udah tinggal 12 hari aja. Hayo sedih beneran tuh?? Sedih tapi kok masih ninggalin tarawih gara-gara ikutan BUBER (Buka Bersama) bermacam-macam (maksudnya sama teman SD, SMP, SMA, kuliah, kerja hehe banyak bener). Mana ngabuburitnya di tempat makan yang jelas-jelas ramai dan antri, alhasil sholat maghribnya jadi telat deh. Terus gimana dong pengennya sih kumpul bareng teman lama, kan pengennya kangen-kangenan, pengennya juga sambil ngabuburit gitu nungguin buka puasa.</p>
                                <p style="text-align: justify;">Lalu bagaimana, ada yang punya ide nggak?</p>
                                <p style="text-align: justify;">Mimin punya usul nih, gimana kalau buka puasanya diagendakan aja sekalian bareng anak yatim dan adain pengajian sebelum berbuka. Wah keren banget itu, bisa saling diskusi tentang agama, jadinya kan menghindari ghibah tapi tetep bisa kangen-kangenan. Terus dapat pahala juga karena memberi makan buka puasa untuk anak yatim.</p>
                                <p style="text-align: justify;">Terus pesan menunya di mana?</p>
                                <p style="text-align: justify;">Ya di Aqiqah Nurul Hayat dong, di sini nggak hanya untuk pemesanan Aqiqah loh, untuk tasyakuran dan pengajian juga bisa. Menunya bermacam-macam, diantar gratis dan tepat waktu. Jadinya kan sholat mahribnya tepat waktu dan bisa berjamaah.</p>
                                <p>&nbsp;</p></img>                </div>

                            <p class="readmore">
                                <a href="http://aqiqahnurulhayat.com/news/ngabuburit-yang-nggak-ribet-ya-pesan-di-aqiqah-nurul-hayat-aja" title="Read Ngabuburit Yang Nggak Ribet, Ya Pesan di Aqiqah Nurul Hayat Aja!">Read more&#8230;</a>
                            </p>

                            <div class="clear"></div>
                            <div class="horizontal-line"></div>
                        </div>
                        <!-- end article section -->
                    </article>
                    <!-- end article -->
                    <article id="post-160621064348610" class="post-160621064348610 post type-post status-publish format-standard sticky hentry clearfix" role="article">
                        <div class="entry-body">
                            <header>

                                <h3 class="permalink">
                                    <a href="http://aqiqahnurulhayat.com/news/penutupan-tajil-on-the-road-aqiqah-nurul-hayat" rel="bookmark" title="Permanent Link to Penutupan Ta男il On The Road Aqiqah Nurul Hayat">Penutupan Ta男il On The Road Aqiqah Nurul Hayat</a>
                                </h3>

                                <ul class="post-meta">

                                    <div class="post-author">

                                        <li>
                                            <span class="title">by</span>
                                            <a href="#" title="Posts by Aqiqah Nurul Hayat Surabaya" rel="author">Aqiqah Nurul Hayat Surabaya</a>
                                            <time class="post-date" datetime="21-06-2016">
                                                <span class="post-month">Juni 21, 2016</span>
                                            </time>

                                        </li>
                                    </div>
                                </ul>

                            </header>
                            <!-- end article header -->

                            <div class="inner-content">
                                <p style="text-align: justify;"><img class=" " src="http://aqiqahnurulhayat.com/upload/images/06a30ff85121665e6f482fd102321e58.jpg?w=609&amp;h=406" alt="" width="609" height="406" /></p>
                                <p style="text-align: justify;">Assalamualaikum.</p>
                                <p style="text-align: justify;">Seperti tahun-tahun sebelumnya (1437 H), road show pembagian Ta&rsquo;jil Aqiqah Nurul Hayat telah singgah beberapa kota di Indonesia. Pembagian ta&rsquo;jil diikuti oleh para santri khidmat di masing-masing kota. Kota Surabaya menjadi kota terakhir penutupan road show.</p>
                                <p style="text-align: justify;">Surabaya (16 Juni 2016), 1000 bingkisan Alhamdulillah telah dibagikan di Jalan arah Jembatan Merr. Sebelum pembagian, pukul 16.00 para santri khidmat bersiap-siap berangkat dari kantor pusat Nurul Hayat yang beralamat di Perum. IKIP Gunung Anyar B-48 Surabaya. Lokasi pembagian tidak terlalu jauh, hanya 7 menit sudah sampai. Sehingga pukul 16.30 para santri khidmat telah bersiap di tempat. Bahkan karena terlihat ramai diantara mobil Aqiqah Nurul Hayat, menarik perhatian masyarakat sehingga sudah banyak yang antri ingin mendapatkan bingkisan walaupun belum dibagikan.</p>
                                <p style="text-align: justify;">Bingkisan Ta&rsquo;jil dibagikan mulai pukul 17.00 WIB dan sekitar 15 menit kemudian bingkisan telah selesai dibagikan. Masyarakat terlihat sangat antusias, sehingga sedikit membuat kemacetan. Syukurnya, Alhamdulillah santri khidmat yang laki-laki mampu menertibkan arus kendaraan. Sehingga tidak mengganggu pengguna jalan lainnya. Semoga penerima dan pemberi Ta&rsquo;jil diterima amalan ibadah puasanya dan menjadi berkah untuk semua. Aamiin.</p></img>                </div>

                            <p class="readmore">
                                <a href="http://aqiqahnurulhayat.com/news/penutupan-tajil-on-the-road-aqiqah-nurul-hayat" title="Read Penutupan Ta男il On The Road Aqiqah Nurul Hayat">Read more&#8230;</a>
                            </p>

                            <div class="clear"></div>
                            <div class="horizontal-line"></div>
                        </div>
                        <!-- end article section -->
                    </article>
                    <!-- end article -->
                    <article id="post-160620060425295" class="post-160620060425295 post type-post status-publish format-standard sticky hentry clearfix" role="article">
                        <div class="entry-body">
                            <header>

                                <h3 class="permalink">
                                    <a href="http://aqiqahnurulhayat.com/news/aqiqah-nurul-hayat-menyalurkan-daging-kurban-untuk-desa-desa-miskin" rel="bookmark" title="Permanent Link to Aqiqah Nurul Hayat Menyalurkan Daging Kurban untuk Desa-desa Miskin">Aqiqah Nurul Hayat Menyalurkan Daging Kurban untuk Desa-desa Miskin</a>
                                </h3>

                                <ul class="post-meta">

                                    <div class="post-author">

                                        <li>
                                            <span class="title">by</span>
                                            <a href="#" title="Posts by Aqiqah Nurul Hayat Surabaya" rel="author">Aqiqah Nurul Hayat Surabaya</a>
                                            <time class="post-date" datetime="20-06-2016">
                                                <span class="post-month">Juni 20, 2016</span>
                                            </time>

                                        </li>
                                    </div>
                                </ul>

                            </header>
                            <!-- end article header -->

                            <div class="inner-content">
                                <p><img class=" " src="http://aqiqahnurulhayat.com/upload/images/afb9d4ed4ecf78bfdd98a37f478d92dd.png?w=607&amp;h=607" alt="" width="607" height="607" /></p>
                                <p style="text-align: justify;">Assalamualaikum 15 Ramadhan.</p>
                                <p style="text-align: justify;">Separuh bulan sudah dilalui, sudahkah kita memaksimalkan amalan-amalan ibadah kita? Sudahkah kita &ldquo;menepi&rdquo; dari hingar bingar kehidupan? dari sibuknya aktivitas pekerjaan? Di lima belas hari terakhir ini, semoga ibadah kita terus meningkat dari&nbsp; hari-hari sebelumnya agar tidak menjadi manusia merugi. Aamiin.</p>
                                <p style="text-align: justify;">Ummi, Abi, ada yang baru melahirkan atau anaknya belum di aqiqah? Ingin melaksanakannya di Bulan Ramadhan, bulan seluruh amalan dilipatgandakan? Dan berencana daging sembelihannya dibagikan untuk masyarakat desa-desa miskin? Kami (Aqiqah Nurul Hayat) dapat membantu salurkan Aqiqah anda untuk dakwah di desa-desa miskin.</p>
                                <p style="text-align: justify;">Bisa coba bayangkan kondisi di Indonesia saat ini? Harga daging melambung tinggi di pasaran, belum lagi kebutuhan pokok lainnya juga naik. Sedangkan di desa yang notabene-nya miskin (kurang mampu) dapat diyakini jarang sekali mengkonsumsi daging. Bagaimana masyarakat desa bisa keluar dari keterpurukan kebodohan dan kesehatan jika gizi anak-anak (utamanya) tidak terpenuhi?</p>
                                <p style="text-align: justify;">Melaksanakan Aqiqah berarti menyembelih hewan ternak, yang dagingnya dapat dibagikan. Pendistribusian daging juga bisa untuk desa-desa miskin. Agar masyarakat miskin pun bisa mencukupi gizinya dengan pemberian daging ke desa-desa miskin.</p>
                                <p style="text-align: justify;">Mau ibadah Aqiqah anda lebih mulia dan berperan serta dalam meningkatkan gizi masyarakat desa?</p>
                                <p style="text-align: justify;">Ayo, dimulai dari anda yang mengawalinya. Percayakan kepada kami, tidak hanya pahala Aqiqah yang didapat, tapi juga mendapat pahala memberi makan masyarakat desa-desa miskin, insyaAllah.</p></img>                </div>

                            <p class="readmore">
                                <a href="http://aqiqahnurulhayat.com/news/aqiqah-nurul-hayat-menyalurkan-daging-kurban-untuk-desa-desa-miskin" title="Read Aqiqah Nurul Hayat Menyalurkan Daging Kurban untuk Desa-desa Miskin">Read more&#8230;</a>
                            </p>

                            <div class="clear"></div>
                            <div class="horizontal-line"></div>
                        </div>
                        <!-- end article section -->
                    </article>
                    <!-- end article -->
                    <!-- begin #pagination -->
                    <div id="pagination"><span class="current">1</span><a href="http://aqiqahnurulhayat.com/news/page/2">2</a><a href="http://aqiqahnurulhayat.com/news/page/3">3</a><a href="http://aqiqahnurulhayat.com/news/page/2">Next</a><a href="http://aqiqahnurulhayat.com/news/page/48">Last</a></div>          <!-- end #pagination -->
                </div>
                <!-- end #main -->
            </div>
            <!--main content ends-->
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

