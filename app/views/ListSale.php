<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" style="width: 700px;">
        <tr>
            <th>Id</th>
            <th>Itemcode</th>
            <th>Itemname</th>
            <th>Quantity</th>
            <th>Exprieddate</th>
             <th>Note</th>
        </tr>
        <?php $listSales = $data["listSaleitem"]; ?>
        <?php foreach ($listSales as $key => $value) : ?>
            <tr>
                <td><?php echo $value->id ?></td>
                <td><?php echo $value->itemcode ?></td>
                <td><?php echo $value->itemname ?></td>
                <td><?php echo $value->quantity ?></td>
                <td><?php echo $value->exprieddate ?></td>
                <td><?php echo $value->note ?></td>
                <td>
                    <a href="http://localhost/examphp/Sale/execute/<?php echo $value->id ?>">Edit</a> 
                    ||
                    <a href="http://localhost/examphp/Sale/delete/<?php echo $value->id ?>"> Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>