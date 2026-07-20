<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/destyle.css">
    <link rel="stylesheet" href="css/login.css">
    
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
            $color = $_POST["color"];
            $ssd_size = $_POST["ssd_size"];

            // echo $p_name."<br>".$p_brand."<br>".$quantity."<br>".$color."<br>".$ssd_size;

            //確認必填 蘋果 微軟
            if($quantity==0 || $color==null || $ssd_size==0){
                echo "<script language=javascript>alert('全ての欄に記入が必要です');history.back(); </script>";
                exit();
            }

            $c_id=$_SESSION["id"];

            $pdo = new pdo('mysql:host=localhost:3307;dbname=2022_tablet_website','user','pi012HAL2023.');//DB接續
            
            //查詢有沒有資料了
            $stmt = $pdo ->prepare("SELECT cart.p_id, cart.quantity
                                    FROM cart, product_info
                                    WHERE cart.c_id=:c_id AND product_info.p_id=cart.p_id AND p_name=:p_name AND p_ssd=:p_ssd AND p_color=:p_color");//SQL文
            $stmt->bindValue(':c_id',$c_id,PDO::PARAM_STR);
            $stmt->bindValue(':p_name',$p_name,PDO::PARAM_STR);
            $stmt->bindValue(':p_ssd',$ssd_size,PDO::PARAM_STR);
            $stmt->bindValue(':p_color',$color,PDO::PARAM_STR);

            $stmt-> execute();//執行

            $res = $stmt->fetch();

            //如果有的話就更新購物車數量
            if($res!=null){
                $update_quantity = $res["quantity"] + $quantity;
                $p_id = $res["p_id"];

                $stmt = $pdo ->prepare('UPDATE cart SET quantity = :update_quantity
                                        WHERE c_id=:c_id AND p_id=:p_id AND p_color=:p_color');
                $stmt->bindValue(':update_quantity',$update_quantity,PDO::PARAM_STR);
                $stmt->bindValue(':c_id',$c_id,PDO::PARAM_STR);
                $stmt->bindValue(':p_id',$p_id,PDO::PARAM_STR);
                $stmt->bindValue(':p_color',$color,PDO::PARAM_STR);
                
                $stmt-> execute();//執行

                // echo "Update Success";
            }
            //如果沒有的話就寫入新資料
            else{
                
                //抓p_id
                $stmt = $pdo ->prepare("SELECT p_id
                                        FROM product_info
                                        WHERE p_name=:p_name AND p_ssd=:p_ssd");//SQL文
                $stmt->bindValue(':p_name', $p_name,PDO::PARAM_STR);
                $stmt->bindValue(':p_ssd', $ssd_size,PDO::PARAM_STR);

                $stmt-> execute();//執行

                $res = $stmt->fetch();
                $p_id = $res["p_id"];

                //輸入購物車
                $stmt = $pdo ->prepare('INSERT INTO cart(c_id, p_id, p_color, quantity)
                                        VALUES(:c_id, :p_id, :p_color, :quantity)');
                $stmt->bindValue(':c_id', $c_id,PDO::PARAM_STR);
                $stmt->bindValue(':p_id', $p_id,PDO::PARAM_STR);
                $stmt->bindValue(':p_color', $color,PDO::PARAM_STR);
                $stmt->bindValue(':quantity', $quantity,PDO::PARAM_STR);

                $stmt-> execute();//執行

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
            // require ("login.php");
            echo "<script language=javascript>window.location.href = './login.php';</script>";
            session_destroy();
            exit();
        }
    ?>

    </h1>
    
<br>
<a href="index.html">top</a>
</body>
</html>