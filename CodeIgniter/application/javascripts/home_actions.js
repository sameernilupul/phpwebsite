$(document).ready(function(){
    var signin_clicked = false;
    var signup_clicked = false;
    
    $("#signin_btn").click(function(){
        if(!signin_clicked){
            
            $("#signup_div").fadeOut('fast');
            $("#search_div").fadeOut('fast');
            $("#siginin_forum_div").show();
            signin_clicked = true;
        }else{
            $("#signin_div").animate({
                right:'-40px'
            });
            $("#signup_div").fadeIn();
            $("#search_div").fadeIn();
            $("#siginin_forum_div").hide();
            signin_clicked = false;
        }
        
    });
  
    $("#signup_btn").click(function(){
        $("#topbox_div").animate({
            height:'+=150px'
        });
    });
});

