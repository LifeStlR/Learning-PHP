<?php
error_reporting(0);
?>
<html>
<body>
<meta charset="UTF-8">
<!-- Form to get user input, using the post method -->
<form method="post" action="">
	<p>a: <input type="number" name="a"></p>
	<p>b: <input type="number" name="b"></p>
	<p>c: <input type="number" name="c"></p>
	<p><input type="submit"></p>
</form>
</body>
</html>

<?php
// Set character encoding to UTF-8
header("Content-Type:text/html; charset=utf-8");
// Declare variables
// $a=1;
// $b=3;
// $c=6;
// Convert get values into variables

$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];

// Echo the equation
echo $a."x² + ".$b."x + ".$c." = 0<p>";

// Calculate delta
$delta=(pow($b,2))-(4*$a*$c);

// All solutions are rounded to 3 d.p.

// non-null validation
if (!isset($a) or !isset($b) or !isset($c)) {
	echo "Please input all values above!";
}

// Non-quadratic equation input check
elseif ($a==0) {
	echo "The equation is not quadratic!";
}

// If delta<0
elseif ($delta<0) {
	// Calculate real part of both roots (-b/2a)
	$realpart=round((($b*-1)/(2*$a)),3);
	// Calculate imaginary part of both roots (b²-4ac)
	// The result is a negative number
	$ipart=round((pow($b,2)-(4*$a*$c)),3);

	// Echo the solutions
	// Use the ± sign to represent the solutions
	echo "x = $realpart ± √$ipart<p>";
	// Represent the solutions in terms of i, rounding the square root to 3 d.p.
	echo "x = $realpart + ".round(sqrt($ipart*-1),3)."i or $realpart - ".round(sqrt($ipart*-1),3)."i<p>";
}

// If delta>0
elseif ($delta>0) {
	// Calculate the root with plus sign in quadratic equation
	$rootplus=round((($b*-1)+sqrt(pow($b,2)-4*$a*$c))/(2*$a),3);
	// Calculate the root with minus sign in quadratic equation
	$rootmin=round((($b*-1)-sqrt(pow($b,2)-4*$a*$c))/(2*$a),3);

	// Echo the solutions
	echo "x = $rootplus or $rootmin.";
}

// If delta==0
elseif ($delta==0) {
	// Calculate the root
	$rootrep=round((($b*-1)+sqrt(pow($b,2)-4*$a*$c))/(2*$a),3);

	// Echo the solution
	echo "x = $rootrep (repeated)";
}

?>