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
            $Image = $_FILES['Image']['name'];
            $tmpName = $_FILES['Image']['tmp_name'];
            move_uploaded_file($tmpName, 'Image/' . $Image);
//            $img = $_FILES['img']['name'];
//            $img_tmp = $_FILES['img']['tmp_name'];
//            move_uploaded_file($img_tmp,'img/'.$img);
//            $New_id =$this->taxiModel->getdriverId();
//            $Driver_id = (int)$New_id[0][0];
//           var_dump($License_plates,$Model,$Year,$Type,$Color,$Status,$Driver_id,$Image);die();
            $this->taxiModel->creatTaxi($License_plates, $Model, $Year, $Type, $Color, $Status, $Driver_id, $Image);
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
        $Taxi_id = $_REQUEST['id'];
//            var_dump($Driver_id);die();
        $this->taxiModel->deleteTaxi($Taxi_id);
        header("location:index.php?page=Taxi-list");
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $Taxi_id = $_REQUEST['id'];
            $getIds = $this->taxiModel->getdriverId();
            $taxi = $this->taxiModel->findById($Taxi_id);
//            $this->billModel->getBillId($Trip_id);
            include "src/View/Taxi/Taxi-update.php";
        } else {
            $Taxi_id = $_POST['Taxi_id'];
            $License_plates = $_POST['License_plates'];
            $Model = $_REQUEST['Model'];
            $Year = $_POST['Year'];
            $Type = $_POST['Type'];
            $Color = $_POST['Color'];
            $Status = $_POST['Status'];
            $Driver_id = $_POST['Driver_id'];
            $Image = $_FILES['Image']['name'];
            $tmpName = $_FILES['Image']['tmp_name'];
            move_uploaded_file($tmpName, 'Image/' . $Image);
            if ($Image == NULL) {
                $Image = $_REQUEST['old_img'];
//            $Driver_id =$this->taxiModel->getdriverId();
//            $Driver_id = (int)$New_id[0][0];
            }
//            var_dump($License_plates, $Model, $Year, $Type, $Color, $Status, $Driver_id, $Image);die();
            $this->taxiModel->editTaxi($Taxi_id,$License_plates,$Model,$Year,$Type,$Color,$Status,$Driver_id,$Image);
            header("location:index.php?page=Taxi-list");

        }

    }
}