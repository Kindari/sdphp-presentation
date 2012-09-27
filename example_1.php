<?php

if ($_GET['number'] > 5)
{
	echo "Hooray!";
}
elseif ( $_GET['number'] == 5)
{
	echo "Indifferent";
}
else
{
	echo "Boo :/";
}
