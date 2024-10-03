// Alerte travail
window.onload = function() {
    if (!localStorage.getItem('alertDisplayed')) {
        alert("Ce site a été créé dans le cadre de notre travail en projet web.");
        localStorage.setItem('alertDisplayed', 'true');
    }
};
