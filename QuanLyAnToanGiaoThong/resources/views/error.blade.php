<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lỗi</title>
    <link rel="stylesheet" href="user/css/home.css">
    <script src="https://kit.fontawesome.com/043ac30448.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('include.header')

    <section class="images-slide">
        <div class="error">Opps!... Something went wrong!</div>
    </section>

    @include('include/footer')

    <div class="modal signin-modal">
        <div class="small-modal">
            <h1 class="title">Đăng nhập</h1>
            <form role="form" action="{{ url('login') }}" method="post">
                @csrf
                <label for="name">Tên đăng nhập</label><br>
                <input type="text" name="name" id="name" required><br>
                <label for="password">Mật khẩu</label><br>
                <input type="password" name="password" id="password" required><br>
                <div class="btn-group">
                    <button class="btn btn-primary" type="submit">Đăng nhập</button>
                    <button class="btn" onclick="closeModal('.signin-modal')">Huỷ</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.querySelector('.user-login').style.display = 'none';
    </script>
    <script src="user/js/home.js"></script>
    <script src="user/js/form.js"></script>
    <script src="user/js/nav.js"></script>
    <script src="user/js/footer.js"></script>
</body>

</html>