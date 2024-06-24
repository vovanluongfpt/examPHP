
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="http://localhost/MPC/app/css/Create.css">
    </head>
    <body>
    <form method="post" action="http://localhost/MPC/admin/index">
    <input type="hidden" name="id" value='<?php echo !empty($createsanpham) ? $createsanpham->id : -1 ?>'>
        <div class="create">
            <div class="create1">THÊM MỚI ĐỒNG HỒ</div>
            <div class="create2">TÊN ĐỒNG HỒ 
                <input type="text" name="name" value="<?php  echo !empty($createsanpham) ? $createsanpham->name : '' ?>">
            </div>
            <div class="create2">IMG Chính
            <input type="img" name="img1" value="<?php  echo !empty($createsanpham) ? $createsanpham->img1 : '' ?>">
            </div >
            <div class="create2">IMG
            <input type="img" name="img2" value="<?php  echo !empty($createsanpham) ? $createsanpham->img2 : '' ?>">
            </div >
            <div class="create2">IMG
            <input type="img" name="img3" value="<?php  echo !empty($createsanpham) ? $createsanpham->img3 : '' ?>">
            </div >
            <div class="create2">IMG
            <input type="img" name="img4" value="<?php  echo !empty($createsanpham) ? $createsanpham->img4 : '' ?>">
            </div >
            <div class="create2">IMG
            <input type="img" name="img5" value="<?php  echo !empty($createsanpham) ? $createsanpham->img5 : '' ?>">
            </div >
            <div class="create2">KIỂU ĐỒNG HỒ
            <input type="text" name="style" value="<?php  echo !empty($createsanpham) ? $createsanpham->style : '' ?>">
            </div>
            <div class="create2">GIÁ BÁN
            <input type="number" name="price" value="<?php  echo !empty($createsanpham) ? $createsanpham->price: '' ?>">
            </div>
            <div class="create2"> NGÀY THÊM
            <input type="date" name="datetime" value="<?php  echo !empty($createsanpham) ? $createsanpham->datetime: '' ?>">
            </div>
            <input type="submit" value=" ADD" name="submit" class="create3">
            <h1><a href="http://localhost/mpc/admin/list1dongho">Xem Danh Sach Them</a></h1> 
        </div>
    </form>
    </body>
    </html>
