<?php
for($p=1;$p<=3;$p++){
    for($q=1;$q<=$p;$q++){
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";
for($p=3;$p>=1;$p--){
    for($q=1;$q<=$p;$q++){
        echo "$q ";
    }
    echo "<br>";
}
echo"<br>";
$arr=array("A", "B", "C", "D", "E", "F");
$index=0;
        for($p=1;$p<=3;$p++){
            for($q=1;$q<=$p;$q++){
        echo $arr[$index++]." ";
    }
    echo"<br>";
}
?>