<style type="text/css">
    .file {
        font-size: 12px;
        font-weight: normal;
        line-height: 1em;
    }
</style>
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

            <!--main content starts-->
            <div class="main-content span8">
                <?=$this->session->flashdata('pesan')?>
                <div class="inner-content">

                    <ol class="commentlist" style="list-style:none;">
                        <?php foreach($testimonial->result() as $row){?>
                        <li class="comment byuser comment-author-<?=$row->nama?> bypostauthor odd alt thread-odd thread-alt depth-1">
                            <article id="<?=$row->gambar?>" class="clearfix">
                                <header class="comment-author vcard">

                                    <img alt='' src="<?=base_url('upload/testimonial/'.$row->gambar)?>" class="avatar avatar-40 photo" height="40px" width="40px" />

                                    <div class="authormeta">
                                        <h3 class="comment-author">
                                            <cite class="fn"><?=$row->nama?></cite>
                                        </h3>

                                          <span class="datetime">
                                            <time datetime="<?=tgl_indo($row->created_at)?>">
                                                <a href="#<?=$row->gambar?>"><?=tgl_indo($row->created_at)?></a>
                                            </time>
                                          </span>

                                    </div>
                                </header>

                                <div class="comment-text">
                                    <p><?=$row->pesan?></p>
                                </div>
                            </article>
                        </li>
                        <?php } ?>
                    </ol>

                    <hr />
                </div>

                <form action="<?=site_url('testimonial/send')?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <fieldset>
                        <div class="clearfix"></div>
                        <div id="result"></div>
                        <p>
                            <label>Nama :</label>
                            <input name="nama" class="required"  type="text" required>
                        </p>
                        <p>
                            <label>Email :</label>
                            <input name="email"  class="required email" type="email" required>
                        </p>
                        <p>
                            <label>Foto :</label>
                            <input name="gambar" class="file" type="file">
                        </p>
                        <p class="clear"></p>
                        <p>
                            <label>Testimoni :</label>
                            <textarea  rows="4" name="pesan" id="message" class="required" maxlength="250" required></textarea>
                        </p>
                        <p>
                            <input type="submit" value="Send Message" class="submit" id="contact-button" />
                        </p>
                    </fieldset>
                </form>      </div>
            <!--main content ends-->

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

            </div>
            <!--sidebar ends-->

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