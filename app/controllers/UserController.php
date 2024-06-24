<?php
class UserController extends BaseController {
 
    private $__model ;
    public function __construct($conn){

        $this->__model = $this->initModel("UserModel", $conn);

    }

    public function login(){
        if(isset($_POST["username"]) && isset($_POST["password"])){
            $username=$_POST["username"];
            $password=$_POST["password"];
            $user = $this->__model->login ($username , $password);
            if(isset($user) && $user){
                $_SESSION["user"]= $user ;
                if($user["role"] == "admin"){
                    header( "Location: http://localhost/mpc/admin/index");

                }else{
                    header( "Location: http://localhost/mpc/home/index");
                }
            }else{
                header( "Location: http://localhost/mpc/user/login?error=true");
            }
            
        }else {
            $this->view("login");
    }
    
}
public function logout (){
    if(isset($_SESSION["user"])){
        $role = $_SESSION["user"]["role"];
        $_SESSION ["user"]=null;
        if($role == "admin"){
            header("Location:http://localhost/mpc/user/login");

        }else {
            header( "Location:http://localhost/mpc/home/index");
        }

    }
    $_SESSION ["user"]=null;
    header("Location:http://localhost/mpc/home/index");
}
public function execute($id=null){
// insert or upde
            if(isset($_POST["submit"])){
                $username=$_POST ["username"];
                $password=$_POST ["password"];
                $role=$_POST ["role"];
                $id=$_POST["id"];
                if(empty($id)){
                   $this->__model->createUser($username,$password,$role);
                }
                else{
                    // update
                }

            }else {
                
                $user =$this->__model->getUserById ($id);
                $this->view("user/from",["user"=>$user]);
            }
// opnen form
}
public function listUser(){
    $listUser = $this->__model->getAlllistUser ();
    $this->view("layouts/client_layouts",["content"=>"user/listUser",["listUser"=>$listUser]]);
}
}

?>