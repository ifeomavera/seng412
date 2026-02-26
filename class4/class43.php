<?php

$product_prices = array(
    "Apple" => 0.99,
    "Banana" => 0.59,
    "Orange" => 0.79,
    "Grapes" => 2.99,
    "Mango" => 1.49
);

foreach ($product_prices as $product => $price) {
    echo "The price of $product is $$price.<br/><br/>";
}

$avg_price = array_sum($product_prices) / count($product_prices);
echo "The average price of the products is $$avg_price.<br/><br/>";
?>  