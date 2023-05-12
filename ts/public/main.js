"use strict";
const loadtime_before = new Date().getTime();
let preLoader = document.getElementById('pre_loader');
function PreLoader() {
    let loadtime = (loadtime_after - loadtime_before) / 1000;
    let idealLoad = 1;
    let bonusLoad;
    if (loadtime <= idealLoad) {
        bonusLoad = (idealLoad - loadtime) * 1000;
    }
    else {
        bonusLoad = 0;
    }
    setTimeout(function () {
        preLoader.remove();
    }, bonusLoad);
}
;
function WriteMenu() {
    console.log("teszt");
}
document.getElementById("home").style.backgroundImage = `url('${php[1]}img/main1.webp')`;
const el_contact = document.getElementById("contact");
if (el_contact) {
    el_contact.style.backgroundImage = `url('${php[1]}img/contact1.webp')`;
}
const loadtime_after = new Date().getTime();
window.addEventListener("load", PreLoader);
