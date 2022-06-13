<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Checkout Form</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
            type="text/css">
        <link rel="stylesheet" href="/style2.css" type="text/css">
        <link rel="shortcut icon" href="images/favicon.png">

    </head>
    <?php include 'navbar.php';?>

    <body style="background-image: url('background.png');">
        <div class="container col-8 my-5 br-2 rounded">
            <div class="row g-3">
                <div class="col-8">
                    <form action="userinfo.php" method="post">
                        <h4>Payment</h4>
                        <div class="row">
                            <div class="col-12">
                                <label class="form-label" for="mid">Match ID</label>
                                <input type="text" name="mid" class="form-control">
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input">
                            <label class="form-check-label">Credit Card</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input">
                            <label class="form-check-label">Debit Card</label>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label" for="cardname">Name on Card
                                </label>
                                <input type="text" name="cardname" class="form-control">
                                <small class="text-muted">Full name as displayed on card</small>
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="creditcard">Credit Card Number
                                </label>
                                <input type="text" name="creditcard" class="form-control">
                            </div>
                            <div class="col-3">
                                <label class="form-label" for="expiration">Expiration
                                </label>
                                <input type="text" name="expiration" class="form-control">
                            </div>
                            <div class="col-3">
                                <label class="form-label" for="cvv">CVV
                                </label>
                                <input type="text" name="cvv" class="form-control">
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary btn-block mb-4">Confirm Checkout
                       <?php
                                $var_value = $_SESSION['mid'];
                                echo $var_value;              
                        ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    <footer>
        <p class="p-3 bg-dark text-white">
            All Rights Reserved
        </p>
    </footer>
</html>