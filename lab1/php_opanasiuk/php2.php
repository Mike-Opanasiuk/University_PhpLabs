<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2</title>
</head>
<body>
  <style>
    .koef + .koef {
      margin-top: 7px;
    }
    .koef input[type="text"] {
      margin-left: 40px;
    }
    
    label {
      font-weight: bold;
    }
    .btns {
      margin-top: 7px;
      margin-left: 120px;
    }
  </style>
  <form method="post" action="php3.php">
    <div class="koef">
      <label for="a">Введіть A:</label>
      <input type="text" name="a">
    </div>
    <div class="koef">
      <label for="b">Введіть B:</label>
      <input type="text" name="b">
    </div>
    <div class="koef">
      <label for="c">Введіть C:</label>
      <input type="text" name="c">
    </div>
    <div class="btns">
      <button type="submit">Розрахувати</button>
      <button type="reset">Очистити</button>
    </div>
  </form>
</body>
</html>
