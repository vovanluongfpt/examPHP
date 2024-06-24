<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px" with="700px">
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
    </tr>
    <?php $listUser = $data ["listUser"]; ?>
    <?php  foreach ($listUser as $key => $values) : ?>
        <tr>
       <th><?php echo $values->username?></th>
       <th><?php echo $values->password?></th>
       <th><?php echo $values->role?></th>
       <td><a href="http://localhost/mpc/user/execute/<?php echo $values ->id ?>"> EDIT</a></td>
       <td><a href=""> Delete</a></td>
        </tr>
        <?php endforeach?>
    </table>
</body>
</html>