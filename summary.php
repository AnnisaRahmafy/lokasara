<?php
session_start();

// Periksa apakah data order tersedia
if (!isset($_SESSION['order_data'])) {
    header("Location: book.php");
    exit;
}

$order = $_SESSION['order_data'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            line-height: 1.6;
        }
        .summary-container {
            max-width: 600px;
            margin: auto;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .btn {
            display: block;
            width: 100%;
            margin-top: 20px;
            padding: 10px;
            background: #28a745;
            color: #fff;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <div class="summary-container">
        <h1>Order Summary</h1>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($order['name']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($order['email']); ?></p>
        <p><strong>Phone:</strong> <?php echo htmlspecialchars($order['phone']); ?></p>
        <p><strong>Address:</strong> <?php echo htmlspecialchars($order['address']); ?></p>
        <p><strong>Destination:</strong> <?php echo htmlspecialchars($order['location']); ?></p>
        <p><strong>Guests:</strong> <?php echo htmlspecialchars($order['guests']); ?></p>
        <p><strong>Arrivals:</strong> <?php echo htmlspecialchars($order['arrivals']); ?></p>
        <p><strong>Leaving:</strong> <?php echo htmlspecialchars($order['leaving']); ?></p>
        <button class="btn" onclick="printOrder()">Print Order</button>
    </div>

    <script>
        function printOrder() {
            window.print();
        }
    </script>
</body>
</html>
