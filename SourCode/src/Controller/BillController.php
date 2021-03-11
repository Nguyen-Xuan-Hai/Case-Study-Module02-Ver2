<?php


namespace App\Controller;
use App\Model\BillModel;

class BillController
{
    protected $billModel;

    public function __construct()
    {
        $this->billModel = new billModel();
    }


    public function show($Usr_id)
    {
//        $bills = $this->billModel->getById($Usr_id);
        $users = $this->billModel->findById($Usr_id);
        include "src/View/Bill/Bill-list.php";
    }

    public function showDetails($Usr_id){
        $bills = $this->billModel->getById($Usr_id);
        include "src/View/Bill/Bill-details.php";
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//            $Usr_id = $_REQUEST['id'];
//            $getIds = $this->billModel->getDetails();
            $users = $this->billModel->getUser();
            $trips = $this->billModel->getTrip();
            include "src/View/Bill/Bill-add.php";
        } else {
            $Bill_date = $_POST['Bill_date'];
            $Amount = $_REQUEST['Amount'];
            $Discount = $_POST['Discount'];
            $Total = $_POST['Total'];
            $Usr_id = $_POST['Usr_id'];
            $Trip_id = $_POST['Trip_id'];

            $this->billModel->creatBill($Bill_date,$Amount,$Discount,$Total,$Usr_id,$Trip_id);

        }
    }

}