<?php
echo "Enter a number";
$number = (int)readline();

if($number > 0){
    echo " The Number is Positive.";

}elseif($number < 0){
    echo "The number is negative.";
}else{
    echo "The number is zero.";
}


