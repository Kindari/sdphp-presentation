<?php

$person = $_GET['person'];
switch($person)
{
	case 'John':
		echo 'Hey John!';
	case 'Eric':
		echo 'Hey Eric!';
		break;
	case 'William':
		echo 'I for one welcome our new overlord';
		break;
	default:
		echo "Hello, {$person}!";
}