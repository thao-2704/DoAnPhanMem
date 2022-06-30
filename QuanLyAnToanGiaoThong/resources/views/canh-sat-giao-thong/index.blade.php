<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cảnh sát giao thông: Menu chính</title>
    <link rel="stylesheet" href="../user/css/main-menu.css">
    <script src="https://kit.fontawesome.com/043ac30448.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('include.header')
    <div style="display: none;">
        <p id="name">{{ $name }}</p>
        <p id="id">{{ $id }}</p>
    </div>
    <section class="menu-section">
        <a href="{{ url('csgt/'.$id.'/lich-su') }}" class="menu">
            <div class="menu-icon"><i class="fa-solid fa-clock"></i></div>
            <p class="menu-title">Lịch sử</p>
        </a>
        <!-- <a href="xu-ly-vi-pham-menu.html" class="menu"> -->
        <a href="{{ url('csgt/'.$id.'/xu-ly-vi-pham') }}" class="menu">
            <div class="menu-icon"><i class="fa-solid fa-bolt-lightning"></i></div>
            <p class="menu-title">Xử lý vi phạm</p>
        </a>
        <a href="{{ url('csgt/'.$id.'/tra-cuu') }}" class="menu">
            <div class="menu-icon"><i class="fa-solid fa-binoculars"></i></div>
            <p class="menu-title">Tra cứu</p>
        </a>
    </section>
    @include('include/footer')
    <script src="../user/js/nav.js"></script>
    <script src="../user/js/footer.js"></script>
    <script src="../user/js/form.js"></script>
    <script src="../user/js/canh-sat-giao-thong/main-menu.js"></script>
</body>

</html>