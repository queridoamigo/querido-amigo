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

var i = offsetCam = offsetFilm = score = topDiff = leftDiff = 0;

var isEven = function(Num) {
  return (Num % 2 == 0) ? true : false;
};

    $(document).keydown(function(key) {
        switch(parseInt(key.which,10)) {
			// Left arrow key pressed
			case 37:
			case 65:
				$('#cam').stop();
				offsetcam = $('#cam').offset();
				offsetfilm = $('#film').offset();
				if((offsetfilm.top - 40 <= offsetcam.top && offsetcam.top <= offsetfilm.top +
				40) && (offsetfilm.left - 40 <= offsetcam.left && offsetcam.left <= offsetfilm.left +
				40)) {
					score++;
					alert('GOT IT! Your score:' + score);
					$('#cam').offset({top:10, left: 20});
					$('#film').offset({top:300, left: 300});
				} else {
							i = randomInteger(1,20);
								$('#cam').animate({left: "-=10px"}, 50);
								// Move film roll
								if(isEven(i) === true && i <= 10) {
									$('#film').animate({left: "-=10px"}, 50);
								} else if(isEven(i) === true && i >= 10) {
									$('#film').animate({left: "+=15px"}, 50);
								} else {
									$('#film').animate({left: "+=25px"}, 50);
								}
				}
				break;
			// Up Arrow Pressed
			case 38:
			case 87:
				$('#cam').stop();
				offsetcam = $('#cam').offset();
				offsetfilm = $('#film').offset();
				if((offsetfilm.top - 40 <= offsetcam.top && offsetcam.top <= offsetfilm.top +
				40) && (offsetfilm.left - 40 <= offsetcam.left && offsetcam.left <= offsetfilm.left +
				40)) {
					score++;
					alert('GOT IT! Your score:' + score);
					$('#cam').offset({top:10, left: 20});
					$('#film').offset({top:300, left: 300});
				} else {
							i = randomInteger(1,20);
								$('#cam').animate({top: "-=10px"}, 50);
								// Move film roll
								if(isEven(i) === true && i <= 10) {
									$('#film').animate({top: "-=12px"}, 50);
								} else if(isEven(i) === true && i >= 10) {
									$('#film').animate({top: "+=17px"}, 50);
								} else {
									$('#film').animate({top: "-=23px"}, 50);
								}
				}
				break;
			// Right Arrow Pressed
			case 39:
			case 68:
				$('#cam').stop();
				offsetcam = $('#cam').offset();
				offsetfilm = $('#film').offset();
				if((offsetfilm.top - 40 <= offsetcam.top && offsetcam.top <= offsetfilm.top +
				40) && (offsetfilm.left - 40 <= offsetcam.left && offsetcam.left <= offsetfilm.left +
				40)) {
					score++;
					alert('GOT IT! Your score:' + score);
					$('#cam').offset({top:10, left: 20});
					$('#film').offset({top:300, left: 300});
				} else {
							i = randomInteger(1,20);
								$('#cam').animate({left: "+=10px"}, 50);
								// Move film roll
								if(isEven(i) === true && i <= 10) {
									$('#film').animate({left: "-=13px"}, 50);
								} else if(isEven(i) === true && i >= 10) {
									$('#film').animate({left: "+=20px"}, 50);
								} else {
									$('#film').animate({left: "-=18px"}, 50);
								}
				}
				break;
			// Down Arrow Pressed
			case 40:
			case 83:
				$('#cam').stop();
				offsetcam = $('#cam').offset();
				offsetfilm = $('#film').offset();
				if((offsetfilm.top - 40 <= offsetcam.top && offsetcam.top <= offsetfilm.top +
				40) && (offsetfilm.left - 40 <= offsetcam.left && offsetcam.left <= offsetfilm.left +
				40)) {
					score++;
					alert('GOT IT! Your score:' + score);
					$('#cam').offset({top:10, left: 20});
					$('#film').offset({top:300, left: 300});
				} else {
							i = randomInteger(1,20);
								$('#cam').animate({top: "+=10px"}, 50);
								// Move film roll
								if(isEven(i) === true && i <= 10) {
									$('#film').animate({top: "-=13px"}, 50);
								} else if(isEven(i) === true && i >= 10) {
									$('#film').animate({top: "+=18px"}, 50);
								} else {
									$('#film').animate({top: "-=24px"}, 50);
								}
				}
				break;
		}
	});
}

$(document).ready(main)
