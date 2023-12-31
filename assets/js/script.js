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
let boutonEnregistrer = document.querySelector(".boutonEnregistrer");

// if(leBody.classList[0])
function changePngToSvg()
{
     /*changer les images png en svg*/
     document.querySelector(".imgSpiro1").setAttribute("src", "./assets/img/spirovertAn.svg");
     document.querySelector(".imgSpiro2").setAttribute("src", "./assets/img/spirorangeAn.svg");
     document.querySelector(".imgSpiro3").setAttribute("src", "./assets/img/spirobleuAn.svg");
     document.querySelector(".imgSpiro4").setAttribute("src", "./assets/img/spiroroseAn.svg");
}
if ((leBody.classList[0] == "style2")) {
    /*cacher les 2 image de l'animation*/
    spirohtmlImage.classList.add('hidden-element');
    spirohtmlImage.classList.remove('active-element');
    /*changer les images png en svg*/
    changePngToSvg();

}
if ((leBody.classList[0] == "style1")) {
    spirohtmlImage.classList.add('hidden-element');
    spirohtmlImage.classList.remove('active-element');
    containeranimation.classList.remove('active-element');
    containeranimation.classList.add('hidden-element');
}



/* le click sur le button html*/

buttonHtml.addEventListener('click', resetCss)
function resetCss(event) {

    event.preventDefault();
    console.log(document.getElementById("enregistrer"));
    leBody.classList.remove("style1");
    leBody.classList.remove("style2");
    /*afficher les 2 image de l'animation*/
    spirohtmlImage.classList.remove('hidden-element');
    spirohtmlImage.classList.add('active-element');
    /*changer les images png en svg*/
    document.querySelector(".imgSpiro1").setAttribute("src", "./assets/img/png/spirovertAn.png");
    document.querySelector(".imgSpiro2").setAttribute("src", "./assets/img/png/spirorangeAn.png");
    document.querySelector(".imgSpiro3").setAttribute("src", "./assets/img/png/spirobleuAn.png");
    document.querySelector(".imgSpiro4").setAttribute("src", "./assets/img/png/spiroroseAn.png");

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
    spirohtmlImage.classList.remove('active-element');
    spirohtmlImage.classList.add('hidden-element');

    leBody.classList.remove("style2");
    document.querySelector("body").classList.add("style1");
    /*enlever le css animation*/
    containeranimation.classList.remove('active-element');
    containeranimation.classList.add('hidden-element');
    document.querySelector(".styleUser").value = leBody.classList[0];

}

/* Appliquer le style dynamique sur la page si l'utilisateur choisi le deuxieme style*/
choiceDynamique.addEventListener('click', choiceSStyleDynamique);

function choiceSStyleDynamique(event) {
    event.preventDefault();

    /*cacher les 2  buttons style1 et style2*/
    choicesStyle.classList.remove('active-element');
    choicesStyle.classList.add('hidden-element');
    spirohtmlImage.classList.remove('active-element');
    spirohtmlImage.classList.add('hidden-element');
    leBody.classList.remove("style1");
    /*appliquer le style dynamique */
    document.querySelector("body").classList.add("style2");
    //ajouter les animation css
    containeranimation.classList.add('active-element');
    containeranimation.classList.remove('hidden-element');
    /*changer les images png en svg*/
    changePngToSvg();
    document.querySelector(".styleUser").value = leBody.classList[0];
    displayThemeButtons();



}

/*gérer le click sur le button js : activer le button login*/

buttonJs.addEventListener('click', showJsChoix);
function showJsChoix(event) {
    activeJs = !activeJs;
    // event.preventDefault();
    /* faire disparaitre les choix css*/
    choicesStyle.classList.remove('active-element');
    choicesStyle.classList.add('hidden-element');
    // activer l'animation js />/
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

// * Récupération du bouton
const CLOSER = document.querySelector('#closeR');
console.log(CLOSER);

// * Récupération du bouton
const CLOSEL = document.querySelector('#closeL');
console.log(CLOSEL);

// ~ Ajout de l'évènement de fermeture du modal sur mon bouton close
CLOSER.addEventListener('click', () => {

    madaRegister.classList.add('hidden-element');
    madaRegister.classList.remove('active-element');
});
// ~ Ajout de l'évènement de fermeture du modal sur mon bouton close
CLOSEL.addEventListener('click', () => {

    modalLogin.classList.add('hidden-element');
    modalLogin.classList.remove('active-element');
});


/*Enregistrer version preferee
 console.log(boutonEnregistrer);
    const nomClasse = document.body.className;
  
    boutonEnregistrer.addEventListener('click', function() {
        alert("je suis dans le clik");
      axios.post('likeVersionController.php', { nomClasse })
        .then(response => {
          alert('Classe enregistrée avec succès !');
        })
        .catch(error => {
          console.error('Erreur lors de l\'enregistrement de la classe : ', error);
        });
    });

    */

