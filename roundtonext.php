<?php
# Дан тип инт входное надо округлить до 5
# надо проверить делиться ли число на 5
# надо прибавить число которое не достаеться
#
/*
Given an integer as input, can you round it to the next 5?
Examples:
input:    output:
0    ->   0
2    ->   5
3    ->   5
12   ->   15
21   ->   25
30   ->   30
etc.
Input may be any positive or negative integer (including 0).
You can assume that all inputs are valid integers.
*/

function roundtofive($n) {

	if($n%5===0)
	{
	return $n;
	}
	else{
		$n = $n + (5-$n%5);
return $n;
	}

}

echo roundtofive(0);

echo roundtofive(2);
echo roundtofive(22);
?>

