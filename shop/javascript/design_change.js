$(function(){
	$('#clorfulSelect').bind('change', function(){
		$(this).removeClass();
        $(this).addClass($(this).val());
        var colorStr = document.getElementById("clorfulSelect").value;
        var color = colorStr.split(',');
        var backgroundColor = color[1]
        var btn = color[0]
        var color_id = color[2]
        $("#main").css({
            "background-color":backgroundColor
        })
        $("#info li").css({
            "border":"solid 1px"+ btn
        })
        $("#info li:first-child").css({
            "background-color":btn,
            "color":"#fff",
            "font-size":"15px"
        })
        $(".what").css({
            "border-left":"solid 5px"+btn
        })
        $("#color_id").val(color_id)
    });
    // var cheackCnt = $('input[name="selectDesign"]').length;
    $('input[name="selectDesign"]').click(function(){
        var result = $('input[name="selectDesign"]:checked').val()
        var count = $('input[name="selectDesign"]').index(this)
        // <img src="../../design/result">
        // console.log(result)
        var season_img = new Array('spring.png','summer.png','autumn.png','winter.png')
        var season = season_img.some( function( value ) {
            return value === result;
        });
        console.log(count)
        
        if(result == ""){
            $(".intro").css({
                "padding":"10px"
            });
            $(".intro").css({
                'background-image':'none',
                'height': 'auto'
            })
            $("#main").css({
                'background-image':'none',
            })
            // $('.intro').after('<hr>');
            $('label').removeClass("check");
            var cnt = count + 1
            $('label:nth-child('+cnt+')').addClass("check");
        }else if(season){
            $("#main").css({
                'background-image':'url(../../design/'+result+")",
                'background-repeat': 'no-repeat',
                'background-position': '70% 100%',
                'background-attachment': 'fixed',
                'background-size':'75% auto',
            })
            $(".intro").css({
                'background-image':'none',
                'padding':'10px',
                'height': 'auto'
            })
            $('label').removeClass("check");
            var cnt = count + 1
            $('label:nth-child('+cnt+')').addClass("check");
        }
        else{
            $('label').removeClass("check");
            var cnt = count + 1
            $('label:nth-child('+cnt+')').addClass("check");
            $(".intro").css({
                'background-image':'url(../../design/'+result+")",
                'background-repeat': 'no-repeat',
                'background-size':'500px auto',
                'padding':'40px',
                'height':'300px'
            })
            $("#main").css({
                'background-image':'none',
            })
        }
        $("#design_id").val(count)
    })
});