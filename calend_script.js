document.addEventListener("DOMContentLoaded", function() {

  function updateDayNumbers(selectedDate) {
    // If no date is selected, use today's date
    if (!selectedDate) {
      selectedDate = new Date();
    }

    // Calculate the Sunday of the week based on the selected date
    const sunday = new Date(selectedDate);
    sunday.setDate(selectedDate.getDate() - selectedDate.getDay());

    // Loop over each day of the week in your grid and update the day number and name
    const daysOfWeek = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
    for (let i = 0; i < 7; i++) {
      const dayEl = document.getElementById(`dia-${i}`);
      const date = new Date(sunday);
      date.setDate(sunday.getDate() + i);
      const dayName = daysOfWeek[i];
      const dayNumber = date.getDate();
      dayEl.textContent = `${dayName} ${dayNumber}`;
    }
  }

  const myDatepicker = flatpickr("#calend", {
    dateFormat: "d-m-Y",
    inline: true,
    minDate: "today",
    onChange: function(selectedDates, dateStr, instance) {
      updateDayNumbers(selectedDates[0]);
    }
  });

  // Call updateDayNumbers with today's date immediately after initializing flatpickr
  updateDayNumbers(new Date());

  // Here goes the code that handles the ajax call 

});
  