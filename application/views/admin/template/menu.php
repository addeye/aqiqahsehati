<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?=base_url('assets/adminlte/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?=$this->ion_auth->user()->row()->first_name.' '.$this->ion_auth->user()->row()->last_name?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="<?=site_url('/front')?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Konten Manajemen</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=site_url('content/page')?>"><i class="fa fa-circle-o"></i> Profil</a></li>
                    <li><a href="<?=site_url('content/posting')?>"><i class="fa fa-circle-o"></i> Berita</a></li>
                    <li><a href="<?=site_url('content/galeri')?>"><i class="fa fa-circle-o"></i> Galeri</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Fitur Manajemen</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=site_url('fitur/order')?>"><i class="fa fa-circle-o"></i> Order</a></li>
                    <li><a href="<?=site_url('fitur/buku_tamu')?>"><i class="fa fa-circle-o"></i> Buku Tamu</a></li>
                    <li><a href="<?=site_url('fitur/testimoni')?>"><i class="fa fa-circle-o"></i> Testimoni</a></li>
                    <li><a href="<?=site_url('fitur/upload')?>"><i class="fa fa-circle-o"></i> Upload Pengunjung</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Pengaturan</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=site_url('pengguna')?>"><i class="fa fa-circle-o"></i> Pengguna</a></li>
                    <li><a href="<?=site_url('front/identitas')?>"><i class="fa fa-circle-o"></i> Identitas</a></li>
                    <li><a href="<?=site_url('front/linksocial')?>"><i class="fa fa-circle-o"></i> Link Social</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Master</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=site_url('front/kategori')?>"><i class="fa fa-circle-o"></i> Kategori</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Laporan</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=site_url('report')?>"><i class="fa fa-circle-o"></i> Rekap Order</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>