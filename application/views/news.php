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
                <h4 class="heading-icon"> <img src="<?=base_url('assets/images/icons/heading-icon-support.png')?>" width="40" height="40" alt="icon" class="icon-small-bg">
                    <?=$title?>
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
            <!--sidebar starts-->
            <div class="sidebar span4 contact">
                <div class="one-fourth last">
                    <div class="space"></div>
                    <aside>

                        <div class="widget-2 sidebarBox widget-container widget_recent_entries" id="recent-posts-2">
                            <h4 class="widget-title">Berita sehati terkini</h4>
                            <ul>
                                <?php foreach($popnews->result() as $pop){?>
                                <li><a href="<?=site_url('news/view/'.$pop->slug)?>" title=""><?=$pop->judul?></a></li>
                                <?php } ?>
                            </ul>
                        </div>

                        <div class="widget-3 sidebarBox widget-container widget_categories" id="categories-2">
                            <h4 class="widget-title">Kategori</h4>
                            <ul>
                                <li class="cat-item cat-item-160610040410439"><a href="#" title="Serba-serbi">Serba-serbi</a></li>
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
                                    <a href="<?=base_url('upload/share/brosur-harga-aqiqah-sehati.jpg')?>" target="_blank" title="Download Brosur Brosur_AqiqahSehati">
                                        <div class="brochure-list">Brosur_AqiqahSehati</div>
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
                    <?php foreach($news->result() as $row) {?>
                    <article id="post-160715073443709" class="post-160715073443709 post type-post status-publish format-standard sticky hentry clearfix" role="article">
                        <div class="entry-body">
                            <header>
                                <h3 class="permalink">
                                    <a href="<?=site_url('home/post')?>" rel="bookmark" title=""><?=$row->judul?></a>
                                </h3>

                                <ul class="post-meta">

                                    <div class="post-author">

                                        <li>
                                            <span class="title">by</span>
                                            <a href="#" title="Posts by " rel="author"><?=$row->first_name.''.$row->last_name?></a>
                                            <time class="post-date" datetime="<?=$row->created_at?>">
                                                <span class="post-month"><?=tgl_indo($row->created_at)?></span>
                                            </time>

                                        </li>
                                    </div>
                                </ul>

                            </header>
                            <!-- end article header -->

                            <div class="inner-content">
                                <p style="text-align: justify;">
                                    <img class=" " src="<?=base_url('upload/posting/'.$row->gambar)?>" alt="" width="588" height="588" />
                                </p>
                                <?=character_limiter($row->konten,500)?>
                            </div>

                            <p class="readmore">
                                <a href="#news" title="">Read more&#8230;</a>
                            </p>

                            <div class="clear"></div>
                            <div class="horizontal-line"></div>
                        </div>
                        <!-- end article section -->
                    </article>
                    <!-- end article -->
                    <?php } ?>
                    <!-- begin #pagination -->
                    <div id="pagination">
                        <?=$halaman?>
                    </div>          <!-- end #pagination -->
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

