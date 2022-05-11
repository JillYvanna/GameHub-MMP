<?php

	include_once 'retrydbh.inc.php';

	$phonenumber = $_POST['phonenumber'];
	$address = $_POST['address'];
	$postcode = $_POST['postcode'];
	$bankaccountname = $_POST['bankaccountname'];
	$bankaccountnumber = $_POST['bankaccountnumber'];
	$bankaccountsortcode = $_POST['bankaccountsortcode'];
	$pwd = $_POST['pwd'];


	$sql = "INSERT INTO bankDetails(phoneNumber, address_, postcode, bankAccountName, bankAccountNumber, bankAccountSortCode, password_) VALUES ('$phonenumber', '$address', '$postcode', '$bankaccountname', '$bankaccountnumber', '$bankaccountsortcode','$pwd');";
	mysqli_query($conn, $sql);

	header("Location: retryindex.php?changes=success");