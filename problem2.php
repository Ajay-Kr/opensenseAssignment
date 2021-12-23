<?php

define('MIN_VALUE', 1);
define('MAX_VALUE', 15);
define('MIN_ELEMENT', 1);
define('MAX_ELEMENT', 10);
define('MIN_TEST', 1);
define('MAX_TEST', 100);


function getElements() {
  $nElement = (int)readline("Enter number Elements (1<= N <= 10): ");
  if (!(($nElement >= MIN_ELEMENT) && ($nElement <= MAX_ELEMENT))) {
    print_r("Please enter value between 1 and 10!");
    return;
  }

  print_r("Enter the elements in array (1 <= A[i] <= 15) : \n");
  $array = [];

  for ($i = 0; $i < $nElement; $i++) {
    $element = (int)readline();
    if ($element >= MIN_VALUE && $element <= MAX_VALUE)
      array_push($array, $element);
    else {
      print_r("Invalid Value!\n");
      break;
    }
  }
  // print_r($array);
  return $array;
}

function getProduct() {
  $iter = $T = 0;
  
  $T = (int)readline("Enter number of test cases (T): ");
  
  while (($iter < $T) && (($T >= MIN_TEST) && ($T <= MAX_TEST))) {
    $inputArray = getElements();
    $result = array_product($inputArray);
    print_r("\nProduct: $result\n");
    $iter++;
  }
}

getProduct();


?>