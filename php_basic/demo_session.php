
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
    <h2>Tiến hành đăng nhập</h2>
    <p>Email:</p>
    <input type="text" name="email">
    <p>password</p>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Đăng nhập" name="submit">
</form>
<?php
session_start();
if (isset($_POST['submit'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    if ($email == 'trungnoo196@gmail.com' && $password == 123456) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('Location:demo.php');
    } else {
        echo "tài khoản và mật khâu không đúng";
    }
}
?>
</body>
</html>