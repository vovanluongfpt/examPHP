<?php 
class AdminModel {
    private $__conn  ; 
    public function __construct($conn) {
        $this->__conn = $conn;
    }
    public function getAll($table) {
        try {
            if(isset($this->__conn)) {
                $sql = "select * from $table";
                $stmt = $this->__conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $result;
            } else {
                echo "not connection";
                die();
            }
        } catch (PDOException $e) {
            echo "". $e->getMessage();
        }
        return null;   
    }
    public function getitemidtable($id) {
        try {
            if(isset($this->__conn)) {
                $sql = "select * from createsanpham where id = $id";
                $stmt = $this->__conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $result;
            } else {
                echo "not connection";
                die();
            }
        } catch (PDOException $e) {
            echo "". $e->getMessage();
        }
        return null;   
    }
    public function createsanpham($data){
        $query = "INSERT INTO createsanpham (name, img1, img2, img3, img4, img5, style, price, datetime) VALUES (:name, :img1, :img2, :img3, :img4, :img5, :style, :price, :datetime)";
        $stmt = $this->__conn->prepare($query);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':img1', $data['img1']);
        $stmt->bindParam(':img2', $data['img2']);
        $stmt->bindParam(':img3', $data['img3']);
        $stmt->bindParam(':img4', $data['img4']);
        $stmt->bindParam(':img5', $data['img5']);
        $stmt->bindParam(':style', $data['style']);
        $stmt->bindParam(':price', $data['price']);
        $stmt->bindParam(':datetime', $data['datetime']);
        // Thực thi truy vấn
        $stmt->execute();
        echo "Thêm sản phẩm thành công!";
    }      public function deletesanpham($id) {
        try {
            $this->__conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM createsanpham WHERE id=:id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            echo "Record deleted successfully";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
}
public function updatesanpham($id, $data) {
    try{
    $query = "UPDATE createsanpham SET name = :name, style = :style, img1 = :img1, img2 = :img2, img3 = :img3, img4 = :img4, img5 = :img5, price = :price, datetime = :datetime WHERE id = :id";
    $stmt = $this->__conn->prepare($query);
    $stmt->bindParam(':name', $data['name']);
    $stmt->bindParam(':style', $data['style']); // Thêm bind cho style
    $stmt->bindParam(':img1', $data['img1']);
    $stmt->bindParam(':img2', $data['img2']);
    $stmt->bindParam(':img3', $data['img3']);
    $stmt->bindParam(':img4', $data['img4']);
    $stmt->bindParam(':img5', $data['img5']);
    $stmt->bindParam(':price', $data['price']);
    $stmt->bindParam(':datetime', $data['datetime']);
    $stmt->bindParam(':id', $id);
    $stmt->execute([$id,$data]); // Bỏ tham số $query đối với execute
    echo "thanh cong";
}catch(PDOException $e){
        echo "error".$e-> getMessage();
}
}}

?>