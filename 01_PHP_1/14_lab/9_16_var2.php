<?php 

$arr = [0, 1, 1, 5, 5, 7, 8, 55, 8, 8, 9, 0];

$max = 1;
$counter = 0;
$num = $arr[0];

$count = count($arr);

for($i = 0; $i < $count; $i++){
	$current_num = $arr[$i];
	$counter = 0;
	for($j = 0; $j < $count; $j++){
		if($current_num == $arr[$j]){
			$counter++;
		}
	}

	if($max < $counter){
		$max = $counter;
		$num = $current_num;
	}
}

echo $max;
echo "-";
echo $num;
