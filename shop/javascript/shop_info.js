$(function(){
    $("#shop_content").load("../func/information.php");
    $("#intro").addClass("color");
    
    $("#intro").click(function(){
      $.ajax({
        url : '../func/information.php',
        dataType : 'html',
        type:'post'
      })
      .done(function(data){
        $("#shop_content").html(data);
        $("#nav").each(function(){
          $("#nav li").removeClass("color")
        });
        $("#intro").addClass("color");
      })
    });
    $("#info").click(function(){
        $.ajax({
          url : '../func/introduction.php',
          dataType : 'html',
          type:'post'
        })
        .done(function(data){
          $("#shop_content").html(data);
          $("#nav").each(function(){
            $("#nav li").removeClass("color")
          });
            $("#info").addClass("color");
          })
    });
    $("#cour").click(function(){
        $.ajax({
          url : '../func/cour.php',
          dataType : 'html',
          type:'post'
        })
        .done(function(data){
          $("#shop_content").html(data);
          $("#nav").each(function(){
            $("#nav li").removeClass("color")
          });
            $("#cour").addClass("color");
        })
    });
})
