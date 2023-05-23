const startTime = window.performance.now(); //benchmark start
const preLoader = document.getElementById('pre_loader');

// PreLoader
async function PreLoader(): Promise<void> {
  const loadTime: number = (endTime - startTime) / 1000;
  const idealLoad: number = 1;
  const delayTime: number = (loadTime <= idealLoad) ? (idealLoad - loadTime) * 1000 : 0;

  function delay(ms: number): Promise<void> {
    return new Promise(resolve => setTimeout(resolve, ms));
  }

  async function waitPreloader(): Promise<void> {
    try {
      await delay(delayTime);
      if (preLoader) {
        preLoader.remove();
      }
    } catch (error) {
      console.error("Hiba történt:", error);
    }
  }

  await waitPreloader();
}

// Elements
const questionnaire_id = document.getElementById("questionnaire");
const el_contact = document.getElementById("contact");
const homeDiv = document.getElementById("home");

// Form cover
if(questionnaire_id) {
  questionnaire_id.style.backgroundImage = `linear-gradient(45deg, var(--colog_bg_1), var(--colog_bg_1_alpha)), url('${mainPath}img/main1.webp')`;
}

// Contact cover
if (el_contact) {
  el_contact.style.backgroundImage = `url('${mainPath}img/contact1.webp')`;
}

// Home cover
/*
if (homeDiv) {
  homeDiv.style.backgroundImage = `url('${mainPath}img/pack_1.webp')`;
}
*/

const endTime = window.performance.now(); //benchmark stop
window.addEventListener("load", PreLoader);