<?php
ob_start();

use App\Controller\TaxiController;
use App\Controller\DriverController;
use App\Controller\UserController;
use App\Controller\TripController;
use App\Controller\BillController;
require __DIR__ . '/vendor/autoload.php';
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$taxiController = new TaxiController();
$driverController = new DriverController();
$userController = new UserController();
$tripController = new TripController();
$billController = new BillController();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <!-- <meta http-equiv="refresh" content="0"> -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/main.css">
    <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>

<body>
<!--           bootstrap         -->
<div class="container container-fluid">
    <!--        menu               -->
    <div class="menu sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
<!--                <a class="navbar-brand" href="index.php">Home</a>-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
</span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?page=Driver-list">Danh sach Driver</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?page=Taxi-list">Danh sach Taxi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?page=User-list">Danh sach User</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?page=Trip-list">Danh sach Trip</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-danger btn-lg" aria-current="page" href="logout.php">Log Out</a>
                        </li>
                    </ul>
                    <form class="d-flex"  method="post">
                        <input class="form-control me-2" type="search" placeholder="Search your F_name or License" aria-label="Search" name="search">
                        <button class="btn btn-outline-success text-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

<!--<a href="index.php?page=Driver-list">Danh sach Driver</a>-->
<!--<a href="index.php?page=Taxi-list">Danh sach Taxi</a>-->
<!--<a href="index.php?page=User-list">Danh sach User</a>-->
<!--    <a  href="index.php?page=Trip-list">Danh sach Trip</a>-->
<?php
switch ($page) {
    //Driver
    case 'Driver-list':
        $driverController->index();
        break;
    case 'Driver-add':
        $driverController->create();
        break;
    case 'Driver-delete':
        $driverController->delete();
        break;
    case 'Driver-update':
        $driverController->edit();
        break;
    //Taxi
    case 'Taxi-list':
        $taxiController->index();
        break;
    case 'Taxi-add':
        $taxiController->create();
        break;
    case 'Taxi-delete':
        $taxiController->delete();
        break;
    case 'Taxi-update':
        $taxiController->edit();
        break;
    //User
    case 'User-list':
        $userController->index();
        break;
    case 'User-add':
        $userController->create();
        break;
    case 'User-delete':
        $userController->delete();
        break;
    case 'User-update':
        $userController->edit();
        break;
        //Trip
    case 'Trip-list':
        $tripController->index();
        break;
    case 'Trip-add':
        $tripController->create();
        break;
    case 'Trip-delete':
        $tripController->delete();
        break;
    case 'Trip-update':
        $tripController->edit();
        break;
        //Bill
    case 'Bill-list':
        $Usr_id = $_REQUEST['id'];
        $billController->show($Usr_id);
        break;
    case 'Bill-add':
        $billController->create();
        break;
    case 'Bill-details':
        $Usr_id = $_REQUEST['id'];
        $billController->showDetails($Usr_id);
        break;
}
ob_end_flush();
?>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location:login.html");
//} else {
//    echo "wellcome " . $_SESSION['user'];
}
?>