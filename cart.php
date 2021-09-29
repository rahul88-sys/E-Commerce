<?php 



session_start();

?>

<!-- client section -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/103952249/original/a44741093bb534d13a622ab0895e1db263f186b6/design-a-logo-with-only-a-letter-that-is-eyecatching.png" type="image/x-icon">

    <title>Avada</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>





<body>
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
                    <span>
         Avada
        </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""> </span>
      </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html"><span class="sr-only">(current)</span></a>
                        </li>



                    </ul>
                    <div class="user_option-box">
                        <a href="index.html">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </a>
                        <a href="cart.html">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <?php
    if(isset($_POST['amount'])){
        $amount=$_POST['amount'];

?>
        <style>
            body {
                margin-top: 20px;
                background: #eee;
            }
            
            .product-card {
                position: relative;
                max-width: 380px;
                padding-top: 12px;
                padding-bottom: 43px;
                transition: all 0.35s;
                border: 1px solid #e7e7e7;
            }
            
            .product-card .product-head {
                padding: 0 15px 8px;
            }
            
            .product-card .product-head .badge {
                margin: 0;
            }
            
            .product-card .product-thumb {
                display: block;
            }
            
            .product-card .product-thumb>img {
                display: block;
                width: 100%;
            }
            
            .product-card .product-card-body {
                padding: 0 20px;
                text-align: center;
            }
            
            .product-card .product-meta {
                display: block;
                padding: 12px 0 2px;
                transition: color 0.25s;
                color: rgba(140, 140, 140, .75);
                font-size: 12px;
                font-weight: 600;
                text-decoration: none;
            }
            
            .product-card .product-meta:hover {
                color: #8c8c8c;
            }
            
            .product-card .product-title {
                margin-bottom: 8px;
                font-size: 16px;
                font-weight: bold;
            }
            
            .product-card .product-title>a {
                transition: color 0.3s;
                color: #343b43;
                text-decoration: none;
            }
            
            .product-card .product-title>a:hover {
                color: #ac32e4;
            }
            
            .product-card .product-price {
                display: block;
                color: #404040;
                font-family: 'Montserrat', sans-serif;
                font-weight: normal;
            }
            
            .product-card .product-price>del {
                margin-right: 6px;
                color: rgba(140, 140, 140, .75);
            }
            
            .product-card .product-buttons-wrap {
                position: absolute;
                bottom: -20px;
                left: 0;
                width: 100%;
            }
            
            .product-card .product-buttons {
                display: table;
                margin: auto;
                background-color: #fff;
                box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .11);
            }
            
            .product-card .product-button {
                display: table-cell;
                position: relative;
                width: 50px;
                height: 40px;
                border-right: 1px solid rgba(231, 231, 231, .6);
            }
            
            .product-card .product-button:last-child {
                border-right: 0;
            }
            
            .product-card .product-button>a {
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                transition: all 0.3s;
                color: #404040;
                font-size: 16px;
                line-height: 40px;
                text-align: center;
                text-decoration: none;
            }
            
            .product-card .product-button>a:hover {
                background-color: #ac32e4;
                color: #fff;
            }
            
            .product-card:hover {
                border-color: transparent;
                box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .09);
            }
            
            .product-category-card {
                display: block;
                max-width: 400px;
                text-align: center;
                text-decoration: none !important;
            }
            
            .product-category-card .product-category-card-thumb {
                display: table;
                width: 100%;
                box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .09);
            }
            
            .product-category-card .product-category-card-body {
                padding: 20px;
                padding-bottom: 28px;
            }
            
            .product-category-card .main-img,
            .product-category-card .thumblist {
                display: table-cell;
                padding: 15px;
                vertical-align: middle;
            }
            
            .product-category-card .main-img>img,
            .product-category-card .thumblist>img {
                display: block;
                width: 100%;
            }
            
            .product-category-card .main-img {
                width: 65%;
                padding-right: 10px;
            }
            
            .product-category-card .thumblist {
                width: 35%;
                padding-left: 10px;
            }
            
            .product-category-card .thumblist>img:first-child {
                margin-bottom: 6px;
            }
            
            .product-category-card .product-category-card-meta {
                display: block;
                padding-bottom: 9px;
                color: rgba(140, 140, 140, .75);
                font-size: 11px;
                font-weight: 600;
            }
            
            .product-category-card .product-category-card-title {
                margin-bottom: 0;
                transition: color 0.3s;
                color: #343b43;
                font-size: 18px;
            }
            
            .product-category-card:hover .product-category-card-title {
                color: #ac32e4;
            }
            
            .product-gallery {
                position: relative;
                padding: 45px 15px 0;
                box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .09);
            }
            
            .product-gallery .gallery-item::before {
                display: none !important;
            }
            
            .product-gallery .gallery-item::after {
                box-shadow: 0 8px 24px 0 rgba(0, 0, 0, .26);
            }
            
            .product-gallery .video-player-button,
            .product-gallery .badge {
                position: absolute;
                z-index: 5;
            }
            
            .product-gallery .badge {
                top: 15px;
                left: 15px;
                margin-left: 0;
            }
            
            .product-gallery .video-player-button {
                top: 0;
                right: 15px;
                width: 60px;
                height: 60px;
                line-height: 60px;
            }
            
            .product-gallery .product-thumbnails {
                display: block;
                margin: 0 -15px;
                padding: 12px;
                border-top: 1px solid #e7e7e7;
                list-style: none;
                text-align: center;
            }
            
            .product-gallery .product-thumbnails>li {
                display: inline-block;
                margin: 10px 3px;
            }
            
            .product-gallery .product-thumbnails>li>a {
                display: block;
                width: 94px;
                transition: all 0.25s;
                border: 1px solid transparent;
                background-color: #fff;
                opacity: 0.75;
            }
            
            .product-gallery .product-thumbnails>li:hover>a {
                opacity: 1;
            }
            
            .product-gallery .product-thumbnails>li.active>a {
                border-color: #ac32e4;
                cursor: default;
                opacity: 1;
            }
            
            .product-meta {
                padding-bottom: 10px;
            }
            
            .product-meta>a,
            .product-meta>i {
                display: inline-block;
                margin-right: 5px;
                color: rgba(140, 140, 140, .75);
                vertical-align: middle;
            }
            
            .product-meta>i {
                margin-top: 2px;
            }
            
            .product-meta>a {
                transition: color 0.25s;
                font-size: 13px;
                font-weight: 600;
                text-decoration: none;
            }
            
            .product-meta>a:hover {
                color: #8c8c8c;
            }
            
            .cart-item {
                position: relative;
                margin-bottom: 30px;
                padding: 0 50px 0 10px;
                background-color: #fff;
                box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .09);
            }
            
            .cart-item .cart-item-label {
                display: block;
                margin-bottom: 15px;
                color: #8c8c8c;
                font-size: 13px;
                font-weight: 600;
                text-transform: uppercase;
            }
            
            .cart-item .cart-item-product {
                display: table;
                width: 420px;
                text-decoration: none;
            }
            
            .cart-item .cart-item-product-thumb,
            .cart-item .cart-item-product-info {
                display: table-cell;
                vertical-align: top;
            }
            
            .cart-item .cart-item-product-thumb {
                width: 110px;
            }
            
            .cart-item .cart-item-product-thumb>img {
                display: block;
                width: 100%;
            }
            
            .cart-item .cart-item-product-info {
                padding-top: 5px;
                padding-left: 15px;
            }
            
            .cart-item .cart-item-product-info>span {
                display: block;
                margin-bottom: 2px;
                color: #404040;
                font-size: 12px;
            }
            
            .cart-item .cart-item-product-title {
                margin-bottom: 8px;
                transition: color, 0.3s;
                color: #343b43;
                font-size: 16px;
                font-weight: bold;
            }
            
            .cart-item .cart-item-product:hover .cart-item-product-title {
                color: #ac32e4;
            }
            
            .cart-item .count-input {
                display: inline-block;
                width: 85px;
            }
            
            .cart-item .remove-item {
                right: -10px !important;
            }
            
            @media (max-width: 991px) {
                .cart-item {
                    padding-right: 30px;
                }
                .cart-item .cart-item-product {
                    width: auto;
                }
            }
            
            @media (max-width: 768px) {
                .cart-item {
                    padding-right: 10px;
                    padding-bottom: 15px;
                }
                .cart-item .cart-item-product {
                    display: block;
                    width: 100%;
                    text-align: center;
                }
                .cart-item .cart-item-product-thumb,
                .cart-item .cart-item-product-info {
                    display: block;
                }
                .cart-item .cart-item-product-thumb {
                    margin: 0 auto 10px;
                }
                .cart-item .cart-item-product-info {
                    padding-left: 0;
                }
                .cart-item .cart-item-label {
                    margin-bottom: 8px;
                }
            }
            
            .comparison-table {
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                -ms-overflow-style: -ms-autohiding-scrollbar;
            }
            
            .comparison-table table {
                min-width: 750px;
                table-layout: fixed;
            }
            
            .comparison-table .comparison-item {
                position: relative;
                margin-bottom: 10px;
                padding: 13px 12px 18px;
                background-color: #fff;
                text-align: center;
                box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .09);
            }
            
            .comparison-table .comparison-item .comparison-item-thumb {
                display: block;
                width: 80px;
                margin-right: auto;
                margin-bottom: 12px;
                margin-left: auto;
            }
            
            .comparison-table .comparison-item .comparison-item-thumb>img {
                display: block;
                width: 100%;
            }
            
            .comparison-table .comparison-item .comparison-item-title {
                display: block;
                margin-bottom: 14px;
                transition: color 0.25s;
                color: #404040;
                font-size: 14px;
                font-weight: 600;
                text-decoration: none;
            }
            
            .comparison-table .comparison-item .comparison-item-title:hover {
                color: #ac32e4;
            }
            
            .remove-item {
                display: block;
                position: absolute;
                top: -5px;
                right: -5px;
                width: 22px;
                height: 22px;
                padding-left: 1px;
                border-radius: 50%;
                background-color: #ff5252;
                color: #fff;
                line-height: 23px;
                text-align: center;
                box-shadow: 0 3px 12px 0 rgba(255, 82, 82, .5);
                cursor: pointer;
            }
            
            .card-wrapper {
                margin: 30px -15px;
            }
            
            @media (max-width: 576px) {
                .card-wrapper .jp-card-container {
                    width: 260px !important;
                }
                .card-wrapper .jp-card {
                    min-width: 250px !important;
                }
            }
        </style>

        <div class="container pb-5 mb-2">
            <!-- Alert-->
            <div class="alert alert-info alert-dismissible fade show text-center mb-30"><span class="alert-close" data-dismiss="alert"></span><i class="fe-icon-award"></i>&nbsp;&nbsp;You Have Only 1 Product in Cart <strong></strong</div>
            <!-- Cart Item-->
            <div class="cart-item d-md-flex justify-content-between"><span class="remove-item"><i class="fa fa-times"></i></span>
                <div class="px-3 my-3">
                    <a class="cart-item-product" href="#">
                        <?php
                        $check=$_POST['amount'];
                        
                        if($check==300){
                            $_SESSION['pname']="Amaze Fit";
                        ?>
                        <div class="cart-item-product-thumb"><img src="images/w1.png" alt="Product"></div>
                        <div class="cart-item-product-info">
                            <h4 class="cart-item-product-title">Amaze Fit</h4><span><strong>Type:</strong> Mirrorless</span><span><strong>Color:</strong> Black</span>
                        </div>
                        <?php
                        }else if($check==125){
                            $_SESSION['pname']="I watch";
                        ?>
<div class="cart-item-product-thumb"><img src="images/w2.png" alt="Product"></div>
<div class="cart-item-product-info">
                            <h4 class="cart-item-product-title">I Watch</h4><span><strong>Type:</strong> Mirror</span><span><strong>Color:</strong> Light Green</span>
                        </div>
<?php
                        }else{
                            $_SESSION['pname']="Realme";
?>

<div class="cart-item-product-thumb"><img src="images/w3.png" alt="Product"></div>
<div class="cart-item-product-info">
                            <h4 class="cart-item-product-title">Realme</h4><span><strong>Type:</strong> Mirror</span><span><strong>Color:</strong>Baby Pink</span>
                        </div>

<?php
                        }
?>
                        
                    </a>
                </div>
                <div class="px-3 my-3 text-center" style="display:none;">
                    <div class="cart-item-label">Quantity</div>
                    <div class="count-input">
                        <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
            </select>
                    </div>
                </div>
                <div class="px-3 my-3 text-center">
                    <div class="cart-item-label">Subtotal</div><span class="text-xl font-weight-medium">&#8377;<?php  echo $check; ?></span>
                </div>
                
            </div>

            <!-- Buttons-->
            <hr class="my-2">
            <div class="row pt-3 pb-5 mb-2">
                <form action="indexx.php" class="col-lg-12 col-md-12" method="post">
                    <input type="hidden" name="amount" value="<?php echo $check; ?>">
                    <div class="col-sm-12 mb-12"><input type="submit" value="Checkout" class="btn btn-style-1 btn-primary btn-block"><i class="fe-icon-credit-card"></i>&nbsp;</a>
                    </div>
                </form>
            </div>


        </div>
        </div>








        <?php }else{ ?>
        <section class="client_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h4>Your Cart</h4>
                </div>

            </div>
        </section>
        <?php
    }

    ?>
            <!-- end client section -->

            <!-- footer section -->
            <footer class="footer_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 footer-col">
                            <div class="footer_detail">
                                <h4>
                                    About
                                </h4>
                                <p>
                                    Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                                </p>
                                <div class="footer_social">
                                    <a href="https://www.facebook.com/rahulkumar82100/">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://twitter.com/_imrahulkumar_">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/in/rahul-kumar-608482193/">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://www.instagram.com/_imrahul.kumar_/">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 footer-col">
                            <div class="footer_contact">
                                <h4>
                                    Reach at..
                                </h4>
                                <div class="contact_link_box">
                                    <a href="https://www.google.com/maps/place/Dr+B+C+Roy+Engineering+College+-+Durgapur./@23.544375,87.3401644,17z/data=!3m1!4b1!4m5!3m4!1s0x39f771cd91905181:0xf0c67e84751ea4f2!8m2!3d23.544375!4d87.3423531">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span>
              Location Click for check out
            </span>
                                    </a>
                                    <a href="">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <span>
              Call +91 8862863551
            </span>
                                    </a>
                                    <a href="">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span>
              rahulkumar88628@gmail.com
            </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 footer-col">
                            <div class="footer_contact">
                                <h4>
                                    Subscribe
                                </h4>
                                <form action="#">
                                    <input type="text" placeholder="Enter email" />
                                    <button type="submit">
            Subscribe
          </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 footer-col">
                            <div class="map_container">
                                <div class="map">
                                    <div id="googleMap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-info">
                        <p>
                            &copy; <span id="displayYear"></span> All Rights Reserved By
                            <a>Rahul</a>
                        </p>
                    </div>
                </div>
            </footer>
            <!-- footer section -->

            <!-- jQery -->
            <script src="js/jquery-3.4.1.min.js"></script>
            <!-- popper js -->
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
            </script>
            <!-- bootstrap js -->
            <script src="js/bootstrap.js"></script>
            <!-- owl slider -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
            </script>
            <!-- custom js -->
            <script src="js/custom.js"></script>
            <!-- Google Map -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>

            <!-- End Google Map -->

</body>

</html>