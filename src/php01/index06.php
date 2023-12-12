<?php

function text($width , $hight)
{
    return $width * $hight ;
}
function text1($width , $hight) 
{
    return $width * $hight /2 ;
}
function text2($top_width , $under_width ,$hight)
{
    return ($top_width + $under_width) * $hight /2 ;
}
echo (text(5, 5));
echo "<br />";
echo (text1(7 , 2));
echo "<br />";
echo (text2(3 , 5, 4));