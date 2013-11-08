<?php

class testTest() {

 public function __construct() {
 }
 
 public function hello() {
	echo 'hello travis';
 }
 
}

$test = new testTest();
$test->hello;