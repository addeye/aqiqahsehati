<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->

<html class="not-ie" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content=" Aqiqah, Aqiqoh atau Akikah terbesar di Indonesia persembahan Aqiqah Nurul Hayat " />
    <meta name="keywords" content="aqiqah surabaya,	aqiqah bangkalan, aqiqah Sidoarjo, aqiqah malang, aqiqah gresik, aqiqah kediri, aqiqah madiun, aqiqah tuban, aqiqah bojonegoro, aqiqah lamongan, aqiqah jember, aqiqah banyuwangi, aqiqah pasuruan, aqiqah semarang, aqiqah jakarta barat, aqiqah jakarta timur, aqiqah jakarta utara, aqiqah jakarta selatan, aqiqah jakarta pusat, aqiqah depok, aqiqah bogor, aqiqah bekasi, aqiqah bekasi, aqiqah tangsel, aqiqah tangerang, aqiqah tangerang selatan, aqiqah medan, aqiqah makassar, aqiqah balikpapan, aqiqah banjarmasin
	"/>
    <meta name="author" content="Aqiqah Sehati" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>aqiqah, aqiqoh, akikah, nomor 1 Indonesia by Aqiqah Sehati - Home</title>
    <!--Fav and touch icons-->
    <link rel="shortcut icon" href="<?=base_url('assets/images/icons/favicon.ico')?>">
    <link rel="apple-touch-icon" href="<?=base_url('assets/images/icons/apple-touch-icon.png')?>">
    <!-- <link rel="apple-touch-icon" sizes="72x72" href="http://aqiqahnurulhayat.com/assets/images/icons/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="http://aqiqahnurulhayat.com/assets/images/icons/apple-touch-icon-114x114.html"> -->

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