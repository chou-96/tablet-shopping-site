
<?php
  if(!isset($_SESSION))
  {
    session_start();
  }

  if(!isset($mes))
  {
      // $mes="";
  }

  if(isset($_SESSION["id"]))
  {
    $id=$_SESSION["id"];
    $username=$_SESSION['username'];
  }
  else
  {
    $username="未ログイン";
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/destyle.css">
    <link rel="stylesheet" href="css/login.css">
   
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="./css/slick-theme.css">
    
    <script src="./js/login.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./js/slick.min.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="./js/zipcode_api.js"></script>
    
</head>
<body>

    <!-- <h1><?=$mes?></h1> -->
    <!-- <h1><?=$username?></h1> -->
  
    <div class="system_name">
    <h2><?=$username?></h2>
    </div>
    
    <div class="login_page">
      <div id="container1">

        <div class="login">  
          
          <h3>ログイン</h3>
         

          <form class="login_form" action="logincheck.php" method="get">
            <input type="text" id="username" name="username" placeholder="アカウント" required>
            <div class="tab"></div>
            <input type="password" id="password" name="password" placeholder="パスワード" required>
            <div class="tab"></div>
            <input type="submit" value="登入" class="submit">
          </form>  
          
          <h4 onclick="show_hide()">新規登録はこちら</h4>

          <div class="login_down">
            <ul>
              <!-- <li><h5 onclick="show_hide()">新規登録はこちら</h5></li> -->
              <li><h5 onclick="jump()"><a href="logout.php">ログアウト</a></h5></li>
              <li><h5><a class="BackToHomePage" href="index2.html">ホームページ</a></h5></li>
            </ul>
          </div>
          
        </div><!-- login end-->
      </div><!-- container1 end-->
    </div><!-- login_page end-->
    
    <div class="signup_page">
   
      <div id="container2">

        <div class="signup">  
          
          <h3>アカウントを作成</h3>

          <form class="signup_form" action="write.php">
            <input type="text" id="fullname" name="fullname" placeholder="氏名" required>
            <div class="tab"></div>
            <span>性別
              男
              <input type="radio" id="gender" name="gender" value="1" required>
              女
              <input type="radio" id="gender" name="gender" value="0" required>
            </span>
            <div class="tab"></div>
            <!-- <input type="text" id="birth" name="birth" placeholder="出身年月日" required>
            <div class="tab"></div> -->
            <input type="text" id="age" name="age" placeholder="年齢" required>
            <div class="tab"></div>
            <input type="text" id="phone" name="phone" placeholder="電話番号" required>
            <div class="tab"></div>
            <input type="text" id="zipcode" name="zipcode" placeholder="郵便番号 (ハイフンなし)" required>
            <input type="button" id="btn_zipcode" value="住所検索" />
            <div class="tab"></div>
            <input type="text" id="address1" name="address1" placeholder="都道府県" required>
            <div class="tab"></div>
            <input type="text" id="address2" name="address2" placeholder="市区町村番地" required>
            <div class="tab"></div>
            <input type="text" id="address3" name="address3" placeholder="建物名など">
            <div class="tab"></div>
            <input type="text" id="mailaddress" name="mailaddress" placeholder="メールアドレス" required>
            <div class="tab"></div>
            <input type="text" id="username2" name="username" placeholder="アカウント" required>
            <div class="tab"></div>
            <input type="text" id="password2" name="password" placeholder="パスワード" required>
            <div class="tab"></div>          
            <input type="submit" value="確認" class="submit" name="approve">
          </form>  

          <div class="login_down">
            <ul>
              <li><h5 onclick="show_hide()">ログイン</h5></li>
              <li><a class="BackToHomePage" href="index2.html">ホームページ</a></li>
            </ul>
          </div>
          
        </div><!-- signup end-->
      </div><!-- container2 end-->
    </div><!-- signup_page end--> 

   
    <div id="copyright">
      Copyright © 2023<!--因為js，會跑版--> 
    </div>    

</body>
</html>