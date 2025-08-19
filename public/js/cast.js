const modal = document.getElementById('id05');
const close = document.getElementById('close5');
const video = document.getElementById('bg-video');

window.addEventListener('load', () => {
    modal.style.display = 'block';
    close.addEventListener('click', () => {
        modal.style.display = 'none';
        video.play();
        video.muted = false;
    })
})