<?php

//Don't echo anything, will take to much time
function crack($hash){
//G00D LUCK
$counter = '00000';
$md5 = md5($counter);

while($counter != '99999' && $md5 != $hash){
$counter = str_pad(($counter + 1, strlen($counter), '0', STR_PAD_LEFT);
$md5 = md5($counter);
}
return $counter;

}
