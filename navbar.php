<?php 
include 'connections.php';
error_reporting(0);
?>
<?php include 'bootstrap.php';?>
<nav  class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-image: url('background.png');">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="images/icc_transparent.png" alt="Card image" width="80" height="50">
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto" >
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"  style="color:#000000;"> <b>Home </b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="about.php" style="color:#000000;"><b>About</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Tickets.php" style="color:#000000;"><b>Tickets</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="stats.php" style="color:#000000;"><b>Teams</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="twitter.php" style="color:#000000;"><b>Tweets</b></a>
                </li>
                <?php
                if($_SESSION['username'] == 'admin')
                {
                 ?>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="admin.php" style="color:#000000;"><b>Admin</b></a>
                   </li>
               <?php
                }
                ?>

            </ul>
            <form action="search.php" method="post">
                <input type="string" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="navbar-brand" href="logout.php">
                <img src="images/signout.gif" alt="Card image" width="70" height="50">
                </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
