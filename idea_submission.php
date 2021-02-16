<?php

include 'connection.php';
if(isset($_SESSION['id'])){
    
$id = $_SESSION['id'];

$sql = 'SELECT role FROM users WHERE id = '."$id".'';

$role = mysqli_query($conn, $sql);

if (mysqli_num_rows($role) > 0) {
            while($auth = mysqli_fetch_assoc($role)) {

if($auth['role'] == "Student")
{
    if (isset($_POST['add_idea'])){

        $student_id = $_SESSION['id'];
        $student_email = $_SESSION['email'];
        $project_title = $_POST['project_title'];
        $project_description = $_POST['project_description'];
        //$status = "New";

        // for email validation


        // echo $email;
       
        // echo $main_user_id;


       


    # code...

if(empty($project_title)&&empty($project_description)){
    $message = "Fields are required.....";
}
    

        else{

           

        $str = "INSERT INTO project_idea (student_id, student_email, project_title, project_description, status) 
        VALUES('$student_id', '$student_email', '$project_title', '$project_description', 'Not Seen')";
        

        if(mysqli_query($conn, $str)){
            $success_message = "Successfully Submitted";
        }
        else
        {
            $message = "Sorry, not submitted..... try again, please";
        }
    }


}
}

else
{
    header('Location:login.php');
}

}
}

}
else{
    header('Location:login.php');
}
?>





<!DOCTYPE html>
<html lang="en">

<?php include 'student/head.php';?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
       <?php include 'student/header.php';?>
        <!-- END HEADER DESKTOP -->
<div class="page-container4">
            <!-- Alert section -->
            <?php include 'student/alertsection.php';?>
            <section>

        <div class="container">
                    <div class="row">
<?php include 'student/menusidebar.php';?>

<div class="col-lg-6">
    <form  id="d" action="" name="addmember" method="post">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Idea</strong> Submission
                                    </div>
                                    <br>
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

                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">You</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static"><?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?></p>
                                                </div>
                                            </div>
                                        

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="title-input" class=" form-control-label">Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="tite-input" name="project_title" placeholder="Enter Title" class="form-control">
                                                    <small class="help-block form-text">Please enter title</small>
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="description-input" class=" form-control-label">Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea type="text" id="description-input" name="project_description" placeholder="Enter Description" class="form-control"></textarea>
                                                    <small class="help-block form-text">Please enter description</small>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" name="add_idea" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <!-- <button type="reset" class="btn btn-danger btn-sm" > -->
<!-- <button type="button" value="reset() outside form" 
               onclick="geek.reset();" class="btn btn-danger btn-sm">
                <input type="button" 
               /> 
                                            <i class="fa fa-ban"></i> Reset
                                         </button>  -->
                                    </div>
                                </div>
                                </form>
                                <!-- <div class="card">
                                    <div class="card-header">
                                        <strong>Inline</strong> Form
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-inline">
                                            <div class="form-group">
                                                <label for="exampleInputName2" class="pr-1  form-control-label">Name</label>
                                                <input type="text" id="exampleInputName2" placeholder="Jane Doe" required="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail2" class="px-1  form-control-label">Email</label>
                                                <input type="email" id="exampleInputEmail2" placeholder="jane.doe@example.com" required="" class="form-control">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div> -->
                            </div>

</div>
</div>
</section>
</div>
                            </div>

    <?php include 'student/script.php';?>

    <!-- <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
</script> 
    <script> 
        $(document).ready(function() { 
            $("button").click(function() { 
                //$("#d").trigger("reset"); 
                //$("#d").get(0).reset(); 
                $("#d")[0].reset() 
            }); 
        }); 
    </script>  -->

</body>

</html>



