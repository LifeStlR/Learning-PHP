<?php 
declare(strict_types=1);
function listFactors(int $x){
	for($i=1;$i<($x/2);$i++){
		if(fmod($x,$i)==0){
			echo $i." ".$x/$i;
			echo "<br>";
		}
	}
}
echo listFactors(12);
?>