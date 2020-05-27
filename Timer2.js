var seconds = 300; //Variables for the code below
var countdownTimer;
var colorChange; //sets up array of colors
colorChange = ['#7ed473', '#fff194', '#fa8283', '#D7D7D7']
function secondPassed(){
	var minutes = Math.floor(seconds/60); //takes the output of seconds/60 and makes rounds it down. 4.7 = 4, 3.7 = 3. (to keep the minutes displaying right)
	var remainingSeconds = seconds % 60; //takes remainder of seconds/60 and displays it. so 270/60 = 4.5 this displays it as 30 so it becomes 4:30 instead of 4.5
	if (remainingSeconds < 10) {  //if remaining seconds are less than 10 add a zero before the number. Displays numbers like 09 08 07 06
        remainingSeconds = "0" + remainingSeconds;  
    }
    document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds; //displays time in the html page  5:06
   if (seconds == 0) {
		clearInterval(countdownTimer);  //keeps value at zero once it hits zero. 0:00 will not go anymore
		alert("Time is Up, Try again");
		}
};

function changeColor(){ //this changes the background color based on the time that has elapsed
	if (seconds <= 300 && seconds > 200) {  //green between 5:00 - 3:20
		document.body.style.background = colorChange[0];
	}
	else if (seconds <= 200 && seconds > 100) { //yellow between 3:20 - 1:40
		document.body.style.background = colorChange[1];
	}
	else if(seconds <= 100 && seconds >= 0){ // red between 1:40 - 0
	document.body.style.background = colorChange[2];
	}
};
	
function countdown(start){ //code for the button. When button is clicked  countdown() calls on secondPassed() to begin count down.
	secondPassed();
	if (seconds != 0) { //actual code to decrement the time
	seconds --;
	countdownTimer = setTimeout('countdown()', 100);
	changeColor();  //calls the changeColor() function so that background changes
	start.disabled = true; //disables the "start" button after being pressed
	}
};

function cdpause() { //pauses countdown
        // pauses countdown
        clearTimeout(countdownTimer);
};
    
function cdreset() {
        // resets countdown
        cdpause(); //calls on the pause function to prevent from automatically starting after reset
        secondPassed(); //reverts back to original secondPassed() function
		document.getElementById('start').disabled = false; //Enables the "start" button that has been disabled from countdown(start) function.
		document.body.style.background = colorChange[3]; //Resets background color to grey.
};
	