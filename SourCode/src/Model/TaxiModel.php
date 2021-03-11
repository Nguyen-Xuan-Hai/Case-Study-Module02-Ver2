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
        $sql = "SELECT * FROM TAXI JOIN DRIVER ON TAXI.Driver_id = DRIVER.Driver_id";
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

    public function deleteTaxi($Taxi_id){

        $sql = "DELETE FROM TAXI WHERE Taxi_id = :Taxi_id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(":Taxi_id", $Taxi_id);
        $statement->execute();
        return $statement->fetchAll();
    }


    public function editTaxi($Taxi_id,$License_plates,$Model,$Year,$Type,$Color,$Status,$Driver_id,$Image)
    {
//        var_dump($Taxi_id,$License_plates,$Model,$Year,$Type,$Color,$Status,$Driver_id,$Image);
        $sql = "UPDATE TAXI SET License_plates=:License_plates,Model=:Model,Year=:Year,Type=:Type,Color=:Color,Status=:Status,Driver_id=:Driver_id,Image=:Image WHERE Taxi_id=:Taxi_id";

        $stmt = $this->database->prepare($sql);
        $stmt->bindValue("Taxi_id",$Taxi_id);
        $stmt->bindParam(":License_plates", $License_plates);
        $stmt->bindParam(":Model", $Model);
        $stmt->bindParam(":Year", $Year);
        $stmt->bindParam(":Type",$Type);
        $stmt->bindParam(":Color", $Color);
        $stmt->bindParam(":Status", $Status);
        $stmt->bindValue(":Driver_id", $Driver_id);
        $stmt->bindValue(":Image", $Image);
//        var_dump($License_plates);
        $stmt->execute();
//        var_dump($stmt->execute());
//        var_dump($stmt->execute());die();
//        return $stmt->fetchAll();
//        var_dump($stmt->fetchAll());die();
        return $stmt->fetchAll();
    }

    public function findById($Taxi_id)
    {
//        var_dump(123123);die();
        $sql = "SELECT * FROM TAXI WHERE Taxi_id =:Taxi_id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":Taxi_id", $Taxi_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function searchTaxi($search){
        $sql ="SELECT * FROM v_taxi WHERE F_name LIKE '%$search%' OR License_plates LIKE '%$search%'";
        $stml = $this->database->query($sql);
        return $stml->fetchAll();
    }


}