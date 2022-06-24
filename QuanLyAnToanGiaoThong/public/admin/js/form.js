const openModal = (modalName) => {
    let modal = document.querySelector(modalName);
    modal.style.display = 'block';
}
const closeModal = (modalName) => {
    let modal = document.querySelector(modalName);
    modal.style.display = 'none';
}
