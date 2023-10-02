<div>
    <a href="war.php?sbyname"><button class="btn btn-default">Search Your Name</button></a>
    <hr>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>Name</th>
                        <th>Total Attacks done</th>
                        <th>Total Battles part in</th>
                        <th>Score</th>
                    </tr>
        </thead>
        <tbody>
            <?php
            $i=0;
            $query="SELECT * FROM rankings order by score desc,totalBattles desc";
            $run = mysqli_query($con, $query);
            while($row=mysqli_fetch_array($run)){
                $i++;
                $name=$row['name'];
                $totalAttacks = $row['totalAttacks'];
                $totalBattles = $row['totalBattles'];
                $score=$row['score'];
                                            
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $totalAttacks ?></td>
                <td><?php echo $totalBattles ?></td>
                <td><?php echo $score ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>