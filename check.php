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
<body style="background-color: gray;">
<?php
include("includes/navbar.php");
?>


<div id="content">
    <div class="container" style="margin-top: 100px;">
        <div class="col-md-3">
            <div class="panel panel-default sidebar-menu">
            <div class="panel-heading">
                <p>Data Manipulation</p>
            </div>
            <div class="panel-body">
            <ul class="nav nav-pills nav-stacked">
            <li class="<?php if(isset($_GET['dashboard'])){echo "active";}?>">
                <a href="check.php?dashboard"><i class="fa fa-info-circle"></i> Dashboard</a>
            </li>
            <li class="<?php if(isset($_GET['insert'])){echo "active";}?>">
                <a href="check.php?insert"><i class="fa fa-sign-in"></i> Insert</a>
            </li>
            <li class="<?php if(isset($_GET['update'])){echo "active";}?>">
                <a href="check.php?update"><i class="fa fa-pencil"></i> Update</a>
            </li>
            <li class="<?php if(isset($_GET['delete'])){echo "active";}?>">
                <a href="check.php?delete"><i class="fa fa-trash"></i> Delete</a>
            </li>
            </ul>

        </div>
        </div>
    </div>
    <div class="col-md-9">
            <?php
            if(isset($_GET['dashboard'])){
            include("dashboard.php");
            }
            ?>
            
        </div>
    <div class="col-md-9">
            <?php
            if(isset($_GET['insert'])){
            include("insert.php");
            }
            ?>
            
        </div>

        <div class="col-md-9">
            <?php
            if(isset($_GET['update'])){
            include("update.php");
            }
            ?>
            
        </div>
        <div class="col-md-9">
            <?php
            if(isset($_GET['delete'])){
            include("delete.php");
            }
            ?>
            
        </div>
</div>
</div>


</body>
</html>