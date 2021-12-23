<?php

// print_r("Enter sorted array value: ");
// $array = array_map('intval', explode(' ', readline()));

// print_r($array);
// print_r(var_dump($array[0]));

$array = [-7, -5, -3, -1, 3, 6, 9];
$negIndex = 0;
foreach ($array as $index => $element) {
	if ($element >= 0) {
		$negIndex = $index;
		break;
	}
}
$negArray = array_chunk($array, $negIndex)[0];
rsort($negArray);
$posArray = array_chunk($array, $negIndex)[1];
print_r($negArray);
print_r($posArray);

$negI = $posI = 0;
$result = [];
while ($negI < sizeof($negArray) || $posI < sizeof($posArray)) {
	if ($negI < sizeof($negArray) && $posI < sizeof($posArray)) {
		if (abs($negArray[$negI]) <= $posArray[$posI])
			array_push($result, $negArray[$negI++]);
		else array_push($result, $posArray[$posI++]);
	} elseif ($negI < sizeof($negArray)) 
			array_push($result, $negArray[$negI++]); 
	else 
		array_push($result, $posArray[$posI++]);
}

print_r("Result: ");
print_r($result);


?>
