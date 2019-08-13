// Countdown Timer 1
const second = 1000,
minute = second * 60,
hour = minute * 60,
day = hour * 24;

let countDown = new Date('August 17, 2019 23:59:59').getTime(),
x = setInterval(function() {

  let now = new Date().getTime(),
  distance = countDown - now;

  document.getElementById('days').innerText = Math.floor(distance / (day)),
  document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
  document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
  document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown-end-fights").innerHTML = "Ended";
    document.getElementById("codecamp-countdown-fights--text").innerHTML = "Ended";
  }
}, second)

// Countdown Timer 2

const second1 = 1000,
minute1 = second1 * 60,
hour1 = minute1 * 60,
day1 = hour1 * 24;

let countDown1 = new Date('August 17, 2019 23:59:59').getTime(),
x1 = setInterval(function() {

  let now1 = new Date().getTime(),
  distance1 = countDown1 - now1;

  document.getElementById('days1').innerText = Math.floor(distance1 / (day1)),
  document.getElementById('hours1').innerText = Math.floor((distance1 % (day1)) / (hour1)),
  document.getElementById('minutes1').innerText = Math.floor((distance1 % (hour1)) / (minute1)),
  document.getElementById('seconds1').innerText = Math.floor((distance1 % (minute1)) / second1);

  if (distance1 < 0) {
    clearInterval(x1);
    document.getElementById("codecamp-countdown-fights--text1").innerHTML = "Ended";
  }
}, second1)

// Countdown Timer 3

const second2 = 1000,
minute2 = second2 * 60,
hour2 = minute2 * 60,
day2 = hour2 * 24;

let countDown2 = new Date('August 17, 2019 23:59:59').getTime(),
x2 = setInterval(function() {

  let now2 = new Date().getTime(),
  distance2 = countDown2 - now2;

  document.getElementById('days2').innerText = Math.floor(distance2 / (day2)),
  document.getElementById('hours2').innerText = Math.floor((distance2 % (day2)) / (hour2)),
  document.getElementById('minutes2').innerText = Math.floor((distance2 % (hour2)) / (minute2)),
  document.getElementById('seconds2').innerText = Math.floor((distance2 % (minute2)) / second2);

  if (distance2 < 0) {
    clearInterval(x2);
    document.getElementById("codecamp-countdown-fights--text2").innerHTML = "Ended";
  }
}, second2)

// 
