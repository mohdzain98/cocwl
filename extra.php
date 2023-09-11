<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>hello</title>
</head>
<body>
<div class="box">
   <div class="box-header">
		<center>
		<div class="box-header">
		<center>
		<div>
        <h3>
        <p class="sofia">CoLeaders</p>
        <br></h3>
             
        </div>
        </center>
        </div>
    </center>
</div>
</body>
</html>

<div class="box">
            	<div class="table-responsive">
                <table class='table'>
                <thead>
                    <tr>
                    	<th>S.NO.</th>
                        <th>Name</th>
                        <th>Select</th>
                        <th>Total Attacks</th>
                        <th>Total Battles In</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $query="select name from members";
                $run=mysqli_query($con, $query);
                $i=1;
                while($row=mysqli_fetch_array($run)){
                    $name=$row['name'];
                ?>
                <tr>
                	<td><?php echo $i ?></td>
                    <td><?php echo $name ?></td>
                    <td><input type='checkbox' name='remove[]' value='<?php echo $name ?>'></td>
                    <td><input type="number" name="attacks" class="form-control" placeholder="0" min="0" max="7"></td>
                    <td><input type="number" name="battles" class="form-control" placeholder="0" min="0" max="7"></td>

                </tr>
                <?php $i+=1; }  ?>
                </tbody>
                </table>
            </div>
            </div>



        $query ="insert into $month values('$year','$name[$l]','$attack[$l]','$battle[$l]','$points')";
        $run = mysqli_query($con,$query);
        echo"<script>alert('Data Entered Successfully')
        window.open('war.php?warinfo','_SELF')
        </script>";