// Получаем элементы
import Alpine from "alpinejs";

const menuButton = document.getElementById("menuButton");
const menu = document.getElementById("menu");
const openSettings = document.getElementById("openSettings"); // Кнопка "Settings"
const settingsModal = document.getElementById("settingsModal"); // Модальное окно
const closeModal = document.getElementById("closeModal"); // Кнопка закрытия модального окна
const SaveSettings = document.getElementById("save-settings"); // Кнопка закрытия модального окна

// Открытие меню при клике на кнопку Exit
menuButton.addEventListener("click", () => {
    menuButton.classList.toggle("active");
    menu.classList.toggle("show");
});

// Открытие модального окна при клике на кнопку "Settings"
openSettings.addEventListener("click", () => {
    settingsModal.style.display = "block";
});

// Закрытие модального окна при клике на кнопку "х"
closeModal.addEventListener("click", () => {
    settingsModal.style.display = "none";
});
SaveSettings.addEventListener("click", () => {
    settingsModal.style.display = "none";
});
class PlayButton extends HTMLElement {
    static register(tagName) {
        if ("customElements" in window) {
            customElements.define(tagName || "play-button", PlayButton);
        }
    }

    connectedCallback() {
        const player = this.querySelector("audio, video");
        const buttons = this.querySelectorAll("button");

        if (player && buttons.length > 0) {
            buttons.forEach(button => {
                button.addEventListener("click", () => {
                    player.currentTime = 0; // начать заново
                    player.play();
                });
            });
        }
    }
}

PlayButton.register();


Alpine.start();
