<?php include 'connections.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>ICC</title>
        <?php include 'bootstrap.php';?>
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <style>
            .center {
                margin: auto;
                width: 40%;
                padding: 10px;
            }
        </style>
    </head>
    <body style="background-image: url('background.png');">
        <?php include 'navbar.php';?>
        <div class="center">
            <a
                class="twitter-timeline"
                data-width="600"
                data-theme="light"
                href="https://twitter.com/ICC?ref_src=twsrc%5Etfw">Tweets by ICC</a>
            <script
                async="async"
                src="https://platform.twitter.com/widgets.js"
                charset="utf-8"></script>

        </div>
        <footer>
            <p class="p-3 bg-dark text-white">
                All Rights Reserved
            </p>
        </footer>
    </body>
</html>