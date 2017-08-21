<?php 

spl_autoload_register('system_libraries');

function system_libraries($class)
{
	$file = $class . '.php';

	include_once 'system/libraries/' . $file;
}