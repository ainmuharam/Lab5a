<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab5a_q3</title>
</head>
<body>
    <?php
        // Function to calculate the area of a rectangle
        function calculateArea($length, $width) {
            return $length * $width;
        }

        $length = 4; 
        $width = 2;   
        $area = calculateArea($length, $width);
        echo "<p>The area of a rectangle with <strong>$length</strong> and width <strong>$width</strong> is <strong>$area</strong></p>";
    ?>
</body>
</html>
