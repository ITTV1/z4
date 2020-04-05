<?php
  // Преобразуем JSON-данные в массив в джаваскрипт
  $arr = json_decode($_POST['json'], true);
  // Объединяем содержимое в строку в джаваскрипт
  $name = trim(implode(" ", $arr));

  $result = "Привет";
  if(!empty($name))
    $result .= ", $name";
  $result .= ".";

  // Отдаем результат
  echo htmlspecialchars($result);
?>
