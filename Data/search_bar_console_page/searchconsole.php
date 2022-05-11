<?php include "../header/header_search_console.php" ?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Products</title>
<link rel="stylesheet" href="search.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/a8c6899e1d.js" crossorigin="anonymous"></script>

</head>
<style>
    body{
    font-family: 'Poppins', sans-serif;
}

/* Navbar */

* {box-sizing: border-box;}

/* Style the navbar */
.topnav {
  overflow: hidden;
  background-color: #72025f;
}

/* Navbar links */
.topnav a {
  float: left;
  display: block;
  color: rgb(255, 255, 255);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  
}

/* Navbar links on mouse-over */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.topnav a.active {
  background-color: #2196F3;
  color: white;
}

/* Style the input container */
.topnav .search-container {
  float: right;
}

/* Style the input field inside the navbar */
.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

/* Style the button inside the input container */
.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

/* Add responsiveness - On small screens, display the navbar vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}










  /* products */

.product-list{
    /*background-color: rgb(173, 207, 207);*/
    background-image: url('https://i.ibb.co/tB7qHHf/Homepage.png');
    padding: 3em;
    text-align: center;
}

.product-list .card{
    background-color: white;
    border-radius: 10px;
    padding: 1em;
    box-shadow: 0px 10px 5px rgba(90, 90, 90, 0.404);
    text-align: center;
}

.container-title{
    color: white;
}

.card .title{
    font-size: 18px;
    font-weight: bold;
}

.card img{
    max-width: 100%;
    height: 300px;
    border-radius: 10px;
    margin-top: 1em;
    margin-bottom: 1em;
}

.card .text{
    text-align:center;
    margin-left: 2em;
    margin-bottom: 2em;
    max-width: 80%;
}

.footer{
    margin-bottom: 4em;
    background-color:rgb(255, 101, 229)
}

.footer .buy-button{
    float:right;
}

.footer .buy-button-eye{
    float:left;
    margin-left: 40px;
}

.footer .price{
    float:left;
    font-size: 20px;
    font-weight:bold;
}

.fa-basket-shopping{
    color: rgb(0, 0, 0);
}

.fa-basket-shopping:hover{
    color: rgb(255, 153, 0);
}

.fa-sack-dollar{
    color: rgb(0, 0, 0);
}

.fa-sack-dollar:hover{
    color: rgb(255, 153, 0);
}

.fa-sack-eye{
    color: rgb(0, 0, 0);
}

.fa-sack-dollar-eye{
    color: rgb(255, 153, 0);
}

.product-container{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    grid-column-gap: 20px;
    grid-row-gap: 30px;

}

</style>
    <body img src="https://i.ibb.co/tB7qHHf/Homepage.png" alt="Italian Trulli">



        <!-- <section class="nav-bar">

            <div class="topnav">
                <a href="#home">Home</a>
                <a href="../games_page/games_page.php">Games</a>
                <a href="../console_page/console_page.php">Consoles</a>
                <div class="search-container">

                    <form method="post">
                        <input type="text" placeholder="Search Console..." name="search" required/>
                        <button type="submit">Search</button>
                    </form>

                </div>
            </div>           

        </section> -->

       


        <section class="product-list">
            <div class="container-title">
                <h1>
                    Consoles
                </h1>

                 
            </div>

            <div class="product-container">
                <!--1st product -->



                <?php
	                if (isset($_POST['search']))
                    {
		                require "search.php";
		                    if (count($results) >0)
                            {
			                    foreach ($results as $r)
                                {
				                    ?>

                                    <div class="card">
                                        <!-- <div class="title">Grand Theft Auto</div> -->
                                        <?php
                                        echo '<div class="title">'.$r['Console_Name'].'</div>';
                                        ?>
                                        <div class="image">
                                            <img src="<?php echo $r['Picture']; ?>" />
                                            <!-- <img src="placeholder.png" /> -->
                                        </div>
                                        <!-- <div class="text">PS2</div> -->
                                        <?php
                                        echo '<div class="text">'.$r['Brand'].'</div>';
                                        ?>
                                        <div class="footer">
                                            <!-- <div class="price">£4.99</div> -->
                                            <?php
                                            echo '<div class="price">£'.$r['Price_Rent'].'</div>';
                                            ?>
                                            
                                            <div class="icon"><a href="#" class="buy-button-eye">View</i></a></div>
                                            <div class="icon"><a href="#" class="buy-button"><i class="fa fa-sack-dollar fa-2xl"></i></a></div>
                                            <div class="icon"><a href="#" class="buy-button"><i class="fa fa-basket-shopping fa-2xl"></i></a></div>
                                        </div>
                                    </div>

                                    <?php

                                }
                            } else { echo "<div>No results found.</div>"; }
                    }
                ?>
            </div>
        </section>






        <?php
include("../Footer.php");
?>
    </body>
</html>