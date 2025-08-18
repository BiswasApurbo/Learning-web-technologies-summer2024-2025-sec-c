<?php
$num1 = 25;
$num2 = 42;
$num3 = 18;
if ($num1 >= $num2 && $num1 >= $num3) {
    echo "Largest number is: " . $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo "Largest number is: " . $num2;
} else {
    echo "Largest number is: " . $num3;
}
?>
