<?php
interface Iregister {
    public function getRegisterCourse(string $c_id):array;
    public function registerCourse(array $data_register):bool;

}

Class Register implements Iregister{
    private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }
    public function getRegisterCourse(string $rs_id):array{
        $sql = "SELECT * FROM sci_cs where cs_year = ".$rs_id;
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }else {
            return false;
        }

    }
    public function registerCourse(array $data_register):bool{
        $sql = "INSERT INTO `sci_re` (`re_id`, `re_email`, `re_title`, `re_name`, `re_phonenumber`, `re_IDuser`, `re_educational`, `re_image_URL`)";
        $sql .= " VALUES (null, :re_email, :re_title, :re_name, :re_phonenumber, :re_IDuser, :re_educational, :re_image_URL );";
        echo 'DEBUG ', $sql;
        $query = $this->ConDB->prepare($sql);
        if( $query->execute($data_register)){
            return true;
        }else {
            return false;
        }
    }
}
?>