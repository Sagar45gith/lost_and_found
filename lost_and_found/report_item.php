<!DOCTYPE html>
<html>
<head>
    <title>Report Lost/Found Item</title>
</head>
<body>
    <h2>Report an Item</h2>
    <form action="save_item.php" method="post" enctype="multipart/form-data">
        <label>Your Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" required><br><br>

        <label>Title:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Description:</label><br>
        <textarea name="description" required></textarea><br><br>

        <label>Type:</label><br>
        <select name="type">
            <option value="lost">Lost</option>
            <option value="found">Found</option>
        </select><br><br>

        <label>Location:</label><br>
        <input type="text" name="location" required><br><br>

        <label>Image (optional):</label><br>
        <input type="file" name="image"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
