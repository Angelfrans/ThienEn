const gallery = document.getElementById('gallery');
const prevButton = document.getElementById('prev-button');
const nextButton = document.getElementById('next-button');

prevButton.addEventListener('click', () => {
    gallery.scrollBy({
        left: -320, // Adjust based on the width of the gallery item plus margin
        behavior: 'smooth'
    });
});

nextButton.addEventListener('click', () => {
    gallery.scrollBy({
        left: 320, // Adjust based on the width of the gallery item plus margin
        behavior: 'smooth'
    });
});
