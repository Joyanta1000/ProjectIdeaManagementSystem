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
   <!--  <div class="page-wrapper"> -->
        <!-- HEADER DESKTOP-->
       <?php include 'student/header.php';?>
        <!-- END HEADER DESKTOP -->

        <!-- WELCOME-->
        <!-- <section class="welcome2 p-t-40 p-b-55">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb3">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">You are here:</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="welcome2-inner m-t-60">
                            <div class="welcome2-greeting">
                                <h1 class="title-6">Hi
                                    <span>John</span>, Welcome back</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <form class="form-header form-header2" action="" method="post">
                                <input class="au-input au-input--w435" type="text" name="search" placeholder="Search for datas &amp; reports...">
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- END WELCOME-->

        <!-- PAGE CONTENT-->
        
            <!-- Alert section -->
            <?php include 'student/alertsection.php';?>
           <!--  <section>
                <div class="container">
                    <div class="row"> -->
                        

<!-- MENU SIDEBAR -->  <?php include 'student/menusidebar.php';?>

                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                                

                                <div class="row" >
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">data table</h3>
                                
                                <!-- <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div> -->
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i> <a style="text-decoration: none; color: white;" href="idea_submission.php">New Idea</a></button>
                                        <!-- <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2" >
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <!-- <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th> -->
                                                <th>email</th>
                                                <th>project title</th>
                                                <th>project description</th>
                                                <th>status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>


<?php
$email = $_SESSION['email'];
$student_id = $_SESSION['id'];
//echo $my_id;
$sql_id = "SELECT `main_user_id` FROM `subusers` WHERE `email` = '".$email."'";
$result1 = mysqli_query($conn, $sql_id);
 if (mysqli_num_rows($result1) > 0) {
            while($auth1 = mysqli_fetch_assoc($result1)) {
$id =  $auth1['main_user_id'];
                 }
                                                     }
         $sql = "SELECT * FROM `project_idea` WHERE `student_id` = '".$id."'";
         //echo $sql;
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($auth = mysqli_fetch_assoc($result)) {
              
           

    ?>
<form action="" method="POST">

                                            <tr class="tr-shadow">
                                                <!-- <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td> -->
                                                   
                                                <td>
                                                    <span class="block-email"><?php echo $auth['student_email'];?></span>
                                                </td>
                                                
                                                <td>
                                                    <span class="status--process"><?php echo $auth['project_title'];?></span>
                                                </td>

                                                <td>
                                                    <span class="status--process"><?php echo $auth['project_description'];?></span>
                                                </td>

                                                <td>
                                                    <span class="status--process"><?php echo $auth['status'];?></span>
                                                </td>
                                               
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button> -->
                                                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
 -->                                                        <form action="" method="Post">
                                                            <input type="hidden" name="id" value="<?php echo $auth['id']; ?>">
                                                        <button class="item" name="delete" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </form>
                                                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button> -->
                                                    </div>
                                                </td>
                                            </tr>
                                        </form>
                                            <tr class="spacer"></tr>
                                                    <?php  }
                                                     } else {
                                                        echo "0 results";
                                                     } ?>

                        <?php
                        if(isset($_POST['delete'])){
                        $student_id = $_POST['id'];
                                                           // echo $id;
                        $sql = "DELETE FROM `project_idea` WHERE `id` = '$student_id'";
                           
                           if (mysqli_query($conn, $sql)) {
                              echo "Record deleted successfully";
                           } else {
                              echo "Error deleting record: " . mysqli_error($conn);
                           }
                        }
                        ?>
                                            

                                        
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                                <!-- <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <!-- END PAGE CONTENT-->
                        </div>
                    </div>
                </div>
            </section>
        
        <!-- END PAGE CONTENT  -->

    </div>

    <?php include 'student/script.php';?>

</body>

</html>
<!-- end document-->