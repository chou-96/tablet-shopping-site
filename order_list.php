<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/destyle.css">
    <link rel="stylesheet" href="css/orderList.css">
    
    <!-- <script src="./js/.js" defer></script> -->
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