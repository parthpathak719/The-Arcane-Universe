window.addEventListener('load', () => {
    document.getElementById('normal-audio').play();
    document.getElementById('normal-audio').muted=false;
    document.addEventListener('click', () => {
        document.getElementById('normal-audio').play();
        document.getElementById('normal-audio').muted=false;
    });
});
