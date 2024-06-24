<?php
class UserModel {

    private $__conn ;
    public function __construct($conn){
        $this->__conn =$conn;

    }

    public function login ($username , $password){
        $sql = "select * from user where username = :username and password = :password";
        $stmt = $this->__conn->prepare($sql);
        $stmt->bindParam("username",$username, PDO ::PARAM_STR);
        $stmt->bindParam("password",$password, PDO ::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO :: FETCH_ASSOC); 
        // ASSOC : moi 1 phan tu la 1 mang , OBJ : la 1 class , Class : moi 1 phan tu la 1 object ma ba dang lay
    }
 public function createUser($username,$password,$role){
                
    $sql="insert into user  (`username`,`password`,`role`) values (:username , :password , :role)";
                $sttm = $this->__conn ->prepare($sql);
                $sttm->bindParam ("username",$username, PDO::PARAM_STR);
                $sttm->bindParam ("password",$password, PDO::PARAM_STR);
                $sttm->bindParam ("role",$role, PDO::PARAM_STR);
                $sttm->execute();
            header("Location:http://localhost/mpc/user/list");  
 }
public function getAlllistUser(){
    try {
        if(isset($this->__conn)){
            $sql = "select * from user";
            $stmt = $this ->__conn ->prepare($sql);
            $stmt -> execute();
            $result = $stmt -> fetchAll(PDO::FETCH_OBJ);
            return $result;
        }
        else{
            echo "not connection";
        }
        }catch(PDOException $e){
            echo "".$e->getMessage();
        }
        return null;
    
        }
        public function getUserById($id){
            
        }
}

?>