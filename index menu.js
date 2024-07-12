
// Script untuk mengatur fungsi carousel 'HOME PAGER'//
document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.getElementById('carousel');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    const scrollStep = 300; // Adjust this value to control the scroll step

    nextBtn.addEventListener('click', () => {
        carousel.scrollBy({
            left: scrollStep,
            behavior: 'smooth'
        });
    });

    prevBtn.addEventListener('click', () => {
        carousel.scrollBy({
            left: -scrollStep,
            behavior: 'smooth'
        });
    });
});

//Menu Makanan Minuman//
document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const menuItems = document.querySelectorAll('.menu-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');

            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to the clicked button
            button.classList.add('active');

            // Show/Hide menu items
            menuItems.forEach(item => {
                const category = item.getAttribute('data-category');
                if (filter === 'all' || category === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});

  // Set default filter to 'drinks' on page load
  function showCategory(category) {
    const allItems = document.querySelectorAll('.menu-items');
    allItems.forEach(item => item.style.display = 'none');

    if (category === 'drinks') {
        document.getElementById('drinks').style.display = 'block';
    } else if (category === 'all') {
        allItems.forEach(item => {
            if (item.id !== 'drinks') {
                item.style.display = 'block';
            }
        });
    } else {
        document.getElementById(category).style.display = 'block';
    }

    // Update active button
    const allButtons = document.querySelectorAll('.filter-btn');
    allButtons.forEach(button => button.classList.remove('active'));
    document.querySelector(`.filter-btn[data-filter="${category}"]`).classList.add('active');
}
