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
                'background-position': '65% 100%',
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
        $(".navi").css({
            "background-color":data['code2']
        })
        $(".navi > li").css({
            "border":"solid 1px"+ data['code1']
        })
        $(".navi >li:first-child").css({
            "background-color":data['code1'],
            "color":"#fff",
            "font-size":"15px"
        })
        $(".navi li").hover(function(){
            $(this).css({
                "background-color":data['code1'],
                "color":"#fff",
                "font-size":"15px",
                "font-weight":"bolder"
            })
        },
        function(){
            $(this).css({
                "background-color":data['code2'],
                "color":"#000",
                "font-size":"15px",
                "font-weight":"400"
            })
            $("#main > ul >li:first-child").css({
                "background-color":data['code1'],
                "color":"#fff",
                "font-size":"15px",
                "font-weight":"bolder"
            })
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
