<?php
$array = [5,4,6,5,4,8,9,2,3,4,1,4,3,3,8,9,7,4,5,6,3];
arsort($array);
$count = array_count_values($array);
arsort($count);
$n = array();
$arr =[];
foreach ($count as $key => $count){
    for($i=0 ; $i<$count;$i++){
        array_push($arr,$key);
    }
}
echo '<pre>';
print_r($arr);