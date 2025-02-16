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
                    <h1 class="mt-4">예약현황상세</h1>
                    <hr>
                    <table border="1">
                        <tr>
                            <td bgcolor="EDEBEB">객실이름</td>
                            <td></td>
                            <td bgcolor="EDEBEB">노출 여부</td>
                            <td>
                                <input type="radio">노출</input>
                                <input type="radio">비노출</input>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="EDEBEB">썸네일</td>
                            <td colspan="4">
                                <input type="text" style="width:400px; margin-right:20px;" />
                                <input type="submit" value="찾아보기" />
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="EDEBEB">기준인원</td>
                            <td><input type="text" style="width: 70px;" /> 명</td>
                            <td bgcolor="EDEBEB">최대인원</td>
                            <td><input type="text" style="width: 70px;" /> 명</td>
                        </tr>
                        <tr>
                            <td bgcolor="EDEBEB">객실 유형</td>
                            <td>
                                <input type="radio">거실+객실</input>
                                <input type="radio">거실</input>
                                <input type="radio">객실</input>
                            </td>
                            <td bgcolor="EDEBEB">평수</td>
                            <td><input type="text" style="width: 70px;" /> 평</td>
                        </tr>
                        <tr>
                            <td bgcolor="EDEBEB">기준가</td>
                            <td><input type="text" style="width: 70px;" /> 원</td>
                            <td bgcolor="EDEBEB"></td>
                            <td></td>
                        </tr>
                    </table>
                    <br>
                    <!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div> -->
                    <div class="card mb-4">

                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
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
                        </div>
                    </div>
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