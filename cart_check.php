<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

    $c_id = $_SESSION["id"];;

    // echo $cart_id,"xdhxdrhxedh";

    $pdo = new pdo('mysql:host=localhost:3307;dbname=2022_tablet_website','user','pi012HAL2023.');//DB接續
    
    //刪除資料 (本來應該要加入訂單)
    $stmt = $pdo ->prepare("DELETE FROM cart
                            WHERE c_id=:c_id");//SQL文

    $stmt->bindValue(':c_id',$c_id,PDO::PARAM_STR);

    $stmt-> execute();//執行
        
    $pdo=null;

    echo "<script language=javascript>alert('注文できました');</script>";
    
    echo "<script type='text/javascript'>
            window.location.href = './index.html';
        </script>";
    
    exit();
    
?>