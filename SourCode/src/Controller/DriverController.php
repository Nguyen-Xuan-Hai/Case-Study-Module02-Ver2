<?php

namespace App\Controller;

use App\Model\DriverModel;
use phpDocumentor\Reflection\Location;

class DriverController
{
    protected $driverModel;

    public function __construct()
    {
        $this->driverModel = new driverModel();
    }

//    public function index()
//    {
//        // Lấy tất hoá đơn từ DB ra.
//        $drivers = $this->driverModel->getAll();
//        //var_dump($drivers);
//        include "src/View/Driver/Driver-list.php";
//    }
    public function index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // Lấy tất hoá đơn từ DB ra.
            $drivers = $this->driverModel->getAll();
            include "src/View/Driver/Driver-list.php";
        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search = $_POST['search'];
            $drivers = $this->driverModel->searchDriver($search);
//            var_dump($taxis);die();

            include "src/View/Driver/Driver-list.php";
        }
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $genders = $this->driverModel->getAll();
            include "src/View/Driver/Driver-add.php";
        } else {
            $F_name = $_POST['F_name'];
            $L_name = $_POST['L_name'];
            $Gender = $_POST['Gender'];
            $Conatct_no = $_POST['Conatct_no'];
            $Rating = $_POST['Rating'];
            $Age = $_POST['Age'];
            $Experience = $_POST['Experience'];
            $this->driverModel->createDriver($F_name, $L_name, $Gender, $Conatct_no, $Rating, $Age,$Experience);
            header('location:index.php?page=Driver-list');

        }
    }
    public function delete(){
        $Driver_id = $_REQUEST['id'];
        $this->driverModel->deleteDriver($Driver_id);
        header('location:index.php?page=Driver-list');
    }
    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $Driver_id = $_REQUEST['id'];
//            var_dump($Driver_id);die();
            $driver = $this->driverModel->findById($Driver_id);
//            $genders = $this->driverModel->getDriver();
            include "src/View/Driver/Driver-update.php";
        } else {
            $F_name = $_POST['F_name'];
            $L_name = $_POST['L_name'];
            $Gender = $_POST['Gender'];
            $Conatct_no = $_POST['Conatct_no'];
            $Rating = $_POST['Rating'];
            $Age = $_POST['Age'];
            $Experience = $_POST['Experience'];
            $Driver_id = $_POST['Driver_id'];
//            var_dump($F_name, $L_name, $Gender, $Conatct_no, $Rating, $Age,$Experience,$Driver_id);die();
           $result = $this->driverModel->editDriver($F_name,$L_name,$Gender,$Conatct_no,$Rating,$Age,$Experience,$Driver_id);
            header('location:index.php?page=Driver-list');
//            var_dump($result['Gender']);
        }
    }
}
