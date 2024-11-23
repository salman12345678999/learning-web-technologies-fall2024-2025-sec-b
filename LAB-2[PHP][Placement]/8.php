<?php
$arr = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];
for ($p=0;isset($arr[$p]); $p++) {
    for ($q=0;isset($arr[$p][$q]); $q++) {
        if ((int)$arr[$p][$q] == $arr[$p][$q]) {
            echo $arr[$p][$q] . " ";
        }
    }
    echo "<br>";
}
echo "<br>";
for ($p=0;isset($arr[$p]); $p++) {
    for ($q=0;isset($arr[$p][$q]); $q++) {
        if (!((int)$arr[$p][$q] == $arr[$p][$q])) {
            echo $arr[$p][$q] . " ";
        }
    }
    echo "<br>";
}
?>

