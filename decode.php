<?php


## Использование функции json_decode(). в пхп
  $j = '{"name":"Программист Программистович","phones":["585858585858","85585858588"]}';
  $ars = json_decode($j, true);
  echo "<pre>"; print_r($ars); echo "</pre>";
?>
