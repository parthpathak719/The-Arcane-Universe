const station = document.getElementById('bg-video');
const sound = new Audio('/audio/zoom.mp4');
const board = document.querySelector('.board');
const train = document.getElementById('train');

window.addEventListener('load', () => {
    sound.play();
    station.play();
    station.addEventListener('timeupdate', () => {
        if(station.currentTime >= 2){
            station.muted = false;
        }
        if(station.currentTime >= station.duration){
            board.style.display = 'block';
        }
    });
});

board.addEventListener('click', () => {
    station.style.display = 'none';
    board.style.display = 'none';
    station.pause();
    station.muted = true;
    train.style.display = 'block';
    train.play();
    train.muted = false;
    train.addEventListener('timeupdate', () => {
        if(train.currentTime >= train.duration){
            window.location.href = "/castle";
        }
    });
});