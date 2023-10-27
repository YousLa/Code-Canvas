let buttonHtml = document.querySelector(".htmlButton");
let choicesStyle = document.querySelector(".choice_css");
let buttonCss = document.querySelector(".cssButton");
let buttonJs = document.querySelector(".jsButton");
let buttonLogin = document.querySelector(".buttonLogin");
let modalLogin = document.querySelector(".formLogin");
let choiceStatique = document.querySelector(".choiceStatique");
let choiceDynamique = document.querySelector(".choiceDynamique");
let leBody = document.querySelector("body");
let buttonSubmitRegistre = document.querySelector(".submitRegitre");
let buttonRegister = document.querySelector("#registration");
let madaRegister = document.querySelector(".registre");
let spirohtmlImage = document.querySelector(".spirohtml");
let activeJs = false;
let containeranimation = document.querySelector(".container-animation");
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
    document.querySelector(".formLogin").classList.add("withcss");
   
    madaRegister.classList.add("withcss");
    /*cacher les 2  buttons style1 et style2*/
    choicesStyle.classList.remove('active-element');
    choicesStyle.classList.add('hidden-element');
    spirohtmlImage.classList.remove('active-element');
    spirohtmlImage.classList.add('hidden-element');

    leBody.classList.remove("style2");
    document.querySelector("body").classList.add("style1");
    /*enlever le css animation*/
    containeranimation.classList.remove('active-element');
    containeranimation.classList.add('hidden-element');
}

/* Appliquer le style dynamique sur la page si l'utilisateur choisi le deuxieme style*/
choiceDynamique.addEventListener('click', choiceSStyleDynamique);

function choiceSStyleDynamique(event) {
    event.preventDefault();
    //ajouter les animation css
    containeranimation.classList.add('active-element');
    containeranimation.classList.remove('hidden-element');
    /*changer les images png en svg*/
    document.querySelector(".imgSpiro1").setAttribute("src", "./assets/img/spirovertAn.svg");
    document.querySelector(".imgSpiro2").setAttribute("src", "./assets/img/spiroorangeAn.svg");
    document.querySelector(".imgSpiro3").setAttribute("src", "./assets/img/spirobleuAn.svg");
    document.querySelector(".imgSpiro4").setAttribute("src", "./assets/img/spiroroseAn.svg");



    document.querySelector(".formLogin").classList.add("withcss");

    /*cacher les 2  buttons style1 et style2*/
    choicesStyle.classList.remove('active-element');
    choicesStyle.classList.add('hidden-element');
    spirohtmlImage.classList.remove('active-element');
    spirohtmlImage.classList.add('hidden-element');
    leBody.classList.remove("style1");
    /*appliquer le style dynamique */
    document.querySelector("body").classList.add("style2");
    displayThemeButtons();


}

/*gérer le click sur le button js : activer le button login*/

buttonJs.addEventListener('click', showJsChoix);
function showJsChoix(event) {
    activeJs = true;
    event.preventDefault();
    /* faire disparaitre les choix css*/

    choicesStyle.classList.remove('active-element');
    choicesStyle.classList.add('hidden-element');

    // activer l'animation js //
    animationjs();

    /*activer le button login*/



}
buttonLogin.addEventListener('click', showloginModal);
function showloginModal(event) {
    event.preventDefault();
    if (activeJs) {
        modalLogin.classList.remove('hidden-element');
        modalLogin.classList.add('active-element');
    }
    else {
        alert("Je ne peux pas afficher le formulaire de login, continue à chercher le langage qui te permettra de te loger");
    }

}

/* gérer le click sur buttonSubmitlogin*/

buttonSubmitRegistre.addEventListener('click', dontRegister);
function dontRegister(event) {
   // event.preventDefault();
   // alert("Je ne peux pas t'inscrire dans la base de données, continue à chercher le langage qui te permettra de créer ton compte.");
}


/*gérer le click sur le bouton register*/

buttonRegister.addEventListener('click', showModalRegister);
function showModalRegister(event) {
    event.preventDefault();


    modalLogin.classList.remove('active-element');
    modalLogin.classList.add('hidden-element');
    madaRegister.classList.remove('hidden-element');
    madaRegister.classList.add('active-element');
}


/*gérer le click sur enregistrer*/

document.querySelector('.boutonEnregistrer').addEventListener('click', function() {
    // Récupérez la classe actuelle du body.
    const classeBody = document.body.classList[0]; // recuperer la classe de body

    // Envoyez la classe au serveur pour enregistrement.
    fetch('enregistrerLikeController.php', {
        method: 'POST',
        body: JSON.stringify({ classe: classeBody }),
        headers: {
            'Content-Type': 'application/json'
        }
    }).then(response => {
        if (response.ok) {
            // Redirection vers une page de confirmation ou autre.
            console.log("tous ok");
        } else {
            // Gérer les erreurs, peut-être afficher un message à l'utilisateur.
        }
    });
});


const themes = [
    {
        background: "#1A1A2E",
        color: "#1A1A2E",
        primaryColor: "#0F3460"
    },
    {
        background: "#461220",
        color: "#1A1A2E",
        primaryColor: "#E94560"
    },
    {
        background: "#192A51",
        color: "#1A1A2E",
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
        color: "#1A1A2E",
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



