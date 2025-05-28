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
const completeBtn = document.getElementById("completeActionBtn");
const syringe = document.getElementById("hand-with-syringe");
const ParacetomolGeven= document.getElementById("Paracetomol");
const Paracetomol= document.getElementById("hand-with-Paracetomol");
const Indicators = document.getElementById("indicators-container");
menuButton.addEventListener("click", () => {
    menuButton.classList.toggle("active");
    menu.classList.toggle("show");
});




//
const itemsBox = document.getElementById('itemsBox');



let clicked = false;
const geduldig = document.getElementById("geduldig");
const dialogueWraper = document.getElementById("dialogueWraper");
geduldig.addEventListener("click", () => {
    if (!clicked) {
    console.log(clicked)
        itemsBox.style.display = 'none';
        console.log();
        dialogueWraper.style.display = 'none';
        geduldig.style.transition = 'transform 0.3s ease-in-out';
        geduldig.style.transform = 'scale(1.3)'

    }
    else {
        itemsBox.style.display = 'flex';
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

function setupCompleteProcedure(delayMs, resetBackground, resetSprite) {
    setTimeout(() => {
        if (completeBtn) {
            completeBtn.style.display = "block";
        }
    }, delayMs);

    if (resetBackground) {
        document.body.style.backgroundImage = `url('${resetBackground}')`;
    }
    if (resetSprite) {
        geduldig.src = resetSprite;
    }
    itemsBox.style.display = 'none';
    Indicators.style.display = 'none';

}
function resetProcedure(standardBackground, standardSprite) {
    if (completeBtn) {
        completeBtn.addEventListener("click", () => {
            completeBtn.style.display = "none";

            if (standardBackground) {
                document.body.style.backgroundImage = `url('${standardBackground}')`;
            }

            if (standardSprite) {
                geduldig.src = standardSprite;
                dialogueWraper.style.display = 'block';
                syringe.style.display = 'none';
                Paracetomol.style.display = 'none';
                itemsBox.style.display = 'block';
            }
        });
    }
}

if (BloedAfnemen) {
    BloedAfnemen.addEventListener("click", () => {
        setupCompleteProcedure(
            6000,
            "/CareskillsAssets/backgrounds/BloodOffice.png",
            "/CareskillsAssets/characters/Johan/BloedAfnemen.png"
        );
        syringe.classList.remove("animate-inject");
        void syringe.offsetWidth;
        syringe.classList.add("animate-inject");
        syringe.style.display = 'flex';
        dialogueWraper.style.display = 'none';

        resetProcedure(
            "/CareskillsAssets/backgrounds/Office.png",
            "/CareskillsAssets/characters/Johan/front.png"
        );
    });
}
if (ParacetomolGeven) {
    ParacetomolGeven.addEventListener("click", () => {
        setupCompleteProcedure(
            6000,
            "/CareskillsAssets/backgrounds/Office.png",
            "/CareskillsAssets/characters/Johan/front.png"
        );

        Paracetomol.classList.remove("Paracetomol-Geven");
        void Paracetomol.offsetWidth;
        Paracetomol.classList.add("Paracetomol-Geven");
        Paracetomol.style.display = 'flex';
        dialogueWraper.style.display = 'none';
        Indicators.style.display = 'flex';

        resetProcedure(
            "/CareskillsAssets/backgrounds/Office.png",
            "/CareskillsAssets/characters/Johan/front.png"
        );
    });
}
document.addEventListener("DOMContentLoaded", function () {
    const answerOptions = document.querySelectorAll(".answer-option");
    const dialogueBox = document.querySelector(".dialogue-box");

    answerOptions.forEach(button => {
        button.addEventListener("click", function () {
            const feedback = this.dataset.feedback;
            if (dialogueBox) {
                dialogueBox.textContent = feedback;
            }
        });
    });
});



console.log(12313412)


