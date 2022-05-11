<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="comingsoon.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Coming Soon</title>
</head>
<style>
    *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html,body{
    height:100%;
}

body{
    font-size: 1rem;
    line-height:1.65;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background: linear-gradient(to right,#8e44ad 50%,#fff 50%);   
    color: #fff; 
}
.uc_wrapper{
    height:100vh;
    display: flex;
    justify-content: space-between;
}
.uc_details{
    flex-basis: 50%;
    display: flex;
    flex-direction: column;
    padding: 0 4rem;
    align-items:flex-start;
    justify-content: center;
}
.uc_art{
    flex-basis: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.uc_art img{
    width:70%;
}
.title{
   display: inline-block;
   font-size: 40px;
   position: relative;
   margin-bottom: 1 rem;
}

.title::after{
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    height: 3px;
    background-color: #fff;
    width: 140px;
}
.intro{
    font-size: 15px;
    font-weight: normal;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 1rem;
}
.uc_description{
    margin-bottom: 2rem;
    line-height: 1.77;
    color: #ccc;    
}
.uc_subscribe{
    background-color: #9b59b6;
    padding: 1.5rem;
    width: 85%;
    border-radius: 3px;
    box-shadow: 0 25px 50px -12px rgba(0,0,0,.25);
}

.uc_subscribe h3{
    font-weight: normal;
    text-transform: uppercase;
    font-size: 18px;
    letter-spacing: 1px;
    margin-bottom: 1rem;
}
.uc_form{
    position: relative;
}
.uc_form input{
    font-family: inherit;
    outline: none;
    font-size: 90%;
    padding: 10px 1rem;
    border:none;
    display: block;
    border-radius: 2px;
}
.uc_form .email{
    width:100%;
    background-color: #ecf0f1;
}
.uc_form .submit{
    position: absolute;
    top: 0;
    right: 0;
    background-color:#7a3a95;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    transition: background-color .22s ease;
}
.uc_form .submit:hover{
    background-color: #8e44ad;
}
</style>
<body>

    <div class="uc_wrapper">
        <div class="uc_details">
            <h1 class="title">
                Coming Soon!
            </h1>
            <h3 class="intro">
                We are working hard to give you a better experience.
            </h3>
            <p class="uc_description">
                We are working hard on it & the site may go live very soon. We promise, it will be worth the wait!
            </p>
            <div class="uc_subscribe">
                <h3>Get Notify When we go live</h3>
                <div class="uc_form">
                    <form action="#">
                        <input type="email" class="email" placeholder="Email Address...">
                        <input type="submit" class="submit" value="Get Notified">
                    </form>
                </div>
            </div>
            <br>
            <a role="button" class="btn btn-light" href="https://mi-linux.wlv.ac.uk/~1800168/GameHub/HomePage.php">Return Home</a>
        </div>
        <div class="uc_art">
            <img src="https://i.ibb.co/0mQcZgz/dribbble-loop-60.gif" alt="">
        </div>
    </div>
</body>
</html>