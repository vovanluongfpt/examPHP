    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Danh sách sản phẩm</title>
        <link rel="stylesheet" href="http://localhost/MPC/app/css/List.css">
    </head>
    <body>
        <h1>Danh sách sản phẩm</h1>
         <table border="1" border-collapse="0">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>Style</th>
            <th>Img1</th>
            <th>Img2</th>
            <th>Img3</th>
            <th>Img4</th>
            <th>Img5</th>
            <th>Price</th>
            <th>Datetime</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    <?php $result= $data['data'];
    foreach ($result as $sanphamdongho):?>
        <tr>
            <td><?php echo  $sanphamdongho ->id  ?> </td>
            <td><?php echo $sanphamdongho ->name ?> </td>
            <td><?php echo $sanphamdongho ->style ?> </td>
            <td><img class="img" src="<?php echo $sanphamdongho->img1 ?>" alt=""> </td>
            <td><img class="img" src="<?php echo $sanphamdongho->img2 ?>" alt=""> </td>
            <td><img class="img" src="<?php echo $sanphamdongho->img3 ?>" alt=""> </td>
            <td><img class="img" src="<?php echo $sanphamdongho->img4 ?>" alt=""> </td>
            <td><img class="img" src="<?php echo $sanphamdongho->img5 ?>" alt=""> </td>
            <td><img class="img" src="<?php echo $sanphamdongho->price ?>" alt=""> </td>
            <td><img class="img" src="<?php echo $sanphamdongho->datetime ?>" alt=""> </td>
            <td><button><a href="http://localhost/mpc/admin/index?getitemidtable=<?php echo $sanphamdongho->id ?>">Edit</a></button></td>
            <td><button><a href="http://localhost/mpc/admin/index?deletesanpham=<?php echo $sanphamdongho ->id ?>">Delete</a></button>
        </tr>
        <?php endforeach ?> 
    </table>
    </body>
    </html>