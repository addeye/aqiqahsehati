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
                            $('#comment-loader').show();
                        },
                        error: function() {
                            $('#comment-loader').hide();
                        },
                        complete: function() {
                            $('#comment-loader').hide();
                        },
                        success: function(data) {
                            if(data == 'success') {
                                //document.location.href = window.location.pathname;
                                $('#result').html('<strong>Komentar berhasil disimpan. </strong>');
                                $('#cancel-comment-reply-link').trigger('click');
                                $('#contactform')[0].reset();
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

    $(document).ready(function(){

        var page_hash = window.location.hash;
        var parts = page_hash.split('replyTo-');

        if(parts[1]) {

            var parent = parts[1];

            if($('#comment-respond-wrapper-'+parent).find('section#respond')) {

                var formContent = $('section#respond').parent().contents();

                $('#comment-parent').val(parent);
                $('#comment-respond-wrapper-'+parent).html(formContent);
                $('#cancel-comment-reply-link').show();

            }

        }

    });

    $(document).ready(function(){

        $('#cancel-comment-reply-link').live('click',function(){

            var formContent = $('section#respond').parent().contents();

            $('#comment-parent').val('');
            $('#comment-respond-wrapper').html(formContent);
            $(this).hide();

        });

        $('.comment-reply-link').live('click',function(){

            var parent = $(this).data('id');

            if($('#comment-respond-wrapper-'+parent).find('section#respond')) {

                var formContent = $('section#respond').parent().contents();

                $('#comment-parent').val(parent);
                $('#comment-respond-wrapper-'+parent).html(formContent);
                $('#cancel-comment-reply-link').show();

            }

        });

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
                                <li><a href="http://aqiqahnurulhayat.com/news/penutupan-tajil-on-the-road-aqiqah-nurul-hayat" title="Penutupan Ta’jil On The Road Aqiqah Nurul Hayat">Penutupan Ta’jil On The Road Aqiqah Nurul Hayat</a></li>
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
                <div class="berita">
                    <article id="post-160715073443709" class="post-160715073443709 post type-post status-publish format-standard hentry category-design tag-design tag-development tag-tutorials clearfix" role="article">
                        <div class="entry-body">
                            <header>

                                <h3 class="permalink">
                                    <a href="http://aqiqahnurulhayat.com/news/we-are-new-open-in-bogor-tangerang" rel="bookmark" title="Permanent Link to We are New Open in Bogor & Tangerang">We are New Open in Bogor & Tangerang</a>
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
                                </div>              </div>
                            <div class="clear"></div>

                            <ul class="post-meta">
                                <li class="tags">
                                    <span class="title"></span> <span class="tags">
                                                                                                                          <a href="http://aqiqahnurulhayat.com/news/tag/harga-kambing-qurban" rel="tag">harga kambing qurban</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/ramadhan-1437" rel="tag">ramadhan 1437</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/kambing-untuk-aqiqah" rel="tag">kambing untuk aqiqah</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/hukum-aqiqah" rel="tag">hukum aqiqah</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/akikah" rel="tag">akikah</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/harga-kambing" rel="tag">harga kambing</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/olahan-kambing" rel="tag">olahan kambing</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/harga-kambing-2016" rel="tag">harga kambing 2016</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/menu-aqiqah" rel="tag">menu aqiqah</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/gule" rel="tag">gule</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/harga-kambing-aqiqah" rel="tag">harga kambing aqiqah</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/sate" rel="tag">sate</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/jual-kambing-aqiqah" rel="tag">jual kambing aqiqah</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/layanan-aqiqah" rel="tag">layanan aqiqah</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/jasa-aqiqah" rel="tag">jasa aqiqah</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/ramadhan-2016" rel="tag">ramadhan 2016</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/paket-aqiqah-jakarta" rel="tag">paket aqiqah jakarta</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/menu-aqiqah-nurul-hayat" rel="tag">menu aqiqah nurul hayat</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/ramadhan" rel="tag">ramadhan</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/aqiqah" rel="tag">aqiqah</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/kambing-aqiqah-murah" rel="tag">kambing aqiqah murah</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/menu" rel="tag">menu</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/jual-kambing" rel="tag">jual kambing</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/paket-aqiqah" rel="tag">paket aqiqah</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/harga-kambing-akikah" rel="tag">harga kambing akikah</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/aqiqah-dalam-islam" rel="tag">aqiqah dalam islam</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/kambing-akikah" rel="tag">kambing akikah</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/aqiqah-murah" rel="tag">aqiqah murah</a>
                                                  ,                           <a href="http://aqiqahnurulhayat.com/news/tag/harga-kambing-untuk-aqiqah" rel="tag">harga kambing untuk aqiqah</a>
                                                                  </span>
                                </li>

                                <li class="comments">
                                    <span class="title"></span>
                                    <a href="#comments" title="Comment on We are New Open in Bogor & Tangerang">0</a>
                                </li>
                            </ul>
                            <br>
                            <hr style="margin:5px 0;" />

                            <!-- AddThis Button BEGIN -->
                            <a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=300&amp;pubid=xa-50d2e8791dc7aabc">
                                <img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/>
                            </a>
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50d2e8791dc7aabc"></script>
                            <!-- AddThis Button END -->

                        </div>
                        <!-- end entry-body -->
                    </article>
                    <!-- end article -->
                    <div class="horizontal-line"></div>
                    <!-- You can start editing here. -->

                    <!--
                    ##############################################################
                    ##################### COMMENT POST ###########################
                    ##############################################################
                    -->
                    <h3 id="comments"><span>0</span> Comments</h3>
                    <nav id="comment-nav">
                        <ul>
                            <li></li>
                            <li></li>
                        </ul>
                    </nav>
                    <ol class="commentlist">

                    </ol>
                    <nav id="comment-nav">
                        <ul>
                            <li></li>
                            <li></li>
                        </ul>
                    </nav>
                    <div id="comment-respond-wrapper">
                        <section id="respond" class="respond-form">
                            <h3 id="comment-form-title" class="h2">Leave a Comment</h3>
                            <div id="cancel-comment-reply">
                                <p class="small">
                                    <a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Click here to cancel reply.</a>
                                </p>
                            </div>
                            <!--form-->
                            <form action="http://aqiqahnurulhayat.com/news/comment/we-are-new-open-in-bogor-tangerang" method="post" accept-charset="utf-8" id="contactform">                <input type="hidden" id="comment-parent" name="parent" value="" />
                                <fieldset>
                                    <div class="clearfix"></div>
                                    <div id="result"></div>
                                    <p>
                                        <label>Nama :</label>
                                        <input name="name" class="required" type="text">
                                    </p>
                                    <p>
                                        <label>Email Address :</label>
                                        <input name="email"  class="required email" type="text">
                                    </p>
                                    <p>
                                        <label>Website :</label>
                                        <input name="url"  class="" type="text">
                                    </p>
                                    <p>
                                        <label>Message :</label>
                                        <textarea  rows="4" name="message" id="message" class="required"></textarea>
                                    </p>
                                    <p>
                                        <input type="submit" value="Send Message" class="submit"/>
                                        <input type="button" class="preloader" id="comment-loader" />
                                    </p>
                                </fieldset>
                            </form>              <!--form-->
                        </section>
                    </div>
                </div>
            </div>


            <!--main content ends-->

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