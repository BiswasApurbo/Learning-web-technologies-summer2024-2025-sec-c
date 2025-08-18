<?php
$num = 1780;
$vat = ($num * 15) / 100;
$total = $num + $vat;
echo "Amount: " . $num . "<br>";
echo "Vat (15%): " . $vat . "<br>";
echo "Total Amount: " . $total;
?>
