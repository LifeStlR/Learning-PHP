<?php
	// $star=10;
	// for($a=1; $a<=$star; $a++){
	// for($b=$star; $b>=$a; $b-=1){
	// 	echo "&nbsp";
	// }
	// for($c=1; $c<=$a; $c++){
	// 	echo "*";
	// }
	// echo "<br>";
	// }
	// for($a=1; $a<=$star; $a++){
	// for($b=1; $b<=$a; $b++){
	// 	echo "&nbsp";
	// }
	// for($c=$star; $c>=$a; $c-=1){
	// 	echo "*";
	// }
	// echo "<br>";
	// }
?>
<?php
$num_char 	 = 20; 
$onehalf 	 = floor($num_char / 2);
$onehalf_var = $onehalf;
$char1 		 = '*';
$char2 		 = '&nbsp';

echo '<div style="font:bold 16px courier new; line-height:10px">';
for ($row = 2; $row <= $num_char; $row++)
{
	for ($col = 1; $col <= $num_char; $col++)
	{
		$char =	$col > $onehalf_var && $col <= ($num_char - $onehalf_var) ? $char2 : $char1;
		echo $char;	
	}
	$row <= $onehalf ? $onehalf_var-- : $onehalf_var++;	
	echo '<br/>';
}
echo '</div>';

?>
