<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/payment.css">
    </link>
</head>

<body>
    <header>
        <ul class="reservation-header">
            <div class="reservation-header-ul">
                <div class="payment">
                    <h2>예약결제</h2>
                </div>
            </div>
            <div class="bar2"></div>
        </ul>
    </header>

    <main>

        <section class="sectionOne">
            <div class="selectRoomList">
                <h3>선택객실목록</h3>
            </div>
            <table border="1px" class="selectRoomListTable" style="width:auto;">
                <tr>
                    <td style="padding: 10px; margin-top: -5px; border-right: hidden; border-left: hidden;"><b>객실명</b>
                    </td>
                    <td style="border-right: hidden;"><b>이용일</b></td>
                    <td style="border-right: hidden;"><b>인원</b></td>
                    <td style="border-right: hidden;"><b>요금타입</b></td>
                    <td style="border-right: hidden;"><b>이용금액</b></td>
                    <td style="border-right: hidden;"><b>결제금액</b></td>
                </tr>
                <tr>
                    <td style="padding:20px; margin-top: -5px; border-right: hidden; border-left:hidden;">머물다(정글짐,미끄럼틀)
                        <div>기준:12명/최대:20명</div>
                    </td>

                    <td class="date ddnayo" style="padding:20px; border-right: hidden;">2025-01-08(수)현재날짜 함수
                        사용하기(today함수인가)</td>

                    <td style="padding:20px; border-right: hidden;">성인12/아동0/유아0</td>

                    <td style="padding:20px; border-right: hidden;">비수기/주중</td>

                    <td style="border-right: hidden;">
                        <ul style="display: inline-block;">
                            <li style="margin-left:-40px;">기본가</li>
                            <li style="margin-left:95px; text-decoration-line: line-through;">550,000원</li>
                        </ul>
                        <ul style="display: inline-block; margin-top:-10px;">
                            <li style="margin-left:-40px;">
                                <div class="ddnayo">기본 객실할인</div>
                            <li style="margin-left:55px;">-160,000원
                        </ul>
                    </td>

                    <td style="padding:20px; border-right: hidden;">390,000원</td>
                    </td>
                </tr>
            </table>



            <table border="1px" class="useOptionListTable">
                <div class="useOptionList">
                    <h3>이용옵션목록</h3>
                </div>
                <tr>
                    <td style=" border-left: hidden; border-right: hidden;">
                        <ul style="padding: 10px; margin-top: -5px;">
                            <b>
                                <li style="float: left; margin-left:10px; ">이용옵션명
                                <li style="float: right; margin-right: 10px;">
                                    <div class="tableFee">결제금액</div>
                            </b>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td style=" border-left: hidden; border-right: hidden;">
                        <ul style="padding:20px; margin-top: -5px;">
                            <li style="float: left;">수영장온수풀(12월~2월)토요일 필수(2박)
                            <li style="float: right;">140,000원
                        </ul>
                    </td>
                </tr>
            </table>
            <div class="FinalFee" style="margin-right:20px;">총 금액 <span class="ddnayo"
                    style="margin-left:35px; font-size: 20px;"><b>530,000</b></span>원</div>

        </section>

        <section class="sectionTwo">

            <div class="left">
                <div>
                    <h3 class="bottomBar">약관동의</h3>
                </div>
                <div class="box"><input type="checkbox"><b>전체동의</b></input></div>
                <div class="box"><input type="checkbox"><b>(필수)이용시 유의사항에 동의</b></input></div>
                <div class="letter1">
                    <div class="letter1">보호자 동반없는 <span style="color: rgb(255, 128, 0);">미성년자는 예약 및 입실 불가합니다.</span>
                    </div>
                    <div class="letter1">예약시 신청하신 <span style="color: rgb(255, 128, 0);;">인원이외에 추가인원은 입실이 거부될 수
                            있습니다.</span></div>
                    <div class="letter1">예약인원 초과로 인한 입실 거부시 환불도 되지 않으니 유의하시기 바랍니다.</div>
                    <div class="letter1">예약후 펜션이나 객실 변경은 해당예약 취소후 다시 예약하셔야 합니다.</div>
                    <div class="letter1">예약변경을 위한 <span style="color: rgb(255, 128, 0);;">취소시에도 취소수수료가 부과</span>되오니 신중하게
                        예약하시기 바랍니다.</div>
                    <div class="letter1"> 최대인원이 2인인 커플전용룸의 경우 유아나 아동은 동반입실이 불가능</span>합니다.</div>
                    <div class="letter1"><span style="color: rgb(255, 128, 0);">애완견 동반시 입실이 불가능 합니다.</span></div>
                    <div class="letter1">퇴실 시에는 내집같이 정돈을 부탁 드립니다.</div>
                </div>
                <div class="box"><input type="checkbox"><b>(필수)취소수수료(예약시점과 무관한 이용일 기준)에 동의</b></input></div>
                <div class="letter2">예약취소는 구매한 사이트 "예약확인/취소" 에서 가능합니다.</div>
                <div class="letter2">취소수수료는 예약시점과는 무관한 <span style="color:#BF396A;">기준</span>입니다.</div>
                <div class="letter2">환불시 <span style="color:#BF396A;">결제하신 금액에서 취소수수료를 제외한 금액을 환불</span>해 드립니다.</div>
                <div class="letter2">취소수수료는 결제금액이 아닌 예약금(객실요금+기타옵션요금) 기준으로 책정됩니다.</div>
                <div class="letter2"><span style="color:#BF396A;">취소수수료가 100% 인 경우 전액 환불되지 않습니다.</span></div>
                <div class="letter2">수수료 내역은 아래와 같습니다.</div>

                <table border="1" class="leftTable">
                    <th>기준</th>
                    <th>취소수수료(%)</th>
                    <th>환불율(%)</th>
                    <tr>
                        <td>이용일 <b>당일</b> 취소시</td>
                        <td>100%</td>
                        <td>환불없음</td>
                    </tr>
                    <tr>
                        <td>이용일 <b>1</b>일전 취소시</td>
                        <td>70%</td>
                        <td>30%환불</td>
                    </tr>
                    <tr>
                        <td>이용일 <b>2</b>일전 취소시</td>
                        <td>50%</td>
                        <td>50%환불</td>
                    </tr>
                    <tr>
                        <td>이용일 <b>3</b>일전 취소시</td>
                        <td>30%</td>
                        <td>70%환불</td>
                    </tr>
                    <tr>
                        <td>이용일 <b>4</b>일전 취소시</td>
                        <td>20%</td>
                        <td>80%환불</td>
                    </tr>
                    <tr>
                        <td>이용일 <b>5</b>일전 취소시</td>
                        <td>15%</td>
                        <td>85%환불</td>
                    </tr>
                    <tr>
                        <td>이용일 <b>6</b>일전 취소시</td>
                        <td>10%</td>
                        <td>90%환불</td>
                    </tr>
                    <tr>
                        <td>이용일 <b>7</b>일전 취소시</td>
                        <td>0%</td>
                        <td>100%환불</td>
                    </tr>
                    <tr style="color: #BF396A;">
                        <td>기본 취소 수수료료</td>
                        <td>0%</td>
                        <td>100%환불</td>
                    </tr>
                </table>
                <div class="box" style="margin-top:20px;"><input type="checkbox"><b>(필수)개인정보 수집 및 이용에 동의</b></input>
                </div>
                <div class="scroll letter2">
                    주식회사 떠나요는 숙박 예약에 필요한 최소한의 개인정보를 수집하고 있으며 동의받은 목적 외 용도로 사용하지 않습니다.
                    <p>
                    <table border="1" class="leftTable">
                        <th>구분</th>
                        <th>수집,이용목적</th>
                        <th>수집,이용항목</th>
                        <th>보유 및 이용기간</th>
                        <tr>
                            <td>예약자(구매자)</td>
                            <td>서비스 이용 및 계약의 이행, 본인 확인, 부정 이용 방지와 불만처리 등 민원처리</td>
                            <td>필수 : 이름,생년월일*,휴대폰번호,차량번호</td>
                            <td>이용 종료 후 1년까지</td>
                        </tr>
                    </table>
                    <p>
                        ※ 생년월일은 「청소년보호법」에 따라 숙박업체의 계약 이행 조건에 따라 미성년자 여부 확인 필수 수집이 필요한 경우 처리되는 정보입니다.
                    <P>※ 동의를 거부할 수 있으나 거부 시 숙박 예약이 제한될 수 있습니다.
                </div>




                <div class="box" style="margin-top:20px;"><input type="checkbox"><b>(선택)개인정보 수집 및 이용에 동의</b></input>
                </div>
                <div class="scroll letter2">
                    주식회사 떠나요는 숙박 예약에 필요한 최소한의 개인정보를 수집하고 있으며 동의받은 목적 외 용도로 사용하지 않습니다.
                    <p>
                    <table border="1" class="leftTable">
                        <th>구분</th>
                        <th>수집,이용목적</th>
                        <th>수집,이용항목</th>
                        <th>보유 및 이용기간</th>
                        <tr>
                            <td>예약자(구매자)</td>
                            <td>서비스 이용 및 계약의 이행, 본인 확인, 부정 이용 방지와 불만처리 등 민원처리</td>
                            <td>비상연락처, 이메일</td>
                            <td>이용 종료 후 1년까지</td>
                        </tr>
                    </table>
                    <p>※ 비상연락처는 개인정보 주체 본인의 적법한 동의 하에 수집되어야 하며, 불법적으로 수집된 개인정보를 이용하는 경우 떠나요는 민형사상의 책임을 지지 않습니다.
                    <P>※ 동의를 거부할 수 있으며, 동의를 거부하셔도 서비스를 이용하실 수 있습니다.

                </div>




                <div class="box" style="margin-top:20px;"><input type="checkbox"><b>(선택)개인정보 제3자 제공에 동의</b></input>
                </div>
                <div class="scroll letter2">
                    주식회사 떠나요는 숙박 예약에 필요한 최소한의 개인정보를 제공하고 있으며 동의받은 목적 외 용도로 제공하지 않습니다.
                    <p>
                    <table border="1" class="leftTable">
                        <th>제공받는자</th>
                        <th>제공목적</th>
                        <th>제공정보</th>
                        <th>보유 및 이용기간</th>
                        <tr>
                            <td>머물다풀빌라</td>
                            <td>예약 상품의 서비스 제공 및 계약의 이행을 위한 본인확인 및 미성년자 여부 확인</td>
                            <td>예약자(이름, 생년월일*, 휴대폰번호, 차량번호)</td>
                            <td>이용 종료 후 1년까지</td>
                        </tr>
                    </table>
                    <p>※ 생년월일은 「청소년보호법」에 따라 숙박업체의 계약 이행 조건에 따라 미성년자 여부 확인 필수 수집이 필요한 경우 처리되는 정보입니다.
                    <P>※ 동의를 거부할 수 있으나 거부 시 숙박 예약이 제한될 수 있습니다.
                </div>
                <div class="box" style="margin-top:20px;"><input type="checkbox"><b>(필수)개인정보 제3자 제공에 동의</b></input>
                </div>
                <div class="scroll letter2">
                    주식회사 떠나요는 숙박 예약에 필요한 최소한의 개인정보를 제공하고 있으며 동의받은 목적 외 용도로 제공하지 않습니다.
                    <p>
                    <table border="1" class="leftTable">
                        <th>제공받는자</th>
                        <th>제공목적</th>
                        <th>제공정보</th>
                        <th>보유 및 이용기간</th>
                        <tr>
                            <td>머물다풀빌라</td>
                            <td>예약 상품의 서비스 제공 및 계약의 이행을 위한 본인확인 및 미성년자 여부 확인</td>
                            <td>예약자(비상연락처*, 이메일)</td>
                            <td>이용 종료 후 1년까지</td>
                        </tr>
                    </table>
                    <p>※ 비상연락처는 개인정보 주체 본인의 적법한 동의 하에 수집되어야 하며, 불법적으로 수집된 개인정보를 이용하는 경우 떠나요는 민형사상의 책임을 지지 않습니다.
                    <P>※ 동의를 거부할 수 있으며, 동의를 거부하셔도 서비스를 이용하실 수 있습니다.
                </div>

                <div class="box" style="margin-top:20px;"><input type="checkbox"><b>(필수)이용자가 미성년자가 아니며 성인임에
                        동의</b></input></div>
            </div>


            <div class="right">
                <div>
                    <h3 class="bottomBar">예약정보입력</h3>
                </div>
                <ul>
                    <li><b class="middlefontsize">예약자명<span style="color: #BF396A;">*</span></b>
                    <li><input type="text" placeholder="예약자명" style="width: 260px; margin-left: 50px;">
                </ul>
                <p class="ddnayo" style="font-size: 13px; margin-left:90px">
                    예약자 실명을 입력하세요.
                    예약 확인시 혼동될 수 있습니다.

                <ul>
                    <li><b class="middlefontsize">생년월일<span style="color: #BF396A;">*</span></b>
                    <li><input type="text" placeholder="생년월일" style="width: 260px; margin-left: 50px;">
                </ul>
                <span class="ddnayo" style="font-size: 13px; margin-left:175px">올바른 생년월일(예)920123)을 입력해주세요.</span>


                <ul>
                    <li><b class="middlefontsize">연락처<span style="color: #BF396A;">*</span></b>
                    <li><select name="color" placeholder="예약번호" class="phone" style="margin-left: 65px;">
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
                    <li>-
                    <li><input type="text" class="phone">
                    <li>-
                    <li><input type="text" class="phone">
                </ul>
                <span class="ddnayo" style="font-size: 13px; margin-left:255px;">올바른 연락처를 입력해주세요.</span>
                <p><span class="ddnayo" style="font-size: 13px; margin-left:7px;">예약관련 문자가 전송됩니다.</span>

                <ul>
                    <li><b class="middlefontsize">비상연락처<span style="color: #BF396A;">*</span></b>
                    <li><select name="color" placeholder="예약번호" class="phone" style="margin-left:35px">
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
                    <li>-
                    <li><input type="text" class="phone">
                    <li>-
                    <li><input type="text" class="phone">
                </ul>


                <ul>
                    <li><b class="middlefontsize">이메일<span style="color: #BF396A;">*</span></b>
                    <li><input type="text" placeholder="이메일" style="width:262px; margin-left: 67px;">
                </ul>

                <ul>
                    <li style="margin-top:-40px;"><b class="middlefontsize">예약요청사항<span
                                style="color: #BF396A;">*</span></b>
                    <li><textarea placeholder="요청사항(최대 125자/한글)" style="margin-left:20px; width:260px" rows="5"
                            cols="125"></textarea>
                </ul>

                <h3 class="bottomBar" style="margin-top: 40px;">결제정보</h3>
                <ul style="margin-left:-15px">
                    <li><b>총 결제금액 </b>
                    <li style="margin-left:200px; font-size: 20px;"><span class="ddnayo"><b>530,000</b></span>원
                </ul>
                <ul style="margin-left: -15px;">
                    <li><b>결제 수단</b>
                    <li><input type="radio" style="margin-left:20px;" name="credit">신용카드
                    <li><input type="radio" name="credit">무통장입금
                </ul>

                <div class="bigBax letter2">
                    <ul style="margin-left:-10px;margin-right:20px;">
                        <li>무통장 (가상계좌) 입금안내</li>
                        <li><span style="color: #BF396A;">입금계좌: 농협은행 3511266961173 주식회사 대부도펜션플러스</span></li>
                        <li><span style="color: #BF396A;">입금이 확인되면, 예약완료문자(업소연락처, 예약번호 등)가 핸드폰으로 전송됩니다.</li>
                        <li>무통장입금시 반드시 예약자명으로 입금하셔야합니다. 그렇지 않으면 입금확인이 되지 않을 수 있습니다.</li></span>
                        <li>예약시점 이후 <span style="color: #BF396A;">12시간</span>(이용일 전날예약시 <span
                                style="color: #BF396A;">6시간</span>, 당일예약시 <span style="color: #BF396A;">6시간</span>) 이내에
                            입금완료하지 않는 경우 <span style="color: #BF396A;">자동취소</span>됩니다.</li>

                    </ul>
                </div>
                <input type="button" value="취소하기" class="cancle">
                <input type="button" value="결제하기" class="finalpayment">

            </div>
        </section>


    </main>





    <!-- <footer>
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
    </footer> -->
    <script>
        const today = new Date();
        const d = document.querySelector(".date");
        var year = today.getFullYear();
        var month = ('0' + (today.getMonth() + 1)).slice(-2);
        var day = ('0' + today.getDate()).slice(-2);

        const week = ["일", "월", "화", "수", "목", "금", "토"];
        const date = week[new Date().getDay()];
        var dateString = year + "년" + month + "월" + day + "일" + "(" + date + ")";

        document.querySelector(".date").textContent = dateString;

    </script>
</body>

</html>