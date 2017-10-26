
<?php



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

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


    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

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
                    <li><a href="login.html"  class="text-right" ><i class=" fa fa-sign-out fa-fw "></i> الخروج</a>
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
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> مخزون
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
                        <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
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
                <!-- Nav tabs --><div class="card">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active pull-right"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                        <li role="presentation" class="pull-right"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
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
                                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                <tr>
                                                    <th>Rendering engine</th>
                                                    <th>Browser</th>
                                                    <th>Platform(s)</th>
                                                    <th>Engine version</th>
                                                    <th>CSS grade</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php   for($i=0;$i<=100;$i++) {?>
                                                    <tr class="">
                                                        <td><?php  echo $i;?></td>
                                                        <td><?php echo $i;  ?></td>
                                                        <td>-</td>
                                                        <td class="center">-</td>
                                                        <td class="center">U</td>
                                                    </tr>
                                                <?php  }?>
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
                        <table class="table table-bordered">
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
                            </tbody></table>
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




<!-- Modal submit form secuss -->
<div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h1><i class="fa fa-check-circle-o" aria-hidden="true"></i> Info Modal</h1>
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

<!-- Custom Theme JavaScript -->
<script src="../js/sb-admin-2.js"></script>

<!-- DataTables JavaScript -->
<script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- create new tr in table -->
<script src="../js/dynamic-row.js"></script>

<!-- Custom submit-form JavaScript -->
<script src="../js/submit-from.js"></script>


<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });





</script>

</body>

</html>