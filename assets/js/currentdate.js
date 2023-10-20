function updateDateTime() {
    const currentDate = new Date();
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

    const currentMonth = months[currentDate.getMonth()];
    const currentDay = currentDate.getDate();
    const currentDayOfWeek = daysOfWeek[currentDate.getDay()];

    const currentHour = currentDate.getHours();
    const currentMinute = currentDate.getMinutes();
    const currentSecond = currentDate.getSeconds();

    // Update the date elements in your HTML
    document.getElementById("current-month").textContent = currentMonth;
    document.getElementById("current-day").textContent = currentDay;
    document.getElementById("current-day-of-week").textContent = currentDayOfWeek;

    // Update the clock element in your HTML
    document.getElementById("clock").textContent = `${currentHour}:${(currentMinute < 10 ? '0' : '')}${currentMinute}:${(currentSecond < 10 ? '0' : '')}${currentSecond}`;
}

// Update the date and time immediately
updateDateTime();

// Update the date and time every second
setInterval(updateDateTime, 1000);