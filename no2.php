<?php

function findElement(&$arr, $n){
    // sum array dari baris ke 0
    $prefixSum = array_fill(0, $n, NULL);
    $prefixSum[0] = $arr[0];
    for ($i = 1; $i < $n; $i++)
        $prefixSum[$i] = $prefixSum[$i - 1] +
                                    $arr[$i];
 
    // sum array dari baris ke 0 dari belakang
    $suffixSum = array_fill(0, $n, NULL);
    $suffixSum[$n - 1] = $arr[$n - 1];
    for ($i = $n - 2; $i >= 0; $i--)
        $suffixSum[$i] = $suffixSum[$i + 1] +
                                    $arr[$i];

    for ($i = 1; $i < $n - 1; $i++)
        if ($prefixSum[$i] == $suffixSum[$i])
            return $arr[$i];
 
    return -1;
}
 
$arr = array( 1, 4, 2, 5 );
$n = count($arr);
echo findElement($arr, $n);