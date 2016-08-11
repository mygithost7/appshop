
$(document).ready(function(){

    var width = 340;
    var animationSpeed = 1000;
    var stop = 3000;
    var currentSlide = 1;
    var marginSlide = 30;

//$('#slider ul li:last-child')
    var $slider = $('#slider');
    var $sliderContainer = $slider.find('ul');
    var $slides = $sliderContainer.find('li');



//console.log($('#slider ul').find('li:last-child').appendTo('#slider ul'));
    //console.log($('#slider ul'));
    //console.log($sliderContainer.find('li:last-child'));


    var interval;
    function startSlider(){
        interval = setInterval(function(){
            $sliderContainer.animate({'margin-left': '+='+(width)+'px'},animationSpeed,function(){
                //$sliderContainer.find('li:last-child').appendTo($sliderContainer);
                /*if(){

                }*/
                //$('#slider ul').find('li:last-child').prependTo('#slider ul').css("margin-left", -340);

                $('#slider ul').find('li:last-child').remove();
                console.log($('#slider ul li').length);
                //console.log($('#slider ul li').length);
                //.remove();
                /*currentSlide++;
                if(currentSlide == $slides.length){
                    currentSlide = 1;

                    $slides.css('margin-left', 0);
                }*/
            });
        },stop)
    }
    var widthWindow = $(window).width();

    if (widthWindow <= 900) {
       startSlider();
    }
});



























/*


var slideWidth, timer;

$(document).ready(function(){

    $('.three-lines-menu').on("click", function(e) {
        e.preventDefault();
        $('.main-nav ul').toggleClass('menu-responsive');
    });
    
    
    responsiveSolution();
});

function responsiveSolution() {
    var width = $(window).width();
    if (width <= 900) {
        if(typeof timer == 'undefined' || timer == false){
            moveRight();
            timer = setInterval(function () {
                    slideWidth = $('#slider ul li').width();
                    moveRight();
                }, 5000);
        }
    }
    else if(timer){
        clearInterval(timer);
        timer = false;
    }
}
function moveLeft() {
    $('#slider ul').animate({
        left: +slideWidth
    }, 2000, function () {
        $('#slider ul li:last-child').prependTo('#slider ul');
        $('#slider ul').css('margin-left', '');
    });
}

function moveRight() {
        
    $('#slider ul').animate({
        left: -slideWidth
    }, 2000, function () {
        $('#slider ul li:first-child').appendTo('#slider ul');
        $('#slider ul').css('margin-left', '');
        
        if($('#nav-slider li.active').next('li').length){
            $('#nav-slider li.active').removeClass('active').next('li').addClass('active');
        }
        else {
            $('#nav-slider li.active').removeClass('active');
            $('#nav-slider li:first').addClass('active');
        }
    });
}
window.onresize = function (event) {
    responsiveSolution();
};
*/
