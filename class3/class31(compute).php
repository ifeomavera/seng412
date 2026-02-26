<style>
    body { 
        font-family: sans-serif; 
        background-color: #f4f4f4; 
        color: #444; 
        display: flex; 
        justify-content: center; 
        padding: 20px; 
    }
    .result-box { 
        background: white; 
        border-radius: 10px; 
        padding: 25px; 
        border-top: 10px solid #ffb6c1; 
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        width: 100%;
        max-width: 450px;
    }
    .item-line { 
        border-bottom: 1px solid #eee; 
        padding: 8px 0; 
        display: flex; 
        justify-content: space-between;
    }
    .total-section { 
        margin-top: 20px; 
        padding-top: 10px;
        font-weight: bold;
    }
    .highlight { color: #ff8da1; }
    .label { color: #888; font-size: 0.9em; }
</style>

<?php
// Get values
$name1 = $_POST['name1'];
$quantity1 = $_POST['quantity1'];
$price1 = $_POST['price1'];

$name2 = $_POST['name2'];
$quantity2 = $_POST['quantity2'];
$price2 = $_POST['price2'];

$name3 = $_POST['name3'];
$quantity3 = $_POST['quantity3'];
$price3 = $_POST['price3'];

$name4 = $_POST['name4'];
$quantity4 = $_POST['quantity4'];
$price4 = $_POST['price4'];

$name5 = $_POST['name5'];
$quantity5 = $_POST['quantity5'];
$price5 = $_POST['price5'];

$tax = $_POST['tax'];

// compute
$total1 = $quantity1 * $price1;
$total2 = $quantity2 * $price2;
$total3 = $quantity3 * $price3;
$total4 = $quantity4 * $price4;
$total5 = $quantity5 * $price5;

$subtotal = $total1 + $total2 + $total3 + $total4 + $total5;
$taxAmt = ($tax / 100) * $subtotal;
$grandTotal = $subtotal + $taxAmt;

// Styled Echo Section
echo "<div class='result-box'>";
    echo "<h3>Calculation Results</h3>";

    echo "<div class='item-line'><span class='label'>$name1 ($quantity1)</span> <span>$total1</span></div>";
    echo "<div class='item-line'><span class='label'>$name2 ($quantity2)</span> <span>$total2</span></div>";
    echo "<div class='item-line'><span class='label'>$name3 ($quantity3)</span> <span>$total3</span></div>";
    echo "<div class='item-line'><span class='label'>$name4 ($quantity4)</span> <span>$total4</span></div>";
    echo "<div class='item-line'><span class='label'>$name5 ($quantity5)</span> <span>$total5</span></div>";

    echo "<div class='total-section'>";
        echo "<div class='item-line'><span>Subtotal:</span> <span>$subtotal</span></div>";
        echo "<div class='item-line'><span>Tax Amount:</span> <span>$taxAmt</span></div>";
        echo "<div class='item-line' style='border:none; font-size: 1.2em;'>
                <span class='highlight'>Grand Total:</span> 
                <span class='highlight'>$grandTotal</span>
              </div>";
    echo "</div>";
echo "</div>";
?>