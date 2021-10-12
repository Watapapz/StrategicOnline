<!DOCTYPE html>
<html lang="en">

<head>
    <title> Admin</title>
    <meta name="description" content="DataTables | Nura Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <link rel="shortcut icon" href="assets/images/favicon.ico">


    <link href="assets/font-awesome/css/all.css" rel="stylesheet" type="text/css" />

    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" type="text/css" href="assets/plugins/datatables/datatables.min.css" />
    <style>
        tfoot {
            display: table-header-group;
        }
    </style>

</head>

<body class="adminbody">

    <div id="main">
     <?php
include "adminheader.php";
?>
<?php
include "sidebar.php";
?>
        <div class="content-page">

            <div class="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">DataTables</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">DataTables</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
               

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card mb-3">
                        

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                          

                                </div>
                             

                            </div>
                         

                        </div>

                    </div>
               

                </div>
       

            </div>
        

        </div>
   



        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/moment.min.js"></script>

        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>

        <script src="assets/js/admin.js"></script>

    </div>

    <script src="assets/plugins/datatables/datatables.min.js"></script>
   
    <script src="assets/data/data_datatables.js"></script>



</body>
</html>