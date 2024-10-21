<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Conversion</title>
</head>
<body>

    <?php

/*      Casting in PHP is done with these statements:

        (string) - Converts to data type String
        (int) - Converts to data type Integer
        (float) - Converts to data type Float
        (bool) - Converts to data type Boolean
        (array) - Converts to data type Array
        (object) - Converts to data type Object
        (unset) - Converts to data type NULL

*/
    
    $x = 5;
    $x = (string) $x;
    var_dump($x);

    $x = "John";
    echo 'Hello $x';  // different between single '' and double "" quotes.

    $x = "John";
    echo "Hello $x";

// --------------------------------------------------------------------------

var_export("<br>");   // for spacing and all
var_export("<hr>");

//  Cast to String 👇👇👇👇 (string)

    $a = 5;       
    $b = 5.34;    
    $d = true;    
    $e = NULL;    

    //To verify the type of any object in PHP, use the var_dump() function:
    
    $a = (string) $a;
    $b = (string) $b;    
    $d = (string) $d;
    $e = (string) $e;

    var_dump($a);
    var_dump($b);
    var_dump($d);
    var_dump($e);

// --------------------------------------------------------------------------

var_export("<br>");   // for spacing and all
var_export("<hr>");

//  Cast to Integer 👇👇👇👇 (int)

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "25 kilometers"; // String
    $d = "kilometers 25"; // String
    $e = "hello"; // String
    $f = true;    // Boolean
    $g = NULL;    // NULL

    $a = (int) $a;
    $b = (int) $b;
    $c = (int) $c;
    $d = (int) $d;
    $e = (int) $e;
    $f = (int) $f;
    $g = (int) $g;

// NOTE ---> 👉 Note that when casting a string that starts with a number, the (int) function uses that number. If it does not start with a number, the (int) function convert strings into the number 0.

// --------------------------------------------------------------------------

var_export("<br>");   // for spacing and all
var_export("<hr>");

//  Cast to Float 👇👇👇👇 (Float)

    $a = 5;       // Integer
    $c = "25 kilometers"; // String
    $d = "kilometers 25"; // String
    $e = "hello"; // String
    $f = true;    // Boolean
    $g = NULL;    // NULL

    $a = (float) $a;
    $c = (float) $c;
    $d = (float) $d;
    $e = (float) $e;
    $f = (float) $f;
    $g = (float) $g;


// NOTE ---> 👉 casting a string that starts with a number, the (float) function uses that number. If it does not start with a number, the (float) function convert strings into the number "0" 👈

// --------------------------------------------------------------------------

var_export("<br>");   // for spacing and all
var_export("<hr>");

//  Cast to Boolean 👇👇👇👇 (bool)

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = 0;       // Integer
    $d = -1;      // Integer
    $e = 0.1;     // Float
    $f = "hello"; // String
    $g = "";      // String
    $h = true;    // Boolean
    $i = NULL;    // NULL

    $a = (bool) $a;
    $b = (bool) $b;
    $c = (bool) $c;
    $d = (bool) $d;
    $e = (bool) $e;
    $f = (bool) $f;
    $g = (bool) $g;
    $h = (bool) $h;
    $i = (bool) $i;

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    var_dump($f);
    var_dump($g);
    var_dump($h);
    var_dump($i);

// --------------------------------------------------------------------------

var_export("<br>");   // for spacing and all
var_export("<hr>");

//  Cast to Array 👇👇👇👇 (array)

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (array) $a;
    $b = (array) $b;
    $c = (array) $c;
    $d = (array) $d;
    $e = (array) $e;

    var_dump($a);

// --------------------------------------------------------------------------

var_export("<br>");   // for spacing and all
var_export("<hr>");

//  Cast to Array 👇👇👇👇 (array)

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (object) $a;
    $b = (object) $b;
    $c = (object) $c;
    $d = (object) $d;
    $e = (object) $e;

    //To verify the type of any object in PHP, use the var_dump() function:

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);

//  NOTE
// 1) When converting into objects, 
// most data types converts into a object with one property, named 👉 "scalar", 
// with the corresponding value.
// 2) "NULL" values converts to an empty object


// ------------------------

var_export("<br>");   // for spacing and all
var_export("<hr>");

    $a = array("Volvo", "BMW", "Toyota"); // indexed array
    $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array

    $a = (object) $a;
    $b = (object) $b;

    var_dump($a);


    ?>

    
</body>
</html>