<?php
$a = -1;
switch ($a){
	case $a%2==0&&$a<0:
		echo "Genap Negatif";
		break;
	case $a%2==0:
		echo "Genap Positif";
		break;
	case $a%2==-1&&$a<0:
		echo "Ganjil Negatif";
		break;
	default: 
		echo "Ganjil Positif";
		break;
}
?>