/* GAME */

/*
	offsetCam = offsetFilm = camera and film roll coordinates;
	score = game score;
	name = player name;
	nameDefault = default value for promt();	
*/

var i = offsetCam = offsetFilm = score = 0;

var name;
var nameDefault = 'Jake Donaghue';

//moving keys
var leftMove = 'A';
var upMove = 'W';
var rightMove = 'D';
var downMove = 'S';

//MOving cam on keydown
    $(document).keydown(function(key) {
        switch(parseInt(key.which,10)) {
			// Left arrow key pressed
			case 37:
			case 65:
				camFilmMoving(leftMove);
			break;
			// Up Arrow Pressed
			case 38:
			case 87:
				camFilmMoving(upMove);
				break;
			// Right Arrow Pressed
			case 39:
			case 68:
				camFilmMoving(rightMove);
				break;
			// Down Arrow Pressed
			case 40:
			case 83:
				camFilmMoving(downMove);
				break;
		}
	});

/* Get random number for film roll mivong */
function randomInteger(min, max) {
    var rand = min - 0.5 + Math.random() * (max - min + 1)
    rand = Math.round(rand);
    return rand;
}

/* Even numbers check */
var isEven = function(Num) {
  return (Num % 2 == 0) ? true : false;
};

// function for get player's name
function getPlayerName(nameDefault, score) {
var newRecord;
	newRecord = prompt('GOT IT! Your score: ' + score, nameDefault);

//check new name
	if(newRecord != '') {
		nameDefault = newRecord;
	} 
}

var gotcha = false;

// check window borders
function checkCameraEdge(offsetCam, moveExtraFast, directCamBelow, moveCamMulti) {
//get window size
	var pageHeight = $(window).height();
	var pageWidth = $(window).width();

//check pressed keys
    $(document).keydown(function(key) {
        switch(parseInt(key.which,10)) {
			// Left arrow key pressed
			case 37:
			case 65:
				//check out of borders
					if(offsetCam.left < 0 - moveExtraFast - 50 ) {
						gotcha = true;
					} else {
						gotcha = false;
					} 
				break;
			// Up Arrow Pressed
			case 38:
			case 87:
					if(offsetCam.top < 0 - moveExtraFast ) {
						gotcha = true;
					} else {
						gotcha = false;
					} 
				break;
			// Right Arrow Pressed
			case 39:
			case 68:
					if(offsetCam.left > pageWidth - moveExtraFast - 50 ) {
						gotcha = true;
					} else {
						gotcha = false;
					} 
				break;
				break;
			// Down Arrow Pressed
			case 40:
			case 83:
					if(offsetCam.top > pageHeight ) {
						gotcha = true;
					} else {
						gotcha = false;
					} 
				break;
		}
});
return gotcha;
}

/* Function for moving camera and film roll */
function camFilmMoving(type) {
/* type - dimension of moving - left/top */

/* stop moving for multiple push: */
				$('#cam').stop();
/* get offset cam and film roll */
				offsetCam = $('#cam').offset();
				offsetFilm = $('#film').offset();
//windowSize();
//alert('CAM: left: ' + offsetCam.left + " top: " + offsetCam.top +'FILM: left: ' +
//offsetFilm.left + " top: " + offsetFilm.top);
/* WIN conditions +/- 40 px - default */
				if((offsetFilm.top - 40 <= offsetCam.top && offsetCam.top <= offsetFilm.top +
				40) && (offsetFilm.left - 40 <= offsetCam.left && offsetCam.left <= offsetFilm.left +
				40)) {
/* if WIN - score++ */
					score++;
					getPlayerName(nameDefault, score);
/* put cam and film to new game */
					$('#cam').offset({top:10, left: 20});
					$('#film').offset({top:300, left: 300});
				} else /* don't win, still playn */ {

// Move values
var moveDefault = 10;
var moveMiddle = 13;
var moveFast = 18;
var moveExtraFast = 25;

//move multipliers
var moveCamMulti = 1;
var moveFilmMulti = 1;

// Direstions +/-
var directCamAbove = directFilmAbove = "+=";
var directCamBelow = directFilmBelow = "-=";

/* swtich type of moving - left/up/right/down */
								switch(type) {
									case 'A':
															/* get random for moving */
															i = randomInteger(1,20);
																//get func
																checkCameraEdge(offsetCam, moveExtraFast, directCamBelow, moveCamMulti);
																	if(gotcha == false) {
																		//if cam wasn't cross border do straight move
																		$('#cam').animate({left: directCamBelow + (moveCamMulti * moveDefault)}, 50);
																	} else {
																		//out of border - jump through screen
																		$('#cam').animate({left: pageWidth = windowSize() - 50 }, 1);
																	}
																// Move film roll
																// check even random number for different values
																// of moving
																if(isEven(i) === true && i <= 10) {
																	$('#film').animate({left: directFilmBelow + (moveFilmMulti * moveMiddle)}, 50);
																} else if(isEven(i) === true && i >= 10) {
																	$('#film').animate({left: directFilmAbove +(moveFilmMulti * moveFast)}, 50);
																} else {
																	$('#film').animate({left: directFilmAbove + (moveFilmMulti * moveExtraFast)}, 50);
																}
									break;

									case 'W':
															i = randomInteger(1,20);
																checkCameraEdge(offsetCam, moveExtraFast, directCamBelow, moveCamMulti);
																	if(gotcha == false) {
																		$('#cam').animate({top: directCamBelow + moveCamMulti * moveDefault}, 50);
																	} else {
																		$('#cam').animate({top: pageHeight = windowSize() - 600 }, 1);
																	}
																// Move film roll
																if(isEven(i) === true && i <= 10) {
																	$('#film').animate({top: directFilmBelow + moveFilmMulti * moveMiddle}, 50);
																} else if(isEven(i) === true && i >= 10) {
																	$('#film').animate({top: directFilmAbove + moveFilmMulti * moveFast}, 50);
																} else {
																	$('#film').animate({top: directFilmBelow + moveFilmMulti * moveExtraFast}, 50);
																}
									break;

									case 'D':

															i = randomInteger(1,20);
																checkCameraEdge(offsetCam, moveExtraFast, directCamBelow, moveCamMulti);
																	if(gotcha == false) {
																		$('#cam').animate({left: directCamAbove + moveCamMulti * moveDefault}, 50);
																} else {
																		$('#cam').animate({left: -150 }, 1);
																}
																// Move film roll
																if(isEven(i) === true && i <= 10) {
																	$('#film').animate({left: directFilmBelow + moveFilmMulti * moveMiddle}, 50);
																} else if(isEven(i) === true && i >= 10) {
																	$('#film').animate({left: directFilmAbove + moveFilmMulti * moveFast}, 50);
																} else {
																	$('#film').animate({left: directFilmBelow + moveFilmMulti * moveExtraFast}, 50);
																}
									break;

									case 'S':

															i = randomInteger(1,20);
																checkCameraEdge(offsetCam, moveExtraFast, directCamBelow, moveCamMulti);
																	if(gotcha == false) {
																		$('#cam').animate({top: directCamAbove + moveCamMulti * moveDefault}, 50);
																	} else {
																		$('#cam').animate({top: - 60 }, 1);
																	}
																// Move film roll
																if(isEven(i) === true && i <= 10) {
																	$('#film').animate({top: directFilmBelow + moveFilmMulti * moveMiddle}, 50);
																} else if(isEven(i) === true && i >= 10) {
																	$('#film').animate({top: directFilmAbove + moveFilmMulti * moveFast}, 50);
																} else {
																	$('#film').animate({top: directFilmBelow + moveFilmMulti * moveExtraFast}, 50);
																}
									break;

								} /*endswitch*/
				}
}

// get window size
function windowSize() {
	var pageHeight = $(window).height();
	var pageWidth = $(window).width();
	return pageHeight, pageWidth;
//	alert("height: " + pageHeight + " width: " + pageWidth);
}
/* END OF GAME */
