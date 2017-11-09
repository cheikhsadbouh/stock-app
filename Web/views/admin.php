
<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<!DOCTYPE html>
<html lang="en">

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



    <!-- Custom model-header  CSS -->
    <link href="../css/model-header.css" rel="stylesheet">

    <!-- Custom  date CSS -->
    <link href="../css/date.css" rel="stylesheet">

    <!-- Custom  table CSS -->
    <link href="../css/custom-table.css" rel="stylesheet">

    <!-- tabs CSS -->
    <link href="../css/tabs.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <link href="../css/switch.css" rel="stylesheet">

    <link href="../css/checkbox_style.css" rel="stylesheet">


    <link href="../date_time_picker/bootstrap-datetimepicker.min.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php

//require "../../../../IdeaProjects/stock-app/Metier/Metier_get_all_products.php";
//echo "  is --->  ".   dirname( dirname(dirname(__FILE__)))."/Metier/Metier_get_all_products.php";

require(dirname( dirname(dirname(__FILE__))).'/Metier/Metier_get_all_products.php');
$stock_table= Metier_get_all_products();
?>
<div id="wrapper">

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
            <div class="col-md-12">
                <!-- Nav tabs -->
                <div class="card">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active pull-right"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                        <li role="presentation" class="pull-right"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                        <li role="presentation" class="pull-right"><a href="#sale" aria-controls="sale" role="tab" data-toggle="tab" style="color: black;" >بيع</a></li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel " id="mypanel">
                                        <div class="panel-heading">
                                            DataTables Advanced Tables
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <table width="100%" class=" colorchange table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                <tr>
                                                    <th>check it </th>
                                                    <th>name_produts</th>
                                                    <th>price</th>
                                                    <th>unite_price</th>
                                                    <th>buying_price</th>
                                                    <th>unite_benefit</th>
                                                    <th>total_benefit</th>
                                                    <th>number_products</th>
                                                    <th>delete |modifiy</th>
                                                    <th style="">id_pro</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <!-- name_produts







idproducts

if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results";
    }
-->
                                                <?php


                                                if (mysqli_num_rows($stock_table) > 0) {
                                                while($row = mysqli_fetch_assoc($stock_table)) {
                                                    ?>
                                                    <tr class="">
                                                        <td>
                                                            <div class="checkbox radio-margin">
                                                                <label>
                                                                    <input type="checkbox" value="<?php  echo $row["name_produts"];?>,<?php echo  $row["unite_price"];  ?>,<?php echo  $row["buying_price"];  ?>,<?php echo  $row["number_products"];  ?>,<?php echo  $row["idproducts"];  ?>">
                                                                    <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                </label>
                                                            </div>
                                                        </td>

                                                        <td><?php  echo $row["name_produts"];?></td>
                                                        <td><?php echo  $row["price"];  ?></td>
                                                        <td><?php echo  $row["unite_price"];  ?></td>
                                                        <td><?php echo  $row["buying_price"];  ?></td>
                                                        <td><?php echo  $row["unite_benefit"];  ?></td>
                                                        <td><?php echo  $row["total_benefit"];  ?></td>
                                                        <td><?php echo  $row["rest_products_number"];  ?></td>


                                                        <td align="center" >
                                                            <button class="btn btn-default " onclick="modify_product('<?php echo  $row["idproducts"];  ?>','<?php  echo $row["name_produts"];?>','<?php echo  $row["unite_price"];  ?>','<?php echo  $row["buying_price"];  ?>','<?php echo  $row["number_products"];  ?>');"><em class="fa fa-pencil"></em></button>

                                                            <button class="btn btn-danger"  onclick="delete_product('<?php echo  $row["idproducts"];  ?>');"><em class="fa fa-trash"></em></button>

                                                        </td>
                                                        <td ><?php  echo $row["idproducts"];?></td>

                                                    </tr>
                                                <?php  } }?>
                                                </tbody>
                                            </table>
                                            <!-- /.table-responsive -->

                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row stock tables  -->
                        </div>
                        <!-- end  tabs stock table-->
                        <div role="tabpanel" class="tab-pane" id="profile">
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="panel panel-default " id="mypanel">
                                     <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-6 text-capitalize">
                                            <!--- --> إنشاء  طلبية
                                            </div>
                                            <div class="col-xs-3">

                                            </div>
                                            <div class="col-xs-3  col-xs-pull-1 col-md-pull-0">
                                                <a class="c-btn c-datepicker-btn" id="add-new-item" href="#" onclick="add_new_item();">
                                                <i class="fa fa-plus-circle  fa-2x">
                                                    <span id="newitem " class="hidden-xs hidden-sm "> إضافت</span>

                                                </i>
                                                </a>
                                            </div>

                                        </div>
                                     </div>
                                     <div class="panel-body">

                                             <form  class="form-horizontal"  id="myfrm"  action="#" method="#">
                                               <div class="scrollable">
                                               <table class="table   " id="mytable">
                                                   <thead >
                                                   <tr>
                                                       <th class="text-center">أعداد</th>
                                                       <th class="text-center">سعر البيع</th>
                                                       <th class="text-center">سعر الوحدة</th>
                                                       <th class="text-center">إسم المنتج</th>
                                                       <th >   <i class="fa fa-cogs fa-align-center fa-2x col-xs-push-1"  aria-hidden="true"></i></th>
                                                   </tr>
                                                   </thead>
                                                   <tbody>
                                                   <tr>
                                                       <td>
                                                           <div class="form-group">
                                                               <div class="col-xs-12">
                                                                   <input type="email" class="form-control" id="product-numbers0"  name="product-numbers0" placeholder=" أدخل أعداد">
                                                               </div>
                                                           </div>
                                                       </td>
                                                       <td>
                                                           <div class="form-group">
                                                               <div class="col-xs-12">
                                                                   <input type="email" class="form-control" id="product-buying-price0" name="product-buying-price0" placeholder=" أدخل سعر البيع">
                                                               </div>
                                                           </div>
                                                       </td>
                                                       <td>
                                                           <div class="form-group">
                                                               <div class="col-xs-12">
                                                                   <input type="email" class="form-control" id="product-unite-price0" name="product-unite-price0" placeholder=" أدخل سعر الوحدة ">
                                                               </div>
                                                           </div>
                                                       </td>
                                                       <td>
                                                           <div class="form-group">
                                                               <div class="col-xs-12">
                                                                   <input type="email" class="form-control" id="product-name0"  name="product-name0" placeholder="أدخل إسم المنتج">
                                                               </div>
                                                           </div>
                                                       </td>
                                                       <td>
                                                           <div class="form-group">
                                                               <div class="col-xs-8">
                                                                   <button class="btn btn-danger   glyphicon glyphicon-remove " onclick="deleteRow($(this))" ></button>

                                                               </div>
                                                           </div>
                                                       </td>
                                                   </tr>
                                                   </tbody>
                                               </table>

                                               </div>

                                                  <!-- hiden input date-->
                                                 <input type="hidden"  id="product-date-creation0"  value="inputdate" name="product-date-creation0" >

                                                 <!-- hiden input count-->
                                                 <input type="hidden"  id="count"  value="before_submit" name="count" >

                                             </form>
                                             <!--end form -->
                                     </div>
                                     <div class="panel-footer">
                                         <div class="row">
                                             <div class="col-xs-4">

                                                 <label for="dateofbirth">إختر تاريخ</label>
                                                 <input type="date"  id="cmd-date" name="real-date-cmd-creation">

                                             </div>

                                             <div class="col-xs-4 pull-right col-xs-offset-3 ">

                                                 <a class="c-btn c-datepicker-btn" data-toggle="modal" id="form-sub">
                                                     <span class="material-icon">حفظ</span>
                                                 </a>

                                             </div>
                                         </div>

                                     </div>

                                 </div>
                             </div>
                         </div>
                        </div>
                        <!-- end  tabs create new item  in stock table-->
                        <div role="tabpanel" class="tab-pane  fade in" id="sale">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel " style="margin-bottom: 0px;">
                                    <div class="panel-heading " >
                                        <div class="row">
                                          <div class="col-lg-6" id="total_pro">
                                            <h2>المجموع <span class="label label-info">  0  آوقية </span></h2>

                                          </div>
                                           <div class="col-lg-6">
                                            <h2>
                                                <button class="btn btn-info btn-xs  pull-right" id="change_total"  onclick="sale_change_total()">
                                                <span class="material-icon">تغيير مجموع  </span>
                                                </button>
                                            </h2>
                                           </div>
                                        </div>


                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <div class="">
                                            <table  width="100%"  cellspacing="0" class="table dt-responsive  " id="dataTables-sale">
                                                <thead>
                                                <tr>
                                                    <th>pro_name</th>
                                                    <th>pro_unite_P</th>
                                                    <th>pro_bying_p</th>
                                                    <th>pro_number</th>
                                                    <th>change_bying_p</th>
                                                    <th style="">id_pro</th>




                                                </tr>
                                                </thead>
                                                <tbody>



                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.panel-body -->
                                    <div class="panel-footer" style="background-color: #fff">
                                      <div class="row">
                                          <div class="col-lg-7">
                                              <div class="form-group">
                                                  <div class="input-group date form_datetime col-md-7" data-date="2017-02-21T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p">
                                                      <input class="form-control" size="16" type="text" value="" readonly>
                                                      <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                  </div>
                                                  <input type="hidden" id="mirror_field" value="" readonly /><br/>
                                              </div>
                                          </div>
                                          <div class="col-lg-3 pull-right">
                                              <a class="c-btn c-datepicker-btn"  id="sale_btn">
                                                  <span class="material-icon">حفظ</span>
                                              </a>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                                <!-- /.panel -->


                            </div>

                        </div>


                        </div>
                        <!-- end  tabs stock table-->
                        <!-- end  tabs sale-->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row tabs stock   -->

        <div class="row">
            <div class="col-lg-8">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Bordered Table</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                     <!--   <table class="table table-bordered">
                            <tbody><tr>
                                <th style="width: 10px">#</th>
                                <th>Task</th>
                                <th>Progress</th>
                                <th style="width: 40px">Label</th>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>Update software</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-red">55%</span></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Clean database</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-yellow">70%</span></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Cron job running</td>
                                <td>
                                    <div class="progress progress-xs progress-striped active">
                                        <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-light-blue">30%</span></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Fix and squish bugs</td>
                                <td>
                                    <div class="progress progress-xs progress-striped active">
                                        <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-green">90%</span></td>
                            </tr>
                            </tbody></table>-->

                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">«</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
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
                            <a href="#" class="list-group-item">
                                <i class="fa fa-tasks fa-fw"></i> New Task
                                <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-money fa-fw"></i> Payment Received
                                <span class="pull-right text-muted small"><em>Yesterday</em>
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
    <!-- /#page-wrapper -->
  </div>
</div>
<!-- /#wrapper -->




<!-- Modal submit form success -->
<div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h1><i class="fa fa-check-circle-o" aria-hidden="true"></i> تمت العملية بنجاح </h1>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button  class="btn btn-default pull-left" data-dismiss="modal">أغلق
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal -->




<!-- Modal submit form warning  -->
<div class="modal fade" id="warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-warning">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h1><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Warning Modal</h1>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal -->

<!-- Modal delete -->
<div class="modal fade" id="danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-warning">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h1><i class="fa fa-question-circle-o" aria-hidden="true"></i>هل أنت متأكد   </h1>
            </div>
            <div class="modal-body">
                <form  class="form-horizontal" id="delele_product_form"  action="#" method="#">
                    <input type="hidden"  value="78" name="id_product_to_delete" id="id_product_to_delete">

                </form>
            </div>
            <div class="modal-footer">
                <div class="">
                    <div class="clo-xs-5 pull-left" >
                        <button  class="btn btn-info "  data-dismiss="modal">لا</button>

                    </div>
                    <div class="clo-xs-5 pull-right">
                        <button  class="btn btn-danger " id="delete_product" data-dismiss="modal">نعم</button>

                    </div>

                </div>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal -->


<!-- Modal modify product  -->
<div class="modal fade" id="model_modify_product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h1><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Info Modal</h1>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" id="form_modify_product">
                    <div class="form-group">
                        <label class="control-label col-sm-2" >name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="modify_product_name"  id="up1" value="none1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">unite price:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="modify_unite_price"  id="up2" value="none2" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >bying price:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="modify_bying_price" id="up3"  value="none3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >quantity:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name ="modify_product_number" id="up4" value="none4" >
                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button"  id="submit_update_product_form" class="btn btn-info pull-right" data-dismiss="modal">submit</button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal -->

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<!--<script src="../vendor/raphael/raphael.min.js"></script>
<script src="../vendor/morrisjs/morris.min.js"></script>
<script src="../vendor/data/morris-data.js"></script>-->

<!-- DataTables JavaScript -->
<script src="../vendor/datatables/js/jquery.dataTables.js"></script>
<script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
<script src=""></script>
<script src="../js/add_or_drop_rows_in_DataTable.js"></script>







<!-- Custom Theme JavaScript -->
<script src="../js/sb-admin-2.js"></script>

<!-- create new tr in table -->
<script src="../js/dynamic-row.js"></script>

<!-- Custom submit-form JavaScript -->
<script src="../js/submit-from.js"></script>

<!-- Custom delete_product JavaScript -->
<script src="../js/delete_product.js"></script>


<script src="../js/modify_product.js"></script>



<script src="../date_time_picker/bootstrap-datetimepicker.min.js"></script>
<script src="../date_time_picker/bootstrap-datetimepicker.ar.js"></script>

<script src="../js/date_timePicker_custom.js"></script>

<script src="../js/switch_btn.js"></script>



<script src="../js/submit_sale_data.js"></script>

<script src="../js/change_total_sales.js"></script>


<!-- Page-Level Demo Scripts - Tables - Use for reference -->




<style>






</style>
<script type="text/javascript">


</script>
</body>

</html>

