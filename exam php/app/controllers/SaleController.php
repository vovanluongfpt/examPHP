<?php 
class SaleController  extends BaseController {
    private $__model;
    public function __construct($conn) {
        $this->__model = $this->initModel("SaleModel", $conn);
    }
    public function execute($id = null) {
        die();
        //insert or update
        if(isset($_POST["submit"])) {
            $itemcode = $_POST["itemcode"];
            $imtename = $_POST["imtename"];
            $quantity = $_POST["quantity"];
            $exprieddate = $_POST["exprieddate"];
            $note = $_POST["note"];
            $id =  $_POST["id"];
            if(empty($id)) {
                //insert
                $this->__model->createSale($itemcode,$imtename,$quantity,$exprieddate,$note);
            } else {
                //update user
                $this->__model->updateSaleById($id,$itemcode,$imtename,$quantity,$exprieddate,$note);
            }
            
        } else {
            $Sale = $this->__model->getSaleById($id);
            $this->view("fromSale", ["Sale"=> $Sale]);
        }
        //onpen form
    }
    public function listSales() {
        $listSales =  $this->__model->listSales();
        $this->view("fromSale",["ListSale"=>$listSales]);
    }
    public function delete($id) {
        $this->__model->deleteSaleById($id);
    }
}
?>