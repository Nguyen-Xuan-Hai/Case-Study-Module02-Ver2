<?php


namespace App\Model;


class TripModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM TRIP_DETAILS ";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function creatTrip($Trip_date,$Description,$Driver_id,$Usr_id,$Taxi_id,$Strt_time,$End_time,$Location_start,$Location_end,$Customer_number,$Status)
    {
        $sql = "INSERT INTO TRIP_DETAILS (Trip_date,Description,Driver_id,Usr_id,Taxi_id,Strt_time,End_time,Location_start,Location_end,Customer_number,Status) VALUES (:Trip_date,:Description,:Driver_id,:Usr_id,:Taxi_id,:Strt_time,:End_time,:Location_start,:Location_end,:Customer_number,:Status)";

        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":Trip_date", $Trip_date);
        $stmt->bindParam(":Description", $Description);
        $stmt->bindParam(":Driver_id", $Driver_id);
        $stmt->bindParam(":Usr_id",$Usr_id);
        $stmt->bindParam(":Taxi_id", $Taxi_id);
        $stmt->bindParam(":Strt_time", $Strt_time);
        $stmt->bindParam(":End_time", $End_time);
        $stmt->bindParam(":Location_start", $Location_start);
        $stmt->bindParam(":Location_end", $Location_end);
        $stmt->bindParam(":Customer_number", $Customer_number);
        $stmt->bindParam(":Status", $Status);

        $stmt->execute();
//        var_dump($stmt->execute());die();
        return $stmt->fetchAll();
    }

    public function getDetails(){
        $sql = "SELECT * FROM TAXI JOIN DRIVER ON TAXI.Driver_id = DRIVER.Driver_id JOIN USER_TBL ON TAXI.Taxi_id = USER_TBL.Taxi_id";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function deleteTrip($Trip_id){

        $sql = "DELETE FROM TRIP_DETAILS WHERE Trip_id = :Trip_id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(":Trip_id", $Trip_id);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function findById($Trip_id)
    {
//        var_dump(123123);die();
        $sql = "SELECT * FROM TRIP_DETAILS WHERE Trip_id =:Trip_id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":Trip_id", $Trip_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function editTaxi($Trip_id,$Trip_date,$Description,$Driver_id,$Usr_id,$Taxi_id,$Strt_time,$End_time,$Location_start,$Location_end,$Customer_number,$Status)
    {
//        var_dump($Taxi_id,$License_plates,$Model,$Year,$Type,$Color,$Status,$Driver_id,$Image);
        $sql = "UPDATE TRIP_DETAILS SET Trip_date=:Trip_date,Description=:Description,Driver_id=:Driver_id,Usr_id=:Usr_id,Taxi_id=:Taxi_id,Strt_time=:Strt_time,End_time=:End_time,Location_start=:Location_start,Location_end=:Location_end,Customer_number=:Customer_number,Status=:Status WHERE Trip_id=:Trip_id";

        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":Trip_id", $Trip_id);
        $stmt->bindParam(":Trip_date", $Trip_date);
        $stmt->bindParam(":Description", $Description);
        $stmt->bindParam(":Driver_id", $Driver_id);
        $stmt->bindParam(":Usr_id",$Usr_id);
        $stmt->bindParam(":Taxi_id", $Taxi_id);
        $stmt->bindParam(":Strt_time", $Strt_time);
        $stmt->bindParam(":End_time", $End_time);
        $stmt->bindParam(":Location_start", $Location_start);
        $stmt->bindParam(":Location_end", $Location_end);
        $stmt->bindParam(":Customer_number", $Customer_number);
        $stmt->bindParam(":Status", $Status);
        $stmt->execute();
//        var_dump($stmt->execute());
//        var_dump($stmt->execute());die();
//        return $stmt->fetchAll();
//        var_dump($stmt->fetchAll());die();
        return $stmt->fetchAll();
    }
}