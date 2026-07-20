<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 寫入DB -->
    <h1>
    <?php

        //取得值
        $fullname=$_GET["fullname"];
        $gender=$_GET["gender"];
        $age=$_GET["age"];
        $phone=$_GET["phone"];
        $zipcode=$_GET["zipcode"];
        $address1=$_GET["address1"];
        $address2=$_GET["address2"];
        $address3=$_GET["address3"];
        $mailaddress=$_GET["mailaddress"];
        $username=$_GET["username"];
        $password=$_GET["password"];


        $pdo = new pdo('mysql:host=localhost:3307;dbname=2022_tablet_website','user','pi012HAL2023.');//DB接續
        $stmt = $pdo ->prepare('INSERT INTO customer_info (c_name, c_gender, c_age, c_phone, c_zipcode, c_address1, c_address2, c_address3, c_mailaddress, c_username, c_password) values(:fullname, :gender, :age, :phone, :zipcode, :address1, :address2, :address3, :mailaddress,:username, :password)');//SQL作成

        $stmt-> bindParam(':fullname',$fullname,PDO::PARAM_STR);//輸入的數字，改成數字字串
        $stmt-> bindParam(':gender',$gender,PDO::PARAM_INT);
        $stmt-> bindParam(':age',$age,PDO::PARAM_INT);//STR:文字  /  INT:數字
        $stmt-> bindParam(':phone',$phone,PDO::PARAM_STR);
        $stmt-> bindParam(':zipcode',$zipcode,PDO::PARAM_STR);
        $stmt-> bindParam(':address1',$address1,PDO::PARAM_STR);
        $stmt-> bindParam(':address2',$address2,PDO::PARAM_STR);
        $stmt-> bindParam(':address3',$address3,PDO::PARAM_STR);
        $stmt-> bindParam(':mailaddress',$mailaddress,PDO::PARAM_STR);
        $stmt-> bindParam(':username',$username,PDO::PARAM_STR);
        $stmt-> bindParam(':password',$password,PDO::PARAM_STR);

        $stmt-> execute();//執行
        $pdo=null;//切斷

        // echo"書き込みました";
        // echo '<br>';
        // echo '<a href="login.php">'."top".'</a>';
        require ("index2.html");
        echo "<script language=javascript>alert('書き込みました'); </script>";

    ?>
    </h1>
    
</body>
</html>