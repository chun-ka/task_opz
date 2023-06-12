<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>
<h1>Add User</h1>
<form method="POST" action="/controller.php?action=add">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br>
    <label for="age">Age:</label>
    <input type="text" name="age" id="age" required><br>
    <label for="gender">Gender:</label>
    <input type="text" name="gender" id="gender" required><br>
    <label for="address">Address:</label>
    <input type="text" name="address" id="address" required><br>
    <label for="position">Position:</label>
    <input type="text" name="position" id="position" required><br>
    <input type="submit" value="Add">
</form>
</body>
</html>

