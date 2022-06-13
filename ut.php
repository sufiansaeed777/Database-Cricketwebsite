<?php 
include 'connections.php';
session_start();
error_reporting(0);
    if (isset($_POST['it'])) {
        $teamname = $_POST['teamname'];
        $query = "INSERT INTO team (team_name, org_name, ownerID, matchID)
                value('$teamname', NULL, NULL , NULL)";
        mysqli_query($con, $query);
        header('location:admin.php');
    }
    if (isset($_POST['dt'])) {
        $teamname = $_POST['teamname'];
        $query = "DELETE FROM `team` WHERE team_name='$teamname'";
        mysqli_query($con, $query);
        header('location:admin.php');
    }
    if (isset($_POST['ut'])) {
        $teamname = $_POST['teamname'];
        $new_teamname = $_POST['newteamname'];
        $query = "UPDATE `team` SET `team_name`= '$new_teamname' WHERE `team_name`= '$teamname'";
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
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Add/Delete Team</p>
            <div class="input-group">
				<input type="teamname" placeholder="Team Name" name="teamname" value="<?php echo $team_name; ?>" required>
			</div>
			<div class="input-group">
				<button name="it" class="btn">Insert</button>
			</div>
            <div class="input-group">
				<button name="dt" class="btn">Delete</button>
			</div>
		</form>
	</div>
    <div class="container">
		<form action= "" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Modify Team</p>
            <div class="input-group">
				<input type="teamname" placeholder="Team Name" name="teamname" value="<?php echo $team_name; ?>" required>
			</div>
            <div class="input-group">
				<input type="newteamname" placeholder="Updated Team Name" name="newteamname" value="<?php echo $team_name; ?>">
			</div>
            <div class="input-group">
				<button name="ut" class="btn">Update</button>
			</div>
		</form>
	</div>
    
</body>
</html>