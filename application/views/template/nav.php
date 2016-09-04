<!-- header starts
================================================== -->
<section id="top-bar">

</section>
<section id="header" class="clearfix">
    <div class="container">
        <div class="row">
            <!--logo starts-->
            <div class="span4 logo"><a href="#"><img src="<?= base_url('assets/images/logo.png')?>" width="217" height="73" alt="logo"></a></div>
            <!--logo ends-->
            <div class="span8 clearfix">
                <!--social starts-->
                <form action="<?=site_url('news/search')?>" method="post" accept-charset="utf-8" id="search-head" onSubmit="return searchCheck();">
                    <ul class="social clearfix">
                        <li>
                            <?php foreach($link_social->result() as $ls) { ?>
                            <a href="<?=$ls->link?>" target="_blank"><img src="<?=base_url('assets/images/icons/'.$ls->icon.'.png')?>" width="28" height="28" alt="icon"></a>
                            <?php } ?>
                            <input type="text" id="keyword" name="keyword" class="keyword-text" placeholder="Cari..." />
                            <a href="javascript:void(0);" id="search-button" class="search-button-action">
                                <img src="<?= base_url('assets/images/icons/search_icon_aqiqah.png')?>" width="28" height="28" alt="icon">
                            </a>
                        </li>
                    </ul>
                </form>						<!--social ends-->

                <!--menu starts-->
                <div id="smoothmenu" class="ddsmoothmenu">
                    <a href='order' class="menu_mobile" style="float: right; background: #ff720b; color: white; padding: 10px 30px; border-radius: 4px; font-size: 17px; font-family: 'Raleway', sans-serif; font-weight:400;">Order</a>

                    <ul>
                        <li><a href="<?=site_url('/')?>" class="menu <?=$active=='beranda'?'active':''?> ">Beranda</a></li>
                        <li>
                            <a class="menu <?=$active=='tentang'?'active':''?> ">Tentang Sehati</a>
                           <ul>
                               <?php foreach($menu->result() as $row){?>
                                <li><a href="<?=site_url('page/'.$row->slug)?>"><?=$row->judul?></a></li>
                               <?php } ?>
                               <li>
                                   <a href="<?=site_url('kontak')?>" class="menu <?=$active=='kontak'?'active':''?>">Kontak</a>
                               </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=site_url('harga-paket-aqiqah-murah')?>" class="menu <?=$active=='harga'?'active':''?>">Harga</a>
                        </li>
                        <li><a href="<?=site_url('berita')?>" class="menu <?=$active=='berita'?'active':''?>">Berita</a></li>
                        <li><a href="<?=site_url('testimonial')?>" class="menu <?=$active=='testimonial'?'active':''?>">Testimoni</a></li>

                        <li><a href="<?=site_url('galeri')?>" class="menu <?=$active=='galeri'?'active':''?>">Galeri</a></li>

                        <li class='menu_baru'><a href='<?=site_url('order')?>' style='background-color:#ff720b;color:white; border-radius:5px; font-weight:600; font-size:14px; padding:10px 20px;'>Order</a></li>

                    </ul>
                </div>
                <!--menu ends-->
            </div>
        </div>
    </div>
</section>
<!-- header ends