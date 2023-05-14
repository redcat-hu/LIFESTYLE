const loadtime_before = new Date().getTime();
const preLoader = document.getElementById('pre_loader');

function PreLoader() {
    loadtime = (loadtime_after - loadtime_before) / 1000;
      var idealLoad = 1;
      if (loadtime <= idealLoad) {
        bonusLoad = (idealLoad - loadtime)*1000;
      } else {
        bonusLoad = 0;
      }
      setTimeout(function(){
        preLoader.remove();
      }, bonusLoad);
};
function WriteMenu() {
  console.log("teszt");
}

if(document.getElementById("home")) {
document.getElementById("home").style.backgroundImage = `url('${php[1]}img/main1.webp')`;
}

if(document.getElementById("questionnaire")) {
  document.getElementById("questionnaire").style.backgroundImage = `linear-gradient(45deg, var(--colog_bg_1), var(--colog_bg_1_alpha)), url('${php[1]}img/main1.webp')`;
}

const el_contact = document.getElementById("contact");
if (el_contact) {
  el_contact.style.backgroundImage = `url('${php[1]}img/contact1.webp')`;
}

const loadtime_after = new Date().getTime(); 
window.addEventListener("load", PreLoader);