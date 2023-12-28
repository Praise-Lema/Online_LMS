// Call preloader element from the DOM
var loader = document.getElementById("preloader");

window.addEventListener('load', preload);

// Preload function
function preload(e){
    loader.style.display = 'none';
}