<?php

class AdminController extends BaseController {
    private $__model;

    function __construct($conn) {
        $this->__model = $this->initModel("AdminModel", $conn);
    }

    function index() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            // Xử lý thêm sản phẩm
            $name = $_POST['name'];
            $img1 = $_POST['img1'];
            $img2 = $_POST['img2'];
            $img3 = $_POST['img3'];
            $img4 = $_POST['img4'];
            $img5 = $_POST['img5'];
            $style = $_POST['style'];
            $price = $_POST['price'];
            $datetime = $_POST['datetime'];
            // Gọi phương thức createsanpham với mảng $_POST
            $this->__model->createsanpham($_POST);
        } 
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
            if ($action == 'edit') {
                $id = $_GET['id']; // Lấy id từ URL hoặc form
                // Code xử lý sửa sản phẩm
                $this->__model->updatesanpham($id, $_POST); // Truyền đúng thông tin cần thiết
            } else if ($action == 'delete') {
                $id = $_GET['id']; // Lấy id từ URL hoặc form
                // Code xử lý xóa sản phẩm
                $this->__model->deletesanpham($id); // Truyền id cần xóa
            }
        } else {
            $table = 'createsanpham'; // Tên bảng chứa dữ liệu sản phẩm
            $products = $this->__model->getAll($table);
            $this->view("admin", ["products" => $products]);
        }
    }
    function list1dongho(){
        $sanpham = $this->__model->getAll("createsanpham");
        $this->view("list1dongho",["data"=>$sanpham]);
    }
}
?>