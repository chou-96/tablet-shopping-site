window.addEventListener("scroll",() => {
    let header=document.querySelector("header")
    header.classList.toggle("sticky",window.scrollY >0)
})

// =============================================




// 圖片切換==========================
function imgUrl(url){
    document.getElementById('slider').src =`./img/${url}`;

//  $('.small_pic').slick({
//         dots:true,
//         autoplay:true,
//         autoplaySpeed:1000
//     });

}

let imgSrc = ['./img/1.jpg','./img/2.jpg','./img/3.jpg','./img/4.jpg']

    console.log(imgSrc[0]);

    let i = 0;

    setInterval(function(){

        console.log(i);

        if(i < imgSrc.length - 1){

            i++;

        } else{

            i = 0;

        }

        document.getElementById('slider').src = imgSrc[i];
    
       

    },3000);

// 会員登録==========================
$(function() {

    /* ========== モーダルウィンドウ jquery =========== */
    $('.signUp').on('click',function(){
        $('#modalArea').fadeIn();
    })
//關閉會員登錄
    $('#modalBg,#closeModal').on('click',function(){
        // $('#modalArea').hide();
        $('#modalArea').fadeOut();

    })
    

});



// --------------------
let elementsArray = document.querySelectorAll(".tile");
console.log(elementsArray);
window.addEventListener('scroll', fadeIn ); 
function fadeIn() {
    for (var i = 0; i < elementsArray.length; i++) {
        var elem = elementsArray[i]
        var distInView = elem.getBoundingClientRect().top - window.innerHeight - 10;
        if (distInView < 0) {
            elem.classList.add("inView");
        } else {
            elem.classList.remove("inView");
        }
    }
}
fadeIn();

// --------------------

let fadeInTarget = document.querySelectorAll('.fade-in');
window.addEventListener('scroll', () => {
  for (let i = 0; i < fadeInTarget.length; i++){
    const rect = fadeInTarget[i].getBoundingClientRect().top;
    const scroll = window.pageYOffset || document.documentElement.scrollTop;
    const offset = rect + scroll;
    const windowHeight = window.innerHeight; // 現在のブラウザの高さ
    if (scroll > offset - windowHeight + 150) {
      fadeInTarget[i].classList.add('scroll-in');
    }
    else {
        elem.classList.remove("scroll-in");
    }
  }
});
