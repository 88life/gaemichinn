<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>예약확인</title>
    <link rel="stylesheet" href="css/reservation_confirm.css">
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
                        <li><a href="reservation_add.php"> 예약 진행 </a></li>
                        <li>
                            <h4><a href="reservation_confirm.php"> 예약 확인 </a></h4>
                        </li>
                    </div>
                </div>
                <div class="bar2"></div>
        </div>
    </header>

    <main>
        <div class="main">
            <div class="reservation">
                <ul>
                    <li class="comfirm">예약 확인</li>
                    <li><input type="text" placeholder="예약자명" class="username radius"></li>
                    <li>
                        <ul class="phonenumber-li">
                            <li class="phonenumber">
                                <select name="color" placeholder="예약번호" class="radius number">
                                    <option value="010">010</obtion>
                                    <option value="011">011</obtion>
                                    <option value="016">016</obtion>
                                    <option value="017">017</obtion>
                                    <option value="018">018</obtion>
                                    <option value="019">019</obtion>
                                    <option value="0502">0502</obtion>
                                    <option value="0503">0503</obtion>
                                    <option value="0504">0504</obtion>
                                    <option value="0507">0507</obtion>
                                </select>
                            </li>
                            - <li class="phonenumber"><input type="text" class="radius number"></li>
                            - <li class="phonenumber"><input type="text" class="radius number"></li>
                        </ul>
                    </li>
                    <!-- <li style="font-size:13px; color:gray; margin-top:8px;">예약시 입력하신 휴대폰 번호를 입력하세요</li> -->
                    <li>
                        <input type="text" placeholder="예약번호" class="usernumber radius">
                    </li>
                    <!-- <li style="font-size:13px; color:gray; margin-top:-10px;">예약시 휴대폰으로 발송된 예약번호를 입력하세요</li> -->
                    <input type="button" value="예약조회" onclick="check()" class="button radius"></input>
                    <!-- <li style="font-size:13px; color:gray; margin-top:5px;">*위에 입력한 정보는 저장되지 않습니다.</li> -->
                </ul>
            </div>
        </div>
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
    <script>
        function check() {
            var popupW = 460;
            var popupH = 185;
            var left = Math.ceil((window.screen.width - popupW) / 2);
            var top = Math.ceil((window.screen.height - popupH) / 2);


            window.open("popup.php", "a", 'width=' + popupW + ',height=' + popupH + ',left=' + left + ',top=' + top + ',scrollbars=yes,resizable=no,toolbar=no,titlebar=no,menubar=no,location=no');
        }



    </script>
</body>

</html>