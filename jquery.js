$(document).ready(function(){
    $("#signup_btn").click(function(){
        $("#main").animate({left:"40%"},500);
        $("#loginform").fadeOut(900);
        $("#login_btn").fadeIn(900).css("visibility", "visible");
        $("#signup_btn").fadeOut(900); 
        $("#signupform").animate({left:"50%"},500);
        $("#signupform").fadeIn(900).css("visibility", "visible");
    }); 
    
    $("#login_btn").click(function(){         
        $("#main").animate({left:"60%"},500);
        $("#signupform").fadeOut(900);
        $("#signupform").animate({left:"75%"},500);
        $("#login_btn").fadeOut(900);
        $("#signup_btn").fadeIn(900);
        $("#loginform").animate({left:"50%"},500);
        $("#loginform").fadeIn(900);
    });   

    $(".email").on({
        "focusin": function() {
            $(".mail1").attr("src", "images/mail2.png");
    },
        "focusout": function() {
            $(".mail1").attr("src", "images/mail1.png");
    }
});

    $(".pass").on({
        "focusin": function() {
            $(".pass1").attr("src", "images/pass2.png");
    },
        "focusout": function() {
            $(".pass1").attr("src", "images/pass1.png");
    }
});

    $(".user").on({
        "focusin": function() {
            $(".user1").attr("src", "images/user2.png");
    },
        "focusout": function() {
            $(".user1").attr("src", "images/user1.png");
    }
});


    $(".email").on({
        "focusin": function() {
            $(".mail2").attr("src", "images/mail2.png");
    },
        "focusout": function() {
            $(".mail2").attr("src", "images/mail1.png");
    }
});

    $(".pass").on({
        "focusin": function() {
            $(".pass2").attr("src", "images/pass2.png");
    },
        "focusout": function() {
            $(".pass2").attr("src", "images/pass1.png");
    }
});

    
});