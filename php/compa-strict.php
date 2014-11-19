<?php


$myVar=2;

if($myVar=="2") { echo ' content    ';} //true
if($myVar==="2") { echo ' pas content ' ;}//false
if($myVar==true) { echo ' comment sa? ';}//true
if($myVar===true) { echo ' je sais pas ';}//false

?>