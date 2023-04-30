document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      // put your options and callbacks here
      headerToolbar: {
        start: 'prev,next today',
        center: 'title',
        end: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      initialDate: '2023-04-30',
      editable: true,
      events: [
        {
          title: 'Event 1',
          start: '2023-04-30T10:00:00',
          end: '2023-04-30T12:00:00'
        },
        {
          title: 'Event 2',
          start: '2023-04-31T14:00:00',
          end: '2023-04-31T16:00:00'
        },
        // more events here
      ]
    });

    calendar.render();
  });
