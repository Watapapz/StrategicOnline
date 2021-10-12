<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <meta name="description" content="Forms validation | Nura Admin">
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
                              
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Validation</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
             


                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-12">
                            <div class="card mb-6">
                            

                                <div class="card-body">

                                    <form action="#" data-parsley-validate novalidate>
                                        <div class="form-group">
                                            <label for="userName">User Name<span class="text-danger">*</span></label>
                                            <input type="text" name="nick" data-parsley-trigger="change" required placeholder="Enter user name" class="form-control" id="userName">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                            <input type="email" name="email" data-parsley-trigger="change" required placeholder="Enter email" class="form-control" id="emailAddress">
                                        </div>
                                        <div class="form-group">
                                            <label for="pass1">Password<span class="text-danger">*</span></label>
                                            <input id="pass1" type="password" placeholder="Password" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                            <input data-parsley-equalto="#pass1" type="password" required placeholder="Password" class="form-control" id="passWord2">
                                        </div>
                                        <div class="form-group">
                                            <label>URL</label>
                                            <div>
                                                <input data-parsley-type="url" type="url" class="form-control" required placeholder="URL" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Number</label>
                                            <div>
                                                <input data-parsley-type="number" type="text" class="form-control" required placeholder="Enter only numbers" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Textarea</label>
                                            <div>
                                                <textarea required class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <input id="remember-1" type="checkbox">
                                                <label for="remember-1"> Remember me </label>
                                            </div>
                                        </div>

                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary" type="submit">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary m-l-5">
                                                Cancel
                                            </button>
                                        </div>

                                    </form>

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



    <script src="assets/plugins/parsleyjs/parsley.min.js"></script>
    <script>
    $(function() {
        var $sections = $('.form-section');

        function navigateTo(index) {
            // Mark the current section with the class 'current'
            $sections
                .removeClass('current')
                .eq(index)
                .addClass('current');
            // Show only the navigation buttons that make sense for the current section:
            $('.form-navigation .previous').toggle(index > 0);
            var atTheEnd = index >= $sections.length - 1;
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation [type=submit]').toggle(atTheEnd);
        }

        function curIndex() {
            // Return the current index by looking at which section has the class 'current'
            return $sections.index($sections.filter('.current'));
        }

        // Previous button is easy, just go back
        $(document).on( "click", ".form-navigation .previous", function() {             
            navigateTo(curIndex() - 1);
        });

        // Next button goes forward iff current block validates
        $(document).on( "click", ".form-navigation .next", function() {      
            $('.demo-form').parsley().whenValidate({
                group: 'block-' + curIndex()
            }).done(function() {
                navigateTo(curIndex() + 1);
            });
        });

        // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
        $sections.each(function(index, section) {
            $(section).find(':input').attr('data-parsley-group', 'block-' + index);
        });
        navigateTo(0); // Start at the beginning
    });


    $('#form').parsley();
    </script>
    <!-- END Java Script for this page -->

</body>


<!-- Mirrored from demo.bootstrap24.com/nura-admin-4/forms-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Oct 2021 05:00:00 GMT -->
</html>1