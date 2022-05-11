<?php
include("Header.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href = "bankinfo-style.css">
</head>
<body background= "https://i.ibb.co/tB7qHHf/Homepage.png">


     

    <div class="full-page">
        <div id='login-form'class='login-page'>
            <div class="form-box">




<form action= "retrychanges.inc.php" id="login" class="input-group-login" method="POST">
	<input type="text" class= "input-field" name="phonenumber" placeholder="phone number">
	<br>
	<input type="text" class= "input-field" name="address" placeholder="address">
	<br>
	<input type="text" class= "input-field" name="postcode" placeholder="postcode">
	<br>
	<input type="text" class= "input-field" name="bankaccountname" placeholder="bank account name">
	<br>
	<input type="text" class= "input-field" name="bankaccountnumber" placeholder="bank account number">
	<br>
	<input type="text" class= "input-field" name="bankaccountsortcode" placeholder="sort code">
	<br>
	<input type="password" class= "input-field" name="pwd" placeholder="type password">
	<br>
	<button type="submit" class="submit-btn-2" name="submit" >Apply changes</button>
</form>




            </div>
        </div>
    </div>

</body>
</html>