<?php
include 'connection.php';
    
    if (isset($_POST['register'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $role = $_POST['role'];
        $phonenumber = $_POST['phonenumber'];
        $email = $_POST['email'];
        $password = base64_encode($_POST['password']);
        $dateofbirth = $_POST['dateofbirth'];

        // for email validation
        $sql="select * from users where (email='$email');";

      $res=mysqli_query($conn,$sql);

      if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
       
    //    you can validate all by using these
        if($email==$row['email'])
        {
            	$message = "email already exists";
        }

         //    you can validate all by using these
    }
        // for email validation


else{
    //$email = $_POST['email'];


       

        $str = "INSERT INTO users (firstname, lastname, role, phonenumber, email, password, dateofbirth) 
        VALUES('$firstname', '$lastname', '$role', '$phonenumber', '$email', '$password', '$dateofbirth')";
        

        if(mysqli_query($conn, $str)){
            $success_message = "Successfully Registered";
        }
    }    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/style.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div id="register-container" style="margin-left:450px;" class="col-sm-4">
       
        <blockquote class="blockquote text-center">
        <p class="mb-0" style="color: white;">User Registration Form</p>
        <footer class="blockquote-footer">Anyone can register by using <cite title="Source Title">This registration form</cite></footer>
        </blockquote>
        <hr>
        <?php
            
            if(isset($message)){
            ?> 
            <div class="alert alert-danger" style="margin-left: 10px; margin-right:10px;">
                <strong>Warning!</strong> <?php echo $message;?>.
            </div>
        <?php
            }
        ?> 

        <?php
            if(isset($success_message)){
        ?> 
            <div class="alert alert-success" style="margin-left: 10px; margin-right:10px;">
                <strong>Wow!</strong> <?php echo $success_message;?>.
            </div>
        <?php
            }
        ?> 

        <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="" method="post">

                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="email-label">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                        </span>
                    </div>
                    <input type="text" name="firstname" class="form-control" placeholder="First Name" aria-label="First Name" aria-describedby="name-label" required>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="name-label">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input type="text" name="lastname" class="form-control" placeholder="Last Name" aria-label="Last Name" aria-describedby="name-label" required>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="name-label">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                            </span>
                        </div>
                        
                        <select name="role" class="form-control" aria-label="Role Name" aria-describedby="role-label" required>
                            <option >--Select--</option>
                            <option value="Teacher">Teacher</option>
                            <option value="Student">Student</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="number-label">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                        </span>
                    </div>
                    <input type="text" name="phonenumber" class="form-control" placeholder="Phone Number" aria-label="Phone Number" aria-describedby="nmumber-label" required>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="email-label">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-label" required>
                    </div>

                    

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="password-label">
                            <i class="fa fa-key" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-label" required>
                    </div>

                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="date-label">
                        <i class='fas fa-times-circle fa-spin fa-1.5x' aria-hidden="true"></i>
                        </span>
                    </div>
                    <input type="date" name="dateofbirth" class="form-control" placeholder="Date of Birth" aria-label="Date" aria-describedby="date-label" required>
                    </div>

                    <div class="btn-group" role="group" style="margin-left: 150px;" aria-label="Basic example">
  
                        <button type="submit" name="register" class="btn btn-outline-secondary">Register</button>
                    </div>
                    <hr>
                    <div><a style="text-decoration:none; color:white;" href="login.php">Or Login</a></div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
