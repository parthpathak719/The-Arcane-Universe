const modal = document.getElementById('id07');
const close = document.getElementById('close7');
const station = document.getElementById('bg-video');
const sound = new Audio('/audio/zoom.mp4');
const board = document.querySelector('.board');
const train = document.getElementById('train');

window.addEventListener('load', () => {
    sound.play();
    station.play();
    setTimeout(() => {
        modal.style.display = 'block'; // show modal once
        station.pause();
    }, 2000);
});

close7.addEventListener('click', () => {
    modal.style.display = 'none';
    station.play();
    station.muted = false;
});

station.addEventListener('timeupdate', () => {
    if(station.currentTime >= 6.25){
        board.style.display = 'block';
    }
});

board.addEventListener('click', () => {
    station.style.display = 'none';
    board.style.display = 'none';
    station.pause();
    station.muted = true;
    train.style.display = 'block';
    train.play();
    train.muted = false;
});

train.addEventListener('timeupdate', () => {
    if(train.currentTime >= train.duration){
        window.location.href = "/hogwarts";
    }
});