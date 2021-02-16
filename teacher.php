
<?php

include 'connection.php';
if(isset($_SESSION['id'])){
$id = $_SESSION['id'];

$sql = 'SELECT role FROM users WHERE id = '."$id".'';

$role = mysqli_query($conn, $sql);

if (mysqli_num_rows($role) > 0) {
            while($auth = mysqli_fetch_assoc($role)) {

if($auth['role'] == "Teacher")
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

<?php include 'teacher/head.php';?>

<body class="animsition">
   <!--  <div class="page-wrapper"> -->
        <!-- HEADER DESKTOP-->
        <?php include 'teacher/header.php';?>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <?php include 'teacher/mobileheader.php';?>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <!-- <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
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
                                <form class="au-form-icon--sm" action="" method="post">
                                    <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                                    <button class="au-btn--submit2" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <!-- <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome back
                                <span>John!</span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <?php
                        $sql = "SELECT student_id FROM project_idea WHERE status = 'Accepted' ";

                         $result = mysqli_query($conn, $sql);
                         

        $total_accepted = mysqli_num_rows($result);
        
      

                        ?>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number"><?php
                                    if(isset($total_accepted))
                                    {
                                        echo "$total_accepted";
                                    }
                                 ?></h2>
                                <span class="desc">Total Accepted Idea</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                        <?php
                        $sql = "SELECT student_id FROM project_idea";

                         $result = mysqli_query($conn, $sql);
                         

        $total_idea = mysqli_num_rows($result);
        
      

                        ?>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number"><?php
                                    if(isset($total_idea))
                                    {
                                        echo "$total_idea";
                                    }
                                 ?></h2>
                                <span class="desc">Total Project Idea</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                        <?php
                        $sql = "SELECT student_id FROM project_idea WHERE status = 'Not Seen' ";

                         $result = mysqli_query($conn, $sql);
                         

        $total_not_seen = mysqli_num_rows($result);
        
      

                        ?>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number"><?php
                                    if(isset($total_not_seen))
                                    {
                                        echo "$total_not_seen";
                                    }
                                 ?></h2>
                                <span class="desc">Not Seen Idea</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>
                        <?php
                        $sql = "SELECT student_id FROM project_idea WHERE status = 'Rejected' ";

                         $result = mysqli_query($conn, $sql);
                         

        $total_rejected = mysqli_num_rows($result);
        
      

                        ?>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number"><?php
                                    if(isset($total_rejected))
                                    {
                                        echo "$total_rejected";
                                    }
                                 ?></h2>
                                <span class="desc">Total Rejected Idea</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-money"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->
            <!-- <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">statistics</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4"> -->
                            <!-- CHART-->
                            <!-- <div class="statistic-chart-1">
                                <h3 class="title-3 m-b-30">chart</h3>
                                <div class="chart-wrap">
                                    <canvas id="widgetChart5"></canvas>
                                </div>
                                <div class="statistic-chart-1-note">
                                    <span class="big">10,368</span>
                                    <span>/ 16220 items sold</span>
                                </div>
                            </div> -->
                            <!-- END CHART-->
                     <!--    </div>
                        <div class="col-md-6 col-lg-4"> -->
                            <!-- TOP CAMPAIGN-->
                            <!-- <div class="top-campaign">
                                <h3 class="title-3 m-b-30">top campaigns</h3>
                                <div class="table-responsive">
                                    <table class="table table-top-campaign">
                                        <tbody>
                                            <tr>
                                                <td>1. Australia</td>
                                                <td>$70,261.65</td>
                                            </tr>
                                            <tr>
                                                <td>2. United Kingdom</td>
                                                <td>$46,399.22</td>
                                            </tr>
                                            <tr>
                                                <td>3. Turkey</td>
                                                <td>$35,364.90</td>
                                            </tr>
                                            <tr>
                                                <td>4. Germany</td>
                                                <td>$20,366.96</td>
                                            </tr>
                                            <tr>
                                                <td>5. France</td>
                                                <td>$10,366.96</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> -->
                            <!-- END TOP CAMPAIGN-->
                      <!--   </div>
                        <div class="col-md-6 col-lg-4"> -->
                            <!-- CHART PERCENT-->
                           <!--  <div class="chart-percent-2">
                                <h3 class="title-3 m-b-30">chart by %</h3>
                                <div class="chart-wrap">
                                    <canvas id="percent-chart2"></canvas>
                                    <div id="chartjs-tooltip">
                                        <table></table>
                                    </div>
                                </div>
                                <div class="chart-info">
                                    <div class="chart-note">
                                        <span class="dot dot--blue"></span>
                                        <span>products</span>
                                    </div>
                                    <div class="chart-note">
                                        <span class="dot dot--red"></span>
                                        <span>Services</span>
                                    </div>
                                </div>
                            </div> -->
                            <!-- END CHART PERCENT-->
                       <!--  </div>
                    </div>
                </div>
            </section> -->
            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">data table</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <!-- <select class="js-select2" name="property">
                                            <option selected="selected">All Properties</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select> -->
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                       <!--  <select class="js-select2" name="time">
                                            <option selected="selected">Today</option>
                                            <option value="">3 Days</option>
                                            <option value="">1 Week</option>
                                        </select> -->
                                        <!-- <div class="dropDownSelect2"></div> -->
                                    </div>
                                    <!-- <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters</button> -->
                                </div>
                                <div class="table-data__tool-right">
                                    <!-- <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                        <select class="js-select2" name="type">
                                            <option selected="selected">Export</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <!-- <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th> -->
                                            <th>Student Name</th>
                                            <th>Student Email</th>
                                            
                                            <th>Project Title</th>
                                            <th>status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <?php

                                    $sql = 'SELECT * FROM users,project_idea WHERE users.id = project_idea.student_id';
         //echo $sql;
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($auth = mysqli_fetch_assoc($result)) {
              
           

    ?>
                                    <tbody>
                                        <tr class="tr-shadow">
                                            <!-- <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td> -->
                                            <td><?php echo $auth['firstname']; ?> &nbsp <?php echo $auth['lastname']; ?></td>
                                            <td>
                                                <span class="block-email"><?php echo $auth['email']; ?></span>
                                            </td>
                                            <td class="desc"><?php echo $auth['project_title']; ?></td>
                            
                                            <td>
                                                <?php if($auth['status']=="Rejected"){ ?>
                                                 <span class="status--process" style="color: red;"><?php echo $auth['status']; ?></span>
                                                 <?php } else if($auth['status']=="Not Seen") { ?>

                                                 <span class="status--process" style="color: indianred;"><?php echo $auth['status']; ?></span>
                                                 <?php } else { ?>

                                                 <span class="status--process"><?php echo $auth['status']; ?></span>
                                                 <?php } ?>
                                            </td>
                                            
                                            <td>
                                                <div class="table-data-feature">

                                                
                                                    
                                                    <a href="idea_view.php?id=<?php echo $auth['id']; ?>" class="item" data-toggle="tooltip" data-placement="top" title="View">
                                                        <i class="zmdi zmdi-eye"></i>
                                                    </a>
                                                

                                                    <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </button> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        
                                    </tbody>

                                    <?php 
                                }
                                }
                                ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
            <!-- <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <?php include 'teacher/script.php'; ?>

</body>

</html>
<!-- end document-->
