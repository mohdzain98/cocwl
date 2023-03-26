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
<body style="background-color: rosybrown;">
<?php
include("includes/navbar.php");
?>

<div id="content">
    <div class="container" style="margin-top: 100px;">
        <div class="col-md-3">
            <div class="panel panel-default sidebar-menu">
            <div class="panel-heading">
                <p>War Area</p>
            </div>
            <div class="panel-body">
            <ul class="nav nav-pills nav-stacked">
            <li class="<?php if(isset($_GET['startawar'])){echo "active";}?>">
                <a href="war.php?startawar"><i class="fa fa-sign-in"></i> Star a War</a>
            </li>
            <li class="<?php if(isset($_GET['warinfo'])){echo "active";}?>">
                <a href="war.php?warinfo"><i class="fa fa-info-circle"></i>War Infos</a>
            </li>
            <li class="<?php if(isset($_GET['warstats'])){echo "active";}?>">
                <a href="war.php?warstats"><i class="fa fa-info-stats "></i>War Stats</a>
            </li>
            </ul>

        </div>
        </div>
    </div>
    <div class="col-md-9">
            <?php
            if(isset($_GET['startawar'])){
            include("war/startawar.php");
            }
            ?>
            
        </div>
    <div class="col-md-9">
            <?php
            if(isset($_GET['warinfo'])){
            include("war/warinfo.php");
            }
            ?>
            
        </div>
    <div class="col-md-9">
            <?php
            if(isset($_GET['warstats'])){
            include("war/warstats.php");
            }
            ?>
            
        </div>

</div>
</div>


</body>
</html>