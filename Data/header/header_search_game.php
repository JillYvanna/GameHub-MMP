<?php
session_start();
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Navbar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/a8c6899e1d.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    </head>
  <style>
    

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  
  header {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 20px 2%;
  }
  
  .logo {
    margin-right: auto;
    margin-left:100px;
  }
  
  .nav__links {
    list-style: none;
    display: flex;
    /* margin-right: 200px; */
    margin-left:auto;
    margin-right: auto;
    padding-top:10px;
    
  }
  
  .nav__links a,
  .cta,
  .cta2,
  .overlay__content a {
    font-family: "Montserrat", sans-serif;
    font-weight: 500;
    color: #edf0f1;
    text-decoration: none;
  }
  
  .nav__links li {
    padding: 0px 20px;
  }
  
  .nav__links li a {
    transition: all 0.3s ease 0s;
  }
  
  .nav__links li a:hover {
    color: #694592;
  }
  
  .cta {
    margin-left: 20px;

  
    padding: 9px 25px;
    background-color: #694592;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
  }
  
  .cta2 {
    margin-left: 20px;
    padding: 9px 25px;
    border-style: solid;
    border-color: #694592;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
  }
  
  .cta:hover, .cta2:hover {
    background-color: rgba(0, 136, 169, 0.8);
  }
  
  #cart-icon
  {
    font-size:1.8rem;
    cursor: pointer;
    color: rgb(255, 255, 255);
    margin-top: 0.5%;
  }
  #account
  {
    font-size:1.8rem;
    cursor: pointer;
    color: rgb(255, 255, 255);
    margin-top: 0.5%;  
  }
  .cart{
    position:fixed;
    top:0;
    right: -100%;
    width:360px;
    min-height: 100vh;
    padding:20px;
    background: var(--bg-color);
    box-shadow: -2px 0 4px hsl(0 4% 15%/10%);
    transition: 0.7s;
  }
  .cart.active{
    right:0;
  }
  .cart-title{
    text-align: center;
    font-size: 1.5rem;
    font-weight: 600;
    margin-top: 2rem;
  }
  .cart-box{
    display: grid;
    grid-template-columns: 32% 50% 18%;
    align-items: center;
    gap: 1rem;
    margin-top: 1rem;
  }
  .cart-img{
    width: 100px;
    height: 100px;
    object-fit: contain;
    padding: 10px;
  }
  .detail-box{
    display:grid;
    row-gap: 0.5rem
  }
  .cart-product-title{
    font-size: 1rem;
    text-transform: uppercase;
  }
  .cart-price{
    font-weight: 500;
  }
  .cart-quantity{
    border: 1px solid var(--text-color);
    outline-color: var(--main-color);
    width: 2.4rem;
    text-align: center;
    font-size: 1rem;
  }
  .cart-remove{
    font-size: 24px;
    color: var(--main-color);
    cursor: pointer;
  }
  .total{
    display: flex;
    justify-content: flex-end;
    margin-top: 1.5rem;
    border-top: 1px solid var(--text-color);
  }
  .total-title{
    font-size: 1rem;
    font-weight: 600;
  }
  .total-price{
    margin-left: 0.5rem;
  }
  .btn-buy{
    display: flex;
    margin: 1.5rem auto 0 auto;
    padding: 12px 20px;
    border: none;
    background: var(--main-color);
    color: var(--bg-color);
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
  }
  .btn-buy:hover{
    background: var(--text-color);
  }
  #close-cart
  {
    position:absolute;
    top: 1rem;
    right: 0.8rem;
    font-size: 2rem;
    color: var(--text-color);
    cursor: pointer;
  }
  .add-cart{
    position:absolute;
    bottom:0;
    right: 0;
    background: var(--text-color);
    color: var(--bg-color);
    padding: 10px;
    cursor: pointer;
    }
  .add-cart:hover{
    background: rgb(67, 63, 88);
  }
  .buy-item{
    position:absolute;
    bottom:0;
    right: 0;
    background: var(--text-color);
    color: var(--bg-color);
    padding: 10px;
    cursor: pointer;
  }
       
  
  </style>
    <body background="https://i.ibb.co/tB7qHHf/Homepage.png">
        
        <header>
            <a class="logo" href="https://mi-linux.wlv.ac.uk/~1800168/GameHub/HomePage.php"><img src="https://i.ibb.co/Xs66F2s/logos.png" alt="logos" border="0"></a>
            <nav>
            <ul class="nav__links">
                    <li><a href="https://mi-linux.wlv.ac.uk/~1800168/GameHub/HomePage.php">Home</a></li>
                    <li><a href="https://mi-linux.wlv.ac.uk/~1800168/GameHub/Data/games_page/games_page.php">Games</a></li>
                    <li><a href="https://mi-linux.wlv.ac.uk/~1800168/GameHub/Data/console_page/console_page.php">Console</a></li>
                    <?php
                    if(isset($_SESSION['userID'])){
                      echo"
                    <li><a href='https://mi-linux.wlv.ac.uk/~1800168/GameHub/Data/add_product_page/add_items.php'>Add Item</a></li>";}
                    ?>
                </ul>
            </nav>
            
            <?php
            if(isset($_SESSION['userID'])){#If logged in redirects to user profile page
              echo"
              <i class='bx bx-cart' id='cart-icon'></i> 
              <a href='https://mi-linux.wlv.ac.uk/~1800168/GameHub/UserProfile/UserProfile.php' title='User Profile' class='cta'><i class='fa-solid fa-user'> Account </i></a> 
              <a class='cta' href='https://mi-linux.wlv.ac.uk/~1800168/GameHub/SignIn/logout.inc.php' ><i class='fa-solid fa-arrow-right-from-bracket'>Log Out</i></a>";
            }
            else{
              echo"<a class='cta' href='https://mi-linux.wlv.ac.uk/~1800168/GameHub/SignIn/Register.php' title='Sign In / Sign Up' class='cta'><i class='fa-solid fa-user'> Login </i></a>";
            }
            ?>
            <!-- <a class="cta2" href="#">Sign Up</a> -->
            <!-- <a class="cta" href="../search_bar_page/searchgame.php">Search Game</a> -->
            <form method="post">
              <input type="text" placeholder="Search Game..." name="search" required/>
              <button type="submit">Search</button>
            </form>
        </header>
            </div>
        </div>
    </body>
</html>