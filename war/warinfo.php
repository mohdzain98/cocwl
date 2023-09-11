<?php
$month=' ';
$years=' ';
if(isset($_POST['enter'])){
    $month=$_POST['month'];
    $years=$_POST['year'];
}
if($month=='select' || $years=='select'){
    echo "<script>
    alert('please fill all details')
    window.open('war.php?warinfo','_SELF')
    </script>";
}
?>

    <form class="navbar-form" method="post" accept="" enctype="multipart/form-data">
        <div class="box">
            <div class="box-header">
                <center><h3>War Information</h3></center>
            </div>
        <div class="input-group">
        	<div class="form-group">
                <label class=" control-label" style="margin-top:5px;">Month</label>
                <div>
                    <select name="month" class="form-control" style="margin-top:5px; margin-right: 5px;" required="">
                        <option>select</option>
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
                    <select name="year" class="form-control" style="margin-top:5px; margin-right: 5px;" required="">
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
                
                <button type="submit" value="Search" name="enter" class="btn btn-primary" style="margin-top:8px; margin-left: 10px;
                ">submit    
				</button>
                <hr class="hr hr-blur" style="background-color:#333; height:1px; margin-top: 8px;">
                <div>
                    <h3 style="display: inline;"><?php echo $month ?></h3>
                    <h3 style="display: inline;"><?php echo $years ?></h3>
                </div>
                <hr class="hr hr-blur" style="background-color:#333; height:1px; margin-top: 10px;">
                <div class="table-responsive">
                <table class='table'>
                <thead>
                    <tr>
                        <th>S.NO.</th>
                        <th>Name</th>
                        <th>Stars</th>
                        <th>Total Attacks</th>
                        <th>Total Battles In</th>
                        <th>Points</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(isset($_POST['enter'])){
                $query="select * from $month where year='$year' order by points desc";
                $run=mysqli_query($con, $query);
                if(mysqli_num_rows($run)>0){
                $i=1;
                while($row=mysqli_fetch_array($run)){
                    $name=$row['name'];
                    $stars=$row['stars'];
                    $attacks=$row['attacks'];
                    $battles=$row['battle'];
                    $points=$row['points'];               
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $stars ?></td>
                    <td><?php echo $attacks ?></td>
                    <td><?php echo $battles ?></td>
                    <td><?php echo $points ?></td>
                    <td><input type='checkbox' name='remove[]' value='<?php echo $name ?>'></td>
                </tr>
               <?php $i++; } }else{
                echo "<script>alert('no data for selected month')</script>";
               }
                } ?>
                </tbody>
                </table>
            </div>
        </div>
        <button class="btn btn-primary" type="submit" name="update" value="update" style="font-size: 18px; margin-left: 15px;">
        <i class="fa fa-refresh">Delete Selected</i></button>
    </div>

    </form>



<?php
                function update_cart(){
                    global $con;
                    if(isset($_POST['update'])){
                        $month=$_POST['month'];
                        $years=$_POST['year'];
                        if($month=='select' || $years=='select'){
                            echo "<script>alert('please select month and year','_self')
                            </script>";
                        }else{
                        foreach ($_POST['remove'] as $remove_id) {
                            $delete="delete from $month where year='$years' and name='$remove_id'";
                            $run_del=mysqli_query($con,$delete);
                            
                        }
                        if($run_del){
                                echo "<script>alert('deleted','_self')</script>";
                            }
                        }
                    }
                }
                echo @$up_cart=update_cart();

                ?> 
