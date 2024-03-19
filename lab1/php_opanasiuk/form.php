<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
  <style>
    div + div {
      margin-top: 5px;
    }
  </style>
  <form method="post" action="php4.php">
    <div class="koef">
      <label for="name">Введіть ім'я:</label>
      <input type="text" name="name">
    </div>
    <div class="koef">
      <label for="email">Введіть email:</label>
      <input type="email" name="email">
    </div>
    <div>
      <input type="checkbox" id="want-free" name="want-free" checked />
      <label for="want-free">Бажаєте безкоштовні матеріали з підготовки до ЗНО / НМТ ?</label>
    </div>
    <div class="btns">
      <button type="submit">Відправити</button>
      <button type="reset">Очистити</button>
    </div>
  </form>
</body>
</html>
