var music = document.getElementById("music");
var playButton = document.getElementById("play");
var pauseButton = document.getElementById("pause");
var playhead = document.getElementById("elapsed");
var timeline = document.getElementById("slider");
var timer = document.getElementById("timer");

var duration;
pauseButton.style.visibility = "hidden";


var timelineWidth = timeline.offsetWidth - playhead.offsetWidth;
music.addEventListener("timeupdate", timeUpdate, false);

$("#slider").click(function(e){
	var that = $(this);
	var current = e.clientX - that.offset().left;
	console.log(current / that.width());
	$("#elapsed").width(current);
	music.currentTime = current / that.width() * duration;

})

function timeUpdate() {
	var playPercent = timelineWidth * (music.currentTime / duration);
	playhead.style.width = playPercent + "px";

	var s = Math.floor((music.currentTime % 60));
	s = s > 9 ? s : "0" + s;
	var secondsIn = Math.floor((music.currentTime / 60)) + ":" + s ;
		timer.innerHTML = secondsIn;
}

playButton.onclick = function() {
	music.play();
	playButton.style.visibility = "hidden";
	pause.style.visibility = "visible";
}

pauseButton.onclick = function() {
	music.pause();
	playButton.style.visibility = "visible";
	pause.style.visibility = "hidden";
}

music.addEventListener("canplaythrough", function () {
	duration = music.duration;

}, false);