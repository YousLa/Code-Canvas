let buttonHtml = document.querySelector(".htmlButton");
let choicesStyle = document.querySelector(".choice_css");
let buttonCss = document.querySelector(".cssButton");
let buttonLogin = document.querySelector(".buttonLogin");
let modalLogin = document.querySelector(".loginSection");
let choiceStatique = document.querySelector(".choiceStatique");
let choiceDynamique = document.querySelector(".choiceDynamique");
let leBody = document.querySelector("body");
/* le click sur le button html*/
buttonHtml.addEventListener('click', resetCss)
function resetCss(event) {

    event.preventDefault();

    leBody.classList.remove("style1");
    leBody.classList.remove("style2");

}

//click sur le boutton css
buttonCss.addEventListener('click', choiceStyle);

function choiceStyle(event) {

    event.preventDefault();

    choicesStyle.classList.remove('hidden-element');
    choicesStyle.classList.add('active-element');

}

/* Appliquer le style statique sur la page si l'utilisateur choisi le premier style*/
choiceStatique.addEventListener('click', choiceSStyleStatique);

function choiceSStyleStatique(event) {
    /*appliquer le style*/
    event.preventDefault();
    /*cacher les 2  buttons style1 et style2*/
    choicesStyle.classList.remove('active-element');
    choicesStyle.classList.add('hidden-element');
    leBody.classList.remove("style2");
    document.querySelector("body").classList.add("style1");
}

/* Appliquer le style dynamique sur la page si l'utilisateur choisi le deuxieme style*/
choiceDynamique.addEventListener('click', choiceSStyleDynamique);

function choiceSStyleDynamique(event) {


    event.preventDefault();
    /*cacher les 2  buttons style1 et style2*/
    choicesStyle.classList.remove('active-element');
    choicesStyle.classList.add('hidden-element');
    leBody.classList.remove("style1");
    /*appliquer le style dynamique */
    document.querySelector("body").classList.add("style2");

}



buttonLogin.addEventListener('click', showloginModal);

function showloginModal(event) {

    event.preventDefault();

    modalLogin.classList.remove('hidden-element');
    modalLogin.classList.add('active-element');

}

const themes = [
    {
        background: "#1A1A2E",
        color: "#FFFFFF",
        primaryColor: "#0F3460"
    },
    {
        background: "#461220",
        color: "#FFFFFF",
        primaryColor: "#E94560"
    },
    {
        background: "#192A51",
        color: "#FFFFFF",
        primaryColor: "#967AA1"
    },
    {
        background: "#F7B267",
        color: "#000000",
        primaryColor: "#F4845F"
    },
    {
        background: "#F25F5C",
        color: "#000000",
        primaryColor: "#642B36"
    },
    {
        background: "#231F20",
        color: "#FFF",
        primaryColor: "#BB4430"
    }
];

const setTheme = (theme) => {
    const root = document.querySelector(":root");
    root.style.setProperty("--background", theme.background);
    root.style.setProperty("--color", theme.color);
    root.style.setProperty("--primary-color", theme.primaryColor);
    root.style.setProperty("--glass-color", theme.glassColor);
};

const displayThemeButtons = () => {
    const btnContainer = document.querySelector(".theme-btn-container");
    themes.forEach((theme) => {
        const div = document.createElement("div");
        div.className = "theme-btn";
        div.style.cssText = `background: ${theme.background}; width: 25px; height: 25px`;
        btnContainer.appendChild(div);
        div.addEventListener("click", () => setTheme(theme));
    });
};

displayThemeButtons();

