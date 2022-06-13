<?php 
include 'connections.php';
session_start();
error_reporting(0);
    if (isset($_POST['transfer'])) {
        $playername = $_POST['playername'];
        $teamname = $_POST['newteamname'];
        $query = "UPDATE `player` SET `team_name`='$teamname' WHERE player_name= '$playername'";
        mysqli_query($con, $query);
        header('location:admin.php');
    }
    if (isset($_POST['terminate'])) {
        $playername = $_POST['playername'];
        $newteamname = $_POST['newteamname'];
        $query = "DELETE FROM `player` WHERE (player_name='$playername'  and  team_name = '$newteamname')";
        mysqli_query($con, $query);
        header('location:admin.php');
    }
    if (isset($_POST['newplay'])) {
        $playername = $_POST['playername'];
        $newteamname = $_POST['newteamname'];
        $query = "INSERT INTO `player`(`team_name`, `player_name`, `player_type`, `player_age`, `player_nationality`, `joindate`, `experience`, `avg_score`, `economy`, `wickets_taken`, `matches_played`, `centuries`, `fifties`) 
                 VALUES ('$newteamname','$playername','Batsman',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);";
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
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Transfer</p>
            <div class="input-group">
				<input type="playername" placeholder="Player Name" name="playername" value="<?php echo $player_name; ?>" required>
			</div>
            <div class="input-group">
				<input type="newteamname" placeholder="Update Team Name" name="newteamname" value="<?php echo $team_name; ?>">
			</div>
            <div class="input-group">
				<button name="transfer" class="btn">Update</button>
			</div>
		</form>
	</div>
    <div class="container">
		<form action= "" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Terminate</p>
            <div class="input-group">
				<input type="playername" placeholder="Player Name" name="playername" value="<?php echo $player_name; ?>" required>
			</div>
            <div class="input-group">
				<input type="teamname" placeholder="Team Name" name="newteamname" value="<?php echo $teamname; ?>" required>
			</div>
            <div class="input-group">
				<button name="terminate" class="btn">Delete</button>
			</div>
		</form>
	</div>
    
    <div class="container">
		<form action= "" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">New Player</p>
            <div class="input-group">
				<input type="playername" placeholder="Player Name" name="playername" value="<?php echo $player_name; ?>" required>
			</div>
            <div class="input-group">
				<input type="newteamname" placeholder="Team Name" name="newteamname" value="<?php echo $team_name; ?>">
			</div>
            <div class="input-group">
				<button name="newplay" class="btn">Insert</button>
			</div>
		</form>
	</div>
</body>
</html>