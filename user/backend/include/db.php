<?php
$conn = new mysqli("localhost", "root", "", "eshop");

if ($conn->connect_errno) {
    echo json_encode(["error" => $conn->connect_error]);
    exit();
}