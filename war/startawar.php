<?php
$table=1;
$month='select';
$year='select';
if(isset($_POST['table'])){
    $table=$_POST['ntable'];
}
?>

<div class="container">
	<form class="navbar-form" method="post" accept="" enctype="multipart/form-data">
        <div class="input-group">
            <div class="box">
                <div class="form-group" style="margin-left:10px;">
                   <label class=" control-label" style="margin-top:5px;">Number of Members</label>
                    <div>
                    <input type="number" name="ntable" class="form-control" placeholder="<?php echo $table ?>" min="0" max="50">
                    </div>
                </div>
                <button type="submit" value="Search" name="table" class="btn btn-primary" style="margin-top:8px; margin-left: 10px; ">Enter</button>
            </div>
            <div class="box">
            <div class="form-group">
                <label class=" control-label" style="margin-top:5px;">Month</label>
                <div>
                    <select name="month" class="form-control" style="margin-top:5px; margin-right: 5px;" required="">
                        <option><?php echo $month ?></option>
                        <option>january</option>
                        <option>february</option>
                        <option>march</option>
                        <option>april</option>
                        <option>may</option>
                        <option>june</option>
                        <option>july</option>
                        <option>august</option>
                        <option>september</option>
                        <option>october</option>
                        <option>november</option>
                        <option>december</option>
                    </select>
                </div>
            </div>
                <div class="form-group" style="margin-left:10px;">
                   <label class=" control-label" style="margin-top:5px;">Year</label>
                    <div>
                    <select name="year" class="form-control" style="margin-top:5px; margin-right: 5px;">
                        <option><?php echo $year ?></option>
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
                <hr class="hr hr-blur" style="background-color:#333; height:1px; margin-top: 8px;">
                <div class="table-responsive">
                <table class='table'>
                <thead>
                    <tr>
                        <th>S.NO.</th>
                        <th>Name</th>
                        <th>Stars</th>
                        <th>Total Attacks</th>
                        <th>Total Battles In</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $query="select name from members";
                $run=mysqli_query($con, $query);
                for($j=1;$j<=$table;$j++){

                ?>
                <tr>
                    <td><?php echo $j ?></td>
                    <td>
                        <select name="name[]" class="form-control" style="margin-top:5px; margin-right: 5px;" required="">
                                        <option>select</option>
                                        <?php
                                        $query="select name from members order by name";
                                        $run=mysqli_query($con, $query);
                                        while($row=mysqli_fetch_array($run)){
                                            $name=$row['name'];
                                            
                                        ?>
                                        <option><?php echo $name ?></option>

                                        <?php } ?>
                                        
                                    </select>

                    </td>
                    <td><input type="number"  name="stars[]" class="form-control" placeholder="0" min="0" max="21"></td>
                    <td><input type="number"  name="attacks[]" class="form-control" placeholder="0" min="0" max="7"></td>
                    <td><input type="number" name="battles[]" class="form-control" placeholder="0" min="0" max="7"></td>

                </tr>
                <?php }  ?>
                </tbody>
                </table>
            </div>

            </div>
				<button type="submit" value="Search" name="enter" class="btn btn-primary" style="margin-top:8px; margin-left: 10px; ">submit
				</button>
                            
        </div>
                        
    </form>
</div>
<?php
$name=array();
$stars=array();
$attack=array();
$battle=array();
$h=0;
$i=0;
$j=0;
$k=0;
if(isset($_POST['enter'])){
    $month=$_POST['month'];
    $year=$_POST['year'];
    if($month=='select' || $year=='select'){
        echo "<script>alert('please fill all details')</script>";
    }else{
    foreach($_POST['name'] as $nm){
        $name[$i]=$nm;
        $i++;
    }
    foreach($_POST['stars'] as $str){
        $stars[$h]=$str;
        $h++;
    }
    foreach($_POST['attacks'] as $at){
        $attack[$j]=$at;
        $j++;
    }
    foreach($_POST['battles'] as $bt){
        $battle[$k]=$bt;
        $k++;
    }
    for($l=0;$l<sizeof($name);$l++){
        $tattack=round($attack[$l]/$battle[$l],3);
        $available=round($battles[$l]/7,3);
        if($attack[$l]!=0){
            $tstars=round(($stars[$l])/($attack[$l]*3),3); 
        }else{
            $tstars=0;
        }
        $points=round(($tattack+$tstars)/2,3);
        $query ="insert into $month values('$year','$name[$l]','$stars[$l]','$attack[$l]','$battle[$l]','$points')";
        $run = mysqli_query($con,$query);
        echo"<script>alert('Data Entered Successfully')
        window.open('war.php?warinfo','_SELF')
        </script>";
        
    }
    }
    

}
?>
