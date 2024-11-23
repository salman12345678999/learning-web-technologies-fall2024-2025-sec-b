<?php
$arr=["Sea", "Hill", "Tree", "River", "Sun", "Moon"];
$searching="Sun";
echo "Natural Element: ";
print_r($arr);
echo "<br>";
$flag=0;
foreach($arr as $key=>$value){
    if($value==$searching){
        $flag=1;
        echo "The element is in index $key";
    }
    else{
        continue;
    }
}
if($flag!=1){
    echo "Not found";
}
?>