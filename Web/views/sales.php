<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../Web/img/favicon.ico" />

    <title>متجري</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom  table CSS -->
    <link href="../css/custom-table.css" rel="stylesheet">
    <link href="../css/loading.css" rel="stylesheet">








    <!-- Custom Fonts -->
    <link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php

//require "../../../../IdeaProjects/stock-app/Metier/Metier_get_all_products.php";
//echo "  is --->  ".   dirname( dirname(dirname(__FILE__)))."/Metier/Metier_get_all_products.php";

require(dirname( dirname(dirname(__FILE__))).'/Metier/Metier_get_all_sales.php');
$sale_table= Metier_get_all_sales();
?>
<body>
<div id="wrapper" style="display:none;">

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
                    <li><a href="#"  class="text-right" ><i class=" fa fa-sign-out fa-fw "></i> الخروج</a>
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
                                    Username
                                </p>
                                <span> <i class="fa fa-circle   text-success"><span style="color:white;">مدير</span></i> </span>
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

    <div id="page-wrapper">
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>
            </div><br>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-8">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Bordered Table</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                          <table class="table table-bordered" id="display_sale" cellspacing="0"  width="100%">
                              <thead>
                              <tr>

                                  <th>date_of_sales</th>
                                  <th>name_p</th>
                                  <th>price_p</th>
                                  <th>bying_p</th>
                                  <th>selected_item</th>
                                  <th>new_p</th>
                                  <th>total_benefit</th>
                                  <th>plus_total_benefit</th>
                                  <th>total_bying</th>
                                  <th>modifiy</th>

                              </tr>
                              </thead>
                               <tbody>
                              <?php

                              if (mysqli_num_rows($sale_table) > 0) {
                               while($row = mysqli_fetch_assoc($sale_table)) {
                               ?>
                               <tr>
                                   <td><?php  echo $row["date_of_sales"];?></td>
                                   <td><?php  echo $row["name_p"];?></td>
                                   <td><?php  echo $row["price_p"];?></td>
                                   <td><?php  echo $row["bying_p"];?></td>
                                   <td><?php  echo $row["selected_item"];?></td>
                                   <td><?php  echo $row["new_p"];?></td>
                                   <td><?php  echo $row["total_benefit"];?></td>
                                   <td><?php  echo $row["plus_total_benefit"];?></td>
                                   <td><?php  echo $row["total_bying"];?></td>
                                   <td align="center" >
                                       <button class="btn btn-default " onclick="modify_product('<?php echo  $row["idproducts"];  ?>','<?php  echo $row["name_produts"];?>','<?php echo  $row["unite_price"];  ?>','<?php echo  $row["buying_price"];  ?>','<?php echo  $row["number_products"];  ?>');"><em class="fa fa-pencil"></em></button>

                                   </td>

                               </tr>
                               <?php  } }?>
<!-- idsales-->
                               </tbody>
                          </table>

                    </div><!-- /.box-body -->

                </div><!-- /.box -->


            </div>
            <!--end info table  -->
            <div class="col-lg-4 ">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bell fa-fw"></i> Notifications Panel
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <a href="#" class="btn btn-default btn-block">View All Alerts</a>
<br>
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                            </a>
                        </div>
                        <!-- /.list-group -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
<br/>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bell fa-fw"></i> Notifications Panel
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                            </a>
                        </div>
                        <!-- /.list-group -->
                        <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->

            </div>
            <!--  end info stock -->



        </div>
        <!-- end row info -->



        <br>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>
            </div><br>
        </div>
        <!-- /.row footer  -->
        <!-- /#page-wrapper -->
    </div>
</div>
<!-- /#wrapper -->
<div class="loading-bro" id="loading">
    <h1>Loading</h1>
    <svg id="load" x="0px" y="0px" viewBox="0 0 150 150">
        <circle id="loading-inner" cx="75" cy="75" r="60"/>
    </svg>
</div>

</body>



<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>




<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap.min.js"></script>


<script src="../js/loading.js"></script>


<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>


<!-- DataTables JavaScript -->
<script src="../vendor/datatables/js/jquery.dataTables.js"></script>
<script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>



<!-- Custom Theme JavaScript -->
<script src="../js/sb-admin-2.js"></script>




<script>









</script>


</html>