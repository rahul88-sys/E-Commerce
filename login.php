<?php
session_start();
if(isset($_POST['done'])){
    $u=$_POST['u'];
    $p=$_POST['p'];
    if ($u=="admin@gmail.com" && $p=="admin"){
        $_SESSION['hello']="true";
        header("location:adminpage.php");
    }else{
        ?>
        <script>alert("Wrong ID OR Password please contact admin");</script>
        <?php
    }
}


?>



<!Doctype html>

<head>

    <link href="login.css" rel="stylesheet" type="text/css">
    <link href="login.js" rel="stylesheet" type="text/js">
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




                    </ul>

                </div>
            </nav>
        </div>
    </header>

    <div class="login">
        <h1>Login</h1>
        <form method="post">
            <input type="text" name="u" placeholder="Username" required="required" />
            <input type="password" name="p" placeholder="Password" required="required" />
            <button type="submit" name="done" class="btn btn-primary btn-block btn-large">Let me in.</button>
        </form>
    </div>
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.html"><span class="sr-only">(current)</span></a>
        </li>



    </ul>
</body>

</html>