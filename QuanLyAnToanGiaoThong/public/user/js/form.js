const openModal = (modalName) => {
    let modal = document.querySelector(modalName);
    modal.style.display = 'block';
}
const closeModal = (modalName) => {
    let modal = document.querySelector(modalName);
    modal.style.display = 'none';
}
const visionToggle = (containerClassName) => {
    let container = document.querySelectorAll(containerClassName);
    container.forEach(element => {
        element.classList.toggle("hide");
    });
}