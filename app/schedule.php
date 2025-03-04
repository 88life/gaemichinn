<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> -->
    <!-- <meta name="description" content="" /> -->
    <meta name="author" content="" />
    <title>스케쥴 관리</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/schedule.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- fullcalendar CDN -->
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.min.js'></script>
    <!-- fullcalendar language CDN -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/locales-all.min.js'></script>

    <!--add-->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/locales-all.min.js'></script>

</head>
<body>
    <header>
        <div class="header">
            <div>
                <a href="" class="logo">머물다</a>
            </div>
            <div class="menu">
                <nav class="con">
                    <ul>
                        <li><a href="" class="menu_detail">머물다</a>
                        <li class="line"><a href="" class="menu_detail">객실타입</a>
                        <li class="line">
                            <a href="" class="menu_detail" id="mouse-over">실시간 예약
                                <ul class="sideMenu">
                                    <li><a href="schedule.php">예약 현황</a></li>
                                    <li><a href="reservation_add.php">예약 진행</a></li>
                                    <li><a href="reservation_confirm.php">예약 확인</a></li>
                                </ul>
                            </a>
                        </li>
                        <li class="line"><a href="" class="menu_detail">이용안내</a>
                        <li class="line"><a href="" class="menu_detail">고객게시판</a>
                </nav>
            </div>
        </div>
        <div>
            <ul class="reservation-header">
                <div class="bar1"></div>
                <div class="reservation-header-ul">
                    <div class="reservation-header-li">
                        <li><h4><a href="schedule.php"> 예약 스케쥴 관리 </a></h4></li>
                        <li><a href="reservation_add.php"> 예약 진행 </a></li>
                        <li><a href="reservation_confirm.php"> 예약 확인 </a></li>
                        </div>
                </div>
                <div class="bar2"></div>
        </div>
    </header>


    <main>
 <!-- Calendar Section -->

   
  <!-- calendar 태그 -->
  <div id='calendar-container'>

    <div id='calendar'></div>
    <div id="calendarWrite"></div>
     <div class="circles">
        <div class="circle1"></div>
        <div style="margin-left: 5px;">예약 가능</div>
        <div class="circle2"></div>
        <div style="margin-left: 5px;">예약 진행</div>
        <div class="circle3"></div>
        <div style="margin-left: 5px;">예약 완료</div>
      </div>
      <input type="button" value="예약 진행" class="reservationing"/>
  </div>
  <script>
    (function () {
      $(function () {
        // calendar element 취득
        var calendarEl = $('#calendar')[0];
        // full-calendar 생성하기
        var calendar = new FullCalendar.Calendar(calendarEl, {
          height: '700px', // calendar 높이 설정
          expandRows: true, // 화면에 맞게 높이 재설정
          slotMinTime: '08:00', // Day 캘린더에서 시작 시간
          slotMaxTime: '20:00', // Day 캘린더에서 종료 시간
          customButtons: {
            myCustomButton: {
              text: "일정 추가하기",
              click: function () {
                //부트스트랩 모달 열기
                $("#exampleModal").modal("show");
              }
            },
            mySaveButton: {
              text: "저장하기"
            }
          },
          // 해더에 표시할 툴바
          headerToolbar: {
            left: 'prev',
            center: 'title',
            right: 'next',
          },
          initialView: 'dayGridMonth', // 초기 로드 될때 보이는 캘린더 화면(기본 설정: 달)
          //initialDate: '2021-07-15', // 초기 날짜 설정 (설정하지 않으면 오늘 날짜가 보인다.)
          navLinks: true, // 날짜를 선택하면 Day 캘린더나 Week 캘린더로 링크
          editable: true, // 수정 가능?
          selectable: true, // 달력 일자 드래그 설정가능
          nowIndicator: true, // 현재 시간 마크
          dayMaxEvents: true, // 이벤트가 오버되면 높이 제한 (+ 몇 개식으로 표현)
          locale: 'ko', // 한국어 설정
          eventAdd: function (obj) { // 이벤트가 추가되면 발생하는 이벤트
            console.log(obj);
          },
          eventChange: function (obj) { // 이벤트가 수정되면 발생하는 이벤트
            console.log(obj);
          },
          eventRemove: function (obj) { // 이벤트가 삭제되면 발생하는 이벤트
            console.log(obj);
          },
          select: function (arg) { // 캘린더에서 드래그로 이벤트를 생성할 수 있다.
            var title = prompt('Event Title:');
            if (title) {
              calendar.addEvent({
                title: title,
                start: arg.start,
                end: arg.end,
                allDay: arg.allDay
              })
            }
            calendar.unselect()
          },
          // 이벤트 
          events: [
            {
              title: 'All Day Event',
              start: '2021-07-01',
            },
            {
              title: 'Long Event',
              start: '2021-07-07',
              end: '2021-07-10'
            },
            {
              groupId: 999,
              title: 'Repeating Event',
              start: '2021-07-09T16:00:00'
            },
            {
              groupId: 999,
              title: 'Repeating Event',
              start: '2021-07-16T16:00:00'
            },
            {
              title: 'Conference',
              start: '2021-07-11',
              end: '2021-07-13'
            },
            {
              title: 'Meeting',
              start: '2021-07-12T10:30:00',
              end: '2021-07-12T12:30:00'
            },
            {
              title: 'Lunch',
              start: '2021-07-12T12:00:00'
            },
            {
              title: 'Meeting',
              start: '2021-07-12T14:30:00'
            },
            {
              title: 'Happy Hour',
              start: '2021-07-12T17:30:00'
            },
            {
              title: 'Dinner',
              start: '2021-07-12T20:00:00'
            },
            {
              title: 'Birthday Party',
              start: '2021-07-13T07:00:00'
            },
            {
              title: 'Click for Google',
              url: 'http://google.com/', // 클릭시 해당 url로 이동
              start: '2021-07-28'
            }
          ]
        });
        // 캘린더 랜더링
        calendar.render();
      });
    })();



    // 오늘 날짜 가져오기
    var date = new Date();
    var year = date.getFullYear(); // 년도 추출
    var month = date.getMonth() + 1; // 월 추출 (0부터 시작하므로 1을 더해줌)
    var day = date.getDate(); // 일 추출
    
    // // "calendarWrite" 아이디를 가진 첫 번째 요소를 선택
    let d = document.getElementById("calendarWrite"); 
    d.innerText = "오늘 날짜 : " + year + "년 " + month + "월 " + day + "일";

  </script>

  
  <!-- calendar 태그
  <div id='calendar-container'>
    <div id='calendar'></div>
  </div>-->
  <!-- 부트스트랩 modal 부분 -->
  <!-- Modal -->
  <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">일정 추가하기</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          일정이름 : <input type="text" id="title" /><br />
          시작시간 : <input type="datetime-local" id="start" /><br />
          종료시간 : <input type="datetime-local" id="end" /><br />
          배경색상 :
          <select id="color">
            <option value="red">빨강색</option>
            <option value="orange">주황색</option>
            <option value="yellow">노랑색</option>
            <option value="green">초록색</option>
            <option value="blue">파랑색</option>
            <option value="indigo">남색</option>
            <option value="purple">보라색</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            취소
          </button>
          <button type="button" class="btn btn-primary" id="saveChanges">
            추가
          </button>
        </div>
      </div>
    </div>
  </div> -->

    </main>




    <footer>
        <div class="footer-wrap">
            <a href="#">머물다키즈풀빌라</a>
            <div class="footer-cont">
                <div class="footer-top">
                    <ul>
                        <li><a href="#">오시는 길</a></li>
                        <li><a href="#">문의</a></li>
                        <li><a href="#">개인정보처리방침</a></li>
                        <li><a href="#">이용약관</a></li>
                        <li><a href="#">계좌번호</a></li>
                    </ul>
                </div>
                <div class="footer-comp">
                    <ul>
                        <li>상호 : 머물다 키즈 풀빌라</li>
                        <li>대표 : 김철수</li>
                        <li>전화 : 010-1234-5678</li>
                        <li>사업자번호 : 123-45-67890</li>
                    </ul>
                    <ul class="footer-bottom">
                        <li>주소 : (15653) 경기 안산시 단원구 멍골2길 14</li>
                        <li>이메일 : example@email.com</li>
                        <li>통신판매업 : 제 2099-경기안산-0000호</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</script>
        
</body>
</html>