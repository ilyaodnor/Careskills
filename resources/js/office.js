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
const Audiobutton = document.getElementById("audioButton");
const volumeSlider = document.getElementById("volumeSlider");
const BloedAfnemen = document.getElementById("BloedAfnemen");

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
const geduldig = document.getElementById("geduldig");
const dialogueWraper = document.getElementById("dialogueWraper");
geduldig.addEventListener("click", () => {
    if (!clicked) {
    console.log(clicked)
        itemsBox.style.display = 'none';
        itemsCloseButton.style.display = 'none';
        console.log();
        dialogueWraper.style.display = 'none';
        geduldig.style.transition = 'transform 0.3s ease-in-out';
        geduldig.style.transform = 'scale(1.3)'

    }
    else {
        itemsBox.style.display = 'flex';
        itemsCloseButton.style.display = 'flex';
        geduldig.style.transform = 'scale(1)'
        dialogueWraper.style.display = 'flex';
    }
    geduldig.classList.toggle("active");
    clicked = !clicked;
});

audio.volume = 0.1;
Audiobutton.addEventListener("click", function() {
    if (audio.paused) {
        audio.play();
        Audiobutton.textContent = "Audio Pause";
        Audiobutton.style.backgroundColor = "#0ee39e";
    } else {
        audio.pause();
        Audiobutton.textContent = "Audio play";
        Audiobutton.style.backgroundColor = "red";

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
if (BloedAfnemen) {
    BloedAfnemen.addEventListener("click", function () {

        document.body.style.backgroundImage = "url('/CareskillsAssets/backgrounds/BloodOffice.png')";

 // кнопка которая поялвяеется через время чтобы завершить процедуру        setTimeout(() => {
            //const completeBtn = document.getElementById("completeActionBtn");
            //if (completeBtn) {
                //completeBtn.style.display = "block";
            //}
        //}, 6000);
    });
}

document.addEventListener("DOMContentLoaded", function () {
    const feedbackButtons = document.querySelectorAll(".feedback-button");
    const dialogueBox = document.querySelector(".dialogue-box");

    feedbackButtons.forEach(button => {
        button.addEventListener("click", function () {
            const feedback = this.dataset.feedback;
            if (dialogueBox) {
                dialogueBox.textContent = feedback;
            }
        });
    });
});



console.log(12313412)

