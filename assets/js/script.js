let buttonHtml = document.querySelector(".htmlButton");
let choicesStyle = document.querySelector(".choice_css");
let buttonCss = document.querySelector(".cssButton");
let buttonLogin = document.querySelector(".buttonLogin");
let modalLogin =  document.querySelector(".loginSection");
//click sur le boutton css



buttonCss.addEventListener('click',choiceStyle);

function choiceStyle(event)
{
 
    event.preventDefault();
  
    choicesStyle.classList.remove('hidden-css');
    choicesStyle.classList.add('active-css');

}


buttonLogin.addEventListener('click',showloginModal);

function showloginModal(event)
{
 
    event.preventDefault();
  
    modalLogin.classList.remove('hidden-login');
    modalLogin.classList.add('active-login');

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

