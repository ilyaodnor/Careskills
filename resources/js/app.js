import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;
const startButton = document.querySelector('.StartButton');

startButton.addEventListener('click', function(e) {
    const starsCount = 5;
    const rect = this.getBoundingClientRect();

    for (let i = 0; i < starsCount; i++) {
        const star = document.createElement('span');
        star.classList.add('star');
        star.textContent = '★';

        const startX = Math.random() * rect.width;
        const startY = Math.random() * rect.height;
        star.style.left = startX + 'px';
        star.style.top = startY + 'px';

        const translateX = (Math.random() - 0.5) * 200;
        const translateY = (Math.random() - 1) * 200;
        star.style.setProperty('--translateX', translateX + 'px');
        star.style.setProperty('--translateY', translateY + 'px');

        this.appendChild(star);

        star.addEventListener('animationend', () => {
            star.remove();
        });
    }

    setTimeout(() => {
        window.location.href = '/';
    }, 300); // задержка, чтобы звёзды успели полетать
});


Alpine.start();
