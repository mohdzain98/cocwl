<?php
include("../includes/db.php");
session_start();
?>
<html>
<head>
    <title>Penn Rangers at COC</title>
    <link rel="icon" type="image/x-icon" href="ticon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"> 
     
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

</head>
<body style="background-color: rosybrown;">
<nav class="navbar navbar-fixed-top">
    <div class="navbar-default" id="navbar"><!-- navbar start-->
        <div class="container"><!-- container start-->
            <div class="navbar-header">
                <a class="navbar-brand home" href="index.html">
                    <img src="../images/logo.png" alt="logo" class="hidden-xs" style="width:50px; height: 50px;"><!-- LOGO-->
                    <img src="../images/logo.png" alt="logo" class="visible-xs" style="width:50px; height:50px;">
                </a>


                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                    
                </button>
                
            </div>
            <div class="navbar-collapse collapse" id="navigation"> <!-- navbar start-->
                <div class="padding-nav"> <!-- padding start-->
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>

                    </ul>
                    
            </div>
        </div>
    </div>
</nav>

<div class="container" style="margin-top: 100px;">
    <div class="col-md-3">
    <div class="box">
        <h4>Year in Database</h4>
        <?php 
        $query="select * from years";
        $run=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($run)){
            $name=$row['year'];

        ?>
        <h3><?php echo "$name" ?></h3>
    <?php } ?>
    </div>
    
</div>
<div class="col-md-6">
    <div class="box">
    <form class="navbar-form" method="post" accept="" enctype="multipart/form-data">
                        <div class="input-group">
                            <label class=" control-label" style="margin-top:5px;">Enter the year</label>
                            <div>
                                <input type="number" name="year" class="form-control" placeholder="Enter year" required="">
                            </div>
                            <center>
                                <button type="submit" value="Search" name="insert" class="btn btn-primary" style="margin-top:8px; margin-left: 8px;">
                                submit
                            </button>
                            </center>
                            
                        </div>
                        
    </form>
</div>
</div>

<div class="col-md-3">
    <div class="box">
        <form method="post" accept="" class="navbar-form">
            <label>Delete year from database</label>
        <div class="form-group" style="margin-left:10px;">
                   <label class=" control-label" style="margin-top:5px;">Year</label>
                    <div>
                    <select name="year" class="form-control" style="margin-top:5px; margin-right: 5px;">
                        <option>select</option>
                        <?php
                        $run=mysqli_query($con,"select year from years");
                            while($row=mysqli_fetch_array($run)){
                                $year=$row['year'];
                        ?>
                        <option><?php echo $year ?></option>

                        <?php } ?>
                        
                    </select>
                    </div>
         </div>
         <br/>
         <button type="submit" value="Search" name="delete" class="btn btn-primary" style="margin-top:8px; margin-left: 8px;">
                                submit
                            </button>
        </form>
    </div>
</div>

</div>

</body>
</html>

<?php
if(isset($_POST['insert'])){
    $year=$_POST['year'];
    $query="Insert into years values('$year')";
    $run=mysqli_query($con,$query);
    echo"<script>alert('Data Entered Successfully')
    window.open('admin.php','_SELF')
    </script>";
}elseif(isset($_POST['delete'])){
    $year=$_POST['year'];
    $query="delete from years where year='$year'";
    $run=mysqli_query($con,$query);
    echo"<script>alert('Deleted Successfully')
    window.open('admin.php','_SELF')
    </script>";
}
?>