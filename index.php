<?php 
require "client/class/dbconnect.class.php";
session_start();

$rq = "SELECT * FROM produits ORDER BY pid LIMIT 10";
$db = new BasesDonnees;
$pr = $db->connectDB(); 
$result = $pr->prepare($rq);
$result->execute();
$data = $result->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FoodZone - Restaurant</title>
    <meta name="description" content="Resto">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/5b67370c4c.js"></script>


    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">



</head>

<body id="Index" data-spy="scroll" data-target="#navbar" class="static-layout">
    <div id="side-nav" class="sidenav">
        <a href="javascript:void(0)" id="side-nav-close">&times;</a>

        <div class="sidenav-content">
            <p>
                Kuncen WB1, Wirobrajan 10010, DIY
            </p>
            <p>
                <span class="fs-16 primary-color">(+216) 52 450 636</span>
            </p>
            <p>info@yourdomain.com</p>
        </div>
    </div>
    <div id="side-search" class="sidenav">
        <a href="javascript:void(0)" id="side-search-close">&times;</a>
        <div class="sidenav-content">
            <form action="">

                <div class="input-group md-form form-sm form-2 pl-0">
                    <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="input-group-text red lighten-3" id="basic-text1">
                            <i class="fas fa-search text-grey" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

            </form>
        </div>


    </div>
    <div id="canvas-overlay"></div>
    <div class="boxed-page">
        <nav id="navbar-header" class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/">
                    <img src="img/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="lnr lnr-menu"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex justify-content-between">
                        <li class="nav-item only-desktop">
                            <a class="nav-link" id="side-nav-open" href="#"></a>
                        </li>
                        <div class="d-flex flex-lg-row flex-column">
                            <li class="nav-item active mr-5">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item mr-5">
                                <a class="nav-link" href="#about">About</a>
                            </li>

                        </div>
                    </ul>

                    <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="index.php">
                        <img src="img/logo.png" alt="">
                    </a>
                    <ul class="navbar-nav d-flex justify-content-between">
                        <div class="d-flex flex-lg-row flex-column">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Menu
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="breakfast.php">Breakfast</a>
                                    <a class="dropdown-item" href="lundin.php">Lunch/Dinner</a>
                                </div>
                            </li>
                            <?php 
                            if(isset($_SESSION['name'])){
                            ?>

                            <li class="nav-item">
                            <img src="client/<?php echo $_SESSION['img']; ?>"  style="width:40px; height:40px; border-radius:50%;">
                            </li>
                            
                            <li class="nav-item">
                                <a href="client/profil.php" class="nav-link"><?php echo $_SESSION['name']; ?></a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="client/logout.php?logout">Logout</a>
                            </li>
                            <li class="nav-item ml-5">
                            <style>
                                .btn-outline-danger:hover {
                                    color:white !important;
                                }
                            </style>
                                <a href="listepanier.php" class="btn btn-outline-danger">
                                    <i class="fa fa-shopping-cart" style="opacity:1"></i>
                                    &nbsp;&nbsp;<span class="badge badge-sm-light" id="success"></span>
                                </a>
                            </li>
                            <?php }else {?>

                           

                            <li class="nav-item">
                                <a class="nav-link" href="client/loginc.php">Login</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="client/register.php">Sign Up</a>
                            </li>
                            
                            <li class="nav-item ml-5">
                            <style>
                                .btn-outline-danger:hover {
                                    color:white !important;
                                }
                            </style>
                                <a href="listepanier.php" class="btn btn-outline-danger">
                                    <i class="fa fa-shopping-cart" style="opacity:1"></i>
                                    &nbsp;&nbsp;<span class="badge badge-sm-light" id="success"></span>
                                </a>
                            </li>

                            <?php } ?>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="hero">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 hero-left">
                        <h1 class="display-4 mb-5">We Serve <br>Delicious Foods!</h1>
                        <div class="mb-2">
                            <a class="btn btn-primary btn-shadow btn-lg" href="lundin.php" role="button">Explore Menu</a>

                        </div>

                        <ul class="hero-info list-unstyled d-flex text-center mb-0">
                            <li class="border-right">
                                <span class="lnr lnr-rocket"></span>
                                <h5>
                                    Fast Delivery
                                </h5>
                            </li>
                            <li class="border-right">
                                <span class="lnr lnr-leaf"></span>
                                <h5>
                                    Fresh Food
                                </h5>
                            </li>
                            <li class="">
                                <span class="lnr lnr-bubble"></span>
                                <h5>
                                    24/7 Support
                                </h5>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-6 hero-right">
                        <div class="owl-carousel owl-theme hero-carousel">
                            <div class="item">
                                <img class="img-fluid" src="img/hero-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="img/hero-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="img/hero-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Welcome Section -->
        <section id="gtco-welcome" class="bg-white section-padding">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2"
                            style="background-image: url(img/hero-2.jpg);">

                        </div>
                        <div class="col-sm-7 py-5 pl-md-0 pl-4" id="about">
                            <div class="heading-section pl-lg-5 ml-md-5">
                                <span class="subheading">
                                    About
                                </span>
                                <h2>
                                    Welcome to FoodZone
                                </h2>
                            </div>
                            <div class="pl-lg-5 ml-md-5">
                                <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came
                                    from it would have been rewritten a thousand times and everything that was left from
                                    its origin would be the word "and" and the Little Blind Text should turn around and
                                    return to its own, safe country. A small river named Duden flows by their place and
                                    supplies it with the necessary regelialia. It is a paradisematic country, in which
                                    roasted parts of sentences fly into your mouth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Welcome Section -->
        <!-- Special Dishes Section -->
        <section id="gtco-special-dishes" class="bg-grey section-padding">
            <div class="container">
                <div class="section-content">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Specialties
                        </span>
                        <h2>
                            Special Dishes
                        </h2>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-5 col-md-6 align-self-center py-5">
                            <h2 class="special-number">01.</h2>
                            <div class="dishes-text">
                                <h3><span>Beef</span><br> Steak Sauce</h3>
                                <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea
                                    vero alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt
                                    provident libero qui eum, corporis esse quos excepturi soluta?</p>
                                <h3 class="special-dishes-price">29.99<sup>TND</sup></h3>
                                <a href="lundin.php" class="btn-primary mt-3">Go to Dinner/lunch</a>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                            <img src="img/steak.jpg" alt="" class="img-fluid shadow w-100">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                            <img src="img/salmon-zucchini.jpg" alt="" class="img-fluid shadow w-100">
                        </div>
                        <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                            <h2 class="special-number">02.</h2>
                            <div class="dishes-text">
                                <h3><span>Salmon</span><br> Zucchini</h3>
                                <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis,
                                    accusamus culpa quam amet ipsam odit ea doloremque accusantium quo, itaque possimus
                                    eius. In a quis quibusdam omnis atque vero dolores!</p>
                                <h3 class="special-dishes-price">49.99<sup>TND</sup></h3>
                                <a href="lundin.php"  class="btn-primary mt-3">Go to Dinner/lunch<span><i
                                            class="fa fa-long-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Special Dishes Section -->
        <!-- Menu Section -->
        <section id="gtco-menu" class="section-padding">
            <div class="container">
                <div class="section-content">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="heading-section text-center">
                                <span class="subheading">
                                    Specialties
                                </span>
                                <h2>
                                    Our Menu
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php 
                    while ($data = $result->fetch()) {
                    ?>
                        <div class="col-lg-4 menu-wrap">
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="admin/uploads/<?php echo $data['file'] ?>" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4><a href="prod_detail.php?id=<?php echo $data['pid'] ?>"><?php echo $data['name'] ?></a></h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price"><?php echo $data['price'] ?><sup>TND</sup></h4>
                                        </div>
                                    </div>
                                    <p><?php echo $data['description']?></p>
                                </div>
                            </div>
                        </div>
                        <?php 
                            }
                        ?>
                    </div>
                    <div class="d-flex justify-content-around">
                        <a href="breakfast.php" class="btn-primary mt-3">Breakfast</a>
                        <a href="lundin.php" class="btn-primary mt-3">Diner / Lunch</a>
                    </div> 

                </div>
            </div>            
        </section>
        <!-- End of menu Section -->
        <!-- Testimonial Section-->
        <section id="gtco-testimonial" class="overlay bg-fixed section-padding"
            style="background-image: url(img/testi-bg.jpg);">
            <div class="container">
                <div class="section-content">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Testimony
                        </span>
                        <h2>
                            Happy Customer
                        </h2>
                    </div>
                    <div class="row">
                        <!-- Testimonial -->
                        <div class="testi-content testi-carousel owl-carousel">
                            <div class="testi-item">
                                <i class="testi-icon fa fa-3x fa-quote-left"></i>
                                <p class="testi-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia deserunt mollit anim id est laborum.</p>
                                <p class="testi-author">John Doe</p>
                                <p class="testi-desc">CEO of <span>GetTemplates</span></p>
                            </div>
                            <div class="testi-item">
                                <i class="testi-icon fa fa-3x fa-quote-left"></i>
                                <p class="testi-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                                    non doloribus ut, alias doloremque perspiciatis.</p>
                                <p class="testi-author">Mary Jane</p>
                                <p class="testi-desc">CTO of <span>Unidentity Inc</span></p>
                            </div>
                        </div>
                        <!-- End of Testimonial -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Testimonial Section-->
        <!-- Team Section -->
        <section id="gtco-team" class="bg-white section-padding">
            <div class="container">
                <div class="section-content">
                    <div class="heading-section text-center">
                        <h2 class="pb-5">
                            Our Team
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="team-card mb-5">
                                <img class="img-fluid" src="img/chef-1.jpg" alt="">
                                <div class="team-desc">
                                    <h4 class="mb-0">Aaron Patel</h4>
                                    <p class="mb-1">CEO</p>
                                    <ul class="list-inline mb-0 team-social-links">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team-card mb-5">
                                <img class="img-fluid" src="img/chef-2.jpg" alt="">
                                <div class="team-desc">
                                    <h4 class="mb-0">Daniel Tebas</h4>
                                    <p class="mb-1">Chef</p>
                                    <ul class="list-inline mb-0 team-social-links">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team-card mb-5">
                                <img class="img-fluid" src="img/chef-3.jpg" alt="">
                                <div class="team-desc">
                                    <h4 class="mb-0">Jon Snow</h4>
                                    <p class="mb-1">Chef</p>
                                    <ul class="list-inline mb-0 team-social-links">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team-card mb-5">
                                <img class="img-fluid" src="img/chef-3.jpg" alt="">
                                <div class="team-desc">
                                    <h4 class="mb-0">Jon Snow</h4>
                                    <p class="mb-1">Chef</p>
                                    <ul class="list-inline mb-0 team-social-links">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Team Section -->

        <!-- Reservation Section -->
        <section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay"
            style="background-image: url(img/reservation-bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-content bg-white p-5 shadow">
                           
                              
                                    <div class="col-md-12 text-center">
                                        <a class="btn btn-primary btn-shadow btn-lg mt-3" href="client/loginc.php"
                                            name="submit">SGIN IN</a>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Reservation Section -->
        <footer class="mastfoot pb-5 bg-white section-padding pb-0">
            <div class="inner container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-widget pr-lg-5 pr-0">
                            <img src="img/logo.png" class="img-fluid footer-logo mb-3" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id sit
                                omnis explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt
                                modi? Magni, et voluptatum dolorem.</p>
                            <nav class="nav nav-mastfoot justify-content-start">
                                <a class="nav-link" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="nav-link" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="nav-link" href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </nav>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="footer-widget px-lg-5 px-0">
                            <h4>Open Hours</h4>
                            <ul class="list-unstyled open-hours">
                                <li class="d-flex justify-content-between"><span>Monday</span><span>9:00 - 24:00</span>
                                </li>
                                <li class="d-flex justify-content-between"><span>Tuesday</span><span>9:00 - 24:00</span>
                                </li>
                                <li class="d-flex justify-content-between"><span>Wednesday</span><span>9:00 -
                                        24:00</span></li>
                                <li class="d-flex justify-content-between"><span>Thursday</span><span>9:00 -
                                        24:00</span></li>
                                <li class="d-flex justify-content-between"><span>Friday</span><span>9:00 - 02:00</span>
                                </li>
                                <li class="d-flex justify-content-between"><span>Saturday</span><span>9:00 -
                                        02:00</span></li>
                                <li class="d-flex justify-content-between"><span>Sunday</span><span> Closed</span></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="footer-widget pl-lg-5 pl-0">
                            <h4>Newsletter</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <form id="newsletter">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="emailNewsletter"
                                        aria-describedby="emailNewsletter" placeholder="Enter email">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <!-- External JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="vendor/bootstrap/popper.min.js"></script>
    <script src="vendor/bootstrap/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js "></script>
    <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
    <script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Main JS -->
    <script src="js/app.min.js "></script>
</body>

</html