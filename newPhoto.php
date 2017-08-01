<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('head.php') ?>
</head>

<body>
<!-- container section start -->
<section id="container" class="">
    <!--header start-->
    <?php include ('header.php')?>
    <!--header end-->

    <!--sidebar start-->
    <?php include ('sidebar.php')?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-files-o"></i> New Photo</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="icon_document_alt"></i>Photos</li>
                        <li><i class="fa fa-files-o"></i>New Photo</li>
                    </ol>
                </div>
            </div>
            <!-- Form validations -->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            New Photo
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">

                                    <div class="form-group ">
                                        <label for="photo_name" class="control-label col-lg-2">Photo Name <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="photo_name" name="photo_name"  type="text" required />
                                        </div>

                                    </div>

                                    <div class="form-group ">
                                        <label for="photo_image" class="control-label col-lg-2">Photo Image <span class="required">*</span></label>
                                        <div class="col-lg-4">
                                            <input class="form-control" type="file" name="photo_image" id="photo_image" required>
                                        </div>

                                        <label for="photo_status" class="control-label col-lg-2">Photo Status <span class="required">*</span></label>
                                        <div class="col-lg-4">

                                            <select class="form-control" id="photo_status" name="photo_status" required>

                                                <option value="Select_Status" selected>Select Status</option>
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>

                                            </select>

                                        </div>

                                    </div>

                                    <div class="form-group ">
                                        <label for="photo_details" class="control-label col-lg-2">Photo Details <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control summernote" name="photo_details" id="photo_details" required></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group " align="center">
                                        <div class="col-lg-10">
                                            <input class="btn btn-success" type="submit" style="margin-left: 180px">
                                            <input class="btn btn-close" type="reset" >
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>

                </div>
        </section>
        </div>
        </div>

        <!-- page end-->
    </section>
</section>
<!--main content end-->
<div class="text-right">
    <div class="credits">
        <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
        -->
        <a href="#">Icon College</a> by <a href="#">A2N</a>
    </div>
</div>
</section>
<!-- container section end -->

<!-- javascripts -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- jquery validate js -->
<script type="text/javascript" src="js/jquery.validate.min.js"></script>

<!-- custom form validation script for this page-->
<script src="js/form-validation-script.js"></script>
<!--custome script for all page-->
<script src="js/scripts.js"></script>

<!-- editor-->
<script>


    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>

<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script>


</body>
</html>
