<?php
ob_start();

use App\Controller\TaxiController;
use App\Controller\DriverController;

require __DIR__ . '/vendor/autoload.php';
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$taxiController = new TaxiController();
$driverController = new DriverController();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <!-- <meta http-equiv="refresh" content="0"> -->

    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>

<body>
<a href="index.php?page=Driver-list">Danh sach Driver</a><br>
<a href="index.php?page=Taxi-list">Danh sach Taxi</a><br>
<!--<a href="index.php?page=bill-details">Danh sach hoa don chi tiet</a><br>-->


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


}
ob_end_flush();
?>
</body>
</html>