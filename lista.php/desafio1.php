<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Média Aritmética</title>
  <link rel="stylesheet" href="style.css">
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
      max-width: 400px;
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
   
  </style>
</head>
<body>
  <div class="container">
    <h1>Média de 4 Notas</h1>
    <form method="POST">
      <label for="n1">Nota 1:</label>
      <br>
      <input type="number" id="n1" name="n1" required>
<br><br>
      <label for="n2">Nota 2:</label>
      <br>
      <input type="number" id="n2" name="n2" required>
<br><br>
      <label for="n3">Nota 3:</label>
      <br>
      <input type="number" id="n3" name="n3" required>
<br><br>
      <label for="n4">Nota 4:</label>
      <br>
      
      <input type="number" id="n4" name="n4" required>
      <br>
      <br>

      <input type="submit" value="Calcular Média">
    </form>

    <?php if ($_POST): ?>
      <div class="result">
        <?php
          $media = (
            $_POST["n1"] + 
            $_POST["n2"] + 
            $_POST["n3"] + 
            $_POST["n4"]
          ) / 4;
          echo "Média: " . number_format($media, 2, ",", ".");
        ?>
      </div>
    <?php endif; ?>
  </div>
</body>
</html>
