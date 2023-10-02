<?php
$select ="select";
 ?>
<div class="box">
	<form class="navbar-form" method="post" accept="" enctype="multipart/form-data">
                        <div class="input-group">
                            <div class="form-group">
                                <label class=" control-label" style="margin-top:5px;">Name</label>
                                <div>
                                    <select name="name" class="form-control" style="margin-top:5px; margin-right: 5px;">
                                        <option><?php echo $select ?></option>
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
                            <button type="submit" value="Search" name="search" class="btn btn-primary" style="margin-top:8px; margin-left: 10px;">
                                submit
                            </button>
                            
                        </div>
                        
    </form>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
                    <tr>
                        <th>Month</th>
                        <th>Stars</th>
                        <th>Attacks</th>
                        <th>Battles</th>
                    </tr>
        </thead>
        <tbody>
            <?php 
            $sumAttacks=0;
            $sumBattles = 0;
            $months = array("january","february","march","april","may","june","july","august","september","october","november","december");
            if(isset($_POST['search'])){
                $name = $_POST['name'];
                $select = $name;
                echo "<h2>$name</h2>";
                foreach($months as $mname){
                    $query = "select * from $mname where name='$name'";
                    $run=mysqli_query($con,$query);
                    if(mysqli_num_rows($run)>0){
                        while($row=mysqli_fetch_array($run)){
                            $stars = $row['stars'];
                            $attacks = $row['attacks'];
                            $battles = $row['battle'];
                            $sumAttacks += $attacks;
                            $sumBattles += $battles;
                    ?>
                    <tr>
                        <td><?php echo $mname ?></td>
                        <td><?php echo $stars ?></td>
                        <td><?php echo $attacks ?></td>
                        <td><?php echo $battles ?></td>
                    </tr>
                    <?php
                        }
                    }
                    
                }
                $part=0;
                if($sumBattles>0) $part = $sumAttacks/$sumBattles;
                $part=round($part*100,2);
                echo "
                <h4 style='display : inline; margin-left:-20px';>Total attacks : <p style='display : inline;'>$sumAttacks</p></h4>
                <h4 style='display : inline;' ;>Total Battles : <p style='display : inline;'>$sumBattles</p></h4>
                <h3 style='margin-top: 5px;'>Overall Participation over the year : <p style='display : inline;'>$part%</p></h3>
                <hr>
                ";
            }
            ?>

        </tbody>
    </table>
</div>
