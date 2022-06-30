<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cảnh sát giao thông: Tra cứu</title>
    <link rel="stylesheet" href="../../user/css/manager.css">
    <script src="https://kit.fontawesome.com/043ac30448.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
                <div class="text">Tra cứu</div>
            </div>
        </div>
        <div class="form-section">
            <form action="#">
                <input type="text" name="searchPattern" placeholder="Từ khoá">
                <div class="radio-btn-group">
                    <p>Tìm trong</p>
                    <div class="radio-btn">
                        <input type="radio" name="search-type" id="all" value="all">
                        <label for="all">Tất cả</label>
                    </div>
                    <div class="radio-btn">
                        <input type="radio" name="search-type" id="name-dcm" value="name-dcm">
                        <label for="name-dcm">Tên văn bản</label>
                    </div>
                    <div class="radio-btn">
                        <input type="radio" name="search-type" id="dieu" value="dieu">
                        <label for="dieu">Điều</label>
                    </div>
                    <div class="radio-btn">
                        <input type="radio" name="search-type" id="muc" value="muc">
                        <label for="muc">Mục</label>
                    </div>
                    <div class="radio-btn">
                        <input type="radio" name="search-type" id="khoan" value="khoan">
                        <label for="khoan">Khoản</label>
                    </div>
                </div>
                <div class="btn-group">
                    <button class="btn btn-primary" onclick="openModal('.search-result-modal')" type="submit">Tra
                        cứu</button>
                </div>
            </form>
        </div>
    </section>
    @include('include/footer')
    <div class="modal search-result-modal">
        <div class="large-modal">
            <h1 class="title">Kết quả cho <span style="color: #af871b;">Tiến hành kiểm soát</span></h1>
            <div class="search-content-result">
                <div class="result-card">
                    <h2><a href="#" class="search-result-title">Thông tư 65 /2020/TT-BCA: Quy định nhiệm vụ, quyền hạn,
                            hình thức, nội dung và quy trình tuần tra, kiểm soát, xử lý vi phạm hành chính về giao thông
                            đường bộ của Cảnh sát giao thông</a></h2>
                    <p>Điều 18. Tiến hành kiểm soát</p>
                </div>
                <div class="result-card">
                    <h2><a href="#" class="search-result-title">Thông tư 65 /2020/TT-BCA: Quy định nhiệm vụ, quyền hạn,
                            hình thức, nội dung và quy trình tuần tra, kiểm soát, xử lý vi phạm hành chính về giao thông
                            đường bộ của Cảnh sát giao thông</a></h2>
                    <p>Điều 18. Tiến hành kiểm soát</p>
                </div>
                <div class="result-card">
                    <h2><a href="#" class="search-result-title">Thông tư 65 /2020/TT-BCA: Quy định nhiệm vụ, quyền hạn,
                            hình thức, nội dung và quy trình tuần tra, kiểm soát, xử lý vi phạm hành chính về giao thông
                            đường bộ của Cảnh sát giao thông</a></h2>
                    <p>Điều 18. Tiến hành kiểm soát</p>
                </div>
                <div class="result-card">
                    <h2><a href="#" class="search-result-title">Thông tư 65 /2020/TT-BCA: Quy định nhiệm vụ, quyền hạn,
                            hình thức, nội dung và quy trình tuần tra, kiểm soát, xử lý vi phạm hành chính về giao thông
                            đường bộ của Cảnh sát giao thông</a></h2>
                    <p>Điều 18. Tiến hành kiểm soát</p>
                </div>
                <div class="btn-group">
                    <button class="btn" onclick="closeModal('.search-result-modal')">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <script src="../../user/js/nav.js"></script>
    <script src="../../user/js/footer.js"></script>
    <script src="../../user/js/form.js"></script>
    <script src="../../user/js/canh-sat-giao-thong/main-menu.js"></script>
</body>

</html>