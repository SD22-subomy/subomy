$(function(){
    $("#shop_content").load("../func/information.php");
    $("#intro").click(function(){
      $.ajax({
        url : '../func/information.php',
        dataType : 'html',
        type:'post'
      })
      .done(function(data){
        $("#shop_content").html(data);
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
        })
    });
})
