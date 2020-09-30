<?php

use webLazy\Core\URL;

?>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Admin</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="<?=URL::uri('logoutAdmin')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <!--                <li class="sidebar-search">-->
                <!--                    <div class="input-group custom-search-form">-->
                <!--                        -->
                <!--                    </div>-->
                <!--                     /input-group -->
                <!--                </li>-->
                <!-- /input-group -->
                <li>
                    <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="<?= URL::uri('listProduct') ?>"><i class="fa fa-bar-chart-o fa-fw"></i>Product<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= URL::uri('listProduct') ?>">List Product</a>
                        </li>
                        <li>
                            <a href="<?= URL::uri('addProduct') ?>">Add Product</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="<?= URL::uri('listProducer') ?>"><i class="fa fa-cube fa-fw"></i> Producer<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= URL::uri('listProducer') ?>">List Producer</a>
                        </li>
                        <li>
                            <a href="<?= URL::uri('addProducer') ?>">Add Producer</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="<?= URL::uri('listType') ?>"><i class="fa fa-cube fa-fw"></i> Type Product<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= URL::uri('listType') ?>">List Type</a>
                        </li>
                        <li>
                            <a href="<?= URL::uri('addType') ?>">Add Type</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="<?= URL::uri('listUser') ?>"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= URL::uri('listUser') ?>">List User</a>
                        </li>
                        <li>
                            <a href="<?= URL::uri('addUser') ?>">Add User</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->

                <li>
                    <a href="<?= URL::uri('listBanner') ?>"><i class="fa fa-users fa-fw"></i> Banner<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= URL::uri('listBanner') ?>">List Banner</a>
                        </li>
                        <li>
                            <a href="<?= URL::uri('addBanner') ?>">Add Banner</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Tin Tức<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">List Tin Tức</a>
                        </li>
                        <li>
                            <a href="#">Add Tin Tức</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i>Loại Tin Tức<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">List Loại Tin</a>
                        </li>
                        <li>
                            <a href="#">Add Loại Tin</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>