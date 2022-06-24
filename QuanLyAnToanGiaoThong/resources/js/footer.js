const createFooter = () => {
    let footer = document.querySelector('footer');
    
    footer.innerHTML = `
        <div class="logo-img">
            <picture>
                <source srcset="../img/logo.png">
                <img src="img/logo.png" alt="">
            </picture>            
            <div class="text">Phòng Cảnh sát giao thông<br>Sở Giao thông TP. Đà Nẵng</div>
        </div>
        <div class="contact">
            <p>Địa chỉ:</p>
            <address>77 Võ An Ninh, Hoà Xuân, Cẩm Lệ, Đà Nẵng</address>
            <br>
            <p>Số điện thoại:</p>
            <a href="tel:02363821306">02363.821306</a>
        </div>
    `;
}

createFooter();