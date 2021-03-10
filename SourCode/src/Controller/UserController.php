<?php

namespace App\Controller;

use App\Model\UserModel;

class UserController
{
    protected $taxiModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }

    public function index()
    {
        // Lấy tất hoá đơn từ DB ra.
        $users = $this->userModel->getAll();
        include "src/View/User/User-list.php";
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $ids = $this->userModel->getTaxiId();
            include "src/View/User/User-add.php";
        } else {
            $F_name = $_POST['F_name'];
            $L_name = $_POST['L_name'];
            $Gender = $_POST['Gender'];
            $Contat_no = $_POST['Contat_no'];
            $Address = $_POST['Address'];
            $Age = $_POST['Age'];
            $Taxi_id = $_POST['Taxi_id'];
//            var_dump($F_name, $L_name, $Gender, $Contat_no, $Age,$Address,$Taxi_id);die();
            $this->userModel->createUser($F_name,$L_name,$Gender,$Contat_no,$Age,$Address,$Taxi_id);
            header('location:index.php?page=User-list');

        }
    }

    public function delete(){
        $Usr_id = $_REQUEST['id'];
        $this->userModel->deleteUser($Usr_id);
        header('location:index.php?page=User-list');
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $Usr_id = $_REQUEST['id'];
            $ids = $this->userModel->getTaxiId();
            $user = $this->userModel->findById($Usr_id);
            include "src/View/User/User-update.php";
        } else {
            $Usr_id = $_POST['Usr_id'];
            $F_name = $_POST['F_name'];
            $L_name = $_POST['L_name'];
            $Gender = $_POST['Gender'];
            $Contat_no = $_POST['Contat_no'];
            $Address = $_POST['Address'];
            $Age = $_POST['Age'];
            $Taxi_id = $_POST['Taxi_id'];
//            var_dump($F_name, $L_name, $Gender, $Contat_no, $Age,$Address,$Taxi_id);die();
            $this->userModel->editUser($Usr_id,$F_name,$L_name,$Gender,$Contat_no,$Age,$Address,$Taxi_id);
            header('location:index.php?page=User-list');

        }
    }
}