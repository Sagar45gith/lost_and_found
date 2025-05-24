<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$title = $_POST['title'];
$description = $_POST['description'];
$type = $_POST['type'];
$location = $_POST['location'];
$date = date("Y-m-d");

// Save user
$conn->query("INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')");
$user_id = $conn->insert_id;

// Handle image
$image_path = "";
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $image_path = "uploads/" . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
}

// Save item
$conn->query("INSERT INTO items (title, description, type, location, date_reported, status, image, user_id)
VALUES ('$title', '$description', '$type', '$location', '$date', 'unclaimed', '$image_path', $user_id)");

echo "<h3 style='color: green;'>✅ Item submitted successfully!</h3>";
echo "<a href='view_items.php'><button style='margin-top:10px;'>🔍 View All Reported Items</button></a>";
;
?>
