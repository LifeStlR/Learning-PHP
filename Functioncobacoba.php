<html>
<body>
<form method="post">
  Insert Number1: <input type="text" name="num1"/>
  Insert Number2: <input type="text" name="num2"/>
  Result: 
  </form>
  <input type="radio" value= "Addition" name="calc"> Addition .<br />
  <input type="radio" value= "Subtraction" name="calc"> Subtraction .<br />
  <input type="radio" value= "Multiplication" name="calc"> Multiplication .<br />
  <input type="radio" value= "Division" name="calc"> Division .<br />
  <?php
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$calc = $_POST['calc'];
function calculate($num1,$num2,$calc){
	switch($calc){
	case "Addition":
            $compute = $n1 + $n2; 
            break;
        case "Subtraction":
            $compute = $n1 - $n2; 
            break;
        case "Multiplication":
            $compute = $n1 * $n2; 
            break;
        case "Division":
            $compute = $n1 / $n2; 
            break;
        }
        return $compute;
    }
}
?>
 </body>
</html>