<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $conn = new mysqli("localhost","root","","Company");
        if(isset($_POST['cv'])){
            $q = " create or replace view product_lg_5000 as select * from products where price>5000";
            $conn->query($q);
            echo "<h3>View created</h3>";
        }
    ?>
    <form action="" method="post">
        <input type="submit" value="Create View" name="cv">
    </form>

    <form action="" method="post">
    <input type="submit" value="Show products from View" name="sv">

    </form>

    
    <?php
    
        if(isset($_POST['sv'])){
            $q = " select * from product_lg_5000 ";
            $r = $conn->query($q);
            while($row = $r->fetch_assoc()){
                echo "<fieldset>";
                echo "ID: ".$row['id']. "<br>";
                echo "Name: ".$row['name']. "<br>";
                echo "Price: ".$row['price']. "<br>";
                echo "Manufacturer ID: ".$row['manid']. "<br>";


                echo "</fieldset>";
            }
        }
    ?>
</body>
</html>