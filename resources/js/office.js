import './bootstrap'
import Alpine from 'alpinejs';


window.Alpine = Alpine;

Alpine.start();

const menuButton = document.getElementById("menuButton");
const menu = document.getElementById("menu");
const openSettings = document.getElementById("openSettings");
const settingsModal = document.getElementById("settings");
const overlay = document.getElementById("overlay");
const audio = document.getElementById("bg-audio");
const Audiobutton = document.getElementById("Audio-toggle");


menuButton.addEventListener("click", () => {
    menuButton.classList.toggle("active");
    menu.classList.toggle("show");
});




const itemsCloseButton = document.getElementById('itemsBoxCloseButton')
console.log(itemsCloseButton)
let itemsBoxOpend = true;
const itemsBox = document.getElementById('itemsBox');


itemsCloseButton.addEventListener('click', () => {
    if (itemsBoxOpend) {
        itemsBox.style.display = 'none';
        itemsCloseButton.style.top = '98%';
        itemsBoxOpend = false;
        itemsCloseButton.style.transform = 'rotate(0deg)';
    } else {
        itemsBox.style.display = 'flex';
        itemsCloseButton.style.top = '88.5%';
        itemsBoxOpend = true;
    }

});

let clicked = false;
const Pacient = document.getElementById("patient");
const dialogueWraper = document.getElementById("dialogueWraper");
Pacient.addEventListener("click", () => {
    if (!clicked) {
    console.log(clicked)
        itemsBox.style.display = 'none';
        itemsCloseButton.style.display = 'none';
        console.log();
        dialogueWraper.style.display = 'none';
        Pacient.style.transition = 'transform 0.3s ease-in-out';
        Pacient.style.transform = 'scale(1.3)'

    }
    else {
        // Второй клик
        itemsBox.style.display = 'flex';
        itemsCloseButton.style.display = 'flex';
        Pacient.style.transform = 'scale(1)'
        dialogueWraper.style.display = 'flex';
    }
    Pacient.classList.toggle("active");
    clicked = !clicked;
});

audio.volume = 0.1;
Audiobutton.addEventListener("click", function() {
    if (audio.paused) {
        audio.play();
    } else {
        audio.pause();
    }
});
document.addEventListener("DOMContentLoaded", function() {
    const clickSound = new Audio('/CareskillsAssets/musicAsset/click.mp3');
    clickSound.volume = 0.9;

    const buttons = document.querySelectorAll(".menu-item");

    buttons.forEach(function(button) {
        button.addEventListener("click", function() {
            const sound = clickSound.cloneNode();
            sound.play();
        });
    });
});



openSettings.addEventListener("click", () => {
    const isHidden = settingsModal.style.display === 'none' || settingsModal.style.display === '';
    settingsModal.style.display = isHidden ? 'block' : 'none';
    overlay.style.display = isHidden ? 'block' : 'none';
});
document.getElementById("Save-settings").addEventListener("click", () => {
    settingsModal.style.display = 'none';
    overlay.style.display = 'none';
});



