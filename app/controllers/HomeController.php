<?php
class HomeController extends BaseController {
    private $__homeModel;
    function __construct($conn)
    {
        $this -> __homeModel = $this->initModel("HomeModel",$conn);
    }
// acction
    public function index() {
    $customers = $this -> __homeModel -> getAllCustomers();
        //redirectory
    $this -> view("layouts/client_layouts", ["content"=>"home","customers"=> $customers]);
    }
    // action L create , prams [$a,$b]
   public function create ($a , $b){

   }
}

?>