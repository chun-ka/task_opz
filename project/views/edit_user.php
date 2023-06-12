<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
<h1>Edit User</h1>
<a href="/project/controller.php">Quay lại</a>
<?php if (!empty($user)): ?>
<form method="POST" action="/controller.php?action=edit&id=<?php echo $user['id']; ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo $user['name']; ?>" required><br>
    <label for="age">Age:</label>
    <input type="text" name="age" id="age" value="<?php echo $user['age']; ?>" required><br>
    <label for="gender">Gender:</label>
    <input type="text" name="gender" id="gender" value="<?php echo $user['gender']; ?>" required><br>
    <label for="address">Address:</label>
    <input type="text" name="address" id="address" value="<?php echo $user['address']; ?>" required><br>
    <label for="position">Position:</label>
    <input type="text" name="position" id="position" value="<?php echo $user['position']; ?>" required><br>
    <input type="submit" value="Update">
</form>
<?php else: ?>
    <p>Không tim thấy đối tượng chỉnh sửa.</p>
<?php endif; ?>
</body>
</html>

