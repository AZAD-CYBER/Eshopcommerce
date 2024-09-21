<?php
require "./include/db.php";
header("Access-Control-Allow-Origin: *");

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $stmt = "SELECT name FROM category WHERE status = 1;";
    
    if ($result = $conn->query($stmt)) {
        $arr = array();
        
        while ($row = $result->fetch_assoc()) { // Use fetch_assoc for better clarity
            $arr[] = $row["name"]; // Directly push to array
        }
        
        echo json_encode(["categories" => $arr]);
    } else {
        echo json_encode(["error" => "Something went wrong"]);
    }
} else {
    echo json_encode(["error" => "Invalid request method"]);
}