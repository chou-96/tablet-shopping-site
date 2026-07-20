<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

    $cart_id = $_POST["cart_id"];

    // echo $cart_id,"xdhxdrhxedh";

    $pdo = new pdo('mysql:host=localhost:3307;dbname=2022_tablet_website','user','pi012HAL2023.');//DB接續
    
    //刪除資料
    $stmt = $pdo ->prepare("DELETE FROM cart
                            WHERE cart_id=:cart_id");//SQL文

    $stmt->bindValue(':cart_id',$cart_id,PDO::PARAM_STR);

    $stmt-> execute();//執行
        
    $pdo=null;

    echo "<script language=javascript>alert('選択した商品が削除されました');history.back();</script>";

    exit();
    
?>