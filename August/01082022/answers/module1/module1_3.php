<?php
  function stringReverse($input) {
    $result = null;
    for($i=strlen($input)-1; $i>=0; $i--) {
      $result .= $input[$i];
    }
    return $result;
  }
?>

<?php
  $reversed = '';
	$input = readline('Enter a string to reverse : ');
	$reversed = stringReverse($input);
	echo 'Reversed String : '.$reversed;
?>