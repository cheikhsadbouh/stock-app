

<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
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

    <link href="../date_time_picker/bootstrap-datetimepicker.min.css" rel="stylesheet">


    <!-- Custom model-header  CSS -->
    <link href="../css/model-header.css" rel="stylesheet">

    <link href="../css/date.css" rel="stylesheet">

    <link href="../css/select-tag.css" rel="stylesheet">






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


//require(dirname( dirname(dirname(__FILE__))).'/Dao/logging.php');
//require(dirname( dirname(dirname(__FILE__))).'/Dao/cnxn.php');
include(dirname( dirname(dirname(__FILE__))).'/Metier/Metier_check_session.php');
include(dirname( dirname(dirname(__FILE__))).'/Metier/Metier_get_debt.php');

$info_user=Metier_check_session();
$debt=Metier_get_debt();

?>
<body>
<div id="wrapper" style="display:none;">

    <!-- Navigation -->
    <?php  include(dirname( dirname(dirname(__FILE__))).'/Web/views/header.php'); ?>

    <div id="page-wrapper">
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>
            </div><br>
        </div>
        <!-- /.row -->

        <div class="row">

            <div class="col-lg-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bell fa-fw"></i> add_new_user
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <form  class="form-horizontal"  id="form-debt">
                            <div class="list-group">
                                <div class="list-group-item" >
                                    <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input id="name" type="text" class="form-control"  name="name" placeholder="name">
                                            <span class="input-group-addon ">  name</span>

                                        </div><br>
                                        <div class="input-group">
                                            <input id="tel" type="text" class="form-control"  name="tel" placeholder="pass ">
                                            <span class="input-group-addon ">tel</span>

                                        </div><br>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input id="amount" type="text" class="form-control"  name="amount" placeholder="name">
                                            <span class="input-group-addon ">  amount</span>

                                        </div><br>
                                        <div class="input-group">
                                            <input id="reason" type="text" class="form-control"  name="reason" placeholder="pass ">
                                            <span class="input-group-addon ">resaon</span>

                                        </div>
                                    </div>
                                    </div>
                                    <!-- Split button -->
                                    <div class="row">
                                        <div class="col-lg-6 ">
                                            <div class="md-select" >

                                                <label for="ul-id"><button type="button" class="ng-binding  btn"> دين </button></label>
                                                <ul role="listbox" id="ul-id" class="md-whiteframe-z1" aria-activedescendant="state2_AK" name="ul-id">
                                                    <li role="option" id="state2_AK" class="ng-binding ng-scope active" tabindex="-1" aria-selected="true">دين علي</li>
                                                    <li role="option" id="state2_AL" class="ng-binding ng-scope" tabindex="-1" aria-selected="false">دين لي</li>

                                                </ul>

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <a class="c-btn c-datepicker-btn" id="debt-sub" href="#" >
                                                <i class="fa fa-plus-circle  fa-2x">
                                                    <span id="newitem " class="hidden-xs hidden-sm "> إضافت</span>

                                                </i>
                                            </a>


                                        </div>
                                    </div>
                                </div>


                        </form>




                    </div>
                    <!-- /.list-group -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel info total sales  -->

        </div>
        <!--  end add user  -->
        <div class="row">
            <div class="col-lg-6">

                <div class="">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">دين لي</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered" id="display_debt2" cellspacing="0"  width="100%">
                                <thead>
                                <tr>

                                    <th>name</th>
                                    <th>tel</th>
                                    <th>amount</th>
                                    <th>reason</th>
                                    <th>payed</th>
                                    <th>unpayed</th>
                                    <th>settings</th>


                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                if (mysqli_num_rows($debt) > 0) {
                                    while($row = mysqli_fetch_assoc($debt)) {
                                        if($row["debt_type"]=="دين لي"){
                                        ?>
                                        <tr>
                                            <td><?php  echo $row["namess"];?></td>
                                            <td><?php  echo $row["tel"];?></td>
                                            <td><?php  echo $row["amount"];?></td>
                                            <td><?php  echo $row["reason"];?></td>
                                            <td><?php  echo $row["payed"];?></td>
                                            <td><?php  echo $row["unpayed"];?></td>


                                            <td align="center" >
                                                <button class="btn btn-info " onclick="pay_debt('<?php  echo $row["namess"];?>','<?php  echo $row["pass"];?>','<?php  echo $row["role"];?>','<?php  echo $row["idusers"];?>');"><em class="fa fa-usd"></em></button>

                                                <button class="btn btn-default " onclick="modify_debt('<?php  echo $row["namess"];?>','<?php  echo $row["pass"];?>','<?php  echo $row["role"];?>','<?php  echo $row["idusers"];?>');"><em class="fa fa-pencil"></em></button>


                                            </td>


                                        </tr>
                                    <?php  } }}?>
                                <!-- idsales-->
                                </tbody>
                            </table>

                        </div><!-- /.box-body -->

                    </div><!-- /.box -->


                </div>
                <!--end info table user   -->

            </div>


            <div class="col-lg-6">
                <div class="">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">دين علي</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered" id="display_debt" cellspacing="0"  width="100%">
                                <thead>
                                <tr>

                                    <th>name</th>
                                    <th>tel</th>
                                    <th>amount</th>
                                    <th>reason</th>
                                    <th>payed</th>
                                    <th>unpayed</th>
                                    <th>settings</th>


                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $debt=Metier_get_debt();
                                if (mysqli_num_rows($debt) > 0) {
                                    while($row = mysqli_fetch_assoc($debt)) {
                                        if($row["debt_type"]=="دين علي"){
                                        ?>
                                        <tr>
                                            <td><?php  echo $row["namess"];?></td>
                                            <td><?php  echo $row["tel"];?></td>
                                            <td><?php  echo $row["amount"];?></td>
                                            <td><?php  echo $row["reason"];?></td>
                                            <td><?php  echo $row["payed"];?></td>
                                            <td><?php  echo $row["unpayed"];?></td>


                                            <td align="center" >
                                                <button class="btn btn-default " onclick="modify_user('<?php  echo $row["namess"];?>','<?php  echo $row["pass"];?>','<?php  echo $row["role"];?>','<?php  echo $row["idusers"];?>');"><em class="fa fa-pencil"></em></button>

                                                <button class="btn btn-danger"  onclick="delete_user('<?php echo  $row["idusers"];  ?>');"><em class="fa fa-trash"></em></button>

                                            </td>


                                        </tr>
                                    <?php  } }}?>
                                <!-- idsales-->
                                </tbody>
                            </table>

                        </div><!-- /.box-body -->

                    </div><!-- /.box -->


                </div>
                <!--end info table user   -->
            </div>

        </div>


    </div>
    <!-- end row info -->



    <br>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div><br>
    </div>

    <br>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div><br>
    </div>

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


<script src="../js/datatable-debt.js"></script>


<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>


<!-- DataTables JavaScript -->
<script src="../vendor/datatables/js/jquery.dataTables.js"></script>
<script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>



<!-- Custom Theme JavaScript -->
<script src="../js/sb-admin-2.js"></script>

<script src="../date_time_picker/bootstrap-datetimepicker.min.js"></script>
<script src="../date_time_picker/bootstrap-datetimepicker.ar.js"></script>


<script src="../js/debt-submit.js"></script>

<script src="../js/select-tag.js"></script>


<script src="../js/modify_user.js"></script>


<script src="../js/delete_user.js"></script>





<script>









</script>

<!-- Modal modify product  -->
<div class="modal fade" id="model_modify_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h1><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Info Modal</h1>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" id="form_modify_user" onsubmit="return false" method="post" action="">
                    <div class="form-group">
                        <label class="control-label col-sm-2" >name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="m_name" id="m_name"  value="none3">


                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >pass:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="m_pass" id="m_pass"  value="none3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">role:</label>
                        <div class="col-sm-10" id="">
                            <select   class="form-control input-sm ww" name="m_role" id="m_role"></select>

                        </div>
                    </div>



                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button"  onclick="submit_user_form()" class="btn btn-info pull-right" data-dismiss="modal">submit</button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal -->

<script type="text/javascript">

</script>



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
                        <button  class="btn btn-danger " id="delete_user" data-dismiss="modal">نعم</button>

                    </div>

                </div>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal -->
</html>