$(function(){
    $.ajax({
        url:'../func/json.php',
        data:({name:'list'})
    })
    .done(function(data){
        result = data['design']
        console.log(result)
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
                'background-position': '100% 100%',
                'background-attachment': 'fixed',
                'background-size':'75% auto'
            })
        }else{
            $(".intro").css({
                'background-image':'url(../../design/'+result+")",
                'background-repeat': 'no-repeat',
                'background-size':'500px auto',
                'padding':'40px',
                'height':'300px'
            })
        }
        // for(let i=0;i<4;i++){
        //     if(data['design'] === season_img[i]){
        //         // var html = "<img src = '../../design/"+ data['design'] +"'>"
        //         // document.getElementById("changeDesign").innerHTML = html
        //         $("#main").css({
        //             'background-image':'url(../../design/'+data['design']+")",
        //             'background-repeat': 'no-repeat',
        //             'background-position': '90% 92%',
        //             'background-attachment': 'fixed',
        //             'background-size':'40% auto'
        //         })
        //     }else{
        //         $(".intro").css({
        //             'background-image':'url(../../design/'+data['design']+")",
        //             'background-repeat': 'no-repeat',
        //             'padding':'40px',
        //         })
        //     }
        // }
        // if(data['design'] == 0){
        //     // $(".intro").css({
        //     //     "padding":"10px"
        //     // });
        //     $('.intro').after('<hr>');
        // }

        $('#main').css({
            "background-color":data['code2']
        })
        $("#info ul").css({
            "background-color":data['code2']
        })
        $("#info li").css({
            "border":"solid 1px"+ data['code1']
        })
        $("#info li:first-child").css({
            "background-color":data['code1'],
            "color":"#fff",
            "font-size":"15px"
        })
        $(".what").css({
            "border-left":"solid 5px"+data['code1']
        })
    })    
})