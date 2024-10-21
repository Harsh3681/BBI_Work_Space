<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>var_export() function</title>
</head>
<body>


    <?php 

//  var_export() 👇👇👇 function outputs or returns structured information about a variable on web page.
//  means here we can mention any kind of html which will help us to beautified our "WebPage"


    $a = 32;
    echo var_export($a) . "<br>";

    $b = "Hello world!";
    echo var_export($b) . "<br>";

    $c = 32.5;
    echo var_export($c) . "<hr>";

    $d = array("red", "green", "blue");
    echo var_export($d) . "<br>";

    $e = array(32, "Hello world!", 32.5, ["red", "green", "blue"]);
    echo var_export($e) . "<br>";


    ?>



</body>
</html>