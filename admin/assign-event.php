<?php
include('../session.php');
include('../custom-functions.php');
role_check($_SESSION['role'],1);


if(isset($_GET['id']))

{
    $eid=$_GET['id'];

}
if(isset($_GET['sv']))

{
    $svid=$_GET['sv'];

}

if(isset($_GET['action'])) {

    if ($_GET['action'] == "assign") {

        if ($svid == 1) {
            $sql = "UPDATE supervisor_assign set supervisor=1 where eventid=" . $eid;
            $res = mysqli_query($db, $sql);
            if ($res) {
                eventMail($sv1_mail, $eid, $db, "supervisor");
                echo "<div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <h4><i class=\"icon  fa-thumbs-up\"></i>Success!!</h4>
               The event has been successfully assigned to a supervisor! Have a great day!
              </div>";
            } else {
                echo "<div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <h4><i class=\"icon  fa-thumbs-up\"></i>OOOPS!!!</h4>
                Something went wrong. Please try again!
              </div>";
            }
        } elseif ($svid == 2) {
            $sql = "UPDATE supervisor_assign set supervisor=2 where eventid=" . $eid;
            $res = mysqli_query($db, $sql);
            if ($res) {
                eventMail($sv2_mail, $eid, $db, "supervisor");
                echo "<div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <h4><i class=\"icon  fa-thumbs-up\"></i>Success!!</h4>
               The event has been successfully assigned to a supervisor! Have a great day!
              </div>";
            } else {
                echo "<div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <h4><i class=\"icon  fa-thumbs-up\"></i>OOOPS!!!</h4>
                Something went wrong. Please try again!
              </div>";
            }
        } elseif ($svid == 3) {
            $sql = "UPDATE supervisor_assign set supervisor=3 where eventid=" . $eid;
            $res = mysqli_query($db, $sql);
            if ($res) {
                eventMail($sv3_mail, $eid, $db, "supervisor");
                echo "<div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <h4><i class=\"icon  fa-thumbs-up\"></i>Success!!</h4>
               The event has been successfully assigned to a supervisor! Have a great day!
              </div>";
            } else {
                echo "<div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <h4><i class=\"icon  fa-thumbs-up\"></i>OOOPS!!!</h4>
                Something went wrong. Please try again!
              </div>";
            }
        } elseif ($svid == 4) {
            $sql = "UPDATE supervisor_assign set supervisor=4 where eventid=" . $eid;
            $res = mysqli_query($db, $sql);
            if ($res) {
                eventMail($sv4_mail, $eid, $db, "supervisor");
                echo "<div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <h4><i class=\"icon  fa-thumbs-up\"></i>Success!!</h4>
               The event has been successfully assigned to a supervisor! Have a great day!
              </div>";
            } else {
                echo "<div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <h4><i class=\"icon  fa-thumbs-up\"></i>OOOPS!!!</h4>
                Something went wrong. Please try again!
              </div>";
            }
        } elseif ($svid == 5) {
            $sql = "UPDATE supervisor_assign set supervisor=5 where eventid=" . $eid;
            $res = mysqli_query($db, $sql);
            if ($res) {
                eventMail($sv5_mail, $eid, $db, "supervisor");
                echo "<div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <h4><i class=\"icon  fa-thumbs-up\"></i>Success!!</h4>
               The event has been successfully assigned to a supervisor! Have a great day!
              </div>";
            } else {
                echo "<div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <h4><i class=\"icon  fa-thumbs-up\"></i>OOOPS!!!</h4>
                Something went wrong. Please try again!
              </div>";
            }
        } elseif ($svid == 6) {
            $sql = "UPDATE supervisor_assign set supervisor=6 where eventid=" . $eid;
            $res = mysqli_query($db, $sql);
            if ($res) {
                eventMail($sv6_mail, $eid, $db, "supervisor");
                echo "<div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <h4><i class=\"icon  fa-thumbs-up\"></i>Success!!</h4>
               The event has been successfully assigned to a supervisor! Have a great day!
              </div>";
            } else {
                echo "<div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <h4><i class=\"icon  fa-thumbs-up\"></i>OOOPS!!!</h4>
                Something went wrong. Please try again!
              </div>";
            }

        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nalli | Admin Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>Nb</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Nalli </b>Booking</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <li>
                        <a href="../logout.php" ><i class="fa fa-sign-out"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="./admin.png" class="img-circle" alt="Admin Image">
                </div>
                <div class="pull-left info">
                    <p>Admin</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>

                <li><a href="view-booking.php"><i class="fa fa-check"></i> <span>Confirmed Booking</span></a></li>
                <li class="active"><a href="manage-booking.php"><i class="fa fa-gears"></i> <span>Manage Events</span></a></li>
                <li><a href="change-password.php"><i class="fa fa-gear"></i> <span>Change Password</span></a></li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

        </section>

        <!-- Main content -->
       <section class="content">

        <div class="row">
            <div class="col-md-6">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Assign Event To</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="box-group" id="supervisor">
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#sv1">
                                            Supervisor 1
                                        </a>
                                    </h4>
                                </div>
                                <div id="sv1" class="panel-collapse collapse">
                                    <div class="box-body">

                                        <div class="box box-info">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"><b>Assign</b></h3>
                                                <a id="assign_sv1" href="?id=<?php echo $_GET['id'] ?>&action=assign&sv=1" class="btn btn-success pull-right">Assign</a>
                                            </div>
                                            <div class="box-body">

                                                <h3 class="box-title"><b>Already Assigned Events</b></h3>
                                                <table id="supervisor1" class="table table-bordered table-hover">

                                                    <thead>

                                                    <tr>
                                                        <th> Event Name </th>
                                                        <th> Date </th>
                                                        <th> View Event </th>

                                                    </tr>


                                                    </thead>
                                                    <tbody>


                                                    <?php


                                                    $sql="SELECT event_content.* from event_content,supervisor_assign WHERE event_content.eventid=supervisor_assign.eventid and supervisor_assign.supervisor=1 ";
                                                    $res=mysqli_query($db, $sql);
                                                    $sql1="SELECT * from event_status WHERE verify=1";
                                                    $res1=mysqli_query($db, $sql1);

                                                    while($row=mysqli_fetch_array($res)) {

                                                        echo '<tr>';
                                                        echo '<td>' . $row["eventname"] . '</td>';
                                                        echo '<td>' . $row["eventduration"] . '</td>';
                                                        echo '<td><button type="button" data-toggle="modal" data-target="#eventid-'.$row["eventid"].'" class="btn btn-primary">Open</button></td>';
                                                        echo '</tr>';
                                                    }
                                                    ?>





                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#sv2">
                                           Supervisor 2
                                        </a>
                                    </h4>
                                </div>
                                <div id="sv2" class="panel-collapse collapse">
                                    <div class="box-body">

                                        <div class="box box-info">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"><b>Assign</b></h3>
                                                <a href="?id=<?php echo $_GET['id'] ?>&action=assign&sv=2" class="btn btn-success pull-right">Assign</a>
                                            </div>
                                            <div class="box-body">

                                                <h3 class="box-title"><b>Already Assigned Events</b></h3>
                                                <table id="supervisor2" class="table table-bordered table-hover">

                                                    <thead>

                                                    <tr>
                                                        <th> Event Name </th>
                                                        <th> Date </th>
                                                        <th> View Event </th>
                                                    </tr>


                                                    </thead>
                                                    <tbody>


                                                    <?php


                                                    $sql="SELECT event_content.* from event_content,supervisor_assign WHERE event_content.eventid=supervisor_assign.eventid and supervisor_assign.supervisor=2 ";
                                                    $res=mysqli_query($db, $sql);
                                                    $sql1="SELECT * from event_status WHERE verify=1";
                                                    $res1=mysqli_query($db, $sql1);

                                                    while($row=mysqli_fetch_array($res)) {

                                                        echo '<tr>';
                                                        echo '<td>' . $row["eventname"] . '</td>';
                                                        echo '<td>' . $row["eventduration"] . '</td>';
                                                        echo '<td><button type="button" data-toggle="modal" data-target="#eventid-'.$row["eventid"].'" class="btn btn-primary">Open</button></td>';
                                                        echo '</tr>';
                                                    }
                                                    ?>





                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#sv3">
                                            Supervisor 3
                                        </a>
                                    </h4>
                                </div>
                                <div id="sv3" class="panel-collapse collapse">
                                    <div class="box-body">


                                        <div class="box box-info">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"><b>Assign</b></h3>
                                                <a href="?id=<?php echo $_GET['id'] ?>&action=assign&sv=3" class="btn btn-success pull-right">Assign</a>
                                            </div>
                                            <div class="box-body">

                                                <h3 class="box-title"><b>Already Assigned Events</b></h3>
                                                <table id="supervisor3" class="table table-bordered table-hover">

                                                    <thead>

                                                    <tr>
                                                        <th> Event Name </th>
                                                        <th> Date </th>
                                                        <th> View Event </th>
                                                    </tr>


                                                    </thead>
                                                    <tbody>


                                                    <?php


                                                    $sql="SELECT event_content.* from event_content,supervisor_assign WHERE event_content.eventid=supervisor_assign.eventid and supervisor_assign.supervisor=3 ";
                                                    $res=mysqli_query($db, $sql);
                                                    $sql1="SELECT * from event_status WHERE verify=1";
                                                    $res1=mysqli_query($db, $sql1);

                                                    while($row=mysqli_fetch_array($res)) {

                                                        echo '<tr>';
                                                        echo '<td>' . $row["eventname"] . '</td>';
                                                        echo '<td>' . $row["eventduration"] . '</td>';
                                                        echo '<td><button type="button" data-toggle="modal" data-target="#eventid-'.$row["eventid"].'" class="btn btn-primary">Open</button></td>';
                                                        echo '</tr>';
                                                    }
                                                    ?>





                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#sv4">
                                            Supervisor 4
                                        </a>
                                    </h4>
                                </div>
                                <div id="sv4" class="panel-collapse collapse">
                                    <div class="box-body">


                                        <div class="box box-info">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"><b>Assign</b></h3>
                                                <a href="?id=<?php echo $_GET['id'] ?>&action=assign&sv=4" class="btn btn-success pull-right">Assign</a>
                                            </div>
                                            <div class="box-body">

                                                <h3 class="box-title"><b>Already Assigned Events</b></h3>
                                                <table id="supervisor4" class="table table-bordered table-hover">

                                                    <thead>

                                                    <tr>
                                                        <th> Event Name </th>
                                                        <th> Date </th>
                                                        <th> View Event </th>
                                                    </tr>


                                                    </thead>
                                                    <tbody>


                                                    <?php

                                                    $sql="SELECT event_content.* from event_content,supervisor_assign WHERE event_content.eventid=supervisor_assign.eventid and supervisor_assign.supervisor=4 ";
                                                    $res=mysqli_query($db, $sql);
                                                    $sql1="SELECT * from event_status WHERE verify=1";
                                                    $res1=mysqli_query($db, $sql1);

                                                    while($row=mysqli_fetch_array($res)) {

                                                        echo '<tr>';
                                                        echo '<td>' . $row["eventname"] . '</td>';
                                                        echo '<td>' . $row["eventduration"] . '</td>';
                                                        echo '<td><button type="button" data-toggle="modal" data-target="#eventid-'.$row["eventid"].'" class="btn btn-primary">Open</button></td>';
                                                        echo '</tr>';
                                                    }
                                                    ?>





                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#sv5">
                                            Supervisor 5
                                        </a>
                                    </h4>
                                </div>
                                <div id="sv5" class="panel-collapse collapse">
                                    <div class="box-body">


                                        <div class="box box-info">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"><b>Assign</b></h3>
                                                <a href="?id=<?php echo $_GET['id'] ?>&action=assign&sv=5" class="btn btn-success pull-right">Assign</a>
                                            </div>
                                            <div class="box-body">

                                                <h3 class="box-title"><b>Already Assigned Events</b></h3>
                                                <table id="supervisor5" class="table table-bordered table-hover">

                                                    <thead>

                                                    <tr>
                                                        <th> Event Name </th>
                                                        <th> Date </th>
                                                        <th> View Event </th>
                                                    </tr>


                                                    </thead>
                                                    <tbody>


                                                    <?php


                                                    $sql="SELECT event_content.* from event_content,supervisor_assign WHERE event_content.eventid=supervisor_assign.eventid and supervisor_assign.supervisor=5 ";
                                                    $res=mysqli_query($db, $sql);
                                                    $sql1="SELECT * from event_status WHERE verify=1";
                                                    $res1=mysqli_query($db, $sql1);

                                                    while($row=mysqli_fetch_array($res)) {

                                                        echo '<tr>';
                                                        echo '<td>' . $row["eventname"] . '</td>';
                                                        echo '<td>' . $row["eventduration"] . '</td>';
                                                        echo '<td><button type="button" data-toggle="modal" data-target="#eventid-'.$row["eventid"].'" class="btn btn-primary">Open</button></td>';
                                                        echo '</tr>';
                                                    }
                                                    ?>





                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#sv6">
                                            Supervisor 6
                                        </a>
                                    </h4>
                                </div>
                                <div id="sv6" class="panel-collapse collapse">
                                    <div class="box-body">


                                        <div class="box box-info">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"><b>Assign</b></h3>
                                                <a href="?id=<?php echo $_GET['id'] ?>&action=assign&sv=6" class="btn btn-success pull-right">Assign</a>
                                            </div>
                                            <div class="box-body">

                                                <h3 class="box-title"><b>Already Assigned Events</b></h3>
                                                <table id="supervisor6" class="table table-bordered table-hover">

                                                    <thead>

                                                    <tr>
                                                        <th> Event Name </th>
                                                        <th> Date </th>
                                                        <th> View Event </th>
                                                    </tr>


                                                    </thead>
                                                    <tbody>


                                                    <?php


                                                    $sql="SELECT event_content.* from event_content,supervisor_assign WHERE event_content.eventid=supervisor_assign.eventid and supervisor_assign.supervisor=6 ";
                                                    $res=mysqli_query($db, $sql);
                                                    $sql1="SELECT * from event_status WHERE verify=1";
                                                    $res1=mysqli_query($db, $sql1);

                                                    while($row=mysqli_fetch_array($res)) {

                                                        echo '<tr>';
                                                        echo '<td>' . $row["eventname"] . '</td>';
                                                        echo '<td>' . $row["eventduration"] . '</td>';
                                                        echo '<td><button type="button" data-toggle="modal" data-target="#eventid-'.$row["eventid"].'" class="btn btn-primary">Open</button></td>';
                                                        echo '</tr>';
                                                    }
                                                    ?>





                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
           </div>
           <?php


           $sql5="SELECT * from event_content WHERE verify=1";
           $res5=mysqli_query($db, $sql5);

           while($row=mysqli_fetch_array($res5))
           {

               ?>

               <div class="modal fade" id="eventid-<?php echo $row['eventid'];?>">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span></button>
                               <h4 class="modal-title">Review Your Application</h4>
                           </div>
                           <div class="modal-body">
                               <div class="form-group">
                                   <label for="rev-staff-name" class="control-label">Staff Name</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-staff-name" value="<?php echo $row['staffname'];?> " name="rev-staff-name" readonly="readonly" >
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-staff-email" class="control-label">Staff Email</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-staff-email"value="<?php echo $row['staffmail'];?>" name="rev-staff-email" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-staff-number" class="control-label">Staff Contact</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-staff-number" value="<?php echo $row['staffnumber'];?>" name="rev-staff-number" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-student-name" class="control-label">Student Name</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-student-name" value="<?php echo $row['studname'];?>" name="rev-student-name" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-student-email" class="control-label">Student Email</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-student-email" value="<?php echo $row['studmail'];?>" name="rev-student-email" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-student-number" class="control-label">Student Contact</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-student-number" value="<?php echo $row['studnumber'];?>" name="rev-student-number" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-event-name" class="control-label">Event Name</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-event-name" value="<?php echo $row['eventname'];?>" name="rev-event-name" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-org-dept" class="control-label">Organizing Dept</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-org-dept" value="<?php echo $row['orgdept'];?>" name="rev-org-dept" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-guest-particulars" class="control-label">Guest Particulars</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-guest-particulars" value="<?php echo $row['guestdetails'];?>" name="rev-guest-particulars" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-attending-classes" class="control-label">Attending Classes/Members</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-attending-classes" value="<?php echo $row['attclasses'];?>" name="rev-attending-classes" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-event-topic" class="control-label">Event Subject</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-event-topic" value="<?php echo $row['eventtopic'];?>" name="rev-event-topic" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-event-duration" class="control-label">Event Duration</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-event-duration" value="<?php echo $row['eventduration'];?>" name="rev-event-duration" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-chairs-aud" class="control-label">Chairs (Audience)</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-chairs-aud" value="<?php echo $row['chairsaud'];?>" name="rev-chairs-aud" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-lcdproj" class="control-label">LCD Projector</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-lcdproj" value="<?php echo $row['lcdproj'];?>" name="rev-lcdproj" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-ac" class="control-label">Air Conditioning</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-ac" value="<?php echo $row['ac'];?>" name="rev-ac" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-chairs-stg" class="control-label">Chairs (Stage)</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-chairs-stg" value="<?php echo $row['chairsstg'];?>" name="rev-chairs-stg" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-podium" class="control-label">Podium</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-podium" value="<?php echo $row['podium'];?>" name="rev-podium" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-oth-req" class="control-label">Other Requirements</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-oth-req" value="<?php echo $row['othreq'];?>" name="rev-oth-req" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-wired-mic" class="control-label">Wired Mic</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-wired-mic" value="<?php echo $row['wiredmic'];?>" name="rev-wired-mic" readonly="readonly">
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label for="rev-cordl-mic" class="control-label">Cordless Mic</label>

                                   <div>
                                       <input type="text" class="form-control" id="rev-cordl-mic" value="<?php echo $row['cordlmic'];?>" name="rev-cordl-mic" readonly="readonly">
                                   </div>
                               </div>
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

                           </div>
                       </div>
                       <!-- /.modal-content -->
                   </div>
                   <!-- /.modal-dialog -->
               </div>

               <?php


           }

           ?>

       </section>


        <!-- /.content -->
    </div>


    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 3.3.7 -->
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/bower_components/raphael/raphael.min.js"></script>
<script src="/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/bower_components/moment/min/moment.min.js"></script>
<script src="/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- datepicker -->
<script src="/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<script>
    $(function () {
        $('#supervisor1').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
        $('#supervisor2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
        $('#supervisor3').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
        $('#supervisor4').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
        $('#supervisor5').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
        $('#supervisor6').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })

    })
</script>
<script>
    $(document).ready(function() {
        $('#assign_sv1').prop('disabled', false);

        <?php

            $sql = "SELECT * from supervisor_assign where eventid=".$eid;
            $res = mysqli_query($db,$sql);
            $row = mysqli_fetch_array($res);
            $flag = $row['seen'];
            if($flag==1)
            {
        ?>
                $('#assign_sv1').prop('disabled', true);
                <?php }
                else{

                ?>
        $('#assign_sv1').prop('disabled', false);
        <?php } ?>
            }
        });
    });
</script>
</body>
</html>
