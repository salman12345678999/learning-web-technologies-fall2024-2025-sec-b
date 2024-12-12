<?php
$marketData = file_get_contents('Task-1.xml');
$markets = new SimpleXMLElement($marketData);
echo $markets -> market[0]->name;
?>