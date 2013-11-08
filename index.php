<?php

class HelloWorld() {

 public function __construct() {
 }
 
 public function hello() {
	echo 'hello travis';
 }
 
}

$test = new HelloWorld();
$test->hello;