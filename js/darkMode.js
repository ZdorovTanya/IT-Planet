function darkMode(){
    const body = document.body;
    const wasDarkMode = localStorage.getItem('darkmode') === 'true';

    localStorage.setItem('darkmode', !wasDarkMode);
    body.classList.toggle('dark-mode', !wasDarkMode);
}

document.querySelector('.night-theme-btn').addEventListener('click', darkMode);

function onload(){
    document.body.classList.toggle('dark-mode', localStorage.getItem('darkmode')==='true');
}

document.addEventListener('DOMContentLoaded',onload);