<?php


namespace App\Model;


class UserModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM USER_TBL";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function createUser($F_name,$L_name,$Gender,$Contat_no,$Age,$Address,$Taxi_id)
    {
//        var_dump($F_name, $L_name, $Gender, $Contat_no, $Age,$Address,$Taxi_id);
        $sql = "INSERT INTO USER_TBL (F_name,L_name,Gender,Contat_no,Age,Address,Taxi_id) VALUES (:F_name,:L_name,:Gender,:Contat_no,:Age,:Address,:Taxi_id);";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":F_name", $F_name);
        $stmt->bindParam(":L_name", $L_name);
        $stmt->bindParam(":Gender", $Gender);
        $stmt->bindParam(":Contat_no", $Contat_no);
        $stmt->bindParam(":Age", $Age);
        $stmt->bindParam(":Address", $Address);
        $stmt->bindParam(":Taxi_id", $Taxi_id);
        $stmt->execute();
//        var_dump($stmt->execute());die();
        return $stmt->fetchAll();
    }

    public function getTaxiId(){
        $sql = "SELECT * FROM TAXI";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function findById($Usr_id)
    {
//        var_dump(123123);die();
        $sql = "SELECT * FROM USER_TBL WHERE Usr_id=:Usr_id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":Usr_id", $Usr_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function deleteUser($Usr_id){
        $sql = "DELETE FROM USER_TBL WHERE Usr_id = :Usr_id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(":Usr_id", $Usr_id);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function editUser($Usr_id,$F_name,$L_name,$Gender,$Contat_no,$Age,$Address,$Taxi_id)
    {
        $sql = 'UPDATE USER_TBL SET F_name=:F_name,L_name=:L_name,Gender=:Gender,Contat_no=:Contat_no,Age=:Age,Address=:Address,Taxi_id=:Taxi_id WHERE Usr_id=:Usr_id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":Usr_id", $Usr_id);
        $stmt->bindParam(":F_name", $F_name);
        $stmt->bindParam(":L_name", $L_name);
        $stmt->bindParam(":Gender", $Gender);
        $stmt->bindParam(":Contat_no", $Contat_no);
        $stmt->bindParam(":Age", $Age);
        $stmt->bindParam(":Address", $Address);
        $stmt->bindParam(":Taxi_id", $Taxi_id);
        $stmt->execute();
//        var_dump($stmt->execute());die();
        return $stmt->fetchAll();

    }
    public function searchUser($search){
        $sql ="SELECT * FROM USER_TBL WHERE F_name LIKE '%$search%' OR Contat_no LIKE '%$search%'";
        $stml = $this->database->query($sql);
        return $stml->fetchAll();
    }
}