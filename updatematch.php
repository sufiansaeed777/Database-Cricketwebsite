<?php 
include 'connections.php';
session_start();
error_reporting(0);
    if (isset($_POST['set'])) {
        $team1 = $_POST['team1'];
        $team2 = $_POST['team2'];
        $date = $_POST['date'];
        $stadium = $_POST['stadium'];
        $query = "INSERT INTO `scheduled_match`(`no_of_tickets`, `team1_name`, `team2_name`, `match_date`, `stadium_name`) 
        VALUES (100,'$team1','$team2','$date','$stadium');";
        mysqli_query($con, $query);
        header('location:admin.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
     <title> Admin </title>
	<link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="CSS/style3.css">
    </head>
    <body style="background-image: url('background.png');">
	<div class="container">
		<form action= "" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Set Match</p>
            <div class="input-group">
				<input type="team" placeholder="Team 1" name="team1" value="<?php echo $team1_name; ?>" required>
			</div>
            <div class="input-group">
				<input type="team" placeholder="Team 2" name="team2" value="<?php echo $team2_name; ?>">
			</div>
            <div class="input-group">
				<input type="date_" placeholder="YYYY-MM-DD" name="date" value="<?php echo $match_date; ?>">
			</div>
            <div class="input-group">
				<input type="stadium" placeholder="Stadium" name="stadium" value="<?php echo $stadium_name; ?>">
			</div>
            <div class="input-group">
				<button name="set" class="btn">Insert</button>
			</div>
		</form>
	</div>
</body>
</html>