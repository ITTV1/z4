<?php

## Использование функции json_encode() php code
  $B = [
    "name" => "Программист Программистович",
    "phones" => [
      "58588588787",
      "54578877878"
    ]
  ];
  echo json_encode($B, JSON_UNESCAPED_UNICODE );
?>
