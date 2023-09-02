<html>
<head><title>Segitiga</title></head>

<h3> GAMBAR SEGITIGA </h3>
<body>
<form actiton="" method="post">
<table border=0>
    <tr>Input
  <input type="text" name="jumlah"><br>
</tr>

<tr>
    <td><input type="submit" name="input-data" 
value=Input>

</tr>
</table>
</form>
</body>
</html>
<h5> Output </h5>
<?php
if (isset ($_POST["input-data"]))
{
$jumlah=$_POST["jumlah"];
    $star=$_POST["jumlah"];
    for($a=1; $a<=$star; $a++){
    for($c=$star; $c>=$a; $c-=1){
        echo "*";
    }


    for($i=2; $i<=$a; $i++){
        echo " &nbsp";
    }
        for($i=2; $i<=$a; $i++){
        echo " &nbsp";
    }
    for($d=$star; $d>=$a; $d-=1){
        echo "*";
    }
    echo "<br>";
    }
    $star=$_POST["jumlah"];
    for($a=$star;$a>0;$a--){
    for($b=$star;$b>=$a;$b--){
        echo "*";
    }
    for($i=2; $i<=$a; $i++){
        echo " &nbsp";
    }
    for($i=2; $i<=$a; $i++){
        echo " &nbsp";
    }
    for($a1=$star;$a1>=$a;$a1--){
        echo"*";
    }
    echo "<br>";
    }
}
?>