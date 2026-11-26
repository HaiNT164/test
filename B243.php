<?php

$n=123456;
$arr=[];
// ========================================
function tachSo($n) {
    global $arr;
    while ($n>0) {
        $du=$n%10;
        array_push($arr,$du);
        $n = intdiv($n,10);
    }

    return $arr;
}
// =========================================
function timSoLN($arr) {
    $max=$arr[0];
    for ($i) {

    }
}
// =========================================
$arr=timSLN($n);

echo "<pre>";
print_r($arr);
echo "<pre>";