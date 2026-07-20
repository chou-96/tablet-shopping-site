<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPad Air</title>
    <link rel="stylesheet" href="css/destyle.css">
    <link rel="stylesheet" href="css/style.css">

    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Noto+Sans+JP:wght@400;700&display=swap"
      rel="stylesheet"
    />
   
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="./css/slick-theme.css">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone" rel="stylesheet">
    
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff&family=Inter&family=Roboto&display=swap" rel="stylesheet">

    <script src="./js/product.js" defer></script>

    <link href="./css/tabs.css" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <!-- 字體設定===================================== -->
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff&family=Inter&display=swap" rel="stylesheet">
    <!-- icon設定===================================== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>  

<body>
    <header>
        <ul>
            <li><a href="index2.html"><span class="material-symbols-outlined">home</span></a></li>
            <li><a href="product_04.php" target="_blank">Surface<i class=""></i></a></li>
            <li><a href="product_07.php" target="_blank">Galaxy<i class=""></i></a></li>
        </ul>
        <ul> <p>iPad Air</p> </ul>
        <ul>
            
            <li><a href="./cart_pay.php"><span class="material-symbols-outlined">
            shopping_basket
            </span></a></li>
            <li><a href="./login.php">ログイン/新規登陸</a></li>
            <!-- <li><div class="group">
                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                <input placeholder="Search" type="search" class="input">
            </div></li> -->
        </ul>
    </header> 

    
    <div class="to_cart">
        <button class="shopping icons" id="open_buy_btn"></button>
        Buy Now!
    </div>



    
    <div>
        <main>
            <div class="top_bk_color">
                <div class="main_product">
                    <div>
                        <img class="main_product_img" src="img/ipadair/ipadair_01.jpg" alt="">
                    </div>
                    
                    <div  class="main_product_name" id="ipadair">
                        <h1>iPad Air</h1>
                    </div>

                    <div id="overlay">
                        <form action="order_check.php" method="post" id="modal">
                            <div id="closeModal" class="closeModal">
                                ×
                            </div>
                            <p>iPad Air</p>
                            <div class=img_checkbox>
                                <img src="img/ipadair/ipadair_01.jpg" alt="">
                                <div id="quantity_sel">
                                    <div style="display:none">
                                        <select name="p_name">
                                            <option value="ipad air"selected>iPad Air</option>
                                        </select>
                                        <select name="p_brand">
                                            <option value="iPad"selected>iPad</option>
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
                                        <select name="color">
                                            <option value=""selected>色</option>
                                            <option value="スペースグレイ">スペースグレイ</option>
                                            <option value="スターライト">スターライト</option>
                                            <option value="ピンク">ピンク</option>
                                            <option value="パープル">パープル</option>
                                            <option value="ブルー">ブルー</option>
                                        </select>
                                    </div>
                                    <div class="show_quantity_sel">
                                        <select name="ssd_size">
                                            <option value="0"selected>SSD容量</option>
                                            <option value="64">64GB</option>
                                            <option value="256">256GB</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <input id="close_buy_btn" type="submit" value="確認"/>
                        </form>
                    </div>
                </div>
                

                <div class="testbox">
                    <h2>
                        Apple M1チップの驚異的なパワー、内蔵。<br>
                        センターフレームに対応した
                        12MP超広角フロントカメラ。<br>
                        超高速5G。<br>
                        一緒に使えるApple PencilとMagic Keyboard。<br>
                        美しい5つのカラー。<br>
                    </h2>
                </div>
            </div>

            <div>
                <section id="ipad_detail">
                    <div class="tabs">
                        <div class="tabs__bar-wrap">
                        <div class="tabs__bar">
                            <div class="tabs__controls md-ripple">ディスプレイ</div>
                            <div class="tabs__controls md-ripple">サイズ/重量/色</div>
                            <div class="tabs__controls md-ripple">チップ/容量/値段</div>
                        </div>
                        </div>

                        <div class="tabs__content">
                            <div class="tabs__section">
                                <div class="ipad_tabs1"> 
                                    <p class="ipad_tabs1_p">
                                        Liquid Retinaディスプレイ<br>
                                        IPSテクノロジー搭載10.9インチ（対角）LEDバックライトMulti-Touchディスプレイ<br>
                                        2,360 x 1,640ピクセル解像度、264ppi<br>
                                        広色域ディスプレイ（P3）<br>
                                        True Toneディスプレイ<br>
                                        耐指紋性撥油コーティング<br>
                                        フルラミネーションディスプレイ<br>
                                        反射防止コーティング<br>
                                        1.8%の反射率<br>
                                        500ニトの輝度<br>
                                        Apple Pencil（第2世代）に対応
                                    </p>                                
                                    <!-- <a href="#0">Test link</a> -->
                                </div>
                            </div>
                            <div class="tabs__section">
                                <div>
                                    <div class="ipad_tab2">
                                        <img class="ipadpro_tab2_img1" src="img/ipadair/ipadair_10.jpg" alt="">
                                        <img class="ipadpro_tab2_img2" src="img/ipadpro11/ipadpro_04.jpg" alt="">
                                    </div>
                                    <p class="ipad_tab2_p">サイズ:  長さ 247.6 mm × 幅178.5 mm × 高さ 6.1 mm</p>
                                    <p class="ipad_tab2_p">重量:  461 g</p>
                                    <p class="ipad_tab2_p">色:  スペースグレイ、スターライト、ピンク、パープル、ブルー</p>
                                    <br>
                                    <!-- <button>www</button>
                                    <button disabled="disabled">www</button> -->
                                </div>
                            </div>
                            <div class="tabs__section">
                                <div class="ipad_tabs3">
                                    <div>
                                        <h2>チップ</h2>
                                        <div>
                                            Apple M1チップ<br>
                                            4つの高性能コアと4つの高効率コアを搭載した8コアCPU<br>
                                            8コアGPU<br>
                                            16コアNeural Engine<br>
                                            8GB RAM
                                        </div>
                                    </div>
                                    <table class="ipad_tabs3_table">
                                        <tr>
                                            <th>RAM</th>
                                            <th>SSD容量</th>
                                            <th>値段</th>
                                        </tr>
                                        <tr>
                                            <td>8GB</td>
                                            <td>64GB </td>
                                            <td>92800</td>
                                        </tr>
                                        <tr>
                                            <td>8GB</td>
                                            <td>256GB</td>
                                            <td>140800</td>
                                        </tr>
                                    
                                    </table>
                                <!-- <a href="#another">Another link</a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                <section id="other">
                    <h2>Other Products</h2>              
                    <div class="other_wrapper">
                        <!-- <h2>ohther products</h2> -->
                        <div class="product object">

                            <div class="p_03">
                                <div class="product_pic">
                                    <a href="product_01.php"><img src="./img/ipadpro12/ipadpro12_01.jpg" alt="" /></a>
                                    <a href="product_01.php"><img class="product_pic_a" src="img/icons-forward.png" alt=""></a>
                                </div>
                                <div class="product_word">
                                    <h3>iPad Pro 11</h3>
                                    <br>
                                    <p>
                                        M2チップ。<br>
                                        さあ、世代交代を。
                                    </p>
                                </div>
                            </div>

                            <div class="p_02">
                                <div class="product_pic">
                                    <a href="product_03.php"><img src="./img/ipad10/ipad1001.jpg" alt="" /></a>
                                    <a href="product_03.php"><img class="product_pic_a" src="img/icons-forward.png" alt=""></a>
                                </div>
                                <div class="product_word">
                                    <h3>iPad 10</h3>
                                    <br>
                                    <p>
                                        ぜんぶスクリーン。<br>
                                        ぜんぶカラフル。<br>
                                        
                                        なんでも描ける。<br>
                                        なんでも書ける。<br>
                                        
                                        これからは、いつも一緒。<br>
                                    </p>
                                </div>
                            </div>

                            <div class="p_01" >
                                <div class="product_pic">
                                    <a href="product_02.php"><img src="./img/ipadair/ipadair01.jpg" alt="" /></a>
                                    <a href="product_02.php"><img class="product_pic_a" src="img/icons-forward.png" alt=""></a>
                                </div>
                                <div class="product_word">
                                    <h3>iPad Air</h3>
                                    <br>
                                    <p>すみずみまで美しい。<br>オールスクリーンのデザイン。</p>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </section>
            </div>

            <div></div>
            <div></div>
        

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

    <script src="./js/tabsSlider.js"></script>
</body>

</html>