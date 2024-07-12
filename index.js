var storedUsername = localStorage.getItem('username');

if (storedUsername) {
    document.getElementById('welcomeMessage').innerText = storedUsername;
} else {
    window.location.href = 'signup.html'; // Redirect ke halaman sign-up jika nama pengguna tidak tersedia
}


function toggleMenu() {
    const menuList = document.querySelector('.menu-list');
    menuList.classList.toggle('active');
}


/*Index best Seller*/
let currentIndex = 0;

function updateCarouselPosition() {
    const carousel = document.getElementById('carousel');
    const products = document.querySelectorAll('.product');
    const productWidth = products[0].offsetWidth + 20; // Add margin
    const visibleProducts = Math.floor(carousel.offsetWidth / productWidth);

    carousel.style.transform = `translateX(-${currentIndex * productWidth}px)`;
}

document.getElementById('prevBtn').addEventListener('click', function() {
    const products = document.querySelectorAll('.product');
    if (currentIndex > 0) {
        currentIndex--;
        updateCarouselPosition();
    }
});

document.getElementById('nextBtn').addEventListener('click', function() {
    const carousel = document.getElementById('carousel');
    const products = document.querySelectorAll('.product');
    const productWidth = products[0].offsetWidth + 20; // Add margin
    const visibleProducts = Math.floor(carousel.offsetWidth / productWidth);

    if (currentIndex < products.length - visibleProducts) {
        currentIndex++;
        updateCarouselPosition();
    }
});



// Initial call to set the position based on currentIndex
updateCarouselPosition();

document.addEventListener('DOMContentLoaded', function() {
    fetch('/path-to-your-server-script')
        .then(response => response.json())
        .then(data => {
            const reviewsContainer = document.getElementById('reviews');
            data.reviews.forEach(review => {
                const reviewCard = document.createElement('div');
                reviewCard.className = 'review-card';
                
                const img = document.createElement('img');
                img.src = 'path-to-anonymous-avatar';  // Use a default avatar image
                img.alt = 'User Avatar';
                
                const content = document.createElement('div');
                content.className = 'content';
                
                const name = document.createElement('h3');
                name.textContent = review.name;
                
                const text = document.createElement('p');
                text.textContent = review.text;
                
                content.appendChild(name);
                content.appendChild(text);
                reviewCard.appendChild(img);
                reviewCard.appendChild(content);
                
                reviewsContainer.appendChild(reviewCard);
            });
        })
        .catch(error => console.error('Error fetching reviews:', error));
});

