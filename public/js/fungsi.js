const btn = document.querySelector('.menuToggle')
const menu = document.querySelector('.mobileMenu')

btn.addEventListener('click', function() {
    menu.classList.toggle('hidden');
})

