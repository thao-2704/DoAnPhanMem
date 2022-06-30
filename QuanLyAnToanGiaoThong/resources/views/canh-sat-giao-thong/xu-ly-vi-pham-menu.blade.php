<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cảnh sát giao thông: Xử lý vi phạm</title>
    <link rel="stylesheet" href="../../user/css/main-menu.css">
    <script src="https://kit.fontawesome.com/043ac30448.js" crossorigin="anonymous"></script>
    <style>
        .menu-title {
            text-transform: none;
        }
    </style>
</head>

<body>
    @include('include.header')
    <div style="display: none;">
        <p id="name">{{ $name }}</p>
        <p id="id">{{ $id }}</p>
    </div>
    <section class="menu-section">
        <!-- <a href="vi-pham-dang-xu-ly.html" class="menu"> -->
        <a href="{{ url('csgt/'.$id.'/xu-ly-vi-pham/vi-pham-dang-xu-ly') }}" class="menu">
            <div class="menu-icon"><i class="fa-solid fa-triangle-exclamation"></i></div>
            <p class="menu-title">Đang xử lý</p>
        </a>
        <!-- <a href="xu-ly-vi-pham-tao-moi.html" class="menu"> -->
        <a href="{{ url('csgt/'.$id.'/xu-ly-vi-pham/tao-moi') }}" class="menu">
            <div class="menu-icon"><i class="fa-solid fa-folder-plus"></i></div>
            <p class="menu-title">Tạo mới</p>
        </a>
    </section>
    @include('include/footer')

    <script src="../../user/js/nav.js"></script>
    <script src="../../user/js/footer.js"></script>
    <script src="../../user/js/form.js"></script>
    <script src="../../user/js/canh-sat-giao-thong/main-menu.js"></script>
</body>

</html>