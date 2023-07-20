<?php
function post($a = false){
  if (!$a) {
    return (isset($_POST)) ? $_POST : false ;
  }
  return (isset($_POST[$a])) ? $_POST[$a] : false ;
}

function secure($a = false){
  // XSS fonksiyonu eklenecek
  return post($a);
}

function json_encode_tr($string)
{
    return json_encode($string, JSON_UNESCAPED_UNICODE);
}


function debug($a, $exit = null){
  echo "<pre>";
  print_r($a);
  echo "</pre>";
  if ($exit !== null) {
    exit;
  }
}
 ?>