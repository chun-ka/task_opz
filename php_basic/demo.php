<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
session_start();
if(isset($_SESSION['email'])){
        echo "chào mừng đến với trang demo <br>";
        echo "email của bạn là: ". $_SESSION['email']."<br>";
        echo "<a href='/logout.php'>Đăng xuất</a>";

}else{
    echo "chào mừng bạn đến với trang demo của tôi <br>";
    echo "<a href='demo_session.php'>Trờ lại trang đăng nhập</a>";
}
?>
</body>
</html>