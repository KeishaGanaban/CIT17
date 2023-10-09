<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntax Overview</title>
</head>
<body>
    <?php
        echo "Comment<br>";
        # This is a comment
        # This only comments one line
        //This is a comment too. Each style comments only 
        print "An example with single line comments";

        echo "<br>Multi-lines printing<br><br>"
        #First Example
        print <<<END
        This uses the "here document" syntax to output
        multiple lines with $variable interpolation. Note
        that the here document terminator must appear on a
        line with just a semicolon no extra whitespace!
        END;
        #Second Example
        print "This spans
        multiple lines. The newlines will be
        output as well";
    ?>
</body>
</html>