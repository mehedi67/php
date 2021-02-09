<?php

// $conn = new mysqli("localhost", "root","","Company");

// $insert = " INSERT INTO user values(NULL, 'mehedi', '123')";
// $insert = " INSERT INTO user values(NULL, 'hasan', 'hasan123')";
// $insert = " INSERT INTO user values(NULL, 'mintu', 'mintu123')";

// $conn->query($insert);


// echo "success";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation Checked</title>


</head>
<body>
    <h2>Username & Password Checking Validation</h2>

    <form action="#" method="post">
    
    Username: <input type="text" id="user" name="username"><br>

    
    Password: <input type="password" id="pass" name="password"><br>

        <input type="submit" value="check" name="check">
    </form>

    <?php

        if(isset($_POST['check'])){

            $u = $_POST['username'];
            $p = $_POST['password'];

            $conn = new mysqli("localhost","root","","Company");
            $myquery = " select * from user where username='$u' and password='$p'";
            $result = $conn->query($myquery);

            if ($result->num_rows >0){
                echo " <h3>you are a register user</h3>";
            }else{
                echo " <h3>You are not a register user! Thanks</h3>";
            }
            $result->free();
            $conn->close();

        }

    ?>
</body>
</html>