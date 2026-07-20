<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Check</title>
    
    <script src="./js/login.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./js/slick.min.js"></script>
</head>
<body>
    <h1>
    <?php

    if(!isset($_SESSION))
    {
        session_start();
    }

    if(isset($_SESSION["id"])){

        $p_name = $_POST["p_name"];
        $p_brand = $_POST["p_brand"];
        $quantity = $_POST["quantity"];

        //確認必填 三星
        if($quantity==0){
            echo "<script language=javascript>alert('全ての欄に記入が必要です');history.back(); </script>";
            exit();
        }

        $c_id=$_SESSION["id"];

        $pdo = new pdo('mysql:host=localhost:3307;dbname=2022_tablet_website','user','pi012HAL2023.');//DB接續
        
        //查詢有沒有資料了
        $stmt1 = $pdo ->prepare("SELECT cart.p_id, quantity
                                FROM cart, product_info
                                WHERE cart.c_id=:c_id AND product_info.p_id=cart.p_id AND p_name=:p_name");//SQL文
        $stmt1->bindValue(':c_id',$c_id,PDO::PARAM_STR);
        $stmt1->bindValue(':p_name',$p_name,PDO::PARAM_STR);

        $stmt1-> execute();//執行

        $res = $stmt1->fetch();
        $p_id = $res["p_id"];

        //如果有的話就更新購物車數量
        if($res!=null){
            $update_quantity = $res["quantity"] + $quantity;

            $stmt2 = $pdo ->prepare('UPDATE cart set quantity = :update_quantity where c_id=:c_id and p_id=:p_id');
            $stmt2->bindValue(':update_quantity',$update_quantity,PDO::PARAM_STR);
            $stmt2->bindValue(':c_id',$c_id,PDO::PARAM_STR);
            $stmt2->bindValue(':p_id',$p_id,PDO::PARAM_STR);
            
            $stmt2-> execute();//執行

            // echo "Update Success";
        }
        //如果沒有的話就寫入新資料
        else{

            //抓p_id
            $stmt3 = $pdo ->prepare("SELECT p_id
                                    FROM product_info
                                    WHERE p_name=:p_name");//SQL文
            $stmt3->bindValue(':p_name', $p_name,PDO::PARAM_STR);

            $stmt3-> execute();//執行

            $res = $stmt3->fetch();
            $p_id = $res["p_id"];

            //輸入購物車
            $stmt4 = $pdo ->prepare('INSERT INTO cart(c_id,p_id,quantity) values(:c_id,:p_id,:quantity)');
            $stmt4->bindValue(':c_id',$c_id,PDO::PARAM_STR);
            $stmt4->bindValue(':p_id',$p_id,PDO::PARAM_STR);
            $stmt4->bindValue(':quantity',$quantity,PDO::PARAM_STR);

            $stmt4-> execute();//執行

            // echo "Write Success";
        }
        
        $pdo=null;

        // echo"<br>Quantity : $quantity<br><br>";
        echo "<script language=javascript>alert('カートに追加しました');history.back();</script>";
        // require ("cart_pay.php");
        exit();
        
    }
    else
    {
        echo "<script language=javascript>alert('未ログイン');</script>";
        require ("login.php");
        session_destroy();
        exit();
    }


    ?>
    </h1>
    


    
<br>
<a href="index.html">top</a>
</body>
</html>