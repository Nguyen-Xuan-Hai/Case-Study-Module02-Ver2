<?php


namespace App\Model;


class TaxiModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM TAXI ";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }


    public function creatTaxi($License_plates,$Model,$Year,$Type,$Color,$Status,$Driver_id,$Image)
    {
        $sql = "INSERT INTO TAXI(License_plates,Model,Year,Type,Color,Status,Driver_id,Image) VALUES (:License_plates,:Model,:Year,:Type,:Color,:Status,:Driver_id,:Image)";

        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":License_plates", $License_plates);
        $stmt->bindParam(":Model", $Model);
        $stmt->bindParam(":Year", $Year);
        $stmt->bindParam(":Type",$Type);
        $stmt->bindParam(":Color", $Color);
        $stmt->bindParam(":Status", $Status);
        $stmt->bindValue(":Driver_id", $Driver_id);
        $stmt->bindValue(":Image", $Image);
        $stmt->execute();
//        var_dump($stmt->execute());die();
        return $stmt->fetchAll();
    }


    public function getdriverId()
    {
        $sql = "SELECT * FROM DRIVER";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();

    }

    public function deleteTaxi($Driver_id){

        $sql = "DELETE FROM TAXI WHERE Driver_id = :Driver_id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(":Driver_id", $Driver_id);
        $statement->execute();
        return $statement->fetchAll();
    }


    public function editTaxi($License_plates,$Model,$Year,$Type,$Color,$Status,$Driver_id)
    {
//        var_dump($License_plates);
        $sql = "UPDATE TAXI SET License_plates=:License_plates,Model=:Model,Year=:Year,Type=:Type,Color=:Color,Status=:Status,Driver_id=:Driver_id";

        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":License_plates", $License_plates);
        $stmt->bindParam(":Model", $Model);
        $stmt->bindParam(":Year", $Year);
        $stmt->bindParam(":Type",$Type);
        $stmt->bindParam(":Color", $Color);
        $stmt->bindParam(":Status", $Status);
        $stmt->bindValue(":Driver_id", $Driver_id);
        $stmt->execute();
//        var_dump($stmt->execute());die();
        return $stmt->fetchAll();
    }



}