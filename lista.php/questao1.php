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
      padding: 8px;
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
      margin-left: 50px
    }
    input[type="submit"]:hover {
      background:rgb(7, 45, 71);
    }
   
  </style>
</head>
<body>
    
<br>
<br>
<div class="container">
<form method="post">
   <b>Nota 1:</b> <input type="number" name="n1"><br>
   <b>Nota 2:</b> <input type="number" name="n2"><br>
   <b>Nota 3:</b> <input type="number" name="n3"><br>
   <b>Nota 4:</b> <input type="number" name="n4"><br>
<br>

    <input type="submit" value="Calcular Média">
</form>

<?php
if ($_POST) {
  $media = ($_POST["n1"] + $_POST["n2"] + $_POST["n3"] + $_POST["n4"]) / 4;
  echo "Média: " . $media;
}
?>
</div>


</body>
</html>