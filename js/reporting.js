const show_button = document.getElementById('show_modal');
const violation_modal = document.getElementById('reporting_modal');

show_button.addEventListener('click', () => {
    violation_modal.style.display = 'block';

});

window.addEventListener('click', (event) => {
    if (event.target === violation_modal) {
        violation_modal.style.display = 'none';
    }
}); 
