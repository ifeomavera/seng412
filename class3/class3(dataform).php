<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SENG 412 Calculation Form</title>
    <style>
        /* General Page Styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4; /* Light gray background */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        /* Container for the Form */
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            border-top: 8px solid #ffb6c1; /* Light Pink accent */
            width: 90%;
            max-width: 800px;
        }

        h2 {
            color: #4a4a4a; /* Dark Gray */
            text-align: center;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Form Row Layout */
        .form-row {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            align-items: center;
            padding-bottom: 10px;
            border-bottom: 1px solid #eeeeee;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        label {
            font-size: 0.85rem;
            font-weight: bold;
            color: #777; /* Gray labels */
            margin-bottom: 5px;
        }

        input {
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 6px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        input:focus {
            border-color: #ffb6c1; /* Pink focus border */
        }

        /* Footer Section (Tax & Button) */
        .form-footer {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
        }

        button {
            background-color: #ffb6c1; /* Pink */
            color: white;
            border: none;
            padding: 12px 30px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff9aa2; /* Darker Pink */
        }

        button:active {
            transform: scale(0.98);
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Calculation Form</h2>
    <form action="class31(compute).php" method="post">
        
        <div class="form-row">
            <div class="input-group">
                <label>Item Name</label>
                <input type="text" name="name1" placeholder="e.g. Laptop">
            </div>
            <div class="input-group">
                <label>Quantity</label>
                <input type="number" name="quantity1">
            </div>
            <div class="input-group">
                <label>Price</label>
                <input type="number" name="price1" step="0.01">
            </div>
        </div>

        <div class="form-row">
            <div class="input-group">
                <label>Item Name</label>
                <input type="text" name="name2">
            </div>
            <div class="input-group">
                <label>Quantity</label>
                <input type="number" name="quantity2">
            </div>
            <div class="input-group">
                <label>Price</label>
                <input type="number" name="price2" step="0.01">
            </div>
        </div>

        <div class="form-row">
            <div class="input-group">
                <label>Item Name</label>
                <input type="text" name="name3">
            </div>
            <div class="input-group">
                <label>Quantity</label>
                <input type="number" name="quantity3">
            </div>
            <div class="input-group">
                <label>Price</label>
                <input type="number" name="price3" step="0.01">
            </div>
        </div>

        <div class="form-row">
            <div class="input-group">
                <label>Item Name</label>
                <input type="text" name="name4">
            </div>
            <div class="input-group">
                <label>Quantity</label>
                <input type="number" name="quantity4">
            </div>
            <div class="input-group">
                <label>Price</label>
                <input type="number" name="price4" step="0.01">
            </div>
        </div>

        <div class="form-row">
            <div class="input-group">
                <label>Item Name</label>
                <input type="text" name="name5">
            </div>
            <div class="input-group">
                <label>Quantity</label>
                <input type="number" name="quantity5">
            </div>
            <div class="input-group">
                <label>Price</label>
                <input type="number" name="price5" step="0.01">
            </div>
        </div>

        <div class="form-footer">
            <div class="input-group" style="max-width: 200px;">
                <label for="tax">Tax (%)</label>
                <input type="number" name="tax" placeholder="0">
            </div>
            <button type="submit">Calculate Total</button>
        </div>
    </form>
</div>

</body>
</html>