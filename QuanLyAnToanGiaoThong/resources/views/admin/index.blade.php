<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="admin/css/home.css">
    <script src="https://kit.fontawesome.com/043ac30448.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar"></nav>

    <section class="images-slide">
        <div class="slide">
            <img src="admin/img/slide/1.jpg" alt="">
        </div>
        <div class="slide">
            <img src="admin/img/slide/3.jpg" alt="">
        </div>
        <div class="slide">
            <img src="admin/img/slide/2.jfif" alt="">
        </div>

        <div class="next" onclick="nextSlide(1)"><i class="fa-solid fa-angle-left"></i></div>
        <div class="prev" onclick="nextSlide(-1)"><i class="fa-solid fa-angle-left"></i></div>

        <div class="slide-dot">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </section>

    <footer></footer>

    <script>
        document.querySelector('.user-login').style.display = 'none';
    </script>
    <script src="admin/js/home.js"></script>
    <script src="admin/js/form.js"></script>
    <script src="admin/js/nav.js"></script>
    <script src="admin/js/footer.js"></script>
</body>

</html>