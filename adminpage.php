<?php
session_start();
if(isset($_SESSION['hello'])){
    $p="done";
}else{
    header("location:login.php");
}


?>
    <!DOCTYPE html>



    <html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>Tables</title>

        <!-- Fontfaces CSS-->
        <link href="admin/admin_asset/css/font-face.css" rel="stylesheet" media="all">
        <link href="admin/admin_asset/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="admin/admin_asset/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="admin/admin_asset/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="admin/admin_asset/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="admin/admin_asset/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="admin/admin_asset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="admin/admin_asset/vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="admin/admin_asset/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="admin/admin_asset/vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="admin/admin_asset/vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="admin/admin_asset/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="admin/admin_asset/css/theme.css" rel="stylesheet" media="all">

    </head>





    <body>
        <center>
            <a class="btn btn-danger mt-4" href="logout.php">Logout</a>
        </center>
        <div class="main-content" style="height:100vh;">
            <div class="section__content section__content--p30" style="height:100vh;">
                <div class="container-fluid" style="height:100vh;">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="table-responsive table--no-card m-b-30">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                        <tr>

                                            <th>order ID</th>
                                            <th>product name</th>
                                            <th class="text-right">email</th>
                                            <th class="text-right">price</th>
                                            <th class="text-right">success</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $sname="localhost";
                                        $uname="root";
                                        $pass="";
                                        $conn=mysqli_connect($sname,$uname,$pass,'table');

                                        $sql="select * from success";
                                        $fire=mysqli_query($conn,$sql);
                                        while($data=mysqli_fetch_array($fire)){

                                        

?>
                                            <tr>

                                                <td>
                                                    <?php echo $data['sno']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['pname']; ?>
                                                </td>
                                                <td class="text-right">
                                                    <?php echo $data['email']; ?>
                                                </td>
                                                <td class="text-right">
                                                    <?php echo $data['price']; ?>
                                                </td>
                                                <td class="text-right">
                                                    <?php echo $data['success']; ?>
                                                </td>

                                            </tr>
                                            <?php
                                    }
?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>


                    <div class="row" style="position: relative; bottom:0px; left:0px;">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2021 Rahul. All rights reserved. Template by
                                    <a href="mailto:rahulkumar88628@gmail.com">Rahul</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>