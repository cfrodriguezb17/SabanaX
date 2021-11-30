document.addEventListener('DOMContentLoaded', function() {

  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale: 'es',
    headerToolbar: {
      left: 'prev, next today',
      center: 'title',
      right: 'dayGridMonth, timeGridWeek, listWeek'
    },
    themeSystem: 'bootstrap',

    eventClick: function(info) {
        // activar onclick evento
    },
    
    events: 'http://localhost/SabanaX/views/cliente/calendario/calendarioEventos.php',

  });
  calendar.render();
});