<?php
$x=17;
$y=63;
$z=55;

echo "Three given numbers: $x, $y, $z<br>";
if($x>$y && $x>$z){
    echo "The answer is $x";
}
elseif($y>$x && $y>$z){
    echo "The answer is $y";
}
else{
    echo "The answer is $z";
}
?>