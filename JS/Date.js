const time_date = document.getElementById("time_date");

time_date.innerHTML = updateDateTime();

function updateDateTime() {
  var options = {
    timeZone: 'Asia/Manila',
    year: 'numeric',
    month: 'long',
    day: 'numeric',
    weekday: 'long',
    hour: 'numeric',
    minute: 'numeric',
    second: 'numeric',
  };

  var dateTimeString = new Date().toLocaleString('en-PH', options);
  document.getElementById('time_date').textContent = dateTimeString;
}

// Update the date and time every second
setInterval(updateDateTime, 1000);

// Initial update
updateDateTime();
