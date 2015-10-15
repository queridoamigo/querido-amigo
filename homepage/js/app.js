var main = function() {
// Menu
    $('.icon-menu').click(function() {
        $('.menu').animate({
            left: '0px'    
        }, 250);
        
    $('body').animate({
            left: '285px'
        }, 250) 
    });
    
    $('.icon-close').click(function() {
        $('.menu').animate({
            left: '-285px'
        }, 250);    
        
        $('body').animate({
            left: '0px'    
        }, 250);
        
    });

// Photoview box arrows
    $('.arrow-next').click(function() {
        var currentSlide = $('.active-slide');
        var nextSlide = currentSlide.next();
        var currentDot = $('.active-dot');
        var nextDot = currentDot.next();
        
        if(nextSlide.length == 0) {
            nextSlide = $('.slide').first();
            nextDot = $('.dot').first();
        }
        
        currentDot.removeClass('active-dot');
        nextDot.addClass('active-dot');
        
        currentSlide.fadeOut(600).removeClass('active-slide');    
        nextSlide.fadeIn(600).addClass('active-slide');
    
    });
$('.arrow-prev').click(function() {
        var currentSlide = $('.active-slide');
        var prevSlide = currentSlide.prev();
        var currentDot = $('.active-dot');
        var prevDot = currentDot.prev();
        
        if(prevSlide.length == 0) {
            prevSlide = $('.slide').last();
            prevDot = $('.dot').last();
        }
        
        currentDot.removeClass('active-dot');
        prevDot.addClass('active-dot');
        
        currentSlide.fadeOut(600).removeClass('active-slide');
        prevSlide.fadeIn(600).addClass('active-slide');
        
    });

}

$(document).ready(main)
