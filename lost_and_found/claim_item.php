<?php
include 'db.php';

if (isset($_GET['id'])) {
    $item_id = $_GET['id'];
    $conn->query("UPDATE items SET status = 'claimed' WHERE item_id = $item_id");
}

header("Location: view_items.php");
exit();
