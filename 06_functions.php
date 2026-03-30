<?php

// function functionName($parameter1, $parameter2) {
//   // code to be executed
//   return $value; // optional
// }


// Variable Number of Parameters
function sumMyNumbers(...$x)
{
    $sum = 0;
    $len = count($x);
    for ($i = 0; $i < $len; $i++) {
        $sum += $x[$i];
    }
    return $sum;
}

$result = sumMyNumbers(1, 2, 3, 4, 5);
echo "sum is: $result";
// The variadic argument must be the last argument:
