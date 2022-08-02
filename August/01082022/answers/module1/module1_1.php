<?php
  $isPrime = true;
	$num = (int)readline('Enter a number to check prime or not : ');
	echo 'Number entered : '.$num;
	if($num == 0 || $num == 1) {
	  $isPrime = false;
	}

  for($i=2; $i<=$num/2; $i++) {
    if($num%$i==0) {
      $isPrime = false;
      break;
    }
  }

	if($isPrime) {
    echo "\nPrime";
  }
  else {
    echo "\nNot Prime";
  }
?>