<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    * {
  margin: 0;
  padding: 0;
  box‑sizing: border‑box;
}
    body {
      font-family: Arial, sans-serif;
      background-color: rgba(153, 153, 232, 0.41);
      margin: 0; padding: 0;
    }
    .container {
      max-width: 100px;
      margin: 50px auto;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 8px rgba(88, 11, 253, 0.4);
      border-radius: 8px;
    }
   
    form {  margin-left: 30px; flex-direction: column; gap: 0px; align-items: center; }
    label { font-weight: bold; align-items: center; }
    input[type="number"],
    input[type="submit"] {
      padding: 7px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 1em;
      align-items: center;
      margin-left: 50px;
    }
    input[type="submit"] {
      background: #3498db;
      color: #fff;
      cursor: pointer;
      border: none;
      margin-left: 100px
    }
    input[type="submit"]:hover {
      background:rgb(7, 45, 71);
    }
   
  </style>
</head>
<body>
<div class="container">  
<form method="POST">
    Temperatura Corporal: <input type="number" step="0.1" name="temp"><br>
    <input type= "submit" value="verificar">
</form>

<?php
if ($_POST){
    $t = $_POST["temp"];
    echo($t >= 36 && $t <= 36.7 )? "remperatura normal" : "Febre!!!!!!!!!!!";
}
?>
<div/>
</body>
</html>