<div class="box">
    <div class="box-header">
        <center><h3>Clan Games</h3></center>
    </div>
    <?php
    $years=array();
    $i=0;
    $query="select distinct year from clangames";
    $run=mysqli_query($con, $query);
    if(mysqli_num_rows($run)>0){
        $i=1;
        while($row=mysqli_fetch_array($run)){
        $year=$row['year'];
        $years[$i]=$year;
        $i++;
        }
    }
    ?>
    <?php
    foreach($years as $y){

    ?>
    <h2 style='display:inline;'>Year: </h2><h3 style='display: inline;'><?php echo $y ?></h3>
    <hr class='hr hr-blur' style='background-color:#333; height:1px; margin-top: 10px;'>
    <div class='table-responsive'>
        <table class='table'>
                <thead>
                    <tr>
                        <th>S.NO.</th>
                        <th>Month</th>
                        <th>Points</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $query="select month,points from clangames where year=$y";
                $run=mysqli_query($con, $query);
                if(mysqli_num_rows($run)>0){
                    $i=1;
                    while($row=mysqli_fetch_array($run)){
                        $month=$row['month'];
                        $points=$row['points'];
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $month ?></td>
                    <td><?php echo $points ?></td>
                </tr>
               <?php $i++; } } ?>
    
                </tbody>
        </table>
    </div>
    
    <?php } ?>
</div>
