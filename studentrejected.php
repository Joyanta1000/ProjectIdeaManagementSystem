<?php

include 'connection.php';
if(isset($_SESSION['id'])){


}
else{
    header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="logout.php">Logout</a>
    Hey
    <?php echo $_SESSION['firstname'];?> &nbsp; <?php echo $_SESSION['lastname'];?>
    <br>
    Your Email : <?php echo $_SESSION['email'];?>
</body>
</html>