<?php
echo $data = 'asbjkbbsbfkadlkfsdfnniauckdfcczbnsjfa';

echo "<br>";

$finalArray = $array = array();

for($i=0;$i<strlen($data);$i++){

	$char = substr($data,$i,1);
	$array[]  = $char;
}

foreach ($array as $key => $value) {
	$count = 0;
	foreach ($array as $key1 => $value1) {
		if($value==$value1){
			$count++;
		}
	}
	$finalArray[$key] = $value.$count;
}
echo implode('', array_unique($finalArray));