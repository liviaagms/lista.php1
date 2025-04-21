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
      background-color:rgba(153, 153, 232, 0.41);
      margin: 0; padding: 0;
    }
    .container {
      max-width: 500px;
      margin: 50px auto;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 8px rgba(88, 11, 253, 0.4);
      border-radius: 8px;
    }
   
    form {  margin-left: 30px; flex-direction: column; gap: 0px; align-items: center; }
    label { font-weight: bold; align-items: center; }
    input[type="number"],
    input[type="hidden"],
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
   select{
    padding: 7px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 1em;
      align-items: center;
      margin-left: 50px;
   }
  </style>
</head>
<body>
    <br>
    <br>
    <div class="container">
<form method="POST">
  Número 1: <input type="number" name="n1"><br>
  Número 2: <input type="number" name="n2"><br>
  Operação:
  <select name="op">
    <option value="soma">Soma</option>
    <option value="sub">Subtração</option>
    <option value="mult">Multiplicação</option>
    <option value="div">Divisão</option>
    <option value="resto">Resto</option>
  </select><br>
  <br>
  <input type="submit" value="Calcular">
</form>

<?php
if ($_POST) {
  $a = $_POST["n1"];
  $b = $_POST["n2"];
  $op = $_POST["op"];

  switch ($op) {
    case "soma":
      echo "Resultado: " . ($a + $b);
      break;
    case "sub":
      echo "Resultado: " . ($a - $b);
      break;
    case "mult":
      echo "Resultado: " . ($a * $b);
      break;
    case "div":
      echo "Resultado: " . ($b != 0 ? $a / $b : "Divisão por zero");
      break;
    case "resto":
      echo "Resultado: " . ($a % $b);
      break;
    default:
      echo "Operação inválida.";
  }
}
?>
</div>
</body>
</html>