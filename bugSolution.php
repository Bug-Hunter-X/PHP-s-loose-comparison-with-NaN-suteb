function my_function($a, $b) {
  if (is_nan($a) || is_nan($b)) {
    return is_nan($a) && is_nan($b); //If both are NaN, return true; otherwise false
  } else if ($a === $b) {
    return true; 
  } else {
    return false;
  }
}

//This function will return true for NaN and will return correct value for other values
$result = my_function(NAN,NAN);
var_dump($result); // bool(true)
$result = my_function(1,1);
var_dump($result); // bool(true)
$result = my_function(1,2);
var_dump($result); // bool(false)
$result = my_function(1,NAN);
var_dump($result); // bool(false) 