<?php 
include("../header/header_game.php");
?>

<!DOCTYPE html>
<html>
<head>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto;
  gap: 10px;
  padding: 10px;
}

.grid-container > div {
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}

.container {
    width: 500px;
    height: 800px;
    border-radius: 50px;
    padding: 40px;
    background: #694592;
    margin-left: auto;
    margin-right: auto;
  
}

.containerright {
  width: 500px;
  height: 800px;
  border-radius: 50px;
  padding: 40px;
  background: rgba(0, 136, 169, 0.8);
  margin-left: auto;
  margin-right: auto;
  
}
 
  .brand-title {
    margin-top: 10px;
    font-weight: 900;
    font-size: 1.8rem;
    color: white;
    letter-spacing: 1px;
    font-family: "Montserrat", sans-serif;
    text-align: center;
  }
  
  .inputs {
    text-align: left;
    margin-top: 30px;
  }
  
  label, input, button {
    display: block;
    width: 100%;
    padding: 0;
    border: none;
    outline: none;
    box-sizing: border-box;
  }
  
  label {
    margin-bottom: 4px;
  }
  
  label:nth-of-type(2) {
    margin-top: 12px;
  }
  
  input::placeholder {
    color: gray;
  }

  input {
    background: #ecf0f3;
    padding: 10px;
    padding-left: 20px;
    height: 50px;
    font-size: 14px;
    border-radius: 10px;
    box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
    margin-bottom: 10px;
  }
  
  button {
    color: #694592;
    margin-top: 20px;
    background: white;
    height: 40px;
    border-radius: 20px;
    cursor: pointer;
    font-weight: 900;
    transition: 0.5s;
  }
  
  button:hover {
    box-shadow:black;
  }

  h1 {
    position: absolute;
    top: 0;
    left: 0;
  }

.item1 {
  grid-column: 1 / 2;
}
</style>
</head>
<body>



<div class="grid-container">
  <div class="item1"><div class="container">
    <div class="brand-title">ADD GAME</div>
    <div class="inputs">
      <form action="insert-inc.php" method="post">        
        <input type="text" name="Game_Name" placeholder="Game Name" />
        <input type="text" name="Developer"  placeholder="Developer" />
        <input type="number" name="Age_Rating" placeholder="Age Rating" /> 
        <input type="number" name="YearReleased" placeholder="Year Released" />
        <input type="text" name="Genre" placeholder="Genre" />
        <input type="text" name="Descript" placeholder="Description" />
        <input type="text" name="Platform" placeholder="Platform" />
        <input type="text" name="Cond" placeholder="Game Condition" />
        <input type="number" name="Price_Rent" placeholder="Hire Price" />
        <!-- <input type="text" name="Own" placeholder="Owner" /> -->
        <input type="text" name="Picture" placeholder="Image URL.." />
        <button type="submit" name="submit">ADD GAME</button>
      </form>
    </div>
  </div>
</div>



<div class="item2"><div class="containerright">
  <div class="brand-title">ADD CONSOLE</div>
    <div class="inputs">
      <form action="console-insert-inc.php" method="post">
        <input type="text" name="Console_Name" placeholder="Console Name" />
        <input type="text" name="Brand"  placeholder="Brand" />
        <input type="text" name="Type_" placeholder="Type" />
        <input type="number" name="Year_" placeholder="Year Released" />
        <input type="text" name="Generation" placeholder="Generation" />
        <input type="text" name="Country" placeholder="Country" />
        <input type="text" name="Cond" placeholder="Condition" />
        <input type="number" name="Price_Rent" placeholder="Hire Price" />
        <input type="text" name="Picture" placeholder="Image URL.." />
        <button type="submit" name="submit">ADD CONSOLE</button>
      </form>
    </div>
  </div>
</div>

</div>
<?php
include("../Footer.php")
?>
</body>
</html>