
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>

    <?php 

/*
        PHP supports the following data types:

        String
        Integer
        Float (floating point numbers - also called double)
        Boolean
        Array
        Object
        NULL
        Resource

*/


// 👉👉👉👉👉 "var_dump()" function returns the data type and the value




        $myName = "Start with php !!!";  // here we can give any name to variable Ex.🫸 myName
        echo $myName;

// 👉👉👉 Here is below "normal data type" in php (contains one value)
        
        $string = "Nothings";  // 👈 here we can give any name instead of 👉 "string", "int","float","bool"
        $int = 1234;
        $float = 91.3;
        $bool = true;
        
//  OR  👇👇👇

        $x = $y = $z = "Fruit";   // same value to multiple variables

        echo " $string";
        echo $float;   // without " " <--- also work
        echo "\n";

// 👉👉👉  1 line print multiple variable ue below 👇👇👇

        echo $string . " " . $int ." ". $float ." ". $bool;
        
        var_dump([2, 3, 56]);
        
    ?>
    
</body>
</html>