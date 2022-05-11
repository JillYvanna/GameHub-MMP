<?php
include("Header.php");
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Account</title>
    <link rel="stylesheet" href="userStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <link rel="icon" href="https://i.ibb.co/6HLRPvB/iconlogo.png">
</head>

<body background="https://i.ibb.co/tB7qHHf/Homepage.png">


    <div class="full-page">
	<div class="card-bankinfo">
        <div class="card">
            <img src="https://i.ibb.co/kxqvvHx/Def-Account-Image.png" alt="Account Image" style="width:auto">
            <h1>Account Name</h1>
            <p class="title">Account Info</p>
            <p>Company</p>
            <a href="#"><i class = fa fa-dribbble></i></a>
            <a href="#"><i class = fa fa-twitter></i><img src="https://i.ibb.co/s6tsXjv/Twitter-Icon.png"></a>
            <a href="#"><i class = fa fa-linkedin></i><img src="https://i.ibb.co/JtjN3J7/Linked-In-Icon.png"></a>
            <a href="#"><i class = fa fa-facebook></i><img src="https://i.ibb.co/tJ4DR0S/Facebook-Icon.png"></a>
            <p><button>Contact</button></p>
        </div>
	    <div class="bankinfo">
		<a href="https://mi-linux.wlv.ac.uk/~1800168/GameHub/UserProfile/retryindex.php">Edit Personal Details</a> <!--Need to add href when added to db-->
	    </div>
        </div>

        <div class="acc-information">
            <h2>Account Information</h2>
            <p>Information based on what the user's account wants others to know.<br> (what they like, who they are, businesses/companies)</p>
            <h2>Area</h2>
            <p>Where they can be found</p>
            <h2>History</h2>
            <p>What they have bought in the past. Any jobs they've done for others within Gamehub delivery</p>
        </div>
    </div>

<?php
include("Footer.php");
?>
</body>
</html>