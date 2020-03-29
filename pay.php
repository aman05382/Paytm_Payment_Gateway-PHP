<?php
session_start();

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$address = $_POST['Address'];
$email = $_POST['email'];
$mobile = $_POST['phone'];
$events  = $_POST['events'];
$order = "ORD" . rand(10000, 99999999);
$cust  = "CUST" . rand(1000, 999999);

// //Insert Query Condition Condition

// $in = "INSERT INTO `users`(`FNAME`, `LNAME`, `ADDRESS`, `EMAIL`, `MOB`, `EVENTS`, `TRANSACTION_ID`) VALUES ('$fname','$lname','$address','$email','$mobile','$events')";
// $out = mysqli_query($conn, $in); 

$_SESSION['FNAME'] = $fname;
$_SESSION['LNAME'] = $lname;
$_SESSION['ADDR'] = $address;
$_SESSION['EMAIL'] = $email;
$_SESSION['MOBILENO'] = $mobile;
$_SESSION['EVENTS'] = $events;

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Aman_Sharma</title>
</head>

<body>
    <center>
        <br><br>
        <h1>Proceed for Payment </h1>
        <br><br>

        <form method="post" action="pgRedirect.php">
            <table border="1" style="text-align: center;">
                <tbody>
                    <tr>
                        <th>S.No</th>
                        <th>Label</th>
                        <th>Value</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><label>ORDER_ID::*</label></td>
                        <td><?php echo $order; ?>
                            <input type="hidden" name="ORDER_ID" value="<?php echo $order; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><label>Name</label></td>
                        <td><?php echo $_POST['first_name'] . " " . $_POST['last_name']; ?></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><label>Event ::*</label></td>
                        <td><?php

                            echo $_POST['events'];

                            ?></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><label>Website ::*</label></td>
                        <td>
                            <?php echo "amsharma.co"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><label>txnAmount*</label></td>
                        <td>
                            <?php
                            if ($events == "Communix") {
                                $ta = 100;
                            }
                            if ($events == "Workshop") {
                                $ta = 120;
                            }
                            if ($events == "Bounty-Hunt") {
                                $ta = 80;
                            }
                            if ($events == "Binary-Bishop") {
                                $ta = 180;
                            }
                            ?>

                            <input type="text" name="TXN_AMOUNT" value="<?php echo $ta; ?>" readonly>
                            <input type="hidden" name="CUST_ID" value="<?php echo $cust; ?>">
                            <input type="hidden" name="INDUSTRY_TYPE_ID" value="retail">
                            <input type="hidden" name="CHANNEL_ID" value="WEB">

                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button value="Book Now!" type="submit" onclick="" type="button" class="btn btn-danger">Pay Now!</button>
                            <!-- <input value="CheckOut" type="submit"	onclick=""></td> -->
                    </tr>
                </tbody>
            </table>
        </form>
    </center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>