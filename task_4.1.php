<?php
if ($argc === 2)
{
	$height = $space = $argv[1];
	$q = 0;
	for ($i = 0; $i < $height; $i++) {
	    for ($k = --$space; $k > 0; $k--) {
	        echo '  ';
	    }
	    for($j = 0; $j <= $q; $j++) {
	        echo '* ';
	    }
	    $q = $q + 2;
	    echo PHP_EOL;
	}
	for ($i = $height - 2; $i >= 0; $i--)
	{
	    $space++;
	    $q = $q - 2;
	    for ($k = 0; $k < $space; $k++)
	    {
	        echo '  ';
	    }
	    for($j = $q; $j > 1; $j--)
	    {
	        echo '* ';
	    }
	    echo PHP_EOL;
	}
}
else
{
	echo "Вы ввели не корректно длину стороны ромба. Попробуйте снова =)";
}