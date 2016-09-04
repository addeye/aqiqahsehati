<!-- header-btm starts
================================================== -->
<section id="header-btm" class="clearfix">
    <?php $data = $posting[0]; ?>
    <div class="container">
        <div class="row">
            <div class="span12">
                <h4 class="heading-icon">
                    <img src="<?= base_url('assets/images/icons/heading-icon-support.png')?>" width="40" height="40" alt="icon" class="icon-small-bg">
                    <?=$data->judul?>
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

                <div class="information">
                    <aside>
                        <div class="widget-2 sidebarBox widget-container widget_recent_entries" id="recent-posts-2">
                            <p><!--more--></p></div>

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
                                <li><a href="<?=site_url('harga-paket-aqiqah-murah')?>" title="Harga">Harga</a></li>
                                <li><a href="<?=site_url('contact')?>#" title="Kontak">Kontak</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>


            </div>
            <!--sidebar ends-->

            <!--main content starts-->
            <div class="main-content span8">

                <div class="content-item-wrapper">
                    <?=$data->konten?>
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
<!-- content ends================================================== -->
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