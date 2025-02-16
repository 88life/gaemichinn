<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Tables - SB Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <!-- <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark"> -->
  <!-- Navbar-->
  <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
        aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="#!">Settings</a></li>
        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
        <li>
          <hr class="dropdown-divider" />
        </li>
        <li><a class="dropdown-item" href="#!">Logout</a></li>
      </ul>
    </li>
  </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <a class="nav-link" href="index.php">
              <!-- <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div> -->
              객실 관리
            </a>
            <a class="nav-link" href="reservation.php">
              <!-- <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div> -->
              예약 관리
            </a>
            <a class="nav-link" href="schedule.php">
              <!-- <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div> -->
              스케쥴 관리
            </a>
            <a class="nav-link" href="reservationNow.php">
              <!-- <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div> -->
              예약 현황 관리
            </a>
          </div>
        </div>
        <div class="sb-sidenav-footer">
          <div class="small">Logged in as:</div>
          Start Bootstrap
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <h1 class="mt-4">예약 현황 관리</h1>
          <hr>
          <div class="reservationNow">
            <div class="first">
              <div class="date" style="margin-right:40px; margin-left:-5px;">가입일</div>
              <input type="date" value="${dateType2}" style="height:20px; width:150px;">
              <div class="wave"> ~ </div>
              <input type="date" value="${dateType2}" style="height:20px; width:150px;">
            </div>
            <br>
            <div class="second">
              <div style="margin-right:35px; margin-left:55px;">상태</div>
              <input type="checkbox" class="second_margin">전체</input>
              <input type="checkbox" class="second_margin">예약 완료</input>
              <input type="checkbox" class="second_margin">예약 대기</input>
              <input type="checkbox" class="second_margin">예약 취소</input>
            </div>
            <br>
            <div class="third" style="margin-left:-145px;">
              <div class="third_search" style="margin-right:40px; margin-left:5px;">검색어</div>
              <input type="text"></input>
              <input type="submit" value="조회하기" style="margin-left:10px;"></input>
            </div>
          </div>
          <br>
          <!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div> -->
          <div class="card mb-4">
            <input type="button" class="room_add" value="등록"
              style="width:100px;margin-left:20px;margin-top:20px; margin-left:1000px;"></input>
            <div class="card-body">
              <table id="datatablesSimple">
                <thead>
                  <tr>
                    <th><input type="checkbox" /></th>
                    <th>번호</th>
                    <th>예약자명</th>
                    <th>전화번호</th>
                    <th>객실명</th>
                    <th>숙박기간</th>
                    <th>총원</th>
                    <th>결제금액</th>
                    <th>상태</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th><input type="checkbox" /></th>
                    <th>번호</th>
                    <th>예약자명</th>
                    <th>전화번호</th>
                    <th>객실명</th>
                    <th>숙박기간</th>
                    <th>총원</th>
                    <th>결제금액</th>
                    <th>상태</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td>100</td>
                    <td>임세미</td>
                    <td>010-2770-7488</td>
                    <td>머물다</td>
                    <td>2025-01-02 ~ 2025-01-03</td>
                    <td>15</td>
                    <td>150,000</td>
                    <td>예약확인</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td>100</td>
                    <td>임세미</td>
                    <td>010-2770-7488</td>
                    <td>머물다</td>
                    <td>2025-01-02 ~ 2025-01-03</td>
                    <td>15</td>
                    <td>150,000</td>
                    <td>예약확인</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td>100</td>
                    <td>임세미</td>
                    <td>010-2770-7488</td>
                    <td>머물다</td>
                    <td>2025-01-02 ~ 2025-01-03</td>
                    <td>15</td>
                    <td>150,000</td>
                    <td>예약확인</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td>100</td>
                    <td>임세미</td>
                    <td>010-2770-7488</td>
                    <td>머물다</td>
                    <td>2025-01-02 ~ 2025-01-03</td>
                    <td>15</td>
                    <td>150,000</td>
                    <td>예약확인</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td>100</td>
                    <td>임세미</td>
                    <td>010-2770-7488</td>
                    <td>머물다</td>
                    <td>2025-01-02 ~ 2025-01-03</td>
                    <td>15</td>
                    <td>150,000</td>
                    <td>예약확인</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td>100</td>
                    <td>임세미</td>
                    <td>010-2770-7488</td>
                    <td>머물다</td>
                    <td>2025-01-02 ~ 2025-01-03</td>
                    <td>15</td>
                    <td>150,000</td>
                    <td>예약확인</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td>100</td>
                    <td>임세미</td>
                    <td>010-2770-7488</td>
                    <td>머물다</td>
                    <td>2025-01-02 ~ 2025-01-03</td>
                    <td>15</td>
                    <td>150,000</td>
                    <td>예약확인</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td>100</td>
                    <td>임세미</td>
                    <td>010-2770-7488</td>
                    <td>머물다</td>
                    <td>2025-01-02 ~ 2025-01-03</td>
                    <td>15</td>
                    <td>150,000</td>
                    <td>예약확인</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td>100</td>
                    <td>임세미</td>
                    <td>010-2770-7488</td>
                    <td>머물다</td>
                    <td>2025-01-02 ~ 2025-01-03</td>
                    <td>15</td>
                    <td>150,000</td>
                    <td>예약확인</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td>100</td>
                    <td>임세미</td>
                    <td>010-2770-7488</td>
                    <td>머물다</td>
                    <td>2025-01-02 ~ 2025-01-03</td>
                    <td>15</td>
                    <td>150,000</td>
                    <td>예약확인</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td>100</td>
                    <td>임세미</td>
                    <td>010-2770-7488</td>
                    <td>머물다</td>
                    <td>2025-01-02 ~ 2025-01-03</td>
                    <td>15</td>
                    <td>150,000</td>
                    <td>예약확인</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td>100</td>
                    <td>임세미</td>
                    <td>010-2770-7488</td>
                    <td>머물다</td>
                    <td>2025-01-02 ~ 2025-01-03</td>
                    <td>15</td>
                    <td>150,000</td>
                    <td>예약확인</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td>100</td>
                    <td>임세미</td>
                    <td>010-2770-7488</td>
                    <td>머물다</td>
                    <td>2025-01-02 ~ 2025-01-03</td>
                    <td>15</td>
                    <td>150,000</td>
                    <td>예약확인</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td>100</td>
                    <td>임세미</td>
                    <td>010-2770-7488</td>
                    <td>머물다</td>
                    <td>2025-01-02 ~ 2025-01-03</td>
                    <td>15</td>
                    <td>150,000</td>
                    <td>예약확인</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td>100</td>
                    <td>임세미</td>
                    <td>010-2770-7488</td>
                    <td>머물다</td>
                    <td>2025-01-02 ~ 2025-01-03</td>
                    <td>15</td>
                    <td>150,000</td>
                    <td>예약확인</td>
                  </tr>

                </tbody>
              </table>
              <button class="delete_button">승인</button>
            </div>
          </div>
          <h1 style="margin-top:70px;">예약 현황 상세</h1>
          <hr>
          <table border="1" style="margin-top:30px; margin-bottom:70px;">
            <tr>
              <td bgcolor="EDEBEB">예약자명</td>
              <td>
                <input type="text">
              </td>
              <td bgcolor="EDEBEB">전화번호</td>
              <td>
                <input type="text"></input>
              </td>
            </tr>
            <tr>
              <td bgcolor="EDEBEB">예약일</td>
              <td>
                <input type="date" value="${dateType2}">
              </td>
              <td bgcolor="EDEBEB">예약객실</td>
              <td>머물다(정글짐,미끄럼틀)</td>
            </tr>
            <tr>
              <td bgcolor="EDEBEB">신청인원</td>
              <td><input type="text" style="width: 70px;" /> 명</td>
              <td bgcolor="EDEBEB">결제금액</td>
              <td></td>
            </tr>
            <tr>
              <td bgcolor="EDEBEB">결제수단</td>
              <td>
                <input type="radio">신용카드</input>
                <input type="radio">무통장입금</input>
              </td>
              <td bgcolor="EDEBEB">예약대기</td>
              <td>
                <form action="">
                  <select name="language">
                    <option value="예약 대기">예약 대기
                    <option value="예약 취소">예약 취소
                    <option value="예약 완료">예약 완료
                  </select>
                </form>
              </td>
            </tr>
          </table>
          <button class="delete_button">삭제</button>
          <button class="index_button">목록</button>
          <button class="save_button">저장</button>
        </div>
      </main>
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2023</div>
            <div>
              <a href="#">Privacy Policy</a>
              &middot;
              <a href="#">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
    crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
</body>

</html>