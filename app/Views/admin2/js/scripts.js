/*!
    * Start Bootstrap - SB Admin v7.0.7 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2023 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

//add

// document.addEventListener('DOMContentLoaded', function() {
//     var calendarEl = document.getElementById('calendar');
//     var calendar = new FullCalendar.Calendar(calendarEl, {
//         headerToolbar: {
//             left: 'prev,next today',   // 'today' 버튼 활성화
//             center: 'title',
//             right: 'dayGridMonth,timeGridWeek,timeGridDay'   // 보기 선택 옵션
//         },
//         initialView: 'dayGridMonth',  // 기본 뷰를 'dayGridMonth'로 설정
//         events: [
//             // 여기에 이벤트 데이터를 추가할 수 있습니다.
//         ]
//     });
//     calendar.render();
// });


document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',  // 기본 뷰 설정
        headerToolbar: {
            left: 'prev,next today',   // 'today' 버튼 활성화
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        locale: 'ko',  // 한국어로 표시
    });
    calendar.render();
});
