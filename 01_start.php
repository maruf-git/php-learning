<?php
// check php version
echo phpversion();

// PHP keywords (e.g. if, else, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
// but variable is case sensitive
echo PHPVERSION(); // same output. case insensitive

// but variable is case sensitive
$color = "red";
echo "My car is $color";
echo "My car is $COLOR"; // undefined warning

/* this is
php multiline comment */

// Comments in the Middle of the Code
// The multi-line comment syntax can also be used to prevent execution of parts inside a code-line:
// Example:

$result = 5 +/* 15 */ +20;
echo "result is: $result";


// Use var_dump() to Get the Data Type
var_dump(5);
var_dump(5.0);
var_dump("5");
var_dump(true);
var_dump([2, "3", true, 5]);
var_dump(NULL);
// var_dump({"name":"maruf", "mark":90});
