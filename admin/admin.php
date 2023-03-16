<?php
include("../includes/db.php");
session_start();
include('welcome.php');
?>
<html>
<head>
    <title>Admin at Penn rangers</title>
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
<body style="background-color: lightblue;">
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
                            <a href="../index.php">Home</a>
                        </li>
                        <li style="margin-left:250px; margin-top:5px;border-style:solid;border-radius: 7px; border-width: 1px; border-color: darkblue;">
                           <h4 style="margin-right:10px;"> <?php welcome(); ?></h4>
                        </li>

                    </ul>
                    
            </div>
        </div>
    </div>
</nav>

<div class="container" style="margin-top: 100px; border-style:solid;border-radius: 10px; border-width: 1px;">
    <h2>Year</h2>
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
<div class="container" style="margin-top: 20px; margin-bottom:20px; border-style:solid;border-radius: 10px; border-width: 1px;">
    <h2>Admin Id and Password</h2>
    <div class="col-md-3">
    <div class="box">
        <form class="navbar-form" method="post" accept="">
            <div class="table-responsive" style="margin-top:5px;">
            <table class="table">
                <thead>
                    <tr>
                        <th>Admin Id</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query="select * from admin";
                    $run=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($run)){
                    $email=$row['admin_email'];
                    $pass=$row['admin_pass'];
                    ?>
                    <tr>
                        <td><?php echo "$email" ?></td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
        </form>
    </div>
    </div>
    <div class="col-md-3">
        <div class="box">
            <label>Delete Admin</label>
            <form method="post" accept="" class="navbar-form">
                <select name="id" class="form-control" style="margin-top:5px; margin-right: 5px;">
                <option>select</option>
                    <?php
                    $run=mysqli_query($con,"select admin_email from admin");
                        while($row=mysqli_fetch_array($run)){
                            $email=$row['admin_email'];
                    ?>
                        <option><?php echo $email ?></option>

                        <?php } ?>
                        
            </select>
            <input type="password" name="delpass" placeholder="enter your password" required="" class="form-control" style="margin-top:5px;">
            <button type="submit" value="Search" name="delete_admin" class="btn btn-primary" style="margin-top:8px; margin-left: 8px;"> delete </button>
            </form>
        </div>
    </div>
    <div class="col-md-3">
        <div class="box">
            <label>Insert New Admin</label>
            <form method="post" accept="" class="form-login">
                <input type="text" name="id" placeholder="enter Id here" required="" class="form-control">
                <input type="passsword" name="pass" placeholder="Enter password" required="" class="form-control" style="margin-top:5px; margin-bottom:5px;">
                <input type="passsword" name="confirmpass"  placeholder="Confirm password" required="" class="form-control">
                <button type="submit" value="Search" name="insert_cred" class="btn btn-primary" style="margin-top:8px; margin-left: 8px;">
                                submit
                            </button>
            </form>
        </div>
    </div>

    <div class="col-md-3">
        <div class="box">
            <label>Update Passoword</label>
            <form method="post" accept="" class="navbar-form">
                <select name="id" class="form-control" style="margin-top:5px; margin-right: 5px;">
                <option>select</option>
                    <?php
                    $run=mysqli_query($con,"select admin_email from admin");
                        while($row=mysqli_fetch_array($run)){
                            $email=$row['admin_email'];
                    ?>
                        <option><?php echo $email ?></option>

                        <?php } ?>
                        
            </select>
            <input type="password" name="oldpass" class="form-control" placeholder="current password" required="" style="margin-top:5px; margin-bottom:5px;">
            <input type="password" name="newpass" class="form-control" placeholder="new password" required="" style="margin-bottom:5px;">
            <input type="password" name="confirmpass" class="form-control" placeholder="confirm password" required="">
            <button type="submit" value="Search" name="update_pass" class="btn btn-primary" style="margin-top:8px; margin-left: 8px;"> update </button>
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
}elseif(isset($_POST['insert_cred'])){
    $id=$_POST['id'];
    $pass=$_POST['pass'];
    $cpass=$_POST['confirmpass'];
    if($pass==$cpass){
        $query="insert into admin values('$id','$pass')";
        $run=mysqli_query($con,$query);
        echo "<script>alert('Entered successfully')
        window.open('admin.php','_SELF')</script>";
    }else{
        echo"<script>alert('password and confirm password does not match')</script>";
    }
}elseif(isset($_POST['update_pass'])){
    $id=$_POST['id'];
    $opass=$_POST['oldpass'];
    $npass=$_POST['newpass'];
    $cpass=$_POST['confirmpass'];
    $check="select admin_pass from admin where admin_email='$id'";
    $run=mysqli_query($con,$check);
    $row=mysqli_fetch_array($run);
    $checkpass=$row['admin_pass'];
    if($opass==$checkpass){
        if($npass==$cpass){
            $update="update admin set admin_pass='$npass' where admin_email='$id'";
            $run=mysqli_query($con,$update);
            echo "<script>alert('updated successfully')
            window.open('admin.php','_self')</script>";
        }else{
            echo "<script>alert('New and confirm password mismatch')</script>";
        }
    }else{
        echo "<script>alert('current password mismatch')</script>";
    }

}elseif(isset($_POST['delete_admin'])){
    $count="select admin_email from admin";
    $run=mysqli_query($con,$count);
    $rowcount=mysqli_num_rows($run);
    if($rowcount>1){
    $id=$_POST['id'];
    $pass=$_POST['delpass'];
    $check="select admin_pass from admin where admin_email='$id'";
    $run=mysqli_query($con,$check);
    $row=mysqli_fetch_array($run);
    $checkpass=$row['admin_pass'];
    if($pass==$checkpass){
        $query="delete from admin where admin_email='$id'";
        $run=mysqli_query($con,$query);
        echo "<script>alert('deleted successfully')
        window.open('adminlogin.php','_SELF')</script>";
    }else{
        echo "<script>alert('password mismatch')</script>";
    }
    }else{
        echo "<script>alert('SORRY! you are the only admin and that cannot be deleted.')</script>";
    }
}
?>