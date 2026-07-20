
// window.addEventListener("scroll",() => {
//   let header=document.querySelector("header")
//   header.classList.toggle("sticky",window.scrollY >0)
 
// })

// const opentTurnigPhoto = document.querySelector("#open_turnig_photo");
// const detailOverlay = document.querySelector("#detail_overlay");
// const closeDetail = document.querySelector("#closeDetail");
// opentTurnigPhoto.addEventListener("click", () => {

//   detailOverlay.classList.add("show");
// });
// closeDetail.addEventListener("click", () => {
//   detailOverlay.classList.remove("show");
// });

$(".plus").click(function() {
  $(".rotate").toggleClass("down");
  $(".plus").toggleClass("open");
  // $(".pop").slideToggle(400);
  $(".pop").toggle("slide");
});

  /* ======================== */

const openBtn = document.querySelector("#open_buy_btn");
const closeBtn = document.querySelector("#close_buy_btn");
const overlayBox = document.querySelector("#overlay");
const modalBox = document.querySelector("#modal");
const closeModal = document.querySelector("#closeModal");

openBtn.addEventListener("click", () => {
  overlayBox.classList.add("show");
  modalBox.classList.add("show");
});

closeBtn.addEventListener("click", () => {
  overlayBox.classList.remove("show");
  modalBox.classList.remove("show");
});

closeModal.addEventListener("click", () => {
  overlayBox.classList.remove("show");
  modalBox.classList.remove("show");
});


  /* ============第二 三部分============ */

// クラス「object」がついている要素を全て取得
const objectList = document.querySelectorAll(".object");

// 関数callbackの定義
// 関数callbackに、引数を設定し、監視対象のオブジェクトを配列として受け取る
function callback(entries, observer) {
  entries.forEach(entry => {
    // 要素が領域に入っているかどうかで処理を分岐する
    if (entry.isIntersecting) {
      // 監視対象の要素(entry.target)にクラス「show」を追加
      entry.target.classList.add("show");
      // 関数callbackの第二引数（observer）を使って要素の監視を停止する
      // observer.target.classList.add("show");
    }
  });
}

// オプション
const options = {
  //要素が50%交差したら、関数callbackを実行
  threshold: 0.5,
};

// オブザーバーを生成する
const myObserver = new IntersectionObserver(callback, options);

// オブザーバー(myObserver)が、対象の要素(targetObject)それぞれを監視する
objectList.forEach((targetObject) => {
  myObserver.observe(targetObject);
});

// ======================================
$('.slider').slick({
  autoplay: true,//自動的に動き出すか。初期値はfalse。
  infinite: true,//スライドをループさせるかどうか。初期値はtrue。
  speed: 500,//スライドのスピード。初期値は300。
  slidesToShow: 3,//スライドを画面に3枚見せる
  slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
  prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
  nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
  centerMode: true,//要素を中央ぞろえにする
  variableWidth: true,//幅の違う画像の高さを揃えて表示
  dots: true,//下部ドットナビゲーションの表示
});


// =================================================
$('.slider2').slick({
  arrows: false,//左右の矢印はなし
  autoplay: true,//自動的に動き出すか。初期値はfalse。
  autoplaySpeed: 0,//自動的に動き出す待ち時間。初期値は3000ですが今回の見せ方では0
  speed: 6900,//スライドのスピード。初期値は300。
  infinite: true,//スライドをループさせるかどうか。初期値はtrue。
  pauseOnHover: false,//オンマウスでスライドを一時停止させるかどうか。初期値はtrue。
  pauseOnFocus: false,//フォーカスした際にスライドを一時停止させるかどうか。初期値はtrue。
  cssEase: 'linear',//動き方。初期値はeaseですが、スムースな動きで見せたいのでlinear
  slidesToShow: 4,//スライドを画面に4枚見せる
  slidesToScroll: 1,//1回のスライドで動かす要素数
  responsive: [
    {
      breakpoint: 769,//モニターの横幅が769px以下の見せ方
      settings: {
        slidesToShow: 2,//スライドを画面に2枚見せる
      }
    },
    {
      breakpoint: 426,//モニターの横幅が426px以下の見せ方
      settings: {
        slidesToShow: 1.5,//スライドを画面に1.5枚見せる
      }
    }
  ]
});

// ---------------
var opts = {
  draggable: true,
  slide: 1,
};

var elem = document.querySelector('.tabs');
elem.addEventListener('tabChange', function(evt) {
  console.log(evt.detail);
})
var tabs = new TabsSlider(elem, opts);

// ========================================================


