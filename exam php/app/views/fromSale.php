<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<?php 
    $Sale = $data["Sale"] ;
?>
<body>
    <form action="http://localhost/examphp/Sale/execute" method="POST">
        <input type="hidden" name="id" value='<?php echo ($Sale)  ? $Sale->id : "" ?>'>
        <input type="text" name="itemcode" value='<?php echo ($Sale) ? $Sale->itemcode : "" ?>' placeholder="input itemcode">
        <input type="text" name="itemname" value='<?php echo ($Sale) ? $Sale->itemname : "" ?>' placeholder="input itemname">
        <input type="text" name="quantity" value='<?php echo ($Sale) ? $Sale->quantity : "" ?>' placeholder="input quantity">
        <input type="text" name="exprieddate" value='<?php echo ($Sale) ? $Sale->note : "" ?>' placeholder="input exprieddate">
        <input type="text" name="note" value='<?php echo ($Sale) ? $Sale->note: "" ?>' placeholder="input note">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>