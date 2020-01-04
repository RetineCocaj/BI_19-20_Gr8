var seconds = 300; //Variables for the code below
var countdownTimer;
var colorChange; //sets up array of colors
colorChange = ['#7ed473', '#fff194', '#fa8283', '#D7D7D7']
function secondPassed(){
	var minutes = Math.floor(seconds/60);
	var remainingSeconds = seconds % 60; 
	if (remainingSeconds < 10) { 
        remainingSeconds = "0" + remainingSeconds;  
    }
    document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds; 
   if (seconds == 0) {
		clearInterval(countdownTimer);  
		alert("Time is Up, Try again");
		}
};

function changeColor(){ //this changes the background color based on the time that has elapsed
	if (seconds <= 300 && seconds > 200) {  
		document.body.style.background = colorChange[0];
	}
	else if (seconds <= 200 && seconds > 100) { 
		document.body.style.background = colorChange[1];
	}
	else if(seconds <= 100 && seconds >= 0){
	document.body.style.background = colorChange[2];
	}
};
	
function countdown(start){ 
	secondPassed();
	if (seconds != 0) { 
	seconds --;
	countdownTimer = setTimeout('countdown()', 100);
	changeColor(); 
	start.disabled = true; 
	}
};

function cdpause() { 
        // pauses countdown
        clearTimeout(countdownTimer);
};
    
function cdreset() {
        // resets countdown
        cdpause();
        secondPassed();
		document.getElementById('start').disabled = false; 
		document.body.style.background = colorChange[3]; 
};
	
