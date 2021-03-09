<?php

namespace App\Controller;

use App\Model\TaxiModel;

class TaxiController
{
    protected $taxiModel;

    public function __construct()
    {
        $this->taxiModel = new taxiModel();
    }

    public function index()
    {
        // Lấy tất hoá đơn từ DB ra.
        $taxis = $this->taxiModel->getAll();
        $getIds = $this->taxiModel->getdriverId();
        include "src/View/Taxi/Taxi-list.php";
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $getIds = $this->taxiModel->getdriverId();
            include "src/View/Taxi/Taxi-add.php";
        } else {
            $License_plates = $_POST['License_plates'];
            $Model = $_REQUEST['Model'];
            $Year = $_POST['Year'];
            $Type = $_POST['Type'];
            $Color = $_POST['Color'];
            $Status = $_POST['Status'];
            $Driver_id = $_POST['Driver_id'];
            $path = "Image/";
            $tmpName = $_FILES['Image']['tmp_name'];
            $Image = $_FILES['Image']['name'];
            move_uploaded_file($tmpName, $path.$Image);
//            $New_id =$this->taxiModel->getdriverId();
//            $Driver_id = (int)$New_id[0][0];
            var_dump($License_plates,$Model,$Year,$Type,$Color,$Status,$Driver_id,$Image);die();
            $this->taxiModel->creatTaxi($License_plates,$Model,$Year,$Type,$Color,$Status,$Driver_id,$Image);
            $this->redirectToList();
        }
    }
    private function redirectToList()
    {
        $taxiModel = $this->taxiModel->getAll();
        header("location:index.php?page=Taxi-list");
    }
    public function delete()
    {
        $Driver_id = $_REQUEST['id'];
//            var_dump($Driver_id);die();
        $this->taxiModel->deleteTaxi($Driver_id);
//            include "src/View/Taxi/Taxi-list.php";
    }
    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $Driver_id = $_REQUEST['id'];

//            $this->billModel->getBillId($Trip_id);
            include "src/View/bill/bill-update.php";
        } else{
            $License_plates = $_POST['License_plates'];
            $Model = $_REQUEST['Model'];
            $Year = $_POST['Year'];
            $Type = $_POST['Type'];
            $Color = $_POST['Color'];
            $Status = $_POST['Status'];
            $New_id =$this->taxiModel->getdriverId();
            $Driver_id = (int)$New_id[0][0];
            $this->taxiModel->editTaxi($License_plates,$Model,$Year,$Type,$Color,$Status,$Driver_id);
        }
    }

}