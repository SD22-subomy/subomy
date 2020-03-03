$(function(){
    var query = location.search.split('=');
    // console.log(query)
    $.ajax({
        url:'../controller/json.php',
        type:"post",
        data:{
            'shop_id':query[1]
        }
    })
    .done(function(data){
        result = data['design']
        console.log(data)
        var season_img = new Array('spring.png','summer.png','autumn.png','winter.png')
        var season = season_img.some( function( value ) {
            return value === result
        })
        console.log(season)
        if(data['design'] == 0){
            $(".intro").css({
                "padding":"10px",
                'height':'auto'
            });
        }else if(season){
            $("#main").css({
                'background-image':'url(../../design/'+data['design']+")",
                'background-repeat': 'no-repeat',
                'background-position': '65% 80%',
                'background-attachment': 'fixed',
                'background-size':'75% auto'
            })
        }else{
            $(".introContent").css({
                'background-image':'url(../../design/'+result+")",
                'background-repeat': 'no-repeat',
                'background-size':'500px auto',
                'padding':'40px',
            })
        }
        $('#main').css({
            "background-color":data['code2']
        })
        $("#main > ul").css({
            "background-color":data['code2']
        })
        $("#main > ul > li").css({
            "border":"solid 1px"+ data['code1']
        })
        $("#main > ul >li:first-child").css({
            "background-color":data['code1'],
            "color":"#fff",
            "font-size":"15px"
        })
        $(".what").css({
            "border-left":"solid 5px"+data['code1']
        })
        $(".right button").css({
            "background-color":data['code1'],
            "border":"solid 1px "+data['cade2']
        })
    })    
})
