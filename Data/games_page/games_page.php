<?php include "../header/header_game.php" ?>

<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Games</title>
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

.card:hover{
  transform: scale(0.54);
  /* box-shadow: 0px 0px 10px rgb(255 255 255); */
  background-color:rgb(223 223 223);
  transform: translateY(-10px); 
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
    <body img src="https://i.ibb.co/tB7qHHf/Homepage.png" alt="Italian Trulli">
        <section class="product-list">
            <div class="container-title">
                <h1>
                    All Games
                </h1>

                 
            </div>

            <div class="product-container">
                    <?php
                                $server = "localhost";
                                $username = "2007780";
                                $password = "Aishaarif.123";
                                $dbname = "db2007780";

                                $connect = mysqli_connect( 'localhost', '2007780', 'Aishaarif.123', 'db2007780');

                                $query = 'SELECT Game_Name, Developer, Price_Rent, Picture FROM GameDataNew';
                                $result = mysqli_query( $connect, $query);

                                while( $record = mysqli_fetch_assoc( $result))
                                {
                                    ?>
                
                                    <div class="card">
                                    
                                        <?php
                                        echo '<div class="product-title">'.$record['Game_Name'].'</div>';
                                        ?>
                                        <div class="product-img">
                                            <img src="<?php echo $record['Picture']; ?>" />
                                        </div>
                                        <?php
                                        echo '<div class="text">'.$record['Developer'].'</div>';
                                        ?>
                                        <div class="footer">
                                            <?php
                                            echo '<div class="price">£'.$record['Price_Rent'].'</div>';
                                            ?>
                                            <div class="icon"><a href="#" ><i class='bx bx-money-withdraw buy-item' ></i></a></div>
                                            <div class="icon"><a href="#" ><i class='bx bx-cart-add add-cart' ></i></a></div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                    ?>
            </div>
        </section>
        <?php
            include("../Footer.php");
        ?>
        <script> 
//cart
  let cartIcon = document.querySelector("#cart-icon");
  let cart = document.querySelector(".cart");
  let closeCart = document.querySelector("#close-cart");

  //open the cart
  cartIcon.onclick = () => {
      cart.classList.add("active");
  };
  //close the cart
  closeCart.onclick = () => {
      cart.classList.remove("active");
  };
  if(document.readyState == "loading"){
    document.addEventListener("DOMContentLoaded", ready);
  } else {
      ready();
  }
  //Making Function
  function ready(){
    //Remove Items From Cart
    var removeCartButtons = document.getElementsByClassName("cart-remove");
    console.log(removeCartButtons);
    for(var i = 0; i<removeCartButtons.length;i++){
        var button = removeCartButtons[i];
        button.addEventListener("click", removeCartItem);
    }
    //Quantity Changes
    var quantityInputs = document.getElementsByClassName("cart-quantity");
    for(var i = 0; i < quantityInputs.length; i++){
        var input = quantityInputs[i];
        input.addEventListener("change", quantityChanged);
    } 
    //Add to cart
    var addCart = document.getElementsByClassName("add-cart");
    for (var i = 0; i < addCart.length; i++){
        var button = addCart[i];
        button.addEventListener("click",addCartClicked);
    }
    // Buy button
    document.getElementsByClassName("btn-buy")[0].addEventListener("click", buyButtonClicked);
    }

  function buyButtonClicked(){
    alert ("Your Order is placed");
    var cartContent = document.getElementsByClassName("cart-content")[0];
    while (cartContent.hasChildNodes()){
        cartContent.removeChild(cartContent.firstChild); 
    }
    updatetotal();
  }

  //remove items from the cart
  function removeCartItem(event){
    var buttonClicked = event.target;
    buttonClicked.parentElement.remove();
    updatetotal();
  }

  //Quantity Changes
  function quantityChanged(event){
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0){
        input.value = 1;
    }
    updatetotal();
  }
  //Add to cart
  function addCartClicked(event){
    var button = event.target;
    var shopProducts = button.parentElement;
    var title = shopProducts.getElementsByClassName("product-title").innerText;
    var price = shopProducts.getElementsByClassName("price").innerText;
    var productImg = shopProducts.getElementsByClassName("product-img").src;
    addProductToCart(title,price,productImg);
    updatetotal();
  }
  function addProductToCart(title,price,productImg){
    var cartShopBox = document.createElement("div");
    cartShopBox.classList.add("cart-box");
    var cartItems = document.getElementsByClassName("cart-context")[0];
    var cartItemsNames = document.getElementsByClassName("cart-product-title");
    for(var i = 0; i< cartItemsNames.length; i++){
      if(cartItemsNames[i].innerText == title){
          alert("You have already added this item to cart");
          return;
      }
    }
    var cartBoxContent = `
                            <img src="${productImg}" alt="" class="cart-img">
                            <div class="detail-box">
                                <div class="cart-product-title">${title}</div>
                                <div class="cart-price">£${price}</div>
                                <input type="number" value="1" class="cart-quantity">
                            </div>
                            <!--Remove-->
                            <i class='bx bx-trash-alt cart-remove' ></i>`;

    cartShopBox.innerHTML = cartBoxContent;
    cartItems.appendChild(cartShopBox);
    cartShopBox.getElementsByClassName("cart-remove")[0].addEventListener("click",removeCartItem);
    cartShopBox.getElementsByClassName("cart-quantity")[0].addEventListener("change",quantityChanged);
        
    }
    
    //update tool
  function updatetotal(){
    var cartContent = document.getElementsByClassName("cart-content")[0];
    var cartBoxes = cartContent.getElementsByClassName("cart-box");
    var total = 0;
    for(var i = 0; i < cartBoxes.length; i++){
      var cartBox = cartBoxes[i]
      var priceElement = cartBox.getElementsByClassName("cart-price")[0];
      var quantityElement = cartBox.getElementsByClassName("cart-quantity")[0];
      var price = parseFloat(priceElement.innerText.replace("£", ""));
      var quantity = quantityElement.value;
      total = total + price * quantity;
    }
    //If price Contain some cents value
    total = Math.round(total * 100)/100;
    document.getElementsByClassName("total-price")[0].innerText = "£" + total;
      
  }

</script>
    </body>
</html>