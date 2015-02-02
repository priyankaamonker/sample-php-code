<?php
$time_start = microtime(true); 
$primeNumbers = 0;
for($i = 2; $i < 1000; $i++) {
	$divisible = false;
	if($i == 2 && $i % 2 == 0) {
		 $primeNumbers++;
	}
	if($i > 2 && $i % 2 != 0) {
	for($j = 2; $j < $i; $j++) {
		if($i % $j == 0) {
			$divisible = true;
		}
	}
    if($divisible == false) {
        $primeNumbers++;
    }	
	}
}
echo $primeNumbers;
echo '<br />Total execution time in seconds: ' . (microtime(true) - $time_start);
?>
