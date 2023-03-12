<?php
include("includes/db.php");
session_start();
?>
<html>
<head>
    <title>Penn Rangers at COC</title>
    <link rel="icon" type="image/x-icon" href="ticon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"> 
     
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

</head>
<body>

<nav class="navbar navbar-fixed-top">
    <div class="navbar-default" id="navbar"><!-- navbar start-->
        <div class="container"><!-- container start-->
            <div class="navbar-header">
                <a class="navbar-brand home" href="index.html">
                    <img src="images/logo.png" alt="logo" class="hidden-xs" style="width:50px; height: 50px;"><!-- LOGO-->
                    <img src="images/logo.png" alt="logo" class="visible-xs" style="width:50px; height:50px;">
                </a>


                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                    
                </button>
                
            </div>
            <div class="navbar-collapse collapse" id="navigation"> <!-- navbar start-->
                <div class="padding-nav"> <!-- padding start-->
                    <ul class="nav navbar-nav navbar-left">
                        <li >
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="check.php?insert">DML</a>
                        </li>

                    </ul>
                    
                    
            </div>
        </div>
    </div>
</div>
</nav>


<div class="container" style="margin-top: 100px; border-style:solid;border-radius: 10px; border-width: 1px;">
    <div class="col-md-12">
        
    </div>
    
    <center><h3 class="sofia" style="margin-bottom: 10px;">Leader : <p class="sofia" style="display: inline;">NUX</p></h3></center>
    <form action="members.php" method="post">
        <div class="row">
            <button class="btn btn-primary" type="submit" name="update" value="Update Cart" style="font-size: 18px; margin-left: 15px;">
        <i class="fa fa-refresh">Update Tables</i></button>
        </div>
        <div class="col-md-4">
        <div class="box">
            <div class="box-header">
                <center><h3 ><p class="p4">Coleaders</p></h3></center>
            </div>
            <div class="table-responsive">
                <table class='table'>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $query="select name,id from members where dint=2";
                $run=mysqli_query($con, $query);
                $i=1;
                while($row=mysqli_fetch_array($run)){
                    $name=$row['name'];
                ?>
                <tr>
                    <td><?php echo $name ?></td>
                    <td><input type='checkbox' name='remove[]' value='<?php echo $name ?>'></td>
                </tr>
                <?php }  ?>
                </tbody>
                </table>
            </div>
            
        </div>
        
    </div>
    <div class="col-md-4">
        <div class="box">
               <div class="box-header">
                <center><h3 ><p class="p4">Elders</p></h3></center>
            </div>
            <div class="table-responsive">
                <table class='table'>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $query="select name from members where dint=3";
                $run=mysqli_query($con, $query);
                while($row=mysqli_fetch_array($run)){
                    $name=$row['name'];
                ?>
                <tr>
                    <td><?php echo $name ?></td>
                    <td><input type='checkbox' name='remove[]' value='<?php echo $name ?>'></td>
                </tr>
                <?php }  ?>
                </tbody>
                </table>
            </div>
        </div>
        
    </div>
    <div class="col-md-4">
        <div class="box">
            <div class="box-header">
                <center><h3 ><p class="p4">Members</p></h3></center>
            </div>
            <div class="table-responsive">
                <table class='table'>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $query="select name,id from members where dint=4";
                $run=mysqli_query($con, $query);
                while($row=mysqli_fetch_array($run)){
                    $name=$row['name'];
                ?>
                <tr>
                    <td><?php echo $name ?></td>
                    <td><input type='checkbox' name='remove[]' value='<?php echo $name ?>'></td>
                </tr>
                <?php }  ?>
                </tbody>
                </table>
            </div>
        </div>
        
    </div>
    
    
    </form> 

    <?php
                function update_cart(){
                    global $con;
                    if(isset($_POST['update'])){
                        foreach ($_POST['remove'] as $remove_id) {
                            $delete="delete from members where name='$remove_id'";
                            $run_del=mysqli_query($con,$delete);
                            if($run_del){
                                echo "<script>window.open('members.php','_self')</script>";
                            }
                        }
                    }
                }
                echo @$up_cart=update_cart();

                ?>   


</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>