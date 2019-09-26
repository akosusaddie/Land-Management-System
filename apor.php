<?php
//displaying previous years in an item list/select
$currentyear= date('Y');
$year= $currentyear - 100;

// while(++$year <= $currentyear){
// echo $year . "<br />\n";
// }

do{
    echo $year . "<br />\n";
}
while(++$year <= $currentyear);































?>