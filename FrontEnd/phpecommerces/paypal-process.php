<?php
session_start();
include('../../BackEnd/config/db.php');

// Get JSON as input from PayPal response
$data = json_decode(file_get_contents("php://input"), true);

// Example processing from PayPal's response
$orderID = $data['orderID'];  // PayPal's order ID
$payerID = $data['payerID'];  // PayPal's payer ID
$details = json_encode($data['paymentDetails']);  // Payment details in JSON format
$totalAmount = $data['paymentDetails']['purchase_units'][0]['amount']['value'];  // Total amount from PayPal's payment details

// Insert the order into the orders table
$stmt = $pdo->prepare("INSERT INTO orders (order_id, payer_id, payment_details, amount, created_at) 
                       VALUES (?, ?, ?, ?, NOW())");
$stmt->execute([$orderID, $payerID, $details, $totalAmount]);

// Get the inserted order's ID (useful for linking order items)
$orderID = $pdo->lastInsertId();

// Insert each cart item into the order_items table
foreach ($_SESSION['cart'] as $item) {
    $productName = $item['prod_name'];  // Product name from the cart
    $price = $item['prod_price'];       // Product price from the cart
    $quantity = $item['prod_qty'];      // Product quantity from the cart

    // Prepare the SQL query to insert order items
    $stmt = $pdo->prepare("INSERT INTO order_items (order_id, product_name, price, quantity) 
                           VALUES (?, ?, ?, ?)");
    $stmt->execute([$orderID, $productName, $price, $quantity]);
}

// Optionally clear the cart after the order is processed
unset($_SESSION['cart']);

// Respond with success status
echo json_encode(['status' => 'success']);
?>
