<!DOCTYPE html>
<html>
<head>
    <title>Form PHP</title>
    <style>
        .err{
            color: red;
        }
    </style>
</head>
<body>
    <?php 
    $nameErr=$emailErr=$genderErr=$commentErr=$websiteErr='';
    $name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"])){
        $nameErr="Name is required";
    }else{
        $name = checkValidate($_POST["name"]);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            $nameErr="Chỉ cho phép chứa chữ cái và khoảng trắng";
            $name='';
        }
    }
    if(empty($_POST["email"])){
        $emailErr="email is required";
    }else{
        $email=checkValidate($_POST["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailErr="Email không đúng định dạng";
            $email="";
        }
    }
    $website=checkValidate($_POST["website"]);
    if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
        $websiteErr="website không đúng";
        $website="";
    }
    $comment=checkValidate($_POST["comment"]);
    if(empty($_POST["gender"])){
        $genderErr="gender is required";
    }else{
        $gender=checkValidate($_POST["gender"]);
    }
}
function checkValidate($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
    ?>
    <h2>Form PHP đơn giản</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Họ và tên:</label>
        <input type="text" id="name" name="name" value="<?php echo $name;?>">
        <span class="err">* <?php echo $nameErr;?></span>
        <br>
        <br>

        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email"  value="<?php echo $email;?>">
        <span class="err">* <?php echo $emailErr;?></span>

        <br>
        <br>
        <label for="website">Website:</label>
        <input type="text" id="website" name="website"  value="<?php echo $website;?>">
        <span class="err">* <?php echo $websiteErr;?></span>

        <br>
        <br>
        <label for="comment">Comment:</label>
        <textarea name="comment" id="comment" cols="30" rows="5" ><?php echo $comment?></textarea>
        <br>
        <br>
        <label for="gender">Gender</label>
        <input type="radio" id="gender" name="gender" value="Male" <?php if($gender=="Male"){echo "checked";}?>>Male
        <input type="radio" id="gender" name="gender" value="Female" <?php if($gender=="Female"){echo "checked";}?>>Female
        <input type="radio" id="gender" name="gender" value="Other" <?php if($gender=="Other"){echo "checked";}?>>Other
        <span class="err">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" value="Submit">
    </form>
    <br>

    <br>
</body>
</html>
<?php

echo "<h3>Dữ liệu bạn đã nhập vào:<h3/>";
echo "name: $name <br>";
echo "email: $email <br>";
echo "website: $website <br>";
echo "gender: $gender <br>";
echo "comment: $comment <br>";
?>

