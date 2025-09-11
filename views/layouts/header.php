<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Ceyminds - Consultation'; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
<!-- Navbar Start -->
<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="/Ceyminds/" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white">Ceyminds</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                <a href="/Ceyminds/" class="nav-item nav-link <?php echo (!isset($_GET['page']) || $_GET['page'] == 'home') ? 'active' : ''; ?>">Home</a>
                <a href="/Ceyminds/about" class="nav-item nav-link <?php echo ($_GET['page'] ?? '') == 'about' ? 'active' : ''; ?>">About</a>
                <a href="/Ceyminds/service" class="nav-item nav-link <?php echo ($_GET['page'] ?? '') == 'service' ? 'active' : ''; ?>">Service</a>
                <a href="/Ceyminds/plans" class="nav-item nav-link <?php echo ($_GET['page'] ?? '') == 'plans' ? 'active' : ''; ?>">Plans</a>
<!--                <div class="nav-item dropdown">-->
<!--                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>-->
<!--                    <div class="dropdown-menu text-capitalize">-->
<!--                        <a href="/Ceyminds/reservation" class="dropdown-item --><?php //echo ($_GET['page'] ?? '') == 'reservation' ? 'active' : ''; ?><!--">Reservation</a>-->
<!--                        <a href="/Ceyminds/testimonial" class="dropdown-item --><?php //echo ($_GET['page'] ?? '') == 'testimonial' ? 'active' : ''; ?><!--">Testimonial</a>-->
<!--                    </div>-->
<!--                </div>-->
                <a href="/Ceyminds/contact" class="nav-item nav-link <?php echo ($_GET['page'] ?? '') == 'contact' ? 'active' : ''; ?>">Contact</a>
            </div>
        </div>
    </nav>
</div>



<!-- Navbar End -->