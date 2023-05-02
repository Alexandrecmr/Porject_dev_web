let evenements = [{
    "title":"Cours",
    "start": "2022-05-25 14:00:00",
    "end": "2022-05-25 16:00:00",
}]
//tableau en Json

window.onload = () => {
    let elementCalendrier = document.getElementById("calendrier")
    //ici on va instancier le calendrier
    let calendrier = new FullCalendar.Calendar(elementCalendrier, {
        //On appelle les composants
        plugins: ['dayGrid','timeGrid','list'], //vue liste pour rdv client avec list
        defaultView: 'list',
        locale: 'fr',
        header:
        {
            left: 'prev,next today',
            center: 'title',
            right: 'timeGridDay,timeGridWeek,dayGridMonth',
        },
        buttonText: {
            today: 'Ce jour',
            month: 'mois',
            week: 'semaine',
            day: 'jour',
        },
        events: evenements,

    })

    calendrier.render()
}