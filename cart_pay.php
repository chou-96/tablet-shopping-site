<?php
    
    session_start();
    
    if(!isset($_SESSION["id"])){
        echo "<script language=javascript>alert('未ログイン');</script>";
        require ("login.php");
        session_destroy();
        exit();
    }

    $c_id = $_SESSION["id"];

    $pdo = new pdo('mysql:host=localhost:3307;dbname=2022_tablet_website','user','pi012HAL2023.');//DB接續
    $stmt = $pdo ->prepare('SELECT cart_id, cart.p_id, p_name, p_size, p_ssd, p_price, p_color, cart.quantity
                            FROM cart, product_info
                            where cart.c_id=:c_id and product_info.p_id=cart.p_id');
    $stmt->bindValue(':c_id',$c_id,PDO::PARAM_STR);

    $stmt-> execute();//執行

    $res = $stmt->fetchAll();

    $pdo = null;
    
    $p_total = 0;
    $q_total = 0;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/fancy-checkout.css">
    <title>PAY</title>

    <link rel="stylesheet" href="css/destyle.css">
    <link rel="stylesheet" href="css/cart.css">

    <!-- icon設定===================================== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="./js/zipcode_api.js"></script>

  </head>

  <script>
    function showCardArea() {
        document.getElementById('card-area').style.display = "block";
        // window.scrollTo(0, document.body.scrollHeight);
        window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
    }
  </script>

  <body>
    <header>
        <ul>
            <li><a href="index2.html"><span class="material-symbols-outlined">home</span></a></li>
        </ul>

    </header> 

    <table>
        <tr>
        <!-- <th><?php echo $p_id?></th> -->
        <th>商品名</th>
        <th>ディスプレイ</th>
        <th>SSD容量</th>
        <th>価格</th>
        <th>色</th>
        <th>数量</th>
        <th>合計</th>
        <th>削除</th>
        </tr>

        <?php  foreach($res as $row):?> 
            <?php
                if($row['p_ssd']>999){
                    $ssd_q = strval($row['p_ssd']/1000)."TB";
                }
                else{
                    $ssd_q = strval($row['p_ssd'])."GB";
                }
                ?>
            <tr>
                <td><?=$row['p_name'];?></td>
                <td><?=$row['p_size'];?> インチ</td>
                <td><?=$ssd_q;?></td>
                <td><?=number_format($row['p_price']);?> 円</td>
                <td><?=$row['p_color'];?></td>
                <td><?=$row['quantity'];?></td>
                <td><?=number_format($row['p_price']*$row['quantity']);?> 円</td>
                <td>
                    <form action="cart_remove.php" method="post">
                        <div style="display:none">
                            <select name="cart_id">
                                <option value=<?=$row['cart_id'];?> selected>cart_id</option>
                            </select>
                        </div>
                        <input type="submit" value="X" style="color:red;">
                    </form> 
                </td>
            </tr>

            <?php $p_total += $row['p_price']*$row['quantity'];?>
            <?php $q_total += $row['quantity'];?>
        
        <?php endforeach;?>

        <tr>
            <td>　</td>
            <td>　</td>
            <td>　</td>
            <td>　</td>
            <td>　</td>
            <td><?=$q_total?> 台</td>
            <td><?=number_format($p_total);?> 円</td>
            <td>　</td>
        </tr>

    </table>

    <div class="cart_btn">
        <!-- <a class=toTop href="index2.html">HomePage</a> -->
        <form action="" method="post" id="buycheck_btn" class="toBuy">
            <input type="submit" name="buycheck" value="レジに進む" ></input>
        </form> 
    </div>

    <?php
        if($p_total==0){
            echo "<script>document.getElementById('buycheck_btn').style.display = 'none'</script>";
        }
    ?>

    <?php
        if (!empty($_POST["buycheck"])||!empty($_POST["delivery_info_check"])) {

            $pdo = new pdo('mysql:host=localhost:3307;dbname=2022_tablet_website','user','pi012HAL2023.');//DB接續
            $stmt = $pdo ->prepare('SELECT c_name, c_phone, c_zipcode, c_address1, c_address2, c_address3, c_mailaddress
                                    FROM customer_info
                                    where c_id=:c_id');
            $stmt->bindValue(':c_id',$c_id,PDO::PARAM_STR);
    
            $stmt-> execute();//執行
    
            $res2 = $stmt->fetch();
            
            $c_name = $res2['c_name'];
            $c_mailaddress = $res2['c_mailaddress'];
            $c_phone = $res2['c_phone'];
            $c_zipcode = $res2['c_zipcode'];
            $c_address1 = $res2['c_address1'];
            $c_address2 = $res2['c_address2'];
            $c_address3 = $res2['c_address3'];
    
            $pdo = null;

        }
    ?>

    <div class="global">
      <div class="resumo-pedido-area" id="delivery_info" style="display: none;">
        <div id="titulo-area" class="flex-area j-space-between titulo-area">
          <h2></h2>
        </div>
        <div id="maquininha" class="cartao_up maquininha">

        <!-- <h4>受取場所</h4> -->
        <div class="flex-area j-space-between vai-sumir">
            
            <div class="delivery_info">
                <div class="delivery_title">お届け先</div>
                <!--   名前 -->
                <div class="item">
                    <label class="label_left" for="name">名前</label>
                    <input id="name" type="text" placeholder="名前を入力" value="<?php echo $c_name;?>" required><br>
                </div>

                <!--   メールアドレス -->
                <div class="item">
                    <label  class="label_left" for="email">メールアドレス</label>
                    <input id="email" type="email" placeholder="メールアドレスを入力" value="<?php echo $c_mailaddress;?>" required><br>
                </div>

                <!--   電話番号 -->
                <div class="item">
                    <label  class="label_left" for="phone">電話番号</label>
                    <input id="phone" type="text" placeholder="電話番号を入力" value="<?php echo $c_phone;?>" required><br>
                </div>

                <!--   住所 -->
                <div class="item">
                    <label class="label_left" for="zipcode">郵便番号</label>
                    <input class="input_zip" id="zipcode" type="text" placeholder="郵便番号を入力" value="<?php echo $c_zipcode;?>" required><br>
                    <input class="btn_zip" type="button" id="btn_zipcode" value="住所検索" />
                </div>
                <div class="item">
                    <label class="label_left" for="address1">住所 (都道府県)</label>
                    <input id="address1" type="text" placeholder="都道府県を入力" value="<?php echo $c_address1;?>" required><br>
                </div>
                <div class="item">
                    <label class="label_left" for="address2">住所 (市区町村番地)</label>
                    <input id="address2" type="text" placeholder="市区町村番地を入力" value="<?php echo $c_address2;?>" required><br>
                </div>
                <div class="item">
                    <label class="label_left" for="address3">住所 (建物名など)</label>
                    <input id="address3" type="text" placeholder="建物名などを入力" value="<?php echo $c_address3;?>"><br>
                </div>

                <!--   確認button -->
                <div class="btns">
                    <input type="button" name="delivery_info_check" value="受取場所を確認" onclick="showCardArea()"><br>
                    <!-- <input type="reset" value="リセット"> -->
                </div>

            </div> 

            <?php
            if (!empty($_POST["buycheck"])) {
                echo "<script>document.getElementById('delivery_info').style.display = 'block'</script>";
                // echo "<script>window.scrollTo(0, document.body.scrollHeight);</script>";
                
                // echo "<script>window.scrollTo(0, document.body.scrollHeight);</script>";
            }
            ?>

            <script>document.querySelector('.cartao_up').scrollIntoView({behavior: 'smooth'});</script>

        </div>
        

        
          <div id="total" class="total flex-area j-space-between">
            <p>合計</p>
            <h4><?=$p_total?>円</h4>
          </div>

          <div class="loading-area">
            <div id="feedback-sucesso" class="feedback-sucesso">
                <form class="compra-sucesso" action="cart_check.php" method="post">
                    <input type="submit" value="クリックで支払い確定">
                </form> 
              <!-- <h3 class="compra-sucesso">Compra efetuada com sucesso!</h3> -->
            </div>
          </div>
        </div>

        <div id="bordinha-nice" class="bordinha-nice"></div>
      </div>

      <div id="card-area" class="card-area" style="display: none;">
        <h2 id="card-area-titulo">お客様のクレジットカード</h2>

        <form novalidate>
          <div class="flip-container">
            <div id="flipper" class="flipper">
              <div class="cartao cartao-front">
                <div class="flex-area j-space-between a-items-center header-cartao a-items-start">
                  <h3 style="white-space: nowrap">クレジットまたはデビットカードを追加</h3>
                  <img src="dist/img/flags/visa.png" id="marca-cartao" class="marca-cartao" alt="Logo do seu cartão de crédito" height="30px">
                </div>

                <label>
                  <span>カード番号</span>
                  <div class="input-area">
                    <i class="material-icons">payment</i>
                    <input type="text" id="numero-do-cartao-front" class="numero-do-cartao-front c_input">
                  </div>
                </label>

                <label>
                  <span>クレジットカード名義人</span>
                  <div class="input-area">
                    <input type="text" id="nome-front" class="nome-front c_input" style="text-transform: uppercase" autocomplete="off">
                  </div>
                </label>

                <div class="flex-area j-space-between">
                  <label class="w-48">
                    <span>有効期限：</span>
                    <div class="input-area">
                      <input type="text" id="data-front" class="data-front c_input" maxlength="7">
                    </div>
                  </label>

                  <label class="w-48">
                    <span>CVV</span>
                    <div class="input-area">
                      <input type="number" id="cvv-front" class="cvv-front c_input" maxlength="4">
                    </div>
                  </label>
                </div>
              </div>

              <div id="cartao-back" class="cartao cartao-back">
                <div class="flex-area j-space-between a-items-center header-cartao">
                  <img src="dist/img/flags/visa.png" alt="Logo do seu cartão de crédito" height='30px'>
                </div>

                <label>
                  <h3 id="numero-do-cartao-back" class="numero-do-cartao-back"></h3>
                </label>

                <label>
                  <h3 id="nome-back" class="nome-back"></h3>
                </label>

                <div class="flex-area j-space-between a-items-start">
                  <label class="w-48">
                    <h3 id="data-back" class="data-back"></h3>
                  </label>

                  <img class="chip" src="dist/img/chip.png" alt="chip cartão">
                </div>
              </div>
            </div>
          </div>

          <div id="button-area" class="flex-area j-center button-area">
            <button type="button" id="btn-comprar" class="btn-comprar">
              <span>カードを追加</span>
            </button>
          </div>
        </form>
      </div>
    </div>

    <script src="dist/js/fancy-checkout.js"></script>
    <script>
      const buyButton = document.getElementById('btn-comprar');
      buyButton.addEventListener('click', function () {
        buyButton.innerHTML = 'しばらくお待ちください...';

        // fake api request
        window.setTimeout(function () {
          // success return
          FancyCheckout.init();
        }, 1500);
      });
    </script>
  </body>
</html>
