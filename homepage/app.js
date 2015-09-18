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

function randomInteger(min, max) {
    var rand = min - 0.5 + Math.random() * (max - min + 1)
    rand = Math.round(rand);
    return rand;
  }

var i = 0;

var isEven = function(Num) {
  return (Num % 2 == 0) ? true : false;
};

    $(document).keydown(function(key) {
        switch(parseInt(key.which,10)) {
			// Left arrow key pressed
			case 37:
			case 65:
			i = randomInteger(1,20);
				$('#cam').animate({left: "-=10px"}, 'fast');
				// Move film roll
				if(isEven(i) === true && i <= 10) {
					$('#film').animate({left: "-=10px"}, 'fast');
				} else if(isEven(i) === true && i >= 10) {
					$('#film').animate({left: "+=15px"}, 'fast');
				} else {
					$('#film').animate({left: "+=25px"}, 'fast');
				}
				break;
			// Up Arrow Pressed
			case 38:
			case 87:
			i = randomInteger(1,20);
				$('#cam').animate({top: "-=10px"}, 'fast');
				// Move film roll
				if(isEven(i) === true) {
					$('#film').animate({top: "-=12px"}, 'fast');
				} else {
					$('#film').animate({top: "+=17px"}, 'fast');
				}
				break;
			// Right Arrow Pressed
			case 39:
			case 68:
			i = randomInteger(1,20);
				$('#cam').animate({left: "+=10px"}, 'fast');
				// Move film roll
				if(isEven(i) === true) {
					$('#film').animate({left: "-=13px"}, 'fast');
				} else {
					$('#film').animate({left: "+=20px"}, 'fast');
				}
				break;
			// Down Arrow Pressed
			case 40:
			case 83:
			i = randomInteger(1,20);
				$('#cam').animate({top: "+=10px"}, 'fast');
				// Move film roll
				if(isEven(i) === true) {
					$('#film').animate({top: "-=13px"}, 'fast');
				} else {
					$('#film').animate({top: "+=18px"}, 'fast');
				}
				break;
		}
	});
}

$(document).ready(main)
