<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Upload Galeri</title>

    <link rel="stylesheet" media="screen" href="<?=base_url('assets/css/raleway.font.css')?>" />
    <link rel="stylesheet" media="screen" href="<?=base_url('assets/css/bootstrap.css')?>" />
    <link rel="stylesheet" media="screen" href="<?=base_url('assets/css/bootstrap-responsive.css')?>" />
    <link rel="stylesheet" media="screen" href="<?=base_url('assets/css/blog.css')?>" />
    <link rel="stylesheet" media="screen" href="<?=base_url('assets/css/style.css')?>" />

    <style type="text/css">
        html, body {
            height: auto;
        }
        input[type="text"].file {
            width: 300px !important;
            cursor: default !important;
        }
        .list-box {
            list-style: none !important;
            float: left;
            width: 100%;
            margin: 5px 0 !important;
        }
        .list-box li {
            float: left;
            width: 45%;
        }
        .list-box input {
            float: left;
            margin: 0;
        }
        .list-item {
            float: left;
            padding-left: 5px;
            width: auto;
            cursor: pointer;
        }
    </style>

    <!--jquery libraries / others are at the bottom-->
    <script type="text/javascript" src="<?=base_url('assets/js/jquery-1.7.1.min.js')?>"></script>
    <script src="<?=base_url('assets/js/modernizr.js')?>" type="text/javascript"></script>

    <!--form validation starts-->
    <script src="<?=base_url('assets/js/jquery.validate.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/js/jquery.form.js')?>" type="text/javascript"></script>

    <!--  styled file upload script -->
    <script src="<?=base_url('assets/js/jquery.filestyle.js')?>" type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8">

        $(function() {

            $("input.file").filestyle({
                image: "<?=base_url('assets/images/upload_file.gif')?>",
                imageheight : 29,
                imagewidth : 78,
                width : 300
            });

        });

        $(function() {
            $("textarea[maxlength]").bind('input propertychange', function() {
                var maxLength = $(this).attr('maxlength');
                if ($(this).val().length > maxLength) {
                    $(this).val($(this).val().substring(0, maxLength));
                }
            })
        });

        $(document).ready(function() {

            //Contact form 
            $(function() {
                var v = $("#uploadform").validate({
                    submitHandler: function(form) {
                        $(form).ajaxSubmit({
                            target: "#result",

                            beforeSubmit: function() {
                                $('#contact-loader').show();
                                $('#contact-button').val('Please wait').attr('disabled','disabled');
                            },

                            error: function() {
                                $('#contact-button').val('Upload').removeAttr('disabled');
                                $('#contact-loader').hide();
                            },

                            complete: function() {
                                $('#contact-button').val('Upload').removeAttr('disabled');
                                $('#contact-loader').hide();
                            },

                            success: function(data) {
                                if(data == 'success') {
                                    //document.location.href = window.location.pathname;
                                    parent.$('.upload-result').html('<strong class="success">foto telah berhasil di upload.</strong>');
                                    parent.$.fancybox.close();
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
    </script>

</head>
<body id="media-upload">
<!-- header-btm starts
 ================================================== -->
<section id="header-btm" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h4 class="heading-icon">
                    <img src="<?=base_url('assets/images/icons/heading-icon-mail.png')?>" width="40" height="40" alt="icon" class="icon-small-bg">
                    Upload Foto
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
            <div class="main-content span12">
                <div class="inner-content">
                    <form action="<?=site_url('galeri/send')?>" method="post" accept-charset="utf-8" id="uploadform">
                        <fieldset>
                            <div class="clearfix"></div>
                            <p>
                                <label>Foto :</label>
                                <input type="file" name="gambar" class="file" id="image-upload" />
                                <p>Maksimum besar file 2MB format (jpg,png,jpeg)</p>
                            </p>
                            <p class="clear"></p>
                            <p>
                                <label>Nama :</label>
                                <input type="text" class="required" name="nama_uploader" />
                            </p>
                            <!-- <p>
                                <label>Nomor Pemesanan :</label>
                                <input type="text" class="required" name="nomor_order" />
                            </p> -->
                            <p>
                                <label>Email :</label>
                                <input type="text" class="required email" name="email" />
                            </p>
                            <p>
                                <label>Telepon :</label>
                                <input type="text" class="required number" name="telp" />
                            </p>
                            <p>
                                <label>Judul :</label>
                                <input type="text" class="required" name="judul" />
                            </p>
                            <p>
                                <label>Kategori:</label>
                            <div>
                                <ul class="list-box">
                                    <?php foreach($kategori->result() as $row) {?>
                                    <li class="checkbox">
                                        <label style="cursor: pointer;">
                                        <input type="radio" name="kategori" value="<?=$row->id?>"/>
                                        <?=$row->kategori?></label>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            </p>
                            <p>
                                <label>Deskripsi :</label>
                                <textarea  rows="4" name="keterangan" id="description" class="" maxlength="100"></textarea>
                            </p>
                            <p>
                                <input type="submit" value="Upload" class="submit" id="contact-button" />
                                <input type="button" class="preloader" id="contact-loader" />
                            </p>
                            <div id="result"></div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
