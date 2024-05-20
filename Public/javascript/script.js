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
    selectMirror: true,
    dayMaxEvents: true,
    events: '../php/autenticacao.php',

    eventClick: function(info) {
      const visualizarModal = new bootstrap.Modal(document.querySelector("#visualizarModal"))
      document.querySelector("#visualizarTitle").innerHTML = info.event.title
      document.querySelector("#visualizarInicio").innerHTML = info.event.start.toLocaleString()
      document.querySelector("#visualizarFim").innerHTML = info.event.end.toLocaleString()

      visualizarModal.show()
    },

    select: function(info) {
      const cadastrarModal = new bootstrap.Modal(document.querySelector("#cadastrarModal"))

      document.getElementById("cad_start").value = converterData(info.start)
      document.getElementById("cad_end").value = converterData(info.start)
      
      cadastrarModal.show()
    }

  });

  calendar.render();

  function converterData(data) {
    const dataObj = new Date(data)
    const ano = dataObj.getFullYear()
    const mes = String(dataObj.getMonth() + 1).padStart(2,'0')
    const dia = String(dataObj.getDate()).padStart(2,'0')
    const hora = String(dataObj.getHours()).padStart(2,'0')
    const minuto = String(dataObj.getMinutes()).padStart(2,'0')
    return `${ano}-${mes}-${dia}T${hora}:${minuto}`
  }

  const formCadEvento = document.querySelector("#formCadEvento")
  
  if (formCadEvento) {
    formCadEvento.addEventListener("submit", async(e) => {
      e.preventDefault()
      const dadosForm = new FormData(formCadEvento)
      await fetch("autenticacao.php", {
        method: "POST",
        body: dadosForm
      })
    })
  }

});