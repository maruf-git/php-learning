 <?php

    // loops
    // while loop
    // do while loop
    // for loop
    // for each loop


    // while
    // while (condition) {
    //   // code to be executed repeatedly as long as condition is true
    // }

    $count = 1;
    while ($count <= 10) {
        echo "$count : hello world <br>";
        $count++;
    }

    // break and continue are same as before

    // do while
    // do {
    //     // code to be executed
    // } while (condition);



    // for loop
    // for (initialization; condition; increment) {
    //     // code to be executed
    // }

    for ($cnt = 1; $cnt <= 5; $cnt++) {
        echo "$cnt: Hello Bangladesh <br>";
    }


    //  PHP foreach Loop on Indexed Arrays
    // The PHP foreach loop - Loops through a block of code for each element in an array or each property in an object.

    $colors = array("red", "green", "blue");
    print_r($colors);
    echo (var_dump($colors));
    echo "<br>";

    foreach ($colors as $color) {
        echo "$color <br>";
    }

    // PHP foreach Loop on Associative Arrays
    // The array above is an indexed array, where the first item has the key 0, the second has the key 1, and so on.
    // Associative arrays are different, associative arrays use named keys, and when looping through them, you might also want to keep the key name as well as the value.
    // This is done by specifying both the key and value in the foreach loop, like this:


    $members = array("maruf" => "24", "rifat" => "25", "shifat" => "26");
    echo (var_dump($members));
    foreach ($members as $key => $value) {
        echo "$key: $value<br>";
    }


    // reference in foreach loop
    foreach ($colors as &$color) {
        if ($color == "blue") $color = "pink";
        echo "$color <br>";
    }

    var_dump($colors); // changes also happens in the main array . it blue is now changed to pink
