<?php

function __autoload($class){
	include "core/$class.php";
}