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
  Nome: <input type="text" name="nome"><br>
  Escolha seu lanche:<br>
  <select name="lanche">
    <option value="1">X-Burger - R$10</option>
    <option value="2">X-Salada - R$12</option>
    <option value="3">X-Bacon - R$15</option>
    <option value="4">X-tudo - R$25</option>
    <option value="5">Misto - R$8</option>
    <option value="6">Pastel - R$9</option>
    <option value="7">Batata Frita - R$6</option>
    <option value="8">Refrigerante - R$5</option>
    <option value="9">Salgadinho - R$5</option>
  </select>
  <br><input type="submit" value="Pedir">
</form>

<?php
if ($_POST) {
  $nome = $_POST["nome"];
  $precos = [1 => 10, 2 => 12, 3 => 15, 4 => 25, 5 => 8, 6 => 9, 7 => 6, 8 => 5, 9 => 5];
  $lanches = [1 => "X-Burger", 2 => "X-Salada", 3 => "X-Bacon", 4 => "X-tudo", 5 => "Misto", 6 => "Pastel", 7 => "Batata Frita", 8 => "Refrigerante", 9 => "salgadinho"];
  $cod = $_POST["lanche"];
  
  if (isset($lanches[$cod])) {
    echo "Olá, $nome! Você fez a escolha de um {$lanches[$cod]} que custa R$ {$precos[$cod]}!!";
  } else {
    echo "Opção inválida.";
  }
}
?>
</div>
</body>
</html>