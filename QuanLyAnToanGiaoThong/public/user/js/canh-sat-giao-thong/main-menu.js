let userNav = document.querySelector('.navbar');
userNav.innerHTML += `
<div class="dropdown-content user-dropdown">
    <a href="#">Thông tin tài khoản</a>
    <a href="#">Lịch sử</a>
    <a href="#">Xử lý vi phạm</a>
    <a href="#">Tra cứu</a>
    <a href="#">Đăng xuất</a>
</div>
`;

let loginNav = document.querySelector('.user-nav');
let name = document.querySelector('#name').innerHTML;
let id = document.querySelector('#id').innerHTML;
loginNav.innerHTML += `
<div class="user-login" onclick="showDropdown('.user-dropdown')">
    <div class="user-name">${name}</div>
    <div class="icon"><i class="fa-solid fa-angle-down"></i></div>
</div>
`;