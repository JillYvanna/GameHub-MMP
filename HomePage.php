<?php
        include_once("Header.php");
?>
<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GameHub Home</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
        <script src="https://kit.fontawesome.com/618f54a5aa.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet"/>
		    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
		    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
    </head>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
  
    p#slogan {
      font-family: 'Poppins', sans-serif;
      font-style:normal;
      font-weight:bolder;
      font-size: 55px;
      line-height: 100px;
      letter-spacing: 0.03em;
      color: #FFFFFF;    
    }   
  
    p#caption {
      font-family: 'Poppins', sans-serif;
      font-style: normal;
      font-weight:lighter;
      font-size: 25px;
      line-height: 30px;
      letter-spacing: 0.05em;
      
      color: #FFFFFF;
    }

    .expGames {
      display: flex;
      flex-direction: row;
      justify-content: left;
      align-items: center;
      padding: 7px 20px;
      margin-bottom: 20px;
      

      width: 454px  !important;
      height: 68px  !important;
      left: 45px !important;
      top: 48px !important;
      
      background: #2E9FB1 !important;
      box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
      border-radius: 80px !important;

      position: static;
      width: 312px;
      height: 54px;
      left: 91px;
      top: 7px;
      
      font-family: 'Poppins', sans-serif;
      font-style: normal;
      font-weight: normal;
      font-size: 36px;
      line-height: 54px;
      /* identical to box height */
      
      letter-spacing: 0.1em;
      
      color: #FFFFFF !important;
    }
    
    .expConsole{
      display: flex;
      flex-direction: row;
      justify-content: left;
      align-items: center;
      padding: 7px 20px;
      margin-bottom: 20px;
      

      width: 454px !important;
      height: 68px  !important;
      left: 45px  !important;
      top: 48px  !important;
      
      background: #2E9FB1 !important;
      box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
      border-radius: 80px !important;

      position: static;
      width: 312px;
      height: 54px;
      left: 91px;
      top: 7px;
      
      font-family: 'Poppins', sans-serif;
      font-style: normal;
      font-weight: normal;
      font-size: 36px;
      line-height: 54px;
      /* identical to box height */
      
      letter-spacing: 0.1em;
      
      color: #FFFFFF !important;
    }

    /* Mobile Nav */
  
    .menu {
      display: none;
    }
    
    .overlay {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      background-color: #24252a;
      overflow-x: hidden;
      transition: width 0.5s ease 0s;
    }
    
    .overlay--active {
      width: 100%;
    }
    
    .overlay__content {
      display: flex;
      height: 100%;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    
    .overlay a {
      padding: 15px;
      font-size: 36px;
      display: block;
      transition: color 0.3s ease 0s;
    }
    
    .overlay a:hover,
    .overlay a:focus {
      color: #09b3dd;
    }
    .overlay .close {
      position: absolute;
      top: 20px;
      right: 45px;
      font-size: 60px;
      color: #edf0f1;
    }
    
    @media screen and (max-height: 450px) {
      .overlay a {
        font-size: 20px;
      }
      .overlay .close {
        font-size: 40px;
        top: 15px;
        right: 35px;
      }
    }
    
    @media only screen and (max-width: 800px) {
      .nav__links,
      .cta {
        display: none;
      }
      .menu {
        display: initial;
      }
    }
    

  </style>

  <body background="https://i.ibb.co/tB7qHHf/Homepage.png">
    <div class="container">
        <!--div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="#">Home</a>
                <a href="#">Games</a>
                <a href="#">Consoles</a>
            </div> </div>-->
       
        <div class="row">
          <div class="col-sm-6 LeftHome">       
            <p id="slogan">Providing you retro nostalgia from the Hub</p>
            <p id="caption">Get access to retro games and consoles easily</p>                
            <div class="row">
              <a role="button" href="https://mi-linux.wlv.ac.uk/~1800168/GameHub/Data/games_page/games_page.php" class="btn btn-lg expGames"> 
                <i class="fa-solid fa-compass"></i>
                Explore Games
              </a>  
            </div>     
            <div class="row">
              <a role="button" href="https://mi-linux.wlv.ac.uk/~1800168/GameHub/Data/console_page/console_page.php" class="btn btn-lg expConsole"> 
                <i class="fa-solid fa-compass"></i>
                Explore Consoles
              </a>
            </div>         
          </div>   

          <div class="col-sm-6 RightHome">
            <img src="https://i.ibb.co/DbLQZBP/home-image.png" alt="logo">
          </div>
        </div>       
      </div>
      <?php
        include_once("Footer.php");
        ?>
        <script type="text/javascript" src="mobile.js"></script>
    </body>
</html>