function getTimeRemaining(endtime) {
	var t = Date.parse(endtime) - Date.parse(new Date());
	var seconds = Math.floor((t / 1000) % 60);
	var minutes = Math.floor((t / 1000 / 60) % 60);
	var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
	var days = Math.floor(t / (1000 * 60 * 60 * 24));
	return {
		total: t,
		days: days,
		hours: hours,
		minutes: minutes,
		seconds: seconds
	};
}

function initializeClock(id, endtime) {
	var clock = document.getElementById(id);
	var daysSpan = clock.querySelector('.days');
	var hoursSpan = clock.querySelector('.hours');
	var minutesSpan = clock.querySelector('.minutes');
	var secondsSpan = clock.querySelector('.seconds');

	function updateClock() {
		var t = getTimeRemaining(endtime);

		daysSpan.innerHTML = t.days;
		hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
		minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
		secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

		if (t.total <= 0) {
			clearInterval(timeinterval);
		}
	}

	updateClock();
	var timeinterval = setInterval(updateClock, 1000);
}

var deadline1 = new Date("Sep 5, 2019 08:00:00");
var deadline2 = new Date("Sep 17, 2019 08:00:00");
var deadline3 = new Date("Sep 27, 2019 08:00:00");
var deadline4 = new Date("Oct 4, 2019 08:00:00");
var deadline5 = new Date("Oct 9, 2019 08:00:00");
var deadline6 = new Date("Oct 25, 2019 08:00:00");

// initializeClock('clockdiv1', deadline1);
// initializeClock('clockdiv2', deadline2);
// initializeClock('clockdiv3', deadline3);
// initializeClock('clockdiv4', deadline4);
// initializeClock('clockdiv5', deadline5);
// initializeClock('clockdiv6', deadline6);
