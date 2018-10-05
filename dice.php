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

<?php
$words = array (
	"giants"
	"triangle"
	"particle"
);
$letters = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o',
'p','q','r','s','t','u','v','w','x','y','z');
$right = array_fill_keys($letters, '.');
	
?>