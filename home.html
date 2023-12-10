<?php

// $video = 'http://www.youtub.com/watch?v=ehjukiloll&start_radio-ljfvbytrf=fgyuhji';

// $parsdVideo = parse_url($video , PHP_URL_QUERY);

// //echo $parsdVideo;

// parse_str($parsdVideo , $output);

// print_r($output);

// echo $output['v'];

$med = 0;
$i = 0;
$j = 0;

function maximum($a, $b){
    return $a > $b ? $a : $b;
}
function minimum($a, $b){
    return $a < $b ? $a : $b;
}

function find(&$a, $n, &$b ,$m){
    global $med, $i ,$j;
    $min_index = 0;
    $max_index = $n;

    while ($min_index <= $max_index){
        $i = intval(($min_index + $max_index)/2); // 0
        $j = intval((($n + $m + 1)/2)-$i); // 2

        // echo $i;
        // echo $min_index;//0
        // echo $max_index;//1

        if($i < $n && $j > 0 && $b[$j-1] > $a[$i])
        $min_index = $i + 1; //0

        else if($i > 0 && $j < $m && $b[$j]< $a[$i - 1])
        $max_index = $i - 1; //2

        else{
            if ($i == 0)
            $med = $b[$j - 1];

            else if($j == 0)
             $med = $a[$i - 1];
            else 
            $med = maximum($a[$i - 1], $b[$j - 1]);
            break; 
        }
    }

    if(($n + $m)% 2 == 1)
    return $med;

    if($i == $n)
    return (($med + $b[$j]) / 2.0);
    
    if($j == $m)
    return (($med + $a[$i])/2.0);

    return(($med + minimum($a[$i],$b[$j]))/2.0);
}

$a = array(9,20);
$b = array(10, 13, 14);
$n = count($a);
$m = count($b);

if($n < $m)
echo ("The median is :" . find($a ,$n ,$b , $m));

else
echo("The median is :" . find($b, $m, $a, $n));