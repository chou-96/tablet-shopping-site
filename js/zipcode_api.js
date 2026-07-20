
$(document).ready(function(){


    const searchButton = $('#btn_zipcode');

    searchButton.on('click',function(){
        
        // let zipBtn = $('#zipcode').val();
        // // ここから入力してね！
        
        // $.ajax({
        //     url:'https://zipcloud.ibsnet.co.jp/api/search',
        //     dataType:'jsonp',
        //     //目標第三方網站必須設定能回應 JSONP ，才能使用 JSONP 對其請求資料。
        //     data:{
        //         //パラメーターの内容
        //         zipcode:zipBtn
        //     }
        // })
        // .done(function(zip){
        //     console.log(zip);

        //     $('#address1').val(zip.results[0].address1);
        //     $('#address2').val(zip.results[0].address2+zip.results[0].address3);
        // })
        // .fail(function (){
        //     alert('入力値を確認してください。')
        // })



        let zipBtn = $('#zipcode').val();
        // ここから入力してね！
        
        $.ajax({
            url:'https://zipcloud.ibsnet.co.jp/api/search',
            dataType:'jsonp',
            //目標第三方網站必須設定能回應 JSONP ，才能使用 JSONP 對其請求資料。
            data:{
                //パラメーターの内容
                zipcode:zipBtn
            }
        })
        .done(function(zip){
            console.log(zip);

            if (!zip.results) {
                alert('該当の住所がありません');
            } else {
                $('#address1').val(zip.results[0].address1);
                $('#address2').val(zip.results[0].address2+zip.results[0].address3);
                // $('#address3').val(result.address3);
            }

            
        })
        .fail(function (){
            alert('入力値を確認してください。')
        })






        // $.getJSON('http://zipcloud.ibsnet.co.jp/api/search?callback=?',
        //     {
        //     zipcode: $('#zipcode').val()
        //     }
        // )
        // .done(function(data) {
        //     if (!data.results) {
        //         alert('該当の住所がありません');
        //     } else {
        //         let result = data.results[0];
        //         $('#address1').val(result.address1);
        //         $('#address2').val(result.address2+result.address3);
        //         // $('#address3').val(result.address3);
        //     }
        // }).fail(function(){
        //     alert('入力値を確認してください。');
        // })
   

    });
})