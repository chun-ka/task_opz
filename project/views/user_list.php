<?php
echo include 'header.php';
?>
<body>
<h1>User List</h1>
<a href="/project/views/add_user.php" class="btn btn-primary">Add User</a>

<?php if (!empty($users)): ?>
    <table class="table">
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Position</th>
            <th colspan="2" style="padding-left:150px">Action</th>
        </tr>
        <?php $i = 1;
        foreach ($users as $user): ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['age']; ?></td>
                <td><?php echo $user['gender']; ?></td>
                <td><?php echo $user['address']; ?></td>
                <td><?php echo $user['position']; ?></td>
                <td><a class="btn btn-warning" href="/project/controller.php?action=edit&id=<?php echo $user['id']; ?>">Edit</a></td>
                <td><a  class="btn btn-danger" href="/project/controller.php?action=delete&id=<?php echo $user['id']; ?>">Delete</a></td>

            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p>No users found.</p>
<?php endif; ?>
<?php
echo include 'footer.php';

?>
</body>

</html>
