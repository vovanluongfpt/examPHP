<?php 

class ProductController extends BaseController {
    public function index (){
        $this->view("layouts/client_layouts",["content"=>"product"]);
    }
    public function list1dongho(){
        $this->view("layouts",["content"=>"list1dongho"]);
    }
}
    
?>