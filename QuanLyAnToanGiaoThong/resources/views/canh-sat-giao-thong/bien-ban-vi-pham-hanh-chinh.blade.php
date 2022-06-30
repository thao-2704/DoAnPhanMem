<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cảnh sát giao thông: Biên bản vi phạm hành chính</title>

    <link rel="stylesheet" href="../css/manager.css">
    <script src="https://kit.fontawesome.com/043ac30448.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar"></nav>
    <div style="display: none;">
        <p id="name">{{ $name }}</p>
        <p id="id">{{ $id }}</p>
    </div>
    <section class="manager-section">
        <div class="manager-title">
            <div class="title-name">
                <div class="text">Biên bản vi phạm hành chính</div>
            </div>
        </div>
        <div class="large-form">
            <form action="#" class="grid-container">
                <div class="grid-row" style="grid-column: 1 / span 2;">
                    <label for="place">Địa điểm</label><br>
                    <input type="text" name="place" id="place" required><br>
                </div>
                <div class="grid-row">
                    <label for="time">Thời gian</label><br>
                    <input type="datetime-local" name="time" id="time" required><br>
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
                <fieldset class="grid-container" style="grid-column: 1 / span 3;">
                    <legend>Nhân chứng 1</legend>
                    <div class="grid-row">
                        <label for="name-cr1">Họ và tên</label><br>
                        <input type="text" name="name-cr1" id="name-cr1" required><br>
                    </div>
                    <div class="grid-row" style="grid-column: 2 / span 3;">
                        <label for="place-cr1">Địa chỉ</label><br>
                        <input type="text" name="place-cr1" id="place-cr1" required><br>
                    </div>
                    <div class="grid-row">
                        <label for="phone-cr1">Số điện thoại</label><br>
                        <input type="text" name="phone-cr1" id="phone-cr1" required><br>
                    </div>
                    <div class="grid-row">
                        <label for="id-card-cr1">Chứng minh nhân dân</label><br>
                        <input type="text" name="id-card-cr1" id="id-card-cr1" required><br>
                    </div>
                    <div class="grid-row">
                        <label for="provinces-cr1">Tỉnh / Thành phố</label><br>
                        <select name="provinces-cr1" id="provinces-cr1" required>
                            <option value="">Tỉnh / Thành phố</option>
                        </select>
                    </div>
                    <div class="grid-row">
                        <label for="district-cr1">Quận / Huyện</label><br>
                        <select name="district-cr1" id="district-cr1" required>
                            <option value="">Quận / Huyện</option>
                        </select>
                    </div>
                    <div class="grid-row">
                        <label for="ward-cr1">Xã / Phường</label><br>
                        <select name="ward-cr1" id="ward-cr1" required>
                            <option value="">Xã / Phường</option>
                        </select>
                    </div>
                </fieldset>
                <fieldset class="grid-container" style="grid-column: 1 / span 3;">
                    <legend>Nhân chứng 2</legend>
                    <div class="grid-row">
                        <label for="name-cr2">Họ và tên</label><br>
                        <input type="text" name="name-cr2" id="name-cr2" required><br>
                    </div>
                    <div class="grid-row" style="grid-column: 2 / span 3;">
                        <label for="place-cr2">Địa chỉ</label><br>
                        <input type="text" name="place-cr2" id="place-cr2" required><br>
                    </div>
                    <div class="grid-row">
                        <label for="phone-cr2">Số điện thoại</label><br>
                        <input type="text" name="phone-cr2" id="phone-cr2" required><br>
                    </div>
                    <div class="grid-row">
                        <label for="id-card-cr2">Chứng minh nhân dân</label><br>
                        <input type="text" name="id-card-cr2" id="id-card-cr2" required><br>
                    </div>
                    <div class="grid-row">
                        <label for="provinces-cr2">Tỉnh / Thành phố</label><br>
                        <select name="provinces-cr2" id="provinces-cr2" required>
                            <option value="">Tỉnh / Thành phố</option>
                        </select>
                    </div>
                    <div class="grid-row">
                        <label for="district-cr2">Quận / Huyện</label><br>
                        <select name="district-cr2" id="district-cr2" required>
                            <option value="">Quận / Huyện</option>
                        </select>
                    </div>
                    <div class="grid-row">
                        <label for="ward-cr2">Xã / Phường</label><br>
                        <select name="ward-cr2" id="ward-cr2" required>
                            <option value="">Xã / Phường</option>
                        </select>
                    </div>
                </fieldset>

                <div class="btn-group" style="grid-column: 1 / span 3;">
                    <a href="tao-moi-menu.html" class="btn btn-primary btn-large" style="margin: 0 auto;" type="submit"><i class="fa-solid fa-angle-right"></i></a>
                </div>
            </form>
        </div>
    </section>
    <footer></footer>

    <script src="../js/nav.js"></script>
    <script src="../js/footer.js"></script>
    <script src="../js/form.js"></script>
    <script src="js/main-menu.js"></script>
</body>

</html>