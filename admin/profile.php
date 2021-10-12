<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nura Admin - My profile</title>
    <meta name="description" content="My profile | Nura Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/font-awesome/css/all.css" rel="stylesheet" type="text/css" />

    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

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

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">


                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">My Profile</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="far fa-user"></i> Profile details</h3>
                                </div>

                                <div class="card-body">


                                    <form action="#" method="post" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Full name (required)</label>
                                                    <input class="form-control" name="name" type="text" value="Administrator" required />
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Valid Email (required)</label>
                                                    <input class="form-control" name="email" type="email" value="office@website.com" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" name="password" type="password" value="" />
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Repeat Password</label>
                                                    <input class="form-control" name="password2" type="password" value="" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Select country:</label>
                                                    <select class="form-control" name="state">
                                                            <option value="AR">Argentina</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="CA">Canada</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                        <label>Select birth year:</label>
                                                        <select class="form-control" name="year">
                                                                <option value="2001">2001</option>
                                                                <option value="2002">2002</option>
                                                                <option value="2003">2003</option>
                                                                <option value="2004">2004</option>
                                                                <option value="2005">2005</option>
                                                                <option value="2006">2006</option>
                                                                <option value="2007">2007</option>
                                                                <option value="2008">2008</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Skype ID</label>
                                                    <input class="form-control" name="skype" type="text" value="skypeid" />
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Facebook page</label>
                                                    <input class="form-control" name="skype" type="text" value="facebook" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <hr>
                                                <button type="button" class="btn btn-primary">Edit profile</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                     

                            </div>
        

                        </div>
    



                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="far fa-file-image"></i> Avatar</h3>
                                </div>

                                <div class="card-body text-center">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <img alt="avatar" class="img-fluid" src="assets/images/avatars/avatar.png">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="button" class="btn btn-danger btn-block mt-3">Delete avatar</button>
                                        </div>

                                        <div class="col-lg-12">
                                            <button type="button" class="btn btn-info btn-block mt-3">Change avatar</button>
                                        </div>
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

        <!-- App js -->
        <script src="assets/js/admin.js"></script>

    </div>
    <!-- END main -->

</body>


<!-- Mirrored from demo.bootstrap24.com/nura-admin-4/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Oct 2021 04:59:59 GMT -->
</html>