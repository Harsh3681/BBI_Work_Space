<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array in php</title>
</head>
<body>

    <?php

//  👉👉👉👉 We can decleared the array 2 ways in "php" 
     
    $array1 = array("Jay", "Abhay", "Naresh", "Priya");
    var_dump($array1);
    
//  OR 
    var_export("<br>");   // for spacing and all
    var_export("<hr>");   
//  OR 

    $array2 = ["Jay", "Abhay", "Naresh", "Priya"];
    var_dump($array2);

// --------------------------------------------------------------

    var_export("<br>");   // for spacing and all
    var_export("<hr>");   

    $cars = [           // 👈👈👈 key value pairs "int"
        0 => "Volvo",
        1 => "BMW",
        2 =>"Toyota"
    ];

    echo $cars[1];

// --------------------------------------------------------------
    
// 👇👇👇 key value pairs "string"

    $myCar = [          
        "brand" => "ford",
        "model" => "XUV",
        "year" => 1817,
    ];

// --------------------------------------------------------------

// can declare the array first 👍, and then add items to it:
// along with that "multi type" key is allow.

    $myArr1 = [];

    $myArr1["brand"] = "ford";
    $myArr1[1] = "XUV";
    $myArr1["Name"] = "BMW";
    $myArr1[2] = "Thar";

// --------------------------------------------------------------
    
//  👇👇👇👇👇 different way to use "print" an "Array" 👇👇👇👇

    var_export("<br>");   
    var_export("<hr>");  

    echo '<h3>'; print_r($myArr1); echo '</h3>'; // 1st by "print_r"
var_export("<hr>");  

    echo var_export($myArr1) . "<br>";  // 2nd by "var_export()"
var_export("<hr>"); 

    echo "<pre>"; var_dump($myArr1); echo "</pre>"; // 3rd by "var_dump()"
var_export("<hr>"); 

    foreach ($myArr1 as $key=>$item){ // 4th by "foreach()"
        echo "$key => $item <br>";
    }
var_export("<hr>"); 

  

    ?>
    
</body>
</html>