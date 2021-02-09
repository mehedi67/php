<!-- CREATE TRIGGER log_manu_del AFTER DELETE on manufacturer
FOR EACH ROW
BEGIN
DELETE FROM products WHERE products.manid = old.id;
END// -->


<?php
$conn = new mysqli("localhost","root","","Company");
if(isset($_POST['del'])){
    $q = " delete from manufacturer where id='".$_POST['manid']."'";
    $conn->query($q);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
Manu:<select name="manid" id="">

    <?php
       $q = " select * from manufacturer" ;
        $r = $conn->query($q);
        while($row = $r->fetch_assoc()){

            echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';

        }

    ?>  
    </select>

    <input type="submit" name="del" value="Delete">
</form>

</body>
</html>