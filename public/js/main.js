$(document).ready(function(){
    $("#accordion").accordion();
    $(".slider").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    });
});
$(function(){
    $("#burger_none ul").hide();
    $("#burger").click(function(e){
        e.preventDefault();
        $("#burger_none ul").slideToggle("slow"); 
    });
});
$(window).on("scroll",function(e){
    if($(window).scrollTop() > 50){
        $(".header_logo").addClass("position-fixed");
    }
    else{
        $(".header_logo").removeClass("position-fixed");
    }
});


