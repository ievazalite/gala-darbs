//submit event
document.querySelector('.contact-form').addEventListener('submit', submitForm);

function submitForm(e) {
    e.preventDefault();

    //getting values from the form
    let name = document.querySelector('#name').value;
    let email = document.querySelector('#email').value;
    let message = document.querySelector('#message').value;

    document.querySelector('.contact-form').reset();

    sendEmail(name, email, message);
}

//lets send the email
function sendEmail(name, email, message){

Email.send({
    Host : "smtp.gmail.com",
    Username : "testing.send.email.function@gmail.com",
    Password : "ocjescxgkxdktmjr",
    To : `${email}`,
    From : "testing.send.email@gmail.com",

    Subject : `Thank you for your email, ${name}!`,
    Body : `We have received your email and will get back to you shortly. <br/>
            Your message was: ${message}`

}).then((message) => alert('Thank you for your inquiry'));
}