const button = document.getElementById('pop-up-btn');

const login_signup_popup = document.getElementById('pop-up-container');

const signup_button = document.getElementById('signup-btn');
const to_signup_button = document.getElementById('to-signup-btn');
const login_button = document.getElementById('login-btn');
const to_login_button = document.getElementById('to-login-btn');
const signup_div = document.getElementById('signup-form');
const login_div = document.getElementById('login-form');

button.addEventListener('click', () => {
    login_signup_popup.style.display = 'block';

});

window.addEventListener('click', (event) => {
    if (event.target === login_signup_popup) {
        login_signup_popup.style.display = 'none';
    }
}); 


//signup toggle
to_signup_button.addEventListener('click', () => {
    signup_div.style.display = 'block';
    login_div.style.display = 'none';
});

//login toggle
to_login_button.addEventListener('click', () => {
    login_div.style.display = 'block';
    signup_div.style.display = 'none';
}); 

//contact form toggle
const contact_button = document.getElementById('contact-btn');
const contact_section = document.getElementById('contact-section');
const home_section = document.getElementById('home-section');


contact_button.addEventListener('click', () => {
    contact_section.style.display = 'block';
    home_section.style.display = 'none';
});