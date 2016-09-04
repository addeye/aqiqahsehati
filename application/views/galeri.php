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

    var site_url = '<?=site_url()?>';

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
                'href' 				: site_url+'galeri/upload',
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
        background-image: url("<?=base_url('assets/images/upload.jpg')?>");
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
                <h4 class="heading-icon"> <img src="<?=base_url('assets/images/icons/heading-icon-blocks.png')?>" width="40" height="40" alt="icon" class="icon-small-bg"> Sahabat Sehati</h4>
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
                    <?php foreach($up_kategori->result() as $row){?>
                    <li><a href="#" class="<?=$row->slug?>"><?=$row->kategori?></a></li>
                    <?php } ?>
                </ul>
                <!--portfolio filter navigation ends-->
                <!--3 column portfolio starts-->
                <ul class="portfolio_3column filter_content gallery-list">
                    <li data-id="id-upload" data-type="upload">
                        <div class="folio-thumb">
                            <img src="<?=base_url('assets/images/upload.jpg')?>" class="gallery-upload" />
                        </div>
                    </li>
                    <?php foreach($galeri as $row){?>
                    <li data-id="id-130902143035875" data-type="<?=$row->kategori->slug?>">
                        <div class="folio-thumb">
                            <img src="<?=base_url('upload/gallery/'.$row->gambar)?>" alt="<?=$row->judul?>" />
                            <a href="<?=base_url('upload/gallery/'.$row->gambar)?>" data-rel="prettyPhoto[gallery]" title="<?=$row->judul?>" class="icon-zoom"></a>
                        </div>
                        <h5><?=$row->judul?></h5>
                        <div class="blackscroll"><?=$row->keterangan?></div>
                    </li>
                    <?php } ?>
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