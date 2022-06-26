const showDropdown = (dropdownName) => {
    let dropdown = document.querySelector(dropdownName);
    dropdown.classList.toggle('show');
}

const createNav = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `
        <div class="logo"><a href="#">CSGT</a></div>
        <div class="user-nav dropdown">
            <a href="#" onclick="openModal('.signin-modal')">Đăng nhập</a>
        </div>
    `;
}

createNav();

// const addSigninModal = () => {
//     let body = document.querySelector('body');
    
//     body.innerHTML += `
//     <div class="modal signin-modal">
//         <div class="small-modal">
//             <h1 class="title">Đăng nhập</h1>
//             <form action="#" method="post">
//                 <label for="name">Tên đăng nhập</label><br>
//                 <input type="text" name="name" id="name" required><br>
//                 <label for="password">Mật khẩu</label><br>
//                 <input type="password" name="password" id="password" required><br>
//                 <div class="btn-group">
//                     <button class="btn btn-primary" type="submit">Đăng nhập</button>
//                     <button class="btn" onclick="closeModal('.signin-modal')">Huỷ</button>
//                 </div>
//             </form>        
//         </div>
//     </div>
//     `;
// }

// addSigninModal();