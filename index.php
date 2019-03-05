<?php

$a = '2342343454743437580792233720368547434375807';
$b = '92233720368547434375807';
$result = "";
$remember = 0;

$MaxLen=max(strlen($a), strlen($b)); 

$a = str_pad($a, $MaxLen, '0', STR_PAD_LEFT); 
$b = str_pad($b, $MaxLen, '0', STR_PAD_LEFT); 

for ($i=$MaxLen-1; $i>=0; $i--) {
    $num1 = $a{$i};
    $num2 = $b{$i};
    
    if(empty($num1)) { 
        $sum = $num2;
    } elseif(empty($num2)) { 
        $sum = $num1;
    } elseif (empty($num1) || empty($num2)) {
        $sum = 0;
    } else {
        $sum = $num1 + $num2;
    }
    
    if ($remember === 1) {$sum+=1; $remember = 0;}
    if ($sum>9) $remember = 1;
    
    $result .= $sum%10;
}

if ($remember === 1) {$result .=1;}

echo strrev($result);
