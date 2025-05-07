import './bootstrap'
import Alpine from 'alpinejs';


window.Alpine = Alpine;

Alpine.start();


const menuButton = document.getElementById("menuButton");
const menu = document.getElementById("menu");
const openSettings = document.getElementById("openSettings");
const settingsModal = document.getElementById("settingsModal");
const closeModal = document.getElementById("closeModal");
const SaveSettings = document.getElementById("save-settings");

menuButton.addEventListener("click", () => {
    menuButton.classList.toggle("active");
    menu.classList.toggle("show");
});

openSettings.addEventListener("click", () => {
    settingsModal.style.display = "block";
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

