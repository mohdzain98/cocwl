<?php
function welcome(){
if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('adminlogin.php','_self')</script>";
}else{
 echo "Admin:" .$_SESSION['admin_email']."";
}
}
?>