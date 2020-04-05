<?php


//json формат


//
//
//
//$a=["name" => "Программист Программистович",
//    "phone" =>
//   [ "1234556798",
//    "1255534556798"]];
// echo json_encode($a);


//JSON_HEX_TAG         <    >         \u003C   \u003E
//JSON_UNESCAPED_UNICODE    \uXXXX
//JSON_UNESCAPED_SLASHES   /
//JSON_PRETTY_PRINT                  пробел
//JSON_BIGINT_AS_STRING     числа
//JSON_NUMERIC_CHECK         числа в строки
//JSON_FORCE_OBJECT           объект
//JSON_HEX_QUOT          "  = \u0022"
//JSON_HEX_APOS            ' \u0027'
//JSON_HEX_AMP   &  \u0026




 mixed json_decode(string  $jsons,  bool $as = false, int $d = 512, int $option = 0  )


 mixed json_decode(string  $jsons,  bool $as = true, int $d = 512, int $option = 0  )



?>
