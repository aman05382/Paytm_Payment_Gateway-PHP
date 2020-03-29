<?php

	$conn = mysqli_connect("localhost", "root", "");
	$db=mysqli_select_db($conn,"test");
	
	$qry="select * from users where ORDERID = '".$_GET['id']."'";
	
	$result=mysqli_query($conn,$qry);
		while ($row = mysqli_fetch_assoc($result)){
			echo "Your Payment Sucessfull=".$row['STATUS']."<br>";
			echo "Your Payment Id=".$row['TXNID']."<br>";
			echo "Date=".$row['TXNDATE']."<br>";
			echo "Amount=".$row['TXNAMOUNT']."<br>";
			echo "Thank You For Denote"; 
		}	
		echo "<a href='http://localhost/Fuerte/paytm_web_sample_kit_php-master/inquiry.php'>Back</a>";
?>