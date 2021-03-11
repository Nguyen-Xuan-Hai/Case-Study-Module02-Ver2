<?php


namespace App\Controller;

use App\Model\TripModel;

class TripController
{
    protected $tripModel;

    public function __construct()
    {
        $this->tripModel = new tripModel();
    }

    public function index()
    {
        // Lấy tất hoá đơn từ DB ra.
        $trips = $this->tripModel->getAll();
        include "src/View/Trip/Trip-list.php";
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $getIds = $this->tripModel->getDetails();
            include "src/View/Trip/Trip-add.php";
        } else {
            $Trip_date = $_POST['Trip_date'];
            $Description = $_REQUEST['Description'];
            $Driver_id = $_POST['Driver_id'];
            $Usr_id = $_POST['Usr_id'];
            $Taxi_id = $_POST['Taxi_id'];
            $Strt_time = $_POST['Strt_time'];
            $End_time = $_POST['End_time'];
            $Location_start = $_POST['Location_start'];
            $Location_end = $_POST['Location_end'];
            $Customer_number = $_POST['Customer_number'];
            $Status = $_POST['Status'];

            $this->tripModel->creatTrip($Trip_date,$Description,$Driver_id,$Usr_id,$Taxi_id,$Strt_time,$End_time,$Location_start,$Location_end,$Customer_number,$Status);
            $this->redirectToList();
        }
    }

    private function redirectToList()
    {
        $tripModel = $this->tripModel->getAll();
        header("location:index.php?page=Trip-list");
    }

    public function delete()
    {
        $Trip_id = $_REQUEST['id'];
//            var_dump($Driver_id);die();
        $this->tripModel->deleteTrip($Trip_id);
        header("location:index.php?page=Trip-list");
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $Trip_id = $_REQUEST['id'];
            $getIds = $this->tripModel->getDetails();
            $trip = $this->tripModel->findById($Trip_id);
//            $this->billModel->getBillId($Trip_id);
            include "src/View/Trip/Trip-update.php";
        } else {
            $Trip_id = $_POST['Trip_id'];
            $Trip_date = $_POST['Trip_date'];
            $Description = $_REQUEST['Description'];
            $Driver_id = $_POST['Driver_id'];
            $Usr_id = $_POST['Usr_id'];
            $Taxi_id = $_POST['Taxi_id'];
            $Strt_time = $_POST['Strt_time'];
            $End_time = $_POST['End_time'];
            $Location_start = $_POST['Location_start'];
            $Location_end = $_POST['Location_end'];
            $Customer_number = $_POST['Customer_number'];
            $Status = $_POST['Status'];
//            var_dump($Trip_id,$Trip_date,$Description,$Driver_id,$Usr_id,$Taxi_id,$Strt_time,$End_time,$Location_start,$Location_end,$Customer_number,$Status);die();
//            var_dump($License_plates, $Model, $Year, $Type, $Color, $Status, $Driver_id, $Image);die();
            $this->tripModel->editTrip($Trip_id,$Trip_date,$Description,$Driver_id,$Usr_id,$Taxi_id,$Strt_time,$End_time,$Location_start,$Location_end,$Customer_number,$Status);
            header("location:index.php?page=Trip-list");

        }

    }
}