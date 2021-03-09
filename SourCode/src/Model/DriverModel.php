<?php


namespace App\Model;


class DriverModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM DRIVER";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }
    public function createDriver($F_name, $L_name, $Gender, $Conatct_no, $Rating, $Age,$Experience)
    {
        $sql = "INSERT INTO DRIVER (F_name,L_name,Gender,Conatct_no,Rating,Age,Experience) VALUES (:F_name,:L_name,:Gender,:Conatct_no,:Rating,:Age,:Experience);";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":F_name", $F_name);
        $stmt->bindParam(":L_name", $L_name);
        $stmt->bindParam(":Gender", $Gender);
        $stmt->bindParam(":Conatct_no", $Conatct_no);
        $stmt->bindParam(":Rating", $Rating);
        $stmt->bindParam(":Age", $Age);
        $stmt->bindParam(":Experience", $Experience);
        $stmt->execute();
        return $stmt->fetchAll();
    }


    public function deleteDriver($Driver_id){
        var_dump($Driver_id);
        $sql = "DELETE FROM DRIVER WHERE Driver_id = :Driver_id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(":Driver_id", $Driver_id);
        $statement->execute();
        return $statement->fetchAll();
    }

//    public function deleteDriver($Driver_id){
//        var_dump($Driver_id);
//        $sql = "DELETE FROM DRIVER WHERE Driver_id = :Driver_id";
//        $stmt = $this->database->prepare($sql);
//        $stmt->bindParam(":Driver_id", $Driver_id);
//        $stmt->execute();
//        var_dump($stmt->execute());die;
//    }
    public function editDriver($F_name,$L_name,$Gender,$Conatct_no,$Rating,$Age,$Experience,$Driver_id)
    {
        $sql = 'UPDATE DRIVER SET F_name=:F_name,L_name=:L_name,Gender=:Gender,Conatct_no=:Conatct_no,Rating=:Rating,Age=:Age,Experience=:Experience WHERE Driver_id=:Driver_id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":F_name", $F_name);
        $stmt->bindParam(":L_name", $L_name);
        $stmt->bindParam(":Gender", $Gender);
        $stmt->bindParam(":Conatct_no", $Conatct_no);
        $stmt->bindParam(":Rating", $Rating);
        $stmt->bindParam(":Age", $Age);
        $stmt->bindParam(":Experience", $Experience);
        $stmt->bindParam(":Driver_id", $Driver_id);
        $stmt->execute();
//        var_dump($stmt->execute());die();
        return $stmt->fetchAll();

    }
    public function findById($Driver_id)
    {
//        var_dump(123123);die();
        $sql = "SELECT * FROM DRIVER WHERE Driver_id =:Driver_id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":Driver_id", $Driver_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}