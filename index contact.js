
/*contact */
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var firstName = document.getElementById('firstName').value; 
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    document.getElementById('reviewFirstName').innerText = firstName;
    document.getElementById('reviewEmail').innerText = email;
    document.getElementById('reviewMessage').innerText = message;

    document.getElementById('reviewSection').style.display = 'block';
});