<div class="box">
	<form class="navbar-form" method="post" accept="" enctype="multipart/form-data">
                        <div class="input-group">
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" required="">
                            <div class="form-group">
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
                            <button type="submit" value="Search" name="insert" class="btn btn-primary" style="margin-top:8px; margin-left: 8px;">
                                submit
                            </button>
                            
                        </div>
                        
    </form>
</div>

<?php
if(isset($_POST['insert'])){
    $name = $_POST['name'];
    $des=$_POST['designation'];
    if($des=='CoLeader'){
        $dvalue=2;
    }elseif ($des=='Elder'){
        $dvalue=3;
    }else{
        $dvalue=4;
    }
    $query="insert into members values('$name','$des','$dvalue',default)";
    $run_query=mysqli_query($con,$query);
    echo"<script>alert('Data Entered Successfully')
    window.open('members.php','_SELF')
    </script>";
    }
?>