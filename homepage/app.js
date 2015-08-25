var main = function() {
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
}

$(document).ready(main)
