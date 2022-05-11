<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="product_page.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />

  </head>

  <body>


  <?php
    $server = "localhost";
    $username = "2015861";
    $password = "3b170m";
    $dbname = "db2015861";

    $connect = mysqli_connect( 'localhost', '2015861', '3b170m', 'db2015861');

    $query = 'SELECT Game_Name, Descript, Price_Rent FROM Games';
    $result = mysqli_query( $connect, $query);

    $record = mysqli_fetch_assoc( $result)

    ?>


    <main class="container">

      <!-- Left Column / Headphones Image -->
      <div class="left-column">
        <img src="game4.png" alt="Game">
      </div>


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Headphones</span>

          <?php
          echo '<h1>'.$record['Game_Name'].'<h1>';
          echo '<p>'.$record['Descript'].'<p>';

          ?>
        </div>

        <!-- Product Configuration 
        <div class="product-configuration">

  
          <div class="product-color">
            <span>Color</span>

            <div class="color-choose">
              <div>
                <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                <label for="red"><span></span></label>
              </div>
              <div>
                <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                <label for="blue"><span></span></label>
              </div>
              <div>
                <input data-image="black" type="radio" id="black" name="color" value="black">
                <label for="black"><span></span></label>
              </div>
            </div>

          </div>
          

          
          <div class="cable-config">
            <span>Cable configuration</span>

            <div class="cable-choose">
              <button>Straight</button>
              <button>Coiled</button>
              <button>Long-coiled</button>
            </div>

            <a href="#">How to configurate your headphones</a>
          </div>
        </div>-->

        <!-- Product Pricing -->
        <div class="product-price">
          
          <?php
          echo '<span>£'.$record['Price_Rent'].'pw<span>';
          ?>

          <a href="#" class="cart-btn">Add to cart</a>
        </div>
      </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="product_page.js" charset="utf-8"></script>
    <?php
            include("../Footer.php")
        ?>
  </body>
</html>
