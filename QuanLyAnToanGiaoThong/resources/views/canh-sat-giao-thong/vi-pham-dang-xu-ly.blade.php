<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cảnh sát giao thông: Vi phạm đang xử lý</title>

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
                <div class="text">Vi phạm đang xử lý</div>
            </div>
            <div class="search">
                <form action="#">
                    <input type="search" name="searchPattern" placeholder="Tìm kiếm" id="">
                    <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
        <div class="form-section">
            <div class="title-underline">
                Hôm nay - Thứ Bảy, 7 tháng 5, 2022
            </div>
            <div class="history-list">
                <div class="history-item">
                    <div class="time">16:26</div>
                    <div class="text"><a href="#">Xe ô tô biển kiểm soát 51F-970.22 - Chủ phương tiện: Bạch Thị Vân Anh</a></div>
                </div>
                <div class="history-item">
                    <div class="time">10:23</div>
                    <div class="text"><a href="#">Xe ô tô biển kiểm soát 30F-298.12 - Chủ phương tiện: Võ Thị Lệ Nga</a></div>
                </div>
                <div class="history-item">
                    <div class="time">09:58</div>
                    <div class="text"><a href="#">Xe máy biển soát 63-B9 028.97 - Chủ phương tiện: Thân Vĩnh Long</a></div>
                </div>
            </div>
        </div>
        <div class="form-section">
            <div class="title-underline">
                Thứ Năm, 5 tháng 5, 2022
            </div>
            <div class="history-list">
                <div class="history-item">
                    <div class="time">18:59</div>
                    <div class="text"><a href="#">Xe máy biển soát 94-D1 388.70 - Chủ phương tiện: Nguyễn Phi Long</a></div>
                </div>
            </div>
        </div>
    </section>
    @include('include/footer')

    <script src="../../../user/js/nav.js"></script>
    <script src="../../../user/js/footer.js"></script>
    <script src="../../../user/js/form.js"></script>
    <script src="../../../user/js/canh-sat-giao-thong/main-menu.js"></script>
</body>

</html>