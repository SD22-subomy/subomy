// $(function() {
//     $('select[name=design]').ImageSelect({
//     dropdownWidth:100, //幅指定
//     dropdownHeight:100, //高さ指定
//     backgroundColor:'#FFFFFF', //背景色
//     borderColor:'#CCCCCC' //枠線の色
//     });
//  });
function myCheck(){
    var flag = false; // 選択されているか否かを判定するフラグ
   
   //　ラジオボタンの数だけ判定を繰り返す（ボタンを表すインプットタグがあるので１引く）
    for(var i=0; i<document.design.fruits.length-1;i++){
 
        // i番目のラジオボタンがチェックされているかを判定
        if(document.design.fruits[i].checked){ 
            flag = true;    
            alert(document.design.fruits[i].value + "が選択されました。");
        }
    }
  
    // 何も選択されていない場合の処理
    if(!flag){ 
        alert("項目が選択されていません。");
    }
}
$(function(){
    var radio = document.getElementsByName("design[]");
    console.log(radio)
    $(this).on(function(){
        myCheck()
        var index = $('design[]').index(this);
    })
    // if ( element.checked ) {

    // } else {
    //     // チェックされていない
    // }    
});