<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->

<html class="not-ie" lang="en">
<head>
    <meta name="google-site-verification" content="WN6yU1saiFsRdwgY5M4dOKcnadvGxTrJ7Flgbjbws7w" />
    <meta charset="utf-8">
    <meta name="description" content="Aqiqah Sehati merupakan penyedia jasa aqiqah murah yang berkualitas dan enak, 100% memuaskan pelanggan, juga menerima pesanan catering. kami yang terbaik soal harga dan kualitas"/>
    <meta name="keywords" content="aqiqah murah berkualitas, daftar harga aqiqah, jasa aqiqah murah, sahabat aqiqah, aqiqah terbaik, aqiqah paling enak, catering enak murah, catering berkualitas"/>
    <meta name="author" content="Aqiqah Sehati"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title><?=$title?> - Aqiqah Sehati | Jasa Aqiqah Murah Berkualitas | Paket Aqiqah Terbaik | Catering Enak Murah</title>
    <!--Fav and touch icons-->
    <link rel="shortcut icon" href="<?=base_url('assets/images/icons/favicon.ico')?>">
    <link rel="apple-touch-icon" href="<?=base_url('assets/images/icons/apple-touch-icon.png')?>">

    <!--google web font-->

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>

    <!--style sheet-->
    <link rel="stylesheet" media="screen" href="<?= base_url('assets/css/raleway.font.css') ?>" />
    <link rel="stylesheet" media="screen" href="<?= base_url('assets/css/bootstrap.css') ?> " />
    <link rel="stylesheet" media="screen" href="<?= base_url('assets/css/bootstrap-responsive.css') ?>" />
    <link rel="stylesheet" media="screen" href="<?= base_url('assets/css/blog.css') ?>" />
    <link rel="stylesheet" media="screen" href="<?= base_url('assets/css/style.css') ?>" />

    <!--jquery libraries / others are at the bottom-->
    <script type="text/javascript" src="<?= base_url('assets/js/jquery-1.7.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/modernizr.js') ?>" type="text/javascript"></script>

    <!-- Jquery ui -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/jquery-ui-1.8.23.custom.css') ?>" />
    <script src="<?= base_url('assets/js/jquery-ui-1.8.23.custom.min.js') ?>" type="text/javascript"></script>

    <!-- navigation active -->
    <script type="text/javascript">
        $(function(){
            var appClass = 'home';
            var appMethod = 'index';
            var uriString = '';

            var target = uriString ? uriString : appClass;

            $('.menu.'+target).addClass('active');

        });

        $(function() {
            $("textarea[maxlength]").bind('input propertychange', function() {
                var maxLength = $(this).attr('maxlength');
                if ($(this).val().length > maxLength) {
                    $(this).val($(this).val().substring(0, maxLength));
                }
            })
        });
    </script>

    <!--scrollbar script starts-->
    <link rel="stylesheet" media="screen" href="<?= base_url('assets/css/jquery.mCustomScrollbar.css') ?>"/>
    <script src="<?= base_url('assets/js/jquery.mCustomScrollbar.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/jquery.mousewheel.min.js') ?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(function(){
            $('.scrollable').mCustomScrollbar({
                scrollInertia:250
            });
        });
    </script>

    <!--fancybox starts-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/fancybox/jquery.fancybox-1.3.4.css')?>">
    <script type="text/javascript" src="<?= base_url('assets/js/fancybox/jquery.fancybox-1.3.4.pack.js')?>"></script>


    <style>
        @media (max-width:1000px) {
            li.menu_baru{
                display:none
            }
            .menu_mobile{
                display:block
            }
        }
        @media (min-width:1000px) {
            li.menu_baru{
                display:block

            }
            .menu_mobile{
                display:none
            }
        }

    </style>

    <!--prettyphoto scripts starts-->
    <link rel="stylesheet" media="screen" href="<?= base_url('assets/css/prettyPhoto.css') ?>"/>
    <script src="<?= base_url('assets/js/jquery.prettyPhoto.js') ?>" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function() {
            $('a[data-rel]').each(function() {
                $(this).attr('rel', $(this).data('rel'));
            });
            $("a[rel^='prettyPhoto[gallery]']").prettyPhoto({
                animation_speed: 'fast',
                slideshow: 5000,
                autoplay_slideshow: false,
                opacity: 0.80,
                show_title: false,
                theme: 'pp_default', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
                overlay_gallery: false,
                social_tools: false,
                changepicturecallback: function(){
                    var $pp = $('.pp_default');
                    if( parseInt( $pp.css('left') ) < 0 ){
                        $pp.css('left', 0 );
                    }
                }
            });
        });

        $(document).ready(function(){
            $('.search-button-action').live('click',function(){
                if($(this).hasClass('active')) {
                    $('#search-head').submit();
                } else {
                    $(this).addClass('active');
                    $('.keyword-text').addClass('active').focus();
                }
            });

            $('body').click(function(event){
                var elementClass = event.target.className;
                var elementId = event.target.id;
                if( (elementId != 'search-button' && elementId != 'keyword') && $('.keyword-text').val() == '' ) {
                    $('.keyword-text, .search-button-action').removeClass('active');
                }
            });

        });

        function searchCheck() {
            var keyword = $('#keyword').val();
            if(keyword != '') {
                return true;
            }

            return false;
        }
    </script>
    <!--prettyphoto scripts ends-->

</head>
<body>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-82470301-1', 'auto');
    ga('send', 'pageview');

</script>