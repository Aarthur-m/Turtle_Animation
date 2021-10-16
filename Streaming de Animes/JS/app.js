
function scroll() {
    let btn = document.getElementById("btnTop");
    if(document.documentElement.scrollTop > 50) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
}

window.onscroll = () => {
    scroll();
}

function backToTop() {
    document.documentElement.scrollTop = 0;
}

let btn = document.getElementById("btnTop");
let nav = document.getElementById("nav");

btn.addEventListener('onclick', backToTop());