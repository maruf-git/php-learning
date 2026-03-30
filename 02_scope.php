<?php
// global scope
$age = 24;
function myAge()
{
    // using age variable inside the function will not work
    echo "Variable age inside function is: $age"; // will display warning
}

myAge();
echo "Variable age is outside function is: $age";

function myTest()
{
    // local variable
    $mark = 90;
    echo "Variable mark inside function is: $mark";
}
myTest();
echo "Variable mark inside function is: $mark"; // warning accessing local variable


// Static Scope
// Normally, when a function finishes executing, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job. To achieve this, use the static keyword when you first declare the variable.
// Then, each time the function is called, that variable will have the value from the last time the function was called.
// Note: The variable is still local to the function.

function storeCount()
{
    // static scope
    static $count = 0;
    echo "count is now: $count";
    $count++;
}

storeCount();
storeCount();
storeCount();


// PHP global Keyword
// The global keyword is used to access a global variable from within a function.
// To do this, use the global keyword before the variables (inside the function):

// global scope
$invest = 50;
$profit = 30;

function totalAmount()
{
    global $invest, $profit;
    $invest += $profit;
}

totalAmount();
echo "total invest is now: $invest";


// PHP $GLOBALS Superglobal
// PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
// The example above can be rewritten like this:

function accessGlobals()
{
    $GLOBALS["invest"] = 1000;
}

accessGlobals();
echo "investment is now: $invest";
