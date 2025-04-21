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
   
  </style>
</head>

<body>
  
  <div class="container">
    <section>
      <h2>1. escreva</h2><br>
      <form method="POST">
        <label for="texto">Texto para exibir:</label>
        <br>
        <input type="text" id="texto" name="texto" required>
        <input type="hidden" name="action" value="escreva">
        <br>
        <br>
        <input type="submit" value="Executar escreva">
      </form>
      <?php
      if ($_SERVER['REQUEST_METHOD']==='POST' && $_POST['action']==='escreva') {
       
        function escreva($texto) {
          
          echo htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
        }
        echo '<div class="result">';
        escreva($_POST['texto']);
        echo '</div>';
      }
      ?>
    </section>
<br>
<br>
   
    <section>
      <h2>2. soma(x, y)</h2>
      <br>
      <form method="POST">
        <label for="x">Valor X:</label>
        <br>
        <input type="number" id="x" name="x" required><br>
        <br>
        <label for="y">Valor Y:</label>
        <br>
        <input type="number" id="y" name="y" required>
        <input type="hidden" name="action" value="soma">
        <br>
        <br>
        <input type="submit" value="Executar soma">
        
      </form>
      <?php
      if ($_SERVER['REQUEST_METHOD']==='POST' && $_POST['action']==='soma') {
        function soma($x, $y) {
          return $x + $y;
        }
        $res = soma((float)$_POST['x'], (float)$_POST['y']);
        echo '<div class="result">Soma: ' . $res . '</div>';
      }
      ?>
    </section>
    <br>
    <br>
    
    <section>
      <h2>3. calcula area retangulo</h2>
      <br>
      <form method="POST">
        <label for="largura">Largura:</label>
        <br>
        <input type="number" step="0.01" id="largura" name="largura" required><br>
        <br>
        <label for="altura">Altura:</label>
        <br>
        <input type="number" step="0.01" id="altura" name="altura" required>
        <input type="hidden" name="action" value="area">
        <br>
        <br>
        <input type="submit" value="Executar calculo">
        <br>
      </form>
      <?php
      if ($_SERVER['REQUEST_METHOD']==='POST' && $_POST['action']==='area') {
        function calculaAreaRetangulo($largura, $altura) {
          return $largura * $altura;
        }
        $area = calculaAreaRetangulo((float)$_POST['largura'], (float)$_POST['altura']);
        echo '<div class="result">Área do retângulo: ' . $area . '</div>';
      }
      ?>
    </section>

  </div>
</body>
</html>
