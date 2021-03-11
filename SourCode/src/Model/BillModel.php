<?php


namespace App\Model;


class BillModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function findById($Usr_id)
    {
//        var_dump($Usr_id);
        $sql = "SELECT * FROM USER_TBL WHERE Usr_id=:Usr_id";
        //$sql = "Select * from orders where orderNumber = :orderNumber ";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':Usr_id', $Usr_id);
        $stmt->execute();
//        var_dump($stmt->execute());die();
        return $stmt->fetchAll();
    }
    public function getById($Usr_id)
    {
//        var_dump($Usr_id);
        $sql = "SELECT * FROM BILL_DETAILS WHERE Usr_id=:Usr_id";
        //$sql = "Select * from orders where orderNumber = :orderNumber ";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':Usr_id', $Usr_id);
        $stmt->execute();
//        var_dump($stmt->execute());die();
        return $stmt->fetchAll();
    }

    public function creatBill($Bill_date,$Amount,$Discount,$Total,$Usr_id,$Trip_id)
    {
        $sql = "INSERT INTO BILL_DETAILS (Bill_date,Amount,Discount,Total,Usr_id,Trip_id) VALUES (:Bill_date,:Amount,:Discount,:Total,:Usr_id,:Trip_id)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":Bill_date", $Bill_date);
        $stmt->bindParam(":Amount", $Amount);
        $stmt->bindParam(":Discount", $Discount);
        $stmt->bindParam(":Total",$Total);
        $stmt->bindParam(":Usr_id", $Usr_id);
        $stmt->bindParam(":Trip_id", $Trip_id);

        $stmt->execute();
//        var_dump($stmt->execute());die();
        return $stmt->fetchAll();
    }

    public function getUser(){
        $sql = "SELECT * FROM USER_TBL WHERE Usr_id";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function getTrip(){
        $sql = "SELECT * FROM TRIP_DETAILS WHERE Trip_id";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }
}