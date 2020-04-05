<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Ура форма JSON-данных</title>
  <meta charset='utf-8'>
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="/index.js"></script>
</head>
<body>
  <p id='hello'>Приветствуем !</p>
  <form action="/answer.php" method="GET">
  <p>Имя проограммиста: <input type="text" name="name" value="" /></p>
  <p>Фамилия проограммиста: <input type="text" name="familys" value="" /></p>
  <p><input type="submit" value="Скажи свое имя и фамилию"><p>
  </form>
</body>
</html>
