function my_function($a, $b) {
  if ($a === $b) {
    return true; 
  } else {
    return false;
  }
}

//This function will return false for NaN even though NaN !== NaN
$result = my_function(NAN,NAN);
var_dump($result); // bool(false)