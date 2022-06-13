<?php
include_once('connections.php');
$q1 = "SELECT umpire_name, experience FROM umpire" ;
$r1 = mysqli_query($con,$q1);
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body style="background-image: url('images/background.png')" ;=";">

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
            .img-container {
                text-align: center;
            }
        </style>

        <?php include 'navbar.php';?>
        <h2 class="text-center">
            Match Officals</h2>

        <table>
            <tr>
                <th>Name</th>
                <th>Experience in Years</th>
            </tr>
            <?php
        while($rows = mysqli_fetch_assoc($r1)){
  ?>
            <tr>
                <td><?php echo $rows['umpire_name'];?></td>
                <td><?php echo $rows['experience'];?></td>
            </tr>
            <?php
   } 
  ?>
        </table>

    </body>
</html>