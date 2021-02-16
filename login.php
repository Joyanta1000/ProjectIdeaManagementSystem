<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div id="login-container">
    <?php
        include 'connection.php';
    
        if (isset($_POST['login'])){
        
        $email = $_POST['email'];
        $password = base64_encode($_POST['password']);
        

        $str = "SELECT * FROM users WHERE email LIKE '$email' AND password LIKE '$password'";
        $result=mysqli_query($conn, $str);
        $auth=mysqli_fetch_array($result);
        if($auth>0){

            $_SESSION['id'] = $auth['id'];
            $_SESSION['email'] = $auth['email'];
            $_SESSION['firstname'] = $auth['firstname'];
            $_SESSION['lastname'] = $auth['lastname'];

            if($auth['role']=="Admin"){
                header('Location: index.php');
            }

            else if($auth['role']=="Teacher"){
                header('Location: teacher.php');
            }

            else if($auth['role']=="Student"){
                header('Location: student.php');
            }

            
        }
        else{
            $message = "Invalid email or password";
        }
    
        }
    ?>
     
        <h3>Account Login</h3>
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

                    <div class="text-center">
                        <button type="submit" name="login" class="btn btn-outline-secondary">Login Account</button>
                    </div>
                    <hr>
                    <div><a style="text-decoration:none; color:white;"  href="registration.php">Or Register</a></div>
                   
                </form>
            </div>
        </div>
        </div>
    </div>
</body>
</html>