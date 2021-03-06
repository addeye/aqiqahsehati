<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>Q</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Aqiqah</b>Sehati</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?=base_url('assets/adminlte/dist/img/user2-160x160.jpg')?>" class="user-image" alt="User Image"/>
                        <span class="hidden-xs"><?=$this->ion_auth->user()->row()->first_name.' '.$this->ion_auth->user()->row()->last_name?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?=base_url('assets/adminlte/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image" />
                            <p>
                                <?=$this->ion_auth->user()->row()->first_name.' '.$this->ion_auth->user()->row()->last_name?> - Catering
                            </p>
                        </li>
                        <!-- Menu Body
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?=site_url('front/password')?>" class="btn btn-default btn-flat">Ganti Password</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?=site_url('auth/logout')?>" class="btn btn-default btn-flat">Keluar</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
            </ul>
        </div>
    </nav>
</header>