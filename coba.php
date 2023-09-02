<?php
$a = 0;
if ($a%2==0&&$a<0){
	echo "Genap Negatif";
}
else if ($a%2==0){
	echo "Genap Positif";
}
else if (($a%2==-1)&&($a<0)){
	echo "Ganjil Negatif";
}
else echo "Ganjil Positif";
?>