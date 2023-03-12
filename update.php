<div class="box">
	<form class="navbar-form" method="post" accept="" enctype="multipart/form-data">
                        <div class="input-group">
                            <div class="form-group">
                                <label class=" control-label" style="margin-top:5px;">Name</label>
                                <div>
                                    <select name="name" class="form-control" style="margin-top:5px; margin-right: 5px;">
                                        <option>select</option>
                                        <?php
                                        $query="select name from members order by dint";
                                        $run=mysqli_query($con, $query);
                                        while($row=mysqli_fetch_array($run)){
                                            $name=$row['name'];
                                            
                                        ?>
                                        <option><?php echo $name ?></option>

                                        <?php } ?>
                                        
                                    </select>
                                </div>
                                
                            </div>
                            <div class="form-group" style="margin-left:10px;">
                                <label class=" control-label" style="margin-top:5px;">Designation</label>
                            <div>
                                    <select name="designation" class="form-control" style="margin-top:5px; margin-right: 5px;">
                                        <option>select</option>
                                        <option>CoLeader</option>
                                        <option>Elder</option>
                                        <option>Member</option>
                                    </select>
                            </div>
                            </div>
                            <button type="submit" value="Search" name="update" class="btn btn-primary" style="margin-top:8px; margin-left: 10px; ">
                                submit
                            </button>
                            
                        </div>
                        
    </form>
</div>

<?php
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $des=$_POST['designation'];
    if($des=='CoLeader'){
        $dvalue=2;
    }elseif ($des=='Elder'){
        $dvalue=3;
    }else{
        $dvalue=4;
    }
    $query="update members set designation='$des', dint='$dvalue' where name='$name'";
    $run_query=mysqli_query($con,$query);
    echo"<script>alert('Data Updated Successfully')
    window.open('members.php','_SELF')
    </script>";
    }
?>