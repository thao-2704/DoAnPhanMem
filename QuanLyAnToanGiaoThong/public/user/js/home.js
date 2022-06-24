let slideIndex = 1;
showSlide(slideIndex);

const nextSlide = (n) => {
    showSlide(slideIndex += n);
}

const currentSlide = (n) => {
    showSlide(slideIndex = n);
}

function showSlide (n) {
    let i;
    let slides = document.querySelectorAll('.slide');
    let dots = document.querySelectorAll('.dot');

    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }

    for (i = 0; i < slides.length; ++i) {
        slides[i].style.display = 'none';
    }
    
    for (i = 0; i < dots.length; ++i) {
        dots[i].classList.remove('active');
    }

    slides[slideIndex - 1].style.display = 'block';
    dots[slideIndex - 1].classList.add('active');    
}