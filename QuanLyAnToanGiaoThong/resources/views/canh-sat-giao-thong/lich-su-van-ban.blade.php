<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cảnh sát giao thông: Lịch sử văn bản</title>

    <link rel="stylesheet" href="../../../user/css/manager.css">
    <script src="https://kit.fontawesome.com/043ac30448.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('include.header')
    <div style="display: none;">
        <p id="name">{{ $name }}</p>
        <p id="id">{{ $id }}</p>
    </div>
    <section class="manager-section">
        <div class="manager-title">
            <div class="title-name">
                <div class="text">Lịch sử lập văn bản</div>
                <button class="btn" onclick="togglePersonView('.list-view', '.violation-view')"><i class="fa-solid fa-car-burst"></i></button>
            </div>
            <div class="search">
                <form action="#">
                    <input type="search" name="searchPattern" placeholder="Tìm kiếm" id="">
                    <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
        <div class="form-section list-view">
            <div class="title-underline">
                Hôm nay - Thứ Bảy, 7 tháng 5, 2022
            </div>
            <div class="history-list">
                <div class="history-item">
                    <div class="time">16:26</div>
                    <div class="text">
                        <p>Xe ô tô biển kiểm soát 51F-970.22 - Chủ phương tiện: Bạch Thị Vân Anh</p>
                        <a href="#">Quyết định xử phạt vi phạm hành chính</a>
                    </div>
                </div>
                <div class="history-item">
                    <div class="time">10:23</div>
                    <div class="text">
                        <p>Xe ô tô biển kiểm soát 30F-298.12 - Chủ phương tiện: Võ Thị Lệ Nga</p>
                        <a href="#">Biên bản vi phạm hành chính</a>
                    </div>
                </div>
                <div class="history-item">
                    <div class="time">09:58</div>
                    <div class="text">
                        <p>Xe máy biển soát 63-B9 028.97 - Chủ phương tiện: Thân Vĩnh Long</p>
                        <a href="#">Biên bản tạm giữ tang vật, phương tiện theo thủ tục hành chính</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-section list-view">
            <div class="title-underline">
                Thứ Năm, 5 tháng 5, 2022
            </div>
            <div class="history-list">
                <div class="history-item">
                    <div class="time">18:59</div>
                    <div class="text">
                        <p>Xe máy biển soát 94-D1 388.70 - Chủ phương tiện: Nguyễn Phi Long</p>
                        <a href="#">Quyết định xử phạt vi phạm hành chính</a>
                    </div>
                </div>
                <div class="history-item">
                    <div class="time">09:07</div>
                    <div class="text">
                        <p>Xe máy biển kiểm soát 29-AA 096.58 - Chủ phương tiện: Vi Thị Mẫn Hà</p>
                        <a href="#">Biên bản vi phạm hành chính</a>
                    </div>
                </div>
                <div class="history-item">
                    <div class="time">08:50</div>
                    <div class="text">
                        <p>Xe ô tô biển kiểm soát 30G-384.23 - Chủ phương tiện: Lê Thị Trúc Vy</p>
                        <a href="#">Quyết định khám người theo thủ tục hành chính</a>
                    </div>
                </div>
                <div class="history-item">
                    <div class="time">08:30</div>
                    <div class="text">
                        <p>Xe ô tô biển kiểm soát 29C-236.78 - Chủ phương tiện: Đinh Tuấn Kỳ</p>
                        <a href="#">Quyết định tạm giữ tang vật, chứng chỉ hành nghề</a>
                    </div>
                </div>
                <div class="history-item">
                    <div class="time">08:18</div>
                    <div class="text">
                        <p>Xe máy biển soát 59-F2 258.88 - Chủ phương tiện: Phạm Văn Hà</p>
                        <a href="#">Quyết định xử phạt vi phạm hành chính theo thủ tục xử phạt không lập biên bản</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-section violation-view hide">
            <table>
                <tr>
                    <th>stt</th>
                    <th>phương tiện vi phạm</th>
                    <th>thời gian</th>
                    <th>phương thức phát hiện</th>
                    <th>tình trạng xử lý</th>
                    <th>mô tả</th>
                    <th></th>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Ô tô biển số 43-C1 09876</td>
                    <td>Tue Jun 29 2021 03:23:26</td>
                    <td>Camera</td>
                    <td>Đã xử lý</td>
                    <td>Vượt đèn đỏ</td>
                    <td onclick="openModal('.document-his-modal')"><i class="fa-solid fa-angles-right"></i></td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Xe máy biển 43-C1 09876</td>
                    <td>Tue May 10 2022 16:43:07</td>
                    <td>Trực tiếp</td>
                    <td>Đã xử lý</td>
                    <td>Vượt đèn đỏ</td>
                    <td><i class="fa-solid fa-angles-right"></i></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Ô tô biển số 43-C1 09876</td>
                    <td>Wed Mar 02 2022 07:44:49</td>
                    <td>Camera</td>
                    <td>Đã xử lý</td>
                    <td>Nồng độ cồn vượt quá 50ml</td>
                    <td><i class="fa-solid fa-angles-right"></i></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Ô tô biển số 43-C1 09876</td>
                    <td>Wed Mar 02 2022 07:44:49</td>
                    <td>Camera</td>
                    <td>Đã xử lý</td>
                    <td>Nồng độ cồn vượt quá 50ml</td>
                    <td><i class="fa-solid fa-angles-right"></i></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Ô tô biển số 43-C1 09876</td>
                    <td>Wed Mar 02 2022 07:44:49</td>
                    <td>Camera</td>
                    <td>Đã xử lý</td>
                    <td>Nồng độ cồn vượt quá 50ml</td>
                    <td><i class="fa-solid fa-angles-right"></i></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Ô tô biển số 43-C1 09876</td>
                    <td>Wed Mar 02 2022 07:44:49</td>
                    <td>Camera</td>
                    <td>Đã xử lý</td>
                    <td>Nồng độ cồn vượt quá 50ml</td>
                    <td><i class="fa-solid fa-angles-right"></i></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Ô tô biển số 43-C1 09876</td>
                    <td>Wed Mar 02 2022 07:44:49</td>
                    <td>Camera</td>
                    <td>Đã xử lý</td>
                    <td>Nồng độ cồn vượt quá 50ml</td>
                    <td><i class="fa-solid fa-angles-right"></i></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Ô tô biển số 43-C1 09876</td>
                    <td>Wed Mar 02 2022 07:44:49</td>
                    <td>Camera</td>
                    <td>Đã xử lý</td>
                    <td>Nồng độ cồn vượt quá 50ml</td>
                    <td><i class="fa-solid fa-angles-right"></i></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Ô tô biển số 43-C1 09876</td>
                    <td>Wed Mar 02 2022 07:44:49</td>
                    <td>Camera</td>
                    <td>Đã xử lý</td>
                    <td>Nồng độ cồn vượt quá 50ml</td>
                    <td><i class="fa-solid fa-angles-right"></i></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Ô tô biển số 43-C1 09876</td>
                    <td>Wed Mar 02 2022 07:44:49</td>
                    <td>Camera</td>
                    <td>Đã xử lý</td>
                    <td>Nồng độ cồn vượt quá 50ml</td>
                    <td><i class="fa-solid fa-angles-right"></i></td>
                </tr>
            </table>
        </div>
        <div class="load-more">
            <button class="btn btn-animation">Tải thêm <i class="fa-solid fa-angles-down"></i></button>
        </div>
    </section>
    @include('include/footer')

    <div class="modal document-his-modal">
        <div class="large-modal">
            <h1 class="title">Lịch sử lập văn bản</h1>
            <div class="list-section">
                <div class="history-list">
                    <div class="history-item">
                        <div class="time">16:26 10/03/2021</div>
                        <div class="text">
                            <a href="#">Quyết định xử phạt vi phạm hành chính</a>
                        </div>
                    </div>
                    <div class="history-item">
                        <div class="time">10:23 10/03/2021</div>
                        <div class="text">
                            <a href="#">Biên bản vi phạm hành chính</a>
                        </div>
                    </div>
                    <div class="history-item">
                        <div class="time">09:58 10/03/2021</div>
                        <div class="text">
                            <a href="#">Biên bản tạm giữ tang vật, phương tiện theo thủ tục hành chính</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-group">
                <button class="btn" onclick="closeModal('.document-his-modal')">Đóng</button>
            </div>
        </div>
    </div>

    <script src="../../../user/js/nav.js"></script>
    <script src="../../../user/js/footer.js"></script>
    <script src="../../../user/js/form.js"></script>
    <script src="../../../user/js/canh-sat-giao-thong/main-menu.js"></script>
    <script src="../../../user/js/canh-sat-giao-thong/view-handler.js"></script>
</body>

</html>