const loadtime_before = new Date().getTime();
const preLoader = document.getElementById('pre_loader');

function PreLoader() {
    let loadtime = (loadtime_after - loadtime_before) / 1000;
    let bonusLoad: number;

      let idealLoad = 1;
      if (loadtime <= idealLoad) {
        bonusLoad = (idealLoad - loadtime)*1000;
      } else {
        bonusLoad = 0;
      }
      setTimeout(function(){
        if (preLoader) {
          preLoader.remove();
        }
      }, bonusLoad);
};

function WriteMenu() {
  console.log("teszt");
}

const home_id = document.getElementById("home");
if(home_id) {
  home_id.style.backgroundImage = `url('${php[0]}img/main1.webp')`;
}

const questionnaire_id = document.getElementById("questionnaire");
if(questionnaire_id) {
  questionnaire_id.style.backgroundImage = `linear-gradient(45deg, var(--colog_bg_1), var(--colog_bg_1_alpha)), url('${php[0]}img/main1.webp')`;
}

const el_contact = document.getElementById("contact");
if (el_contact) {
  el_contact.style.backgroundImage = `url('${php[0]}img/contact1.webp')`;
}

let loadtime_after = new Date().getTime(); 
window.addEventListener("load", PreLoader);