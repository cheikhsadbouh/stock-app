<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikhna
 * Date: 14/11/17
 * Time: 17:00
 */


?>


<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">متجري</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">

        <li class="dropdown  " style="background-color: #607d8b;">
            <a class="dropdown-toggle  " data-toggle="dropdown" href="#" >
                <i class="fa fa-user-circle-o "></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user pull-right ">
                <li><a href="logout.php"  class="text-right" ><i class=" fa fa-sign-out fa-fw "></i> الخروج</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar  " role="navigation" style="    position: fixed;
    overflow: visible;">
        <div class="sidebar-nav navbar-collapse ">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="row">
                        <div class="col-xs-4">
                            <img  class="img-responsive img-circle" src="../img/users-profil.png"/>
                            <!--                                <div class="status online hidden-xs"> </div>-->
                        </div>
                        <div class="col-xs-4 col-xs-pull-1">
                            <p class=" text-justify " style="color: #FFFFFF;">
                                <?php echo $info_user[0]; ?>
                            </p>
                            <span> <i class="fa fa-circle   text-success"><span style="color:white;"> <?php echo $info_user[1]; ?></span></i> </span>
                        </div>
                        <div class="clearfix"></div><br>
                        <div class=" col-xs-12 divider"></div>
                    </div>
                </li>
                <li>
                    <a href="admin.php"><i class="fa fa-dashboard fa-fw"></i> مخزون
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="flot.html">Flot Charts</a>
                        </li>
                        <li>
                            <a href="morris.html">Morris.js Charts</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="tables.php"><i class="fa fa-table fa-fw"></i> Tables</a>
                </li>
                <li>
                    <a href="sales.php" id="load-sale"><i class="fa fa-edit fa-fw"></i>sales</a>
                </li>


            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
