<?php
include 'db.php';

$result = $conn->query("SELECT DISTINCT items.*, users.name, users.phone FROM items
JOIN users ON items.user_id = users.user_id
ORDER BY date_reported DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Lost and Found Items</title>
</head>
<body>
    <h2>All Reported Items</h2>
    <?php while($row = $result->fetch_assoc()) { ?>
        <div style="border:1px solid #ccc; margin-bottom:10px; padding:10px;">
            <h3><?php echo $row['type'] === 'lost' ? '🔍 Lost' : '🎒 Found'; ?>: <?php echo $row['title']; ?></h3>
            <p><strong>Description:</strong> <?php echo $row['description']; ?></p>
            <p><strong>Location:</strong> <?php echo $row['location']; ?></p>
            <p><strong>Date Reported:</strong> <?php echo $row['date_reported']; ?></p>
            <p><strong>Status:</strong> <?php echo $row['status']; ?></p>
            <p><strong>Reported By:</strong> <?php echo $row['name']; ?> (📞 <?php echo $row['phone']; ?>)</p>

            <?php if (!empty($row['image'])) { ?>
                <img src="<?php echo $row['image']; ?>" width="150"><br><br>
            <?php } ?>

            <?php if ($row['status'] == 'unclaimed') { ?>
                <a href="claim_item.php?id=<?php echo $row['item_id']; ?>">
                    <button>Mark as Claimed</button>
                </a>
            <?php } else { ?>
                <strong style="color: green;">✅ Already Claimed</strong>
            <?php } ?>
        </div>
    <?php } ?>
</body>
</html>
