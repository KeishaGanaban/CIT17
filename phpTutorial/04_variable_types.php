<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Types</title>
</head>
<body>
    <?php
        echo "Integers<br>";
        $int_var = 123;
        print $int_var;

        echo "<br><br>Doubles<br>";
        $float_1 = 2.28;
        $float_2 = 2.21;
        $double_var = $float_1 + $float_2;
        print $double_var;

        echo"<br><br>Boolean<br>";
        if ($int_var = 0)
            print("This will always print<br>");
        else
            print("This will never print<br>");

        echo"<br><br>Null<br>";
        $null_var = NULL;
        if ($null_var = TRUE)
            print("The null variable is equal to false in boolean");
        else
            print("'null_var' is not equal to 'NULL'");

        echo "<br><br>String<br>";
        $string_1 = "This is a string in double quotes";
        $string_2 = 'This is a somewhat longer, single quoted string';
        $string_39 = "This string has thirty-ine characters";
        $string_0 ="" //This string has zero characters
        print("$string_1<br>$string_2<br>$string_39<br>")
        
    ?>
</body>
</html>