<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxy Tab A</title>
    <link rel="stylesheet" href="css/destyle.css">
    <link rel="stylesheet" href="css/style09.css">

    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Noto+Sans+JP:wght@400;700&display=swap"
      rel="stylesheet"
    />
   
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff&family=Inter&family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="./css/slick-theme.css">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone" rel="stylesheet">
    
    <script src="./js/product.js" defer></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <!-- 字體設定===================================== -->
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff&family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- icon設定===================================== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" type="text/css" href="css/jquery.multiscroll.css" />
    <script
	src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	crossorigin="anonymous"></script>    
	<script type="text/javascript" src="js/jquery.multiscroll.js"></script>

    

    <script type="text/javascript">
	 $(document).ready(function() {

			// By default multiScroll uses css3: true
            $('#myContainer').multiscroll({
                sectionsColor: ['#b0efff', '#ffe6b0', '#ffcaca'],
            	anchors: ['first', 'second', 'third'],
            	menu: '#menu',
                loopTop: true,
                onLeave: function(index, nextIndex, direction){
                    console.log("---------- onLeave----------");
                    console.log("index", index);
                    console.log("nextIndex", nextIndex);
                    console.log("direction", direction);
                },
                afterLoad: function(anchorLink, index){
                    console.log("---------- afterLoad----------");
                    console.log("anchorLink", anchorLink);
                    console.log("index", index);
                },
                afterRender: function(){
                    console.log("---------- afterRender ----------");
                },
                afterResize: function(){
                    console.log("---------- afterResize ----------");
                }
            });
        });
    </script>
</head>  

<body>
    <header>

    </header> 

    <div class="to_cart">
        <button class="shopping icons" id="open_buy_btn"></button>
        Buy Now!
    </div>

    
<div>
    <main>

        <div class="tbs8_ultra_product_container">
   
            <div  class="tbs8_ultra_product_name">
                <div id="outof_menu">
                    <ul id="menu">
                        <li><a class="home_a" href="index2.html"><span class="material-symbols-outlined">home</span></a></li>
                        <li data-menuanchor="first"><a href="./login.php">ログイン/新規登陸</a></li>
                        <li data-menuanchor="second"><a href="product_01.php">iPad</a></li>
                        <li data-menuanchor="second"><a href="product_04.php">Surface</a></li>
                    </ul>
                </div>
                <div class="galaxy_cart"> 
                    <a href="./cart_pay.php"><span class="material-symbols-outlined">
                    shopping_basket
                    </span></a>
                </div>

               
                <!-- <p class="btn_buy_wrap">
                    <button class="shopping icons" id="open_buy_btn"></button>
                    put in cart
                </p> -->
            </div>

            <div id="overlay">
                <form action="order_check_galaxy.php" method="post" id="modal">
                    <div id="closeModal" class="closeModal">
                        ×
                    </div>
                    <p>Galaxy Tab A</p>
                    <div class=img_checkbox>
                        <img src="img/surfacepro9/3.JPG" alt="">
                        <div id="quantity_sel">
                            <div style="display:none">
                                <select name="p_name">
                                    <option value="tab a"selected>Galaxy Tab A</option>
                                </select>
                                <select name="p_brand">
                                    <option value="galaxy"selected>Galaxy</option>
                                </select>
                            </div>
                            <div class="show_quantity_sel">
                                <select name="quantity">
                                <option value="0"selected>数量</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                </select>
                            </div>
                            <div class="show_quantity_sel">
                                <select name="ssd_size">
                                <!-- <option value="0"selected>ssd</option> -->
                                <option value="32">32GB</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <input id="close_buy_btn" type="submit" value="確認"/>
                </form>
            </div>
      
        </div>

     
    <div id="myContainer">

        <div class="ms-left">
            <div class="ms-section" id="left1">
                <img class="ga_left1" src="img/a/gtaba_04.png" alt="">
            </div>

            <div class="ms-section" id="left2">
                <div class="ga_left2_div1">
                    <div>
                      <img src="img/a/gtaba_08.png" alt="">
                    </div>
                    <div>
                        <h5>必要な時に使える大容量バッテリー</h5>
                        <span>いつでもどこでも、楽しい時間を過ごしましょう。 Galaxy Tab Aは6150mAh（標準）のバッテリーが搭載され、長時間の使用が可能です。この強力なバッテリーのおかげで長時間の閲覧や外出も安心です。</span>
                    </div>
                </div>
            </div>

            <div class="ms-section" id="left3">
                <a href="product_07.php"><img class="left3_p1" src="img/s8ultra/6.png" alt=""></a>
                <!-- <span><img class="left3_p1" src="img/s8ultra/5.png" alt=""></span> -->
                <h3>Galaxy Tab S8 Ultra</h3>
                <div class="left3_p"><p>Galay Tab史上最速プロセッサーと120Hzのリフレッシュレート対応ディスプレイが最高のゲーム体験を提供。</p></div>  
                <!-- <h1>Left 3</h1> -->
            </div>
        </div>

        <div class="ms-right">
            <div class="ms-section" id="right1">
                <div>
                    <h1>Galaxy Tab A</h1>
                    <P>
                        タブレット形式で次世代の楽しさを
                    </P>
                </div>
            </div>

            <div class="ms-section" id="right2">
                <div class="right2_div1">
                    <div class="ga_right2_div1">
                        <div><img src="img/a/gtaba_02.jpg" alt=""></div>
                        <div>
                            <span>ダイナミックで高音質な3D </span><span> サウンドエクスペリエンス</span>
                        </div>
                    </div>
                    <div class="ga_right2_div1">
                        <div><img src="img/a/gtaba_05.jpg" alt=""></div>
                        <div><span class=".ga_right2_span">1つの画面でコントロール</span></div>
                    </div>
                    <div class="ga_right2_div1">
                        <div><img src="img/a/gtaba_06.jpg" alt=""></div>
                        <div><span>楽しみながら学習できる </span><span> デジタルプレイグラウンド</span></div>
                    </div>
                </div>
            </div>

            <div class="ms-section" id="right3">
                <a href="product_08.php"><img class="right3_p1" src="img/s8ultra/5.png" alt=""></a>
                <!-- <span><img class="right3_p1" src="img/a/taba_01.png" alt=""></span> -->
                <h3>Galaxy Tab S8+</h3>
                <div class="right3_p"><p>楽しさを日常に。あらゆる年齢層に次世代の楽しさを届けるために作られたのは、手頃な価格ながら多用途に使える高性能のタブレット。Galaxy Tab Aで、プレミアムな体験を日常にしましょう。</p></div>
            </div>
        </div>
    </div>
        
    </main>
    
    <footer>
        <h2>全部商品</h2>
        <div>
            <ul>
                <li>
                    <a href="./product_01.php">iPad Pro</a>
                </li>
                <li>
                    <a href="./product_02.php">iPad Air</a>
                </li>
                <li>
                    <a href="./product_03.php">iPad 10</a>
                </li>
            </ul>
        
            <ul>
                <li>
                    <a href="./product_04.php">Surface Pro 9</a>
                </li>
                <li>
                    <a href="./product_05.php">Surface Pro 8</a>
                </li>
                <li>
                    <a href="./product_06.php">Surface Pro 7+</a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="./product_07.php">S8 Ultra</a>
                </li>
                <li>
                    <a href="./product_08.php">S8+</a>
                </li>
                <li>
                    <a href="./product_09.php">Tab A</a>
                </li>
            </ul>
        </div>
    </footer>
</div>
</body>

</html>