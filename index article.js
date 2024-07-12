
/*Article Today*/
document.addEventListener('DOMContentLoaded', () => {
    const currentDateElement = document.getElementById('current-date');
    const today = new Date();

    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric' };
    const formattedDate = today.toLocaleDateString('id-ID', options);

    currentDateElement.textContent = `Today, ${formattedDate}`;
});
