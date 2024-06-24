<?php

class AuthMiddleware {
    // nhung cai action authen thi de trong action nay
private $action = [];
public function __construct(array $action = []){
$this ->action = $action;
}
public function execute ($controller = "", $action=""){

  if($controller=="admin"){
    if(!isset($_SESSION["user"])){
        header("Location:http://localhost/mpc/user/login");
    }else{
        $role = $_SESSION["user"] ["role"];
        if($role!="admin"){
            $this->handleError("403");
        }
    }
  }else{
    if(!isset($_SESSION["user"])){
        if(empty($action)|| in_array($controller."/".$action , $this->action)){
            $this->handleError("403");
        }
    }
  }
}   
function handleError ($name = "404"){
require_once "app/views/errors/$name.php";
exit();
}



}



?>