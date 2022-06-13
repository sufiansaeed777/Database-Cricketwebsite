<?php
include_once('connections.php');

        $sq = $_POST['search'];
        $filename = $sq.".php";
        header("Location:".$filename);
?>