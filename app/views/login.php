<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $error;
    if(isset($_REQUEST["error"])){
        $error=$_REQUEST["error"];
    }
    ?>
    <form action="http://localhost/mpc/user/login" method="post">
    <input type="text" name="username">
    <input type="text" name="password" >
    <span style="color: red;"><?php echo isset($error) && $error=="true" ? "sai roi ok " : ""?></span>
    <input type="submit" value="submit">
    </form>
</body>
</html>