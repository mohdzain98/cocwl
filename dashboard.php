<?php
$count_cl="select count(name) as ncl from members where dint=2";
$run_cl=mysqli_query($con,$count_cl);
$cl=mysqli_fetch_array($run_cl);
$count_eld="select count(name) as neld from members where dint=3";
$run_eld=mysqli_query($con,$count_eld);
$eld=mysqli_fetch_array($run_eld);
$count_mem="select count(name) as nmem from members where dint=4";
$run_mem=mysqli_query($con,$count_mem);
$mem=mysqli_fetch_array($run_mem);
$total=$cl['ncl']+$eld['neld']+$mem['nmem']+1;
?>



<div class="box" style="border-radius: 25px; border-style: groove;">
	<h5 style="margin-left:5px;">Leader 1</h5>
	<h2 style="margin-left: 5px;">Number of Coleaders in the clan: <?php echo $cl['ncl'] ?></h2>
	<h3 style="color: black; margin-left:5px;">Number of Elders in the clan: <?php echo $eld['neld'] ?></h3>
	<h4 style="margin-left: -15px;">Number of Members in the clan: <?php echo $mem['nmem'] ?></h4>
	<h1 style="margin-left: 5px; margin-top: 10px;">Total Members: <?php echo "$total" ?></h1>
</div>