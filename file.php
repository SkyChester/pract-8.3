<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $c = (int) $_POST["c"];
    $d = (int) $_POST["d"];

    $sum = $c + $d;
    $product = $c * $d;
    $difference = $c - $d;
    $quotient = $c / $d;

    echo "Сума: $sum<br>";
    echo "Добуток: $product<br>";
    echo "Різниця: $difference<br>";
    echo "Частка: $quotient<br>";
  }
?>