<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cảnh sát giao thông: Xử lý vi phạm - Tạo mới</title>

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
                <div class="text">Xử lý vi phạm - Tạo mới</div>
            </div>
        </div>
        <div class="large-form">
            <h1 class="title">CHỦ THỂ VI PHẠM</h1>
            <form action="#" class="grid-container">
                <div class="grid-row">
                    <label for="organization">Ông / Bà / Tổ chức</label><br>
                    <input type="text" name="name" id="organization" required><br>
                </div>
                <div class="grid-row">
                    <label for="identify-num">CMND / CCCD</label><br>
                    <input type="text" name="identify-num" id="identify-num" required><br>
                </div>
                <div class="grid-row">
                    <label for="dob">Ngày sinh</label><br>
                    <input type="date" name="dob" id="dob">
                </div>
                <div class="grid-row">
                    <label for="profess">Nghề nghiệp</label><br>
                    <input type="text" name="profess" id="profess" required><br>
                </div>
                <div class="grid-row" style="grid-column: 2 / span 2;">
                    <label for="address">Địa chỉ</label><br>
                    <input type="text" name="address" id="address" required><br>
                </div>
                <div class="grid-row">
                    <label for="provinces">Tỉnh / Thành phố</label><br>
                    <select name="provinces" id="provinces" required>
                        <option value="">Tỉnh / Thành phố</option>
                    </select>
                </div>
                <div class="grid-row">
                    <label for="district">Quận / Huyện</label><br>
                    <select name="district" id="ward" required>
                        <option value="">Quận / Huyện</option>
                    </select>
                </div>
                <div class="grid-row">
                    <label for="ward-cr">Xã / Phường</label><br>
                    <select name="ward" id="ward-cr" required>
                        <option value="">Xã / Phường</option>
                    </select>
                </div>
                <div class="btn-group" style="grid-column: 1 / span 3;">
                    <a href="tao-moi-menu.html" class="btn btn-primary btn-large" style="margin: 0 auto;" type="submit"><i class="fa-solid fa-angle-right"></i></a>
                </div>
            </form>
        </div>
    </section>
    @include('include/footer')

    <script src="../../../user/js/nav.js"></script>
    <script src="../../../user/js/footer.js"></script>
    <script src="../../../user/js/form.js"></script>
    <script src="../../../user/js/canh-sat-giao-thong/main-menu.js"></script>
</body>

</html>