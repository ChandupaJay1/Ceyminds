<?php
// home.php (Front Controller)

// Enable error reporting for debugging (disable in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Autoload controllers & models
spl_autoload_register(function ($class) {
    if (file_exists("controllers/$class.php")) {
        require_once "controllers/$class.php";
    } elseif (file_exists("models/$class.php")) {
        require_once "models/$class.php";
    }
});

// Simple Router
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'about':
        require 'controllers/AboutController.php';
        $controller = new AboutController();
        $controller->index();
        break;

    case 'service':
        require 'controllers/ServiceController.php';
        $controller = new ServiceController();
        $controller->index();
        break;

    case 'plans':
        require 'controllers/PlansController.php';
        $controller = new PlansController();
        $controller->index();
        break;

    case 'reservation':
        require 'controllers/ReservationController.php';
        $controller = new ReservationController();
        $controller->index();
        break;

    case 'testimonial':
        require 'controllers/TestimonialController.php';
        $controller = new TestimonialController();
        $controller->index();
        break;

    case 'contact':
        require 'controllers/ContactController.php';
        $controller = new ContactController();
        $controller->index();
        break;

    default:
        require 'controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
}
