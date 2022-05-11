<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Products</title>
<link rel="stylesheet" href="games_page.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<script src="https://kit.fontawesome.com/a8c6899e1d.js" crossorigin="anonymous"></script>

</head>
<body img src="Homepage.png" alt="Italian Trulli">

<?php include "header_game.php" ?>
    <!-- <section class="nav-bar">

        <div class="topnav">
            <a href="#home">Home</a>
            <a href="#Games">Games</a>
            <a href="../console_page/console_page.php">Consoles</a>
            <a style="float:right" href="../search_bar_page/searchgame.php">Search</a>

            <div class="search-container">
            </div>
        </div>           

    </section> -->
    <section class="product-list">
        <div class="container-title">
            <h1>
                All Games
            </h1>   
        </div>

        <div class="product-container">
            <!--1st product -->
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
    <style>
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