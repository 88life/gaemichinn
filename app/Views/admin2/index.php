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

    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />

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
                    <h1 class="mt-4">객실관리</h1>
                    <hr>
                    <br>
                    <div class="search">
                        <div class="search_text">검색어</div>
                        <input type="text" class="search_content"></input>
                        <input type="button" value="조회하기"></input>
                    </div>


                    <div class="card mb-4">
                        <input type="button" class="room_add" value="객실추가"
                            style="width:100px;margin-left:20px;margin-top:20px; margin-left:1000px;"></input>
                        <div class="card-body">

                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>번호</th>
                                        <th>객실 이름</th>
                                        <th>객실 유형</th>
                                        <th>평수</th>
                                        <th>기준인원</th>
                                        <th>최대인원</th>
                                        <th>노출상태</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>번호</th>
                                        <th>객실 이름</th>
                                        <th>객실 유형</th>
                                        <th>평수</th>
                                        <th>기준인원</th>
                                        <th>최대인원</th>
                                        <th>노출상태</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>100</td>
                                        <td>머물다(정글짐, 미끄럼틀)</td>
                                        <td>객실+거실</td>
                                        <td>75평</td>
                                        <td>12명</td>
                                        <td>20명</td>
                                        <td>노출</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <h1 class="mt-4" style="margin-top:150px;">객실 관리 상세</h1>
                    <hr>
                    <table border="1" style="margin-top:30px;">
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




                    <h5 class="mt-4" style="margin-top:50px;">옵션 영역</h5>
                    <table border="1">
                        <tr>
                            <td bgcolor="EDEBEB">옵션1</td>
                            <td>
                                <input type="text">
                            </td>
                            <td bgcolor="EDEBEB">가격</td>
                            <td>
                                <input type="text">원</input>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="EDEBEB">개수 단위</td>
                            <td>
                                <input type="radio">인</input>
                                <input type="radio">박</input>
                                <input type="radio">세트</input>
                            </td>
                            <td bgcolor="EDEBEB">예약객실</td>
                            <td>머물다(정글짐,미끄럼틀)</td>
                        </tr>
                        <tr>
                            <td bgcolor="EDEBEB">설명</td>
                            <td colspan="4">
                                <textArea style="width: 100%; height:50px;"></textArea>
                            </td>
                        </tr>
                    </table>

                    <br>
                    <table border="1">
                        <tr>
                            <td bgcolor="EDEBEB">옵션2</td>
                            <td>
                                <input type="text">
                            </td>
                            <td bgcolor="EDEBEB">가격</td>
                            <td>
                                <input type="text">원</input>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="EDEBEB">개수 단위</td>
                            <td>
                                <input type="radio">인</input>
                                <input type="radio">박</input>
                                <input type="radio">세트</input>
                            </td>
                            <td bgcolor="EDEBEB">예약객실</td>
                            <td>머물다(정글짐,미끄럼틀)</td>
                        </tr>
                        <tr>
                            <td bgcolor="EDEBEB">설명</td>
                            <td colspan="4">
                                <textArea style="width: 100%; height:50px;"></textArea>
                            </td>
                        </tr>
                    </table>

                    <br>
                    <table border="1">
                        <tr>
                            <td bgcolor="EDEBEB">옵션3</td>
                            <td>
                                <input type="text">
                            </td>
                            <td bgcolor="EDEBEB">가격</td>
                            <td>
                                <input type="text">원</input>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="EDEBEB">개수 단위</td>
                            <td>
                                <input type="radio">인</input>
                                <input type="radio">박</input>
                                <input type="radio">세트</input>
                            </td>
                            <td bgcolor="EDEBEB">예약객실</td>
                            <td>머물다(정글짐,미끄럼틀)</td>
                        </tr>
                        <tr>
                            <td bgcolor="EDEBEB">설명</td>
                            <td colspan="4">
                                <textArea style="width: 100%; height:50px;"></textArea>
                            </td>
                        </tr>
                    </table>

                    <br>
                    <table border="1">
                        <tr>
                            <td bgcolor="EDEBEB">옵션4</td>
                            <td>
                                <input type="text">
                            </td>
                            <td bgcolor="EDEBEB">가격</td>
                            <td>
                                <input type="text">원</input>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="EDEBEB">개수 단위</td>
                            <td>
                                <input type="radio">인</input>
                                <input type="radio">박</input>
                                <input type="radio">세트</input>
                            </td>
                            <td bgcolor="EDEBEB">예약객실</td>
                            <td>머물다(정글짐,미끄럼틀)</td>
                        </tr>
                        <tr>
                            <td bgcolor="EDEBEB">설명</td>
                            <td colspan="4">
                                <textArea style="width: 100%; height:50px;"></textArea>
                            </td>
                        </tr>
                    </table>
                    <button class="option_add_button">+옵션 추가</button>
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