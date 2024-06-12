<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_rpl";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Get the raw POST data
  $data = json_decode(file_get_contents('php://input'), true);

  // Prepare and execute the SQL statement
  $stmt = $conn->prepare("INSERT INTO cart (item_id, name, price) VALUES (:item_id, :name, :price)");
  $stmt->bindParam(':item_id', $data['id']);
  $stmt->bindParam(':name', $data['name']);
  $stmt->bindParam(':price', $data['price']);

  if($stmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => 'Item added to cart']);
  } else {
    echo json_encode(['status' => 'error', 'message' => 'Failed to add item to cart']);
  }
} catch(PDOException $e) {
  echo json_encode(['status' => 'error', 'message' => 'Connection failed: ' . $e->getMessage()]);
}

$conn = null;
?>
