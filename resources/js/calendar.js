window.onload = () => {
    let elementCalendrier = document.getElementById("calendrier")

    let xmlhttp = new XMLHttpRequest()

    xmlhttp.onreadystatechange = () => {
        if(xmlhttp.readyState == 4){
            if(xmlhttp.status == 200){
                let evenements = JSON.parse(xmlhttp.responseText)

                // On instancie le calendrier
                let calendrier = new FullCalendar.Calendar(elementCalendrier, {
                    // On appelle les composants
                    plugins: ['dayGrid','timeGrid','list','interaction'],
                    defaultView: 'timeGridWeek',
                    locale: 'fr',
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,list'
                    },
                    buttonText: {
                        today: 'Aujourd\'hui',
                        month: 'Mois',
                        week: 'Semaine',
                        list: 'Liste'
                    },
                    events: evenements,
                    nowIndicator: true,
                    editable: true,
                    eventDrop: (infos) => {
                        if(!confirm("Etes vous sûr.e de vouloir déplacer cet évènement")){
                            infos.revert();
                        }
                    },
                    eventResize: (infos) => {
                        console.log(infos.event.end)
                    }
                })
                calendrier.render()
            }
        }
    }

    xmlhttp.open('get', 'http://calendrier.test/liste.php', true)
    xmlhttp.send(null)
}