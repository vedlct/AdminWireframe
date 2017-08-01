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
                    <h3 class="page-header"><i class="fa fa-table"></i> Manage Faculty</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                        <li><i class="fa fa-table"></i>Faculties</li>
                        <li><i class="fa fa-th-list"></i>Manage Faculty</li>
                    </ol>
                </div>
            </div>
            <!-- page start-->

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Manage Faculty
                        </header>

                        <table class="table table-striped table-advance table-hover">
                            <tbody>
                            <tr>
                                <th> Faculty Name</th>
                                <th> Department Name</th>
                                <th> Course Name</th>
                                <th> Action</th>
                            </tr>
                            <tr>
                                <td>Angeline Mcclain</td>
                                <td>Department of Business and Management Studies</td>
                                <td>BTEC Level 5 HND in Business</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn" href="#"><i class="icon_pencil-edit"></i></a>
                                        <a class="btn " href="#"><i class="icon_trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Sung Carlson</td>
                                <td>Department of Health and Social Care</td>
                                <td>BTEC HND in Health and Social Care</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn" href="#"><i class="icon_pencil-edit"></i></a>
                                        <a class="btn " href="#"><i class="icon_trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Bryon Osborne</td>
                                <td>Faculty of Information Technology and Engineering</td>
                                <td>BTEC HND in Computing and Systems Development<br>
                                    BTEC HND in Electrical and Electronic Engineering</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn" href="#"><i class="icon_pencil-edit"></i></a>
                                        <a class="btn " href="#"><i class="icon_trash"></i></a>
                                    </div>
                                </td>
                            </tr>


                            </tbody>
                        </table>
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
