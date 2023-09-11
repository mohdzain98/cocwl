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
                        <li class="active">
                            <a href="index.php">Welcome</a>
                        </li>
                     	<li>
                     		<a href="admin/adminlogin.php" target="_blank">Admin</a>
                     	</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<div id="index">
	<div class="container main" style="margin-top: 100px; border-style:solid;border-radius: 10px; border-width: 1px;">
		<center><img src="images/cocimage.png" alt="logo" class="hidden-xs" style="width:150px; height: 150px;"></center>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<hr class="hr hr-blur" style="background-color:#333; height:1px; margin-top: -12px;">
		</div>
		<center><h2 class="sofia" style="margin-top:10px;">Penn Rangers</h2></center>
		<br>
		<div class="row">
		<div class="col-md-3"></div>
        <div class="col-lg-3 col-md-3">
		<div class="panel panel-primary" style="opacity: 0.7;">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-tasks fa-5x"></i>
					</div>
				</div>
				
			</div>
			<a href="members.php" style="font-weight: bolder;">
				<div class="panel-footer">
					<span class="pull-left">Clan Members</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>

			</a>
		</div>
        </div>

        <div class="col-lg-3 col-md-3">
           <div class="panel panel-red" style="border-style:solid; border-color: red; opacity:0.7;">
			<div class="panel-heading" style="color: #fff; background-color: #d9534f;">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-tasks fa-5x"></i>
					</div>
				</div>
				
			</div>
			<a href="war.php" style="color: #d9534f; font-weight: bolder;">
				<div class="panel-footer">
					<span class="pull-left">War Area</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>

			</a>
		</div>
		</div>

		<div class="col-lg-3 col-md-3">
           <div class="panel panel-green" style="border-style:solid; border-color: green; opacity:0.7;">
			<div class="panel-heading" style="color: #fff; background-color: #5cd85c;">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-tasks fa-5x"></i>
					</div>
				</div>
				
			</div>
			<a href="check.php?dashboard" style="color: #5cd85c; font-weight: bolder;">
				<div class="panel-footer">
					<span class="pull-left">Data Manipulation</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>

			</a>
		</div>
		</div>
		<div class="col-md-8"></div>
		<div class="col-lg-3 col-md-3">
           <div class="panel panel-yellow" style="border-style:solid; border-color: brown; opacity:0.7;">
			<div class="panel-heading" style="color: #fff; background-color: brown;">
				
			</div>
			<a href="clangames.php?clg_view" style="color: brown; font-weight: bolder;">
				<div class="panel-footer">
					<span class="pull-left">Clan Games</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>

			</a>
		</div>
		</div>
        
	</div>
	
	
</div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>