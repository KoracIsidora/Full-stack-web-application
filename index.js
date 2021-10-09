const firstButton = document.getElementById('first');
const secondButton = document.getElementById('second');
const overlay = document.querySelector('.overlay');
const firstOverlayContent = document.querySelector('.first');
const secondOverlayContent = document.querySelector('.second');
const closeBtn = document.querySelector('.closebtn');
const body = document.querySelector('body');

firstButton.addEventListener('click', function () {
    overlay.style.width = '100%';
    firstOverlayContent.style.display = 'block';
    secondOverlayContent.style.display = 'none';
    body.style.overflow = 'hidden';
})

secondButton.addEventListener('click', function () {
    overlay.style.width = '100%';
    secondOverlayContent.style.display = 'block';
    firstOverlayContent.style.display = 'none';
    body.style.overflow = 'hidden';
});

closeBtn.addEventListener('click', function () {
    overlay.style.width = '0';
    firstOverlayContent.style.display = 'none';
    secondOverlayContent.style.display = 'none';
    body.style.overflow = 'auto';
});