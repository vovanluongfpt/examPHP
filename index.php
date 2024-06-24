<?php
session_start();
require_once "app/config/DB.php";
$conn = DBConnection::getConnection();
require_once"app/middleware/AuthMiddleware.php";
require_once "app/controllers/BaseController.php";
require_once "app/App.php";
require_once "app/models/HomeModel.php";
$middleware = new AuthMiddleware(["admin/index"]);
$app = new App($conn ,$middleware);
$models=new HomeModel($conn);
?>