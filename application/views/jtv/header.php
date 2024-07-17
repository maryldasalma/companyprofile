<header id="header" class="header-no-border-bottom" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 140, 'stickySetTop': '-140px', 'stickyChangeLogo': false}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-logo"> 
                        <?php 
                            $logo = $this->model_utama->view_ordering_limit('logo','id_logo','DESC',0,1);
                            foreach ($logo->result_array() as $row) {
                                echo "<img src='".base_url()."asset/logo/$row[gambar]'/>";
                            }
                        ?>
                    </div>
                </div>
                <div class="header-column">
                    <div class="header-search">
                        <form id="searchForm" action="<?php echo base_url(); ?>berita/index/" method="POST">
                            <div class="input-group">
                                <input type="text" class="form-control" name="kata" placeholder="Search..." required="" aria-required="true">
                                <span class="input-group-btn">
                                    <button name="cari" class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container header-nav header-nav-center header-nav-bar header-nav-bar-primary">

            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                <i class="fa fa-bars"></i>
            </button>
            <div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse" style="padding-top:3px;">
                <nav>
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="<?= base_url() ?>">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="<?= base_url() ?>">About</a>
                            <ul>
                                <li><a href="<?= base_url('about') ?>">About Us</a></li>
                                <li><a href="<?= base_url('history') ?>">History</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= base_url('program') ?>">Program</a></li>
                        <li><a href="<?= base_url('team') ?>">Team</a></li>
                        <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
