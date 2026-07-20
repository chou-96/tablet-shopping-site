<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php
    session_start();
//取得值
    $username=$_GET["username"];
    $pass=$_GET["password"];


    $pdo = new pdo('mysql:host=localhost:3307;dbname=2022_tablet_website','user','pi012HAL2023.');//DB接續
    $stmt = $pdo ->prepare("SELECT*FROM customer_info where c_username=:username and c_password=:pass");//SQL文

    $stmt->bindValue(':username',$username,PDO::PARAM_STR);
    $stmt->bindValue(':pass',$pass,PDO::PARAM_STR);
    
    $stmt-> execute();//執行

    // $stmt = $pdo ->prepare("SET NAMES 'UTF8'");
    // $stmt-> execute();
  
    $res = $stmt->fetch();
    if(!$res)
    {
        $mes="失敗";
        require ("login.php");
        echo "<script language=javascript>alert('アカウントまたはパスワードが違います。'); </script>";
        session_destroy();
        exit();
    }
    else
    {
        
        $i=1;
        foreach($res as $key => $val) {
            if($i%2==0){
                $i++;
                continue;
            }
            $i++;
            // echo "'$key' : '$res[$key]',<br/>";
            // echo "VALUE IS: $res[$key]<br/>";
        }
        
        $_SESSION['username']=$res['c_name'];
        $_SESSION['id']=$res['c_id'];
        setcookie('id',$res['c_id']);
        setcookie('username',urlencode($res['c_name']));
        echo "<script language=javascript>alert('WELCOME'); </script>";
        require ("index2.html");
        exit();
    } 
  
    $pdo=null;//切斷

    ?>
    </h1>
    <a href="login.php">top</a>

</body>
</html>