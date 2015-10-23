/* GAME */

/*
	offsetCam = offsetFilm = camera and film roll coordinates;
	score = game score;
	name = player name;
	nameDefault = default value for promt();	
*/

//show highscores on start
$(document).ready(function() {
	$.get( 'highlights.php', { record: 'start'}, function (result) {
		$('#scoreList').append(result);
	});
});

//set vars
var i = offsetCam = offsetFilm = score = 0;

// check window borders
var gotcha = false;

//name
var nameDefault = 'Jake Donaghue';
var nameCount = 0;
var userName;

//moving keys
var leftMove = 'A';
var upMove = 'W';
var rightMove = 'D';
var downMove = 'S';

//Moving cam on keydown
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
function getPlayerName(score) {

	if(nameCount == 0) {
		userName = prompt('GOT IT! Your score: ' + score, nameDefault);
		nameCount++;

	//check new name
		if(userName != '') {
			nameDefault = userName;
		}
	} else {
		alert('Well done, ' + nameDefault + '! Your score: ' + score);
	}

//get-request to mysql 
				$.get( 'highlights.php', { score: score, name: userName, record: 'yes'}, function (result) {
					$('#scoreTable').remove();
					$('#scoreList').append(result);
				});
}

function filmMove(typeMove, directFilmAbove, directFilmBelow, moveFilmMulti, move) {
//move film roll on 1 from 8 directions:
				/*
				left
				left-top
				top
				top-right
				right
				right-bottom
				bottom
				left-bottom
				*/
				switch(typeMove) {

					case 1:
						$('#film').animate({left: directFilmBelow + (moveFilmMulti * move)}, 50);
					break;

					case 2:
						$('#film').animate({left: directFilmBelow + (moveFilmMulti * move)}, 50).animate({top: directFilmBelow + (moveFilmMulti * move)}, 50);
					break;

					case 3:
						$('#film').animate({top: directFilmBelow + (moveFilmMulti * move)}, 50);
					break;

					case 4:
						$('#film').animate({left: directFilmAbove + (moveFilmMulti * move)}, 50).animate({top: directFilmBelow + (moveFilmMulti * move)}, 50);
					break;

					case 5:
						$('#film').animate({left: directFilmAbove + (moveFilmMulti * move)}, 50);
					break;

					case 6:
						$('#film').animate({left: directFilmAbove + (moveFilmMulti * move)},50).animate({top: directFilmAbove + (moveFilmMulti * move)}, 50);
					break;

					case 7:
						$('#film').animate({top: directFilmAbove + (moveFilmMulti * move)}, 50);
					break;

					case 8:
						$('#film').animate({left: directFilmBelow + (moveFilmMulti * move)},50).animate({top: directFilmAbove + (moveFilmMulti * move)}, 50);
					break;

				}//endswitch typeMove
}//end function filmMove

function getDiffFilmMoveSpeed(moveSpeed, moveDefault, moveMiddle, moveFast, moveExtraFast) {

				switch(moveSpeed) {

					case 1:
						move = moveDefault;
					break;

					case 2:
						move = moveMiddle;
					break;

					case 3:
						move = moveFast;
					break;

					case 4:
						move = moveExtraFast;
					break;

				}//endswitch moveSpeed 

		return move;

} //end getDiffFilmMoveSpeed

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
					if(offsetCam.top > pageHeight - 50) {
						gotcha = true;
					} else {
						gotcha = false;
					} 
				break;
		}
});
return gotcha;
}

var filmJump = false;

//Film roll move through
function checkFilmEdge(offsetFilm, moveExtraFast) {
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
					if(offsetFilm.left  < 0 - moveExtraFast - 50 ) {
						filmJump = true;
					} else {
						filmJump = false;
					} 
				break;
			// Up Arrow Pressed
			case 38:
			case 87:
					if(offsetFilm.top < 0 - moveExtraFast ) {
						filmJump = true;
					} else {
						filmJump = false;
					} 
				break;
			// Right Arrow Pressed
			case 39:
			case 68:
					if(offsetFilm.left > pageWidth - moveExtraFast ) {
						filmJump = true;
					} else {
						filmJump = false;
					} 
				break;
				break;
			// Down Arrow Pressed
			case 40:
			case 83:
					if(offsetFilm.top > pageHeight ) {
						filmJump = true;
					} else {
						filmJump = false;
					} 
				break;
		}
});
return filmJump;
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
					getPlayerName(score);
/* put cam and film to new game */
					$('#cam').offset({top:10, left: 20});
					$('#film').offset({top:300, left: 300});
				} else /* don't win, still playn */ {

// Move values
var moveDefault = 10;
var moveMiddle = 13;
var moveFast = 18;
var moveExtraFast = 25;
var move;

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
															var typeMove = randomInteger(1,8);//rand move direction
															var moveSpeed = randomInteger(1,4);//rand for get different move speed
															moveFilmMulti = randomInteger(1,3);//rand movemultiplication
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
																checkFilmEdge(offsetFilm, moveExtraFast);
																	if(filmJump == false) {

																				move = getDiffFilmMoveSpeed(moveSpeed, moveDefault, moveMiddle, moveFast, moveExtraFast);
																				filmMove(typeMove, directFilmAbove, directFilmBelow, moveFilmMulti, move);

																	} else {
																		//out of border - jump to center
																			$('#film').offset({top:300, left: 300});
																			alert('whooops!');
																	}
									break;

									case 'W':
															i = randomInteger(1,20);
															var typeMove = randomInteger(1,8);//rand move direction
															var moveSpeed = randomInteger(1,4);//rand for get different move speed
															moveFilmMulti = randomInteger(1,3);//rand movemultiplication

																checkCameraEdge(offsetCam, moveExtraFast, directCamBelow, moveCamMulti);
																	if(gotcha == false) {
																		$('#cam').animate({top: directCamBelow + moveCamMulti * moveDefault}, 50);
																	} else {
																		$('#cam').animate({top: pageHeight = windowSize() - 600 }, 1);
																	}
																// Move film roll
																checkFilmEdge(offsetFilm, moveExtraFast);
																	if(filmJump == false) {

																				move = getDiffFilmMoveSpeed(moveSpeed, moveDefault, moveMiddle, moveFast, moveExtraFast);
																				filmMove(typeMove, directFilmAbove, directFilmBelow, moveFilmMulti, move);

																	} else {
																		//out of border - jump to center
																			$('#film').offset({top:300, left: 300});
																			alert('whooops!');
																	}
									break;

									case 'D':

															i = randomInteger(1,20);
															var typeMove = randomInteger(1,8);//rand move direction
															var moveSpeed = randomInteger(1,4);//rand for get different move speed
															moveFilmMulti = randomInteger(1,3);//rand movemultiplication

																checkCameraEdge(offsetCam, moveExtraFast, directCamBelow, moveCamMulti);
																	if(gotcha == false) {
																		$('#cam').animate({left: directCamAbove + moveCamMulti * moveDefault}, 50);
																} else {
																		$('#cam').animate({left: -150 }, 1);
																}
																// Move film roll
																checkFilmEdge(offsetFilm, moveExtraFast);
																	if(filmJump == false) {

																				move = getDiffFilmMoveSpeed(moveSpeed, moveDefault, moveMiddle, moveFast, moveExtraFast);
																				filmMove(typeMove, directFilmAbove, directFilmBelow, moveFilmMulti, move);

																	} else {
																		//out of border - jump to center
																			$('#film').offset({top:300, left: 300});
																			alert('whooops!');
																	}
									break;

									case 'S':

															i = randomInteger(1,20);
															var typeMove = randomInteger(1,8);//rand move direction
															var moveSpeed = randomInteger(1,4);//rand for get different move speed
															moveFilmMulti = randomInteger(1,3);//rand movemultiplication

																checkCameraEdge(offsetCam, moveExtraFast, directCamBelow, moveCamMulti);
																	if(gotcha == false) {
																		$('#cam').animate({top: directCamAbove + moveCamMulti * moveDefault}, 50);
																	} else {
																		$('#cam').animate({top: - 60 }, 1);
																	}
																// Move film roll
																checkFilmEdge(offsetFilm, moveExtraFast);
																	if(filmJump == false) {

																				move = getDiffFilmMoveSpeed(moveSpeed, moveDefault, moveMiddle, moveFast, moveExtraFast);
																				filmMove(typeMove, directFilmAbove, directFilmBelow, moveFilmMulti, move);

																	} else {
																		//out of border - jump to center
																			$('#film').offset({top:300, left: 300});
																			alert('whooops!');
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
