document.addEventListener('DOMContentLoaded', function() {

  var today = new Date();
  var initialDate = today.toISOString().slice(0, 10);

  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    themeSystem: 'bootstrap5',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'multiMonthYear,dayGridMonth,timeGridWeek,listWeek'
    },
    initialView: 'dayGridMonth',
    locale: 'pt-BR',
    initialDate: initialDate,
    navLinks: true,
    editable: true,
    selectable: true,
    selecMirror: true,
    dayMaxEvents: true,
    events: '../php/autenticacao.php',

    eventClick: function(info) {
      const visualizarModal = new bootstrap.Modal(document.querySelector("#visualizarModal"))
      document.querySelector("#visualizarTitle").innerHTML = info.event.title
      document.querySelector("#visualizarInicio").innerHTML = info.event.start.toLocaleString()
      document.querySelector("#visualizarFim").innerHTML = info.event.end.toLocaleString()

      visualizarModal.show()
    }
  });

  calendar.render();
});












    /*
    [
      {
        title: 'All Day Event',
        start: '2023-01-01'
      },
      {
        title: 'Long Event',
        start: '2023-01-07',
        end: '2023-01-10'
      },
      {
        groupId: 999,
        title: 'Repeating Event',
        start: '2023-01-09T16:00:00'
      },
      {
        groupId: 999,
        title: 'Repeating Event',
        start: '2023-01-16T16:00:00'
      },
      {
        title: 'Conference',
        start: '2023-01-11',
        end: '2023-01-13'
      },
      {
        title: 'Meeting',
        start: '2023-01-12T10:30:00',
        end: '2023-01-12T12:30:00'
      },
      {
        title: 'Lunch',
        start: '2023-01-12T12:00:00'
      },
      {
        title: 'Meeting',
        start: '2023-01-12T14:30:00'
      },
      {
        title: 'Happy Hour',
        start: '2023-01-12T17:30:00'
      },
      {
        title: 'Dinner',
        start: '2023-01-12T20:00:00'
      },
      {
        title: 'Birthday Party',
        start: '2023-01-13T07:00:00'
      },
      {
        title: 'Click for Google',
        url: 'http://google.com/',
        start: '2023-01-28'
      }
    ]
    */