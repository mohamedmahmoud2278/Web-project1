<?php
require 'db.php';

$customer_name = isset($_POST['name']) ? $_POST['name'] : null;
$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
$address = isset($_POST['address']) ? $_POST['address'] : null;
$size = isset($_POST['size']) ? $_POST['size'] : null;


if ($customer_name == null || $phone == null || $address == null || $size == null) {
    die("All fields are required.");
}


$sql = "INSERT INTO orders (customer_name, phone, address, size) 
        VALUES (?,?,?,?)";
$stmt = $conn->prepare($sql);


$stmt->bind_param("ssss", $customer_name, $phone, $address, $size);


if ($stmt->execute()) {
    echo "Your order has been successfully placed.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

