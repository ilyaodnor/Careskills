    const xpBarFilled = document.querySelector('.xp-bar-filled');

    function updateXP(currentXP, maxXP) {
    const percentage = (currentXP / maxXP) * 100;
    xpBarFilled.style.width = `${percentage}%`;
}

    setTimeout(() => updateXP(75, 100), 200);
