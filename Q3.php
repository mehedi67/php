<!-- CREATE PROCEDURE manufact
(
IN name VARCHAR(50),
IN address VARCHAR(100),
IN contact VARCHAR(50)
)
BEGIN
insert into manufacturer values(null,name,address,contact);
END// -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">

    Name: <input type="text" name="name" id="name" /> <br>          
    Address:  <input type="text" name="address" id="address"/> <br>              
    Contact Info: <input type="text" name="contact" id="id" /><br>
      <input type="submit" name="add" value="Add">

    </form>

    <?php


    if (isset($_POST['name'])){

        $conn = new mysqli("localhost","root","","Company");

        $name = $_POST['name'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $myquery = " call manufact('$name','$address','$contact');";

        $result = $conn->query($myquery);
        if($result){
            echo"Data Added";
        }else{
            echo"Erro found";
        }



    }



    ?>
</body>
</html>