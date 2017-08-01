<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('head.php') ?>
</head>

<body>
<!-- container section start -->
<section id="container" class="">
    <!--header start-->
    <?php include ('header.php') ?>
    <!--header end-->

    <!--sidebar start-->
    <?php include ('sidebar.php') ?>
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-table"></i>Manage &nbsp Photo</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                        <li><i class="fa fa-table"></i>Photos</li>
                        <li><i class="fa fa-th-list"></i>Manage Photo</li>
                    </ol>
                </div>
            </div>
            <!-- page start-->

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Manage Photo
                        </header>
                        <div class="panel-body table table-responsive">
                        <table class="table table-striped table-advance table-hover">
                            <tbody>
                            <tr>
                                <th>Photo Name</th>
                                <th>Photo Status</th>
                                <th>Photo Image</th>
                                <th>Photo Details</th>
                                <th> Action</th>
                            </tr>
                            <tr>
                                <td>Photo Name</td>
                                <td>Photo Status</td>
                                <td>Photo Image</td>
                                <td>Photo Details</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn" href="#"><i class="icon_pencil-edit"></i></a>
                                        <a class="btn " href="#"><i class="icon_trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Photo Name</td>
                                <td>Photo Status</td>
                                <td>Photo Image</td>
                                <td>Photo Details</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn" href="#"><i class="icon_pencil-edit"></i></a>
                                        <a class="btn " href="#"><i class="icon_trash"></i></a>
                                    </div>
                                </td>
                            </tr>


                            </tbody>
                        </table>
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
<!-- nicescroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!--custome script for all page-->
<script src="js/scripts.js"></script>


</body>
</html>
