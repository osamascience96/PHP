<!DOCTYPE html>
<html>
<?php
    //echo "<pre>"; print_r($_POST); echo "</pre>";
    include('account.php');

    $empty_account = false;
    $length_account = false;
    $empty_balance = false;
    $less_balance = false;
    $widthdraw_amount = false;
    $less_wdamount = false;
    $trans_method = false;
    $detail = '';
    $error = false;
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Bank Managemwnt</title>

    <style>
        html, body {
            margin: 0px;
            padding: 0px;
        }

        #user_form{
            position: relative;
            top: 100px;
        }
    </style>
</head>

<body>
    <div id="user_form" class="container">
    <form method="post" action="index.php">
        
        <div class="form-group">
        <label>Enter your Account No:</label>
        <input class="form-control" type="number" name="acctNum" id="acctNum" placeholder="Account Number*" required>
        <p style="color:red"><?php if ($empty_account) {
                                    echo 'Please enter account number.';
                                    $empty_account = false;
                                    $error = false;
                                } ?></p>
        <p style="color:red"><?php if ($length_account) {
                                    echo 'Account number should be 16 digit number.';
                                    $length_account = false;
                                    $error = false;
                                } ?></p>
        </div>

        <div class="form-group">
        <label>Enter Your Bank Balance:</label>
        <input class="form-control" type="number" name="balance" id="balance" placeholder="Bank Balance*" required>
        <p style="color:red"><?php if ($empty_balance) {
                                    echo 'Please fill balance.';
                                    $empty_balance = false;
                                    $error = false;
                                } ?></p>
        <p style="color:red"><?php if ($less_balance) {
                                    echo 'Balance should not be less than or equal to 0.';
                                    $less_balance = false;
                                    $error = false;
                                } ?></p>
        </div>

        <label for="method">Choose a Method:</label>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Select</label>
        </div>
        <select name="method" id="method" class="custom-select" placeholder="Method*" required>
            <option value="withdraw">Withdraw</option>
            <option value="deposite">Deposite</option>
        </select>
        <p style="color:red"><?php if ($trans_method) {
                                    echo 'Please select transaction method.';
                                    $trans_method = false;
                                    $error = false;
                                } ?></p>
        </div>

        <div class="form-group">
        <label>Enter your withdraw/deposite amount:</label>
        <input class="form-control" type="number" name="wdamount" id="amount" placeholder="Widthdraw/Deposit Amount*" required>
        <p style="color:red"><?php if ($widthdraw_amount) {
                                    echo 'Please enter withdraw/deposite amount.';
                                    $widthdraw_amount = false;
                                    $error = false;
                                } ?></p>
        <p style="color:red"><?php if ($less_wdamount) {
                                    echo 'Withdraw/Deposite amount should not be less than or equal to 0.';
                                    $less_wdamount = false;
                                    $error = false;
                                } ?></p>
        </div>

        <div class="form-group">
        <input class="form-control btn btn-primary" type="submit" name="submit">
        </div>
    </form>
    <div id="bankDetails" class="row">
        <p>
        <?php
            if (isset($_POST['submit'])) {

                $accNum = $_POST['acctNum'];
                $balance = $_POST['balance'];
                $method = $_POST['method'];
                $wdamount = $_POST['wdamount'];

                if (empty($accNum)) {
                    $empty_account = true;
                    $error = true;
                }
                if (strlen($accNum) != 16) {
                    $length_account = true;
                    $error = true;
                }
                if (empty($balance)) {
                    $empty_balance = true;
                    $error = true;
                }
                if ($balance <= 0) {
                    $less_balance = true;
                    $error = true;
                }
                if (empty($method)) {
                    $trans_method = true;
                    $error = true;
                }
                if (empty($wdamount)) {
                    $widthdraw_amount = true;
                    $error = true;
                }
                if ($wdamount <= 0) {
                    $less_wdamount = true;
                    $error = true;
                }

                if ($error == false) {
                    $person = new account($accNum, $balance);

                    $person->setAccountNumber($accNum);
                    if ($method == "withdraw") {
                        $detail = $person->withdraw($wdamount);
                    } else {
                        $detail = $person->deposite($wdamount);
                    }
                }
            }
        ?>
        </p>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>