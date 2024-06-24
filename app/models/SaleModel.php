<?php 
class SaleModel {
    private $__conn;
    public function __construct($conn) {
        $this->__conn = $conn;
    }
    public function createSale($itemcode,$imtename,$quantity,$exprieddate,$note) { 
        $sql = "insert into saleitimes (`itemcode`, `imtename`, `quantity`,`exprieddate`,`note`) values (:itemcode, :imtename, :quantity,:exprieddate,:note)";
        $stmt = $this->__conn->prepare($sql);
        $stmt->bindParam("itemcode", $itemcode, PDO::PARAM_STR);
        $stmt->bindParam("password", $imtename, PDO::PARAM_STR);   
        $stmt->bindParam("quantity", $quantity, PDO::PARAM_STR);
        $stmt->bindParam("exprieddate", $exprieddate, PDO::PARAM_STR);
        $stmt->bindParam("note", $note, PDO::PARAM_STR);
        $stmt->execute();
        header("Location: http://localhost/examphp/Saleitem/ListSale");
    }
    public function listSales() {
        try {
            if (isset($this->__conn)) {
                $sql = "select * from saleitimes  order by id desc ";
                $stmt = $this->__conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }
        } catch(Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }
    public function updateSaleById($id, $itemcode,$imtename,$quantity,$exprieddate,$note) {
        try {  
            $sql = "update saleitimes  set itemcode = :itemcode, imtename = :imtename, quantity = :quantity ,xprieddate :xprieddate,note:note  where id = :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("itemcode", $itemcode, PDO::PARAM_STR);
            $stmt->bindParam("password", $imtename, PDO::PARAM_STR);   
            $stmt->bindParam("quantity", $quantity, PDO::PARAM_STR);
            $stmt->bindParam("exprieddate", $exprieddate, PDO::PARAM_STR);
            $stmt->bindParam("note", $note, PDO::PARAM_STR);
            $stmt->execute();
            header("Location: http://localhost/examphp/Sale/ListSale");
        } catch(Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }
    public function getSaleById($id) {
        try {  
            $sql = "select * from saleitimes  where id = :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch(Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }
    public function deleteSaleById($id) {
        try {  
            $sql = "delete from saleitimes where id = :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            header("Location: http://localhost/examphp/Sale/ListSale");
        } catch(Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

}





?>