<?php
define('TheConstant',5751);
// wrong 
//define('TheConstant',5758);
// wrong
// TheConstant = 123; 
$constant = 'constant';
echo "Value of TheConstant = {$constant('TheConstant')}";
//$echoecho ='echo';
echo "\n";
// echo strlen($echoecho);

$stringlength = 'strlen';

echo "Value of String Length = {$stringlength('TheConstant')}";
echo "\n";
echo "Value of String Length = {$stringlength($stringlength)}";