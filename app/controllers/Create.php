<?php
require "conneciondongho.php";
require "list1.php";
$id=$_REQUEST["id"] ?? -1 ;
$create = $pdo;
$createsanpham =getCreatesanphamById($id,$create);
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = trim($_REQUEST["name"]);
    $img= trim($_REQUEST["img"]);
    $kieudongho = trim($_REQUEST["kieudongho"]);
    $giacu = trim($_REQUEST["giacu"]);
    $giamoi = trim($_REQUEST["giamoi"]);
    $ngaythem=trim($_REQUEST["ngaythem"]);
    $create = $pdo;
    saveCreatesanpham($name,$img,$kieudongho,$giacu,$giamoi,$ngaythem,$create);
    if($id<0){
        saveCreatesanpham($name,$img,$kieudongho,$giacu,$giamoi,$ngaythem,$create);
    }else  {
        editCreatesanpham($name,$img,$kieudongho,$giacu,$giamoi,$id,$ngaythem,$create);
    }
}
function saveCreatesanpham ($name,$img,$kieudongho,$giacu,$giamoi,$ngaythem,$create){
    try{
        $sql = "insert into createsanpham (`name`,`img`,`kieudongho`,`giacu`,`giamoi`,`ngaythem`) values (:name,:img,:kieudongho,:giacu,:giamoi,:ngaythem)";
        $sttm = $create->prepare($sql);
        $sttm ->execute(["name"=>$name,"img"=>$img,"kieudongho"=>$kieudongho,"giacu"=>$giacu,"giamoi"=>$giamoi ,"ngaythem"=>$ngaythem]);
        echo "Thêm Thành Công";
    }
    catch(PDOException $e){
        echo "Error".$e->getMessage ();
    }
}
function editCreatesanpham($name,$img,$kieudongho,$giacu,$giamoi,$ngaythem,$create,$id){
    try{
        $sql = "update createsanpham set name = :name,img=:img,kieudongho=:kieudongho,giacu=:giacu , giamoi=:giamoi where id = :id)";
        $sttm = $create->prepare($sql);
        $sttm -> execute(["name"=>$name,"img"=>$img,"kieudongho"=>$kieudongho,"giacu"=>$giacu,"giamoi"=>$giamoi,"ngaythem"=>$ngaythem,"id"=>$id]);
        echo "thanh cong";
    }
    catch(PDOException $e){
        echo "error".$e-> getMessage();
    }
}
function getCreatesanphamById($id , $create){

    try{
        $sql ="select * from createsanpham where id = :id";
        $sttm = $create->prepare($sql);
        $sttm ->execute(["id"=>$id]);
        $sttm->setFetchMode (PDO::FETCH_CLASS , "Createsanpham");
        $createsanpham = $sttm ->fetch();
        return $createsanpham;
        // print_r($customers);
    }catch(PDOException $e){
        echo "Get createsanpham error".$e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/MPC/app/css/Create.css">
</head>
<body>
<form method="post">
<input type="hidden" name="id" value='<?php echo !empty($createsanpham) ? $createsanpham->id : -1 ?>'>
    <div class="create">
        <div class="create1">THÊM MỚI ĐỒNG HỒ</div>
        <div class="create2">TÊN ĐỒNG HỒ 
            <input type="text" name="name" value="<?php  echo !empty($createsanpham) ? $createsanpham->name : '' ?>">
        </div>
        <div class="create2">IMG
        <input type="img" name="img" value="<?php  echo !empty($createsanpham) ? $createsanpham->img : '' ?>">
        </div >
        <div class="create2">KIỂU ĐỒNG HỒ
        <input type="text" name="kieudongho" value="<?php  echo !empty($createsanpham) ? $createsanpham->kieudongho : '' ?>">
        </div>
        <div class="create2">GIÁ CŨ
        <input type="number" name="giacu" value="<?php  echo !empty($createsanpham) ? $createsanpham->giacu: '' ?>">
        </div>
        <div class="create2">GIÁ MỚI
        <input type="number" name="giamoi" value="<?php  echo !empty($createsanpham) ? $createsanpham->giamoi: '' ?>">
        </div>
        <div class="create2"> NGÀY THÊM
        <input type="date" name="ngaythem" value="<?php  echo !empty($createsanpham) ? $createsanpham->ngaythem: '' ?>">
        </div>
        <input type="submit" value=" ADD" class="create3">
        <h1><a href="http://localhost/MPC/app/controllers/list1dongho.php">Xem Danh Sach Them</a></h1>
    </div>
</form>
</body>
</html>
