<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>예약 진행</title>
    <link rel="stylesheet" href="css/reservation_add.css">
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
                        <li><a href="schedule.php"> 예약 스케쥴 관리 </a></li>
                        <li>
                            <h4><a href="reservation_add.php"> 예약 진행 </a></h4>
                        </li>
                        <li><a href="reservation_confirm.php"> 예약 확인 </a></li>
                    </div>
                </div>
                <div class="bar2"></div>
        </div>
    </header>


    <main>




        <section id="one">
            <h2 class="meomulda font2_0">머물다풀빌라</h2>
            <div class="bigbax">
                <ul>
                    <b>
                        <li class="bigbaxContent">주소</li>
                        <li class="bigbaxContent">연락처</li>
                        <li class="bigbaxContent">결제방법</li>
                    </b>
                </ul>
                <ul>
                    <li class="bigbaxContent bigbaxContent-right">경기 안산시 단원구 멍골2길 14-1 (대부남동) <a
                            href="https://maps.app.goo.gl/LTQicgPYaVZ4tTucA" class="ddnayo"><span
                                class="ddnayo">지도보기</span></a></li>
                    <li class="bigbaxContent bigbaxContent-right">010-5898-2950</li>
                    <li class="bigbaxContent bigbaxContent-right">카드 / 무통장</li>
                </ul>
            </div>
        </section>




        <section id="two">
            <h2 class="period font2_0">숙박기간</h2>
            <div class="reservationPeriod">
                <ul class="period-ul">
                    <li><img src="image/cal.png" style="width:40px; height:40px; margin-left:-145px;"></li>
                    <div class="v-line"></div>
                    <li class="period-li inDay">입실일 </li>
                    <li class="period-li">
                        <input type="date" id="date" max="2026-01-01" min="2024-01-01">
                    </li>
                    <li>
                        <div class=" oneDay">1박</div>
                    <li>
                        <div class="outDay">퇴실일 </div>
                    <li>
                        <div class="friday">
                            <input type="date" id="date" max="2026-01-01" min="2024-01-01">
                        </div>
                </ul>
            </div>
        </section>




        <section id="three">

            <h2 class="roomSelect font1_8">객실선택</h2>

            <div class="selectPrice">
                <div class="selectPrice-img">
                    <img src="image/01.jpg"
                        style="width:150px; height:150px; margin-left:-80px; margin-top:15px;"></img>
                </div>

                <div class="left">
                    <ul>
                        <b>
                            <li class="imageRight imageRightB">머물다(정글짐,미끄럼틀)</li>
                        </b>
                        <li class="imageRight BX">기준 12명, 최대 20명</li>
                        <li class="imageRight BX">거실+객실 / 75평</li>
                    </ul>
                </div>
                <div class="center">
                    <ul>
                        <div class="container" style="margin-bottom:20px;">
                            <li class="center-li">성인 </li>
                            <input type='button' onclick="minus_adult()" value='-' />
                            <span id='adult'>0</span>명
                            <input type='button' onclick="plus_adult()" value='+' />
                        </div>

                        <div class="container" style="margin-bottom:20px;">
                            <li class="center-li">아동 </li>

                            <input type='button' onclick='minus_child()' value='-' />
                            <div id='child'>0</div>명
                            <input type='button' onclick='plus_child()' value='+' />
                        </div>
                        <div class="container">
                            <li class="center-li">유아 </li>
                            <input type='button' onclick='minus_baby()' value='-' />
                            <div id='baby'>0</div>명
                            <input type='button' onclick="plus_baby()" value='+' />
                        </div>
                    </ul>
                </div>
                <div class="right">
                    <ul style="margin-left : 30px; margin-top : 30px;">
                        <input type="button" value="선택" class="selectPrice-right-except black"></input>
                        <li class="price1" style="margin-top:20px !important;">
                            <h2><span>720000</span>원</h2>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="threeBottomText">*예약에서는 기준인원까지 예약 가능하고, 초과인원에 대해서는 현장 결제</div>
        </section>




        <section id="four">
            <h2 class="optionSelect font1_8">옵션선택</h2>
            <table cellspacing="0" style="margin-top : 40px" class="fourTable">

                <tr>
                    <td class=".TablebottomLine" style="border-bottom: 1px lightgray solid;">
                        <ul>
                            <li>
                                <h2 class="ddnayo"><b>인원추가</b></h2>
                            </li>
                            <li>(취침 안하고 가셔도 입실로 해당 되며 추가금 발생 됩니다.)</li>
                            <li style="margin-bottom : 15px;">인원추가 3만원 (24개월 미만 제외)</li>
                            <div class="button1">
                                <input type='button' onclick='minus2()' value='-' />
                                <span id='result2'>1</span>인
                                <input type='button' onclick='plus2()' value='+' />
                            </div>
                        </ul>

                        <div class="option1">
                            <ul class="option-ul">
                                <input type="button" value="선택" class="selectPrice-right-select black">
                                <li class="price black" style="margin-left:55px;">
                                    <h2 style="font-size:1.5em"><span class="price2">30000</span>원</h2>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class=".TablebottomLine" style="border-bottom: 1px lightgray solid;">
                        <ul>
                            <li>
                                <h2 class="ddnayo"><b>온수 풀 (12월~2월에만 선택) 토요일 필수</b></h2>
                            </li>

                            <li>개별수영장-실내온수풀 3.5x8m, 미끄럽틀</li>
                            <li>당일 신청시 따뜻함이 덜하실 수 있으니 신청 하실분은 미리 부탁드려요.</li>
                            <li style="margin-bottom : 15px;">온수풀장의 온수 온도는 28~31도 사이로 유지되며 이용시간은 입실 당일 10시까지 입니다.</li>
                        </ul>
                        <div class="button">
                            <input type='button' onclick='minus3()' value='-' />
                            <span id='result3'>1</span>박
                            <input type='button' onclick='plus3()' value='+' />
                        </div>
                        <div class="option2">
                            <ul class="option-ul">
                                <input type="button" value="선택" class="selectPrice-right-select black">
                                <li class="price black" style="margin-left:55px">
                                    <h2 style="font-size:1.5em"><span class="price3">50000</span>원</h2>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class=".TablebottomLine" style="border-bottom: 1px lightgray solid;">
                        <ul>
                            <li>
                                <h2 class="ddnayo"><b>온수 풀 (12월~2월에만 선택) 토요일 필수</b></h2>
                            </li>
                            <li>개별수영장-실내온수풀 3.5x8m, 미끄럽틀</li>
                            <li>당일 신청시 따뜻함이 덜하실 수 있으니 신청 하실분은 미리 부탁드려요.</li>
                            <li style="margin-bottom : 15px;">온수풀장의 온수 온도는 28~31도 사이로 유지되며 이용시간은 입실 당일 10시까지 입니다.</li>
                        </ul>
                        <div class="button">
                            <input type='button' onclick='minus4()' value='-' />
                            <span id='result4'>1</span>박
                            <input type='button' onclick='plus4()' value='+' />
                        </div>
                        <div class="option3">
                            <ul class="option-ul">
                                <input type="button" value="선택" class="selectPrice-right-select black">
                                <li class="price black" style="margin-left:55px">
                                    <h2 style="font-size:1.5em"><span class="price4">70000</span>원</h2>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <ul>
                            <li>
                                <h2 class="ddnayo"><b>바베큐</b></h2>
                            </li>
                            <li>바베큐는 펜션 신청or직접준비 가능 (펜션 신청시 추가 요금 발생)</li>
                            <li>바베큐는 직접 준비시-숯,망,토치,부탄가스,번개탄,장갑 등 개인지참입니다.(그릴만 있어요)</li>
                            <li style="margin-bottom : 15px;">바베큐는 현장 결제입니다.</li>
                        </ul>
                        <div class="button4">
                            <input type='button' onclick='minus5()' value='-' />
                            <span id='result5'>1</span>셋트
                            <input type='button' onclick='plus5()' value='+' />
                        </div>
                        <div class="option4">
                            <ul class="option-ul">
                                <input type="button" value="선택" class="selectPrice-right-select black">
                                <li class="price black" style="margin-left:85px">
                                    <h2 style="font-size:1.5em"><span class="price5">1</span>원</h2>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>

            </table>
            <div class="reservationFee">
                <h2>총 결제금액 : <span class="result">0</span>원</h2>
            </div>
            <input type="button" value="예약결제" class="reservationBuy" onclick="payment()"></input>

        </section>

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
    <script src="reservation_add.js">
    </script>

</body>

</html>