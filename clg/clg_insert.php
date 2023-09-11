<div class="box">
	<form class="navbar-form" method="post" accept="" enctype="multipart/form-data">
                        <div class="input-group">
                            <div class="form-group">
                                <label class=" control-label" style="margin-top:5px;">Month</label>
                                <div>
                                    <select name="month" class="form-control" style="margin-top:5px; margin-right: 5px;" required="">
                                        <option>Select</option>
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
                                    <option>Select</option>
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
                            <div>
                                <label class=" control-label" style="margin-top:5px;">Points</label>
                                <br>
                                <input type="number" name="points" class="form-control" placeholder="Enter points" required="" 
                                style="margin-top:5px;">
                            </div>
                            <br>
                            <button type="submit" value="Search" name="insert" class="btn btn-primary" style="margin-top:8px; margin-left: 2px;">
                                Insert
                            </button>
                            
                        </div>
                        
    </form>
</div>

<?php
if(isset($_POST['insert'])){
    $month=$_POST['month'];
    $year=$_POST['year'];
    $points=$_POST['points'];
    if($month=='Select' || $year=='Select'){
        echo "<script>alert('please fill all details')</script>";
    }else{
        $query="select * from clangames where month='$month' and year=$year";
        $run=mysqli_query($con,$query);
        if(mysqli_num_rows($run)>0){
            echo "<script>alert('Data for selected month and year already exist')
            window.open('clangames.php?clg_view','_SELF')
            </script>";
        }else{
            $query="insert into clangames values('$month','$year','$points')";
            $run=mysqli_query($con,$query);
            echo"<script>alert('Points Entered Successfully')
            window.open('clangames.php?clg_view','_SELF')
            </script>";
        }
    }
}

?>