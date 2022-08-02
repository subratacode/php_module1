<?php
  $result = 0;
	$num = (int)readline('Enter a number to generate fibonacci series : ');
	echo 'Fibonacci series : ';
	if($num==0) {
	  echo '0 ';
	  exit(0);
	}
	if($num==1) {
	  echo '0 1 ';
	  exit(0);
	}
	$first = 0;
	$second = 1;
	echo '0 1 ';
	while($result<$num) {
	  $result = $first+$second;
	  echo $result." ";
	  $first = $second;
	  $second = $result;
	}
?>