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
                    <h3 class="page-header"><i class="fa fa-files-o"></i>College Info</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="icon_document_alt"></i>College Info</li>
<!--                        <li><i class="fa fa-files-o"></i>Create a new Menu</li>-->
                    </ol>
                </div>
            </div>
            <!-- Form validations -->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            College Info
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                    <div class="form-group ">
                                        <label for="college_name" class="control-label col-lg-2">College Name <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="college_name" name="college_name"type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="event_content" class="control-label col-lg-2">College Location <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control summernote" name="college_location" id="college_location" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="college_tel1" class="control-label col-lg-2">College Telephone 1: <span class="required">*</span></label>
                                        <div class="col-lg-4">

                                            <input class="form-control" id="college_tel1" name="college_tel1" type="text" required />

                                        </div>

                                        <label for="college_tel2" class="control-label col-lg-2">College Telephone 2: <span class="required">*</span></label>
                                        <div class="col-lg-4">

                                            <input class="form-control" id="college_tel2" name="college_tel2" type="text" required />

                                        </div>

                                    </div>

                                    <div class="form-group ">

                                        <label for="college_fax" class="control-label col-lg-2">College Fax: <span class="required">*</span></label>
                                        <div class="col-lg-4">
                                            <input class="form-control" id="college_fax" name="college_fax" type="text" required />
                                        </div>

                                        <label for="college_email" class="control-label col-lg-2">College Email <span class="required">*</span></label>
                                        <div class="col-lg-4">
                                            <input class="form-control" id="college_email" name="college_email" type="text" required />
                                        </div>



                                    </div>

                                    <div class="form-group ">

                                        <label for="college_domain" class="control-label col-lg-2">College Domain <span class="required">*</span></label>
                                        <div class="col-lg-4">
                                            <input class="form-control" id="college_domain" name="college_domain" type="text" required />
                                        </div>

                                        <label for="college_facebook" class="control-label col-lg-2">College Facebook <span class="required">*</span></label>
                                        <div class="col-lg-4">
                                            <input class="form-control" id="college_facebook" name="college_facebook" type="text" required />
                                        </div>



                                    </div>

                                    <div class="form-group ">

                                        <label for="college_twitter" class="control-label col-lg-2">College Twitter <span class="required">*</span></label>
                                        <div class="col-lg-4">
                                            <input class="form-control" id="college_twitter" name="college_twitter" type="text" required />
                                        </div>

                                        <label for="college_linkedin" class="control-label col-lg-2">College LinkedIn <span class="required">*</span></label>
                                        <div class="col-lg-4">
                                            <input class="form-control" id="college_linkedin" name="college_linkedin" type="text" required />
                                        </div>



                                    </div>

                                    <div class="form-group ">

                                        <label for="college_google" class="control-label col-lg-2">College Google <span class="required">*</span></label>
                                        <div class="col-lg-4">
                                            <input class="form-control" id="college_google" name="college_google" type="text" required />
                                        </div>

                                        <label for="college_youtube" class="control-label col-lg-2">College Youtube <span class="required">*</span></label>
                                        <div class="col-lg-4">
                                            <input class="form-control" id="college_youtube" name="college_youtube" type="text" required />
                                        </div>

                                    </div>

                                    <div class="form-group ">

                                        <label for="college_status" class="control-label col-lg-2">College Status <span class="required">*</span></label>
                                        <div class="col-lg-4">

                                            <select class="form-control" id="college_status" name="college_status" required>

                                                <option value="Select_Status" selected>Select Status</option>
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>

                                            </select>

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
<!--<script src="js/jquery.js"></script>-->
<script src="js/jquery-1.8.3.min.js"></script>
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
