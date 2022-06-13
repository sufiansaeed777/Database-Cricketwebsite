<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" type="text/css" href="CSS/style.css">

        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td,
            th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
        </style>
    </head>

    <body style="background-image: url('images/background.png')";>
        <h2 class="text-center"> Batsman </h2>
        <table>
        <th>Name</th>
        <th>Type</th>
        <th>Age</th>
        <th>Matches Played</th>
        <th>Average Score</th>
        <th>Centuries</th>
        <th>Fifties</th>
        <th>Join Date</th>
            <?php
        while($rows = mysqli_fetch_assoc($r2)){
           ?>
            <tr>
                <td><?php echo $rows['player_name'];?></td>
                <td><?php echo $rows['player_type'];?></td>
                <td><?php echo $rows['player_age'];?></td>
                <td><?php echo $rows['matches_played'];?></td>
                <td><?php echo $rows['avg_score'];?></td>
                <td><?php echo $rows['centuries'];?></td>
                <td><?php echo $rows['fifties'];?></td>
                <td><?php echo $rows['joindate'];?></td>
            </tr>
            <?php
        } 
            ?>
        </table>

        <h2 class="text-center">   Bowler </h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Age</th>
                <th>Matches Played</th?>
                <th>Wickets Taken</th?>
                <th>Economy</th?>
                <th>Average Score</th>
                <th>Centuries</th>
                <th>Fifties</th>>
                <th>Date of Joining</th>
            </tr>
            <?php
        while($rows = mysqli_fetch_assoc($r3)){
  ?>
            <tr>
                <td><?php echo $rows['player_name'];?></td>
                <td><?php echo $rows['player_type'];?></td>
                <td><?php echo $rows['player_age'];?></td>
                <td><?php echo $rows['matches_played'];?></td>
                <td><?php echo $rows['wickets_taken'];?></td>
                <td><?php echo $rows['economy'];?></td>
                <td><?php echo $rows['avg_score'];?></td>
                <td><?php echo $rows['centuries'];?></td>
                <td><?php echo $rows['fifties'];?></td>
                <td><?php echo $rows['joindate'];?></td>
            </tr>
            <?php
   } 
  ?>
        </table>

        <h2 class="text-center">Coach</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>
            <?php
        while($rows = mysqli_fetch_assoc($r6)){
  ?>
            <tr>
                <td><?php echo $rows['coach_name'];?></td>
                <td><?php echo $rows['coach_age'];?></td>
            </tr>
            <?php
   } 
  ?>
        </table>

        <h2 class="text-center">Ambassador</h2>
        <table>
            <tr>
                <th>Name</th>
            </tr>
            <?php
        while($rows = mysqli_fetch_assoc($r4)){
  ?>
            <tr>
                <td><?php echo $rows['amb_name'];?></td>
            </tr>
            <?php
   } 
  ?>
        </table>

        <h2 class="text-center">Sponsor</h2>
        <table>
            <tr>
                <th>Name</th>
            </tr>
            <?php
        while($rows = mysqli_fetch_assoc($r5)){
  ?>
            <tr>
                <td><?php echo $rows['sponsor_name'];?></td>
            </tr>
            <?php
   } 
  ?>
        </table>

    </body>
</html>