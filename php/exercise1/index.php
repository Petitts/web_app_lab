<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Szereg Maclaurina</title>
    </head>
    <body>
    <form action="" method="post">
        <legend>x:</legend>
        <input type="text" name="x">
        <legend>n:</legend>
        <input type="text" name="n">
        <input type="submit">
    </form>
    </body>
</html>
<?php
function power($n){
    $result = 1;
    for ($i = 1; $i < $n; $i++){
        $result *= $i;
    }
    return $result;
}

$n = $_POST['n'];
$x = $_POST['x'];
$sum = 0;
for ($i = 0; $i < $n; $i++){
    $counter = $x ** (2 * $i);
    $denominator = power(2 * $n);
    $sum += $counter/$denominator;
}
echo $sum;
?>