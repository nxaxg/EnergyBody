$(document).ready(function(){
    $(".menu").hide();
    //menu
    $(".menu-btn").click(function(){
        $('.menu').slideDown(400);
        $(".close-btn").click(function(){
            $(".menu").slideUp(400);
        });
    });
    
    //slider
    $(".slider-group").sss({
        slideShow : false, // Set to false to prevent SSS from automatically animating.
        startOn : 0, // Slide to display first. Uses array notation (0 = first slide).
        transition : 400, // Length (in milliseconds) of the fade transition.
        speed : 3500, // Slideshow speed in milliseconds.
        showNav : true // Set to false to hide navigation arrows.
    });
});