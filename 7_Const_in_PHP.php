<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Here we see const in php</title>
</head>
<body>
    
    <?php

//   The value cannot be changed during the script.
//    A valid constant name starts with a "letter" or "underscore" ( _ ) (no 💲"$" sign before the constant name).
    
// 👉👉👉👉 create "constant", use the "define()" function.
// Syntax ---> define(name, value);

//      "name" 👉: Specifies the name of the constant
//      "value" 👉: Specifies the value of the constant

// 👉 1️⃣ way using "define"

    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING;  // here "GREETING"  is our variable name

// ------------------------

var_export("<br>");   // for spacing and all
var_export("<hr>");

// 👉 2️⃣ way

    const MYCAR = "Volvo";
    echo MYCAR;

// ------------------------

var_export("<br>");   // for spacing and all
var_export("<hr>");

// 👉 3️⃣ way "Constant Arrays"

    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
    ]);
    echo cars[0];


// -----------------------------------------------------------

var_export("<br>");   // for spacing and all
var_export("<hr>");

// NOTE ----> Constants are Global 👉"Constants" are 👉"automatically global" and can be used across the entire script.

// 👇👇👇
// This example uses a constant inside a function, even if it is defined outside the function:

    define("GREETINGG", "Welcome to W3Schools.com!");

    function myTest() {
        echo GREETINGG;
    }

    myTest();






    ?>


</body>
</html>