<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
    <?php
        echo "<h2>Assignment Task 1 </h2><br>";
        $length = 10;
        $width  = 5;

        $area = $length * $width;
        $perimeter = 2 * ($length + $width);

        echo "Length of Rectangle: " . $length . "<br>";
        echo "Width of Rectangle: " . $width . "<br>";
        echo "Area of Rectangle: " . $area . "<br>";
        echo "Perimeter of Rectangle: " . $perimeter . "<br>";


        echo "<h2>Assignment Task 2 </h2><br>";
        $vat_rate = 0.15;
        $price = 750;
        $vat = $price * $vat_rate;
        $total_price = $price + $vat;

        echo "Price: " . $price . "<br>";
        echo "VAT (15%): " . $vat . "<br>";
        

        echo "<h2>Assignment Task 3 </h2><br>";
        $num = 10;
        echo "Number: " . $num . "<br>";

        if ($num % 2 == 0) {
            echo $num . " is an even number.<br>";
        } else {
            echo $num . " is an odd number.<br>";
        }

        echo "<h2>Assignment Task 4 </h2><br>";

        $num1 = 150;
        $num2 = 244;
        $num3 = 308;

        echo "Number1 = " . $num1 . "<br>";
        echo "Number2 = " . $num2 . "<br>";
        echo "Number3 = " . $num3 . "<br><br>";

        if ($num1 > $num2 && $num1 > $num3) {
            echo " The largest number" . $num1 . "<br>";
        } elseif ($num2 > $num1 && $num2 > $num3) {
            echo " The largest number" . $num2 . "<br>";
        } else {
            echo " The largest number" . $num3 . "<br>";
        }

        echo "<h2>Assignment Task 5 </h2><br>";
        $num_print = 10;

        echo "The Odd numbers between 10 to 100 are: ";
        while ($num_print <= 100) {
            if($num_print %2!=0){
                echo $num_print . " ";
            }

            $num_print++;
        }

        echo "<h2>Assignment Task 6 </h2><br>";
        $Array1 = [1,2,3,4,5];
        $search_element = 3;
        $length = count($Array1);

        echo "Array: [" . $Array1[0] . ", " . $Array1[1] . ", " . $Array1[2] . ", " . $Array1[3] . ", " . $Array1[4] . "]<br>";
        echo "Searching element: " . $search_element . "<br><br>";
        for($i = 0; $i<$length; $i++){
            if($Array1[$i] == $search_element){
                echo $search_element ." found at index: " . $i . "<br>";
                break;
            }
        }

        echo "<h2>Assignment Task 7 </h2><br>";
        $char = 'A';

        for ($i = 1; $i <= 3; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }

        for ($i = 3; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo $j . " ";
            }
            echo "<br>";
        }
        
        for ($i = 1; $i <= 3; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $char . " ";
                $char++;
            }
            echo "<br>";
        }

        echo "<h2>Assignment Task 8 </h2><br>";
        $array = [[1, 2, 3, 'A'],
                    [1, 2, 'B', 'C'],
                    [1, 'D', 'E', 'F']
                ];

        for ($i = 0; $i < count($array); $i++) {
            for ($j = 0; $j < count($array[$i]); $j++) {
                if (is_numeric($array[$i][$j])) {
                    echo $array[$i][$j] . " ";
                }
            }
            echo "<br>";
        }

        for ($i = 0; $i < count($array); $i++) {
            for ($j = 0; $j < count($array[$i]); $j++) {
                if (ctype_alpha($array[$i][$j])) {
                    echo $array[$i][$j] . " ";
                }
            }
            echo "<br>";
        }
    ?>

</body>
</html>