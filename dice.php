<?php
function roll () {
	return mt_rand(1,6);
}
$first = roll();
$second = roll();

?>


<h3><?php echo "$first  +  $second = ";
echo $first + $second;
?></h3>
