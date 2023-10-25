let buttonHtml = document.querySelector(".htmlButton");
let choicesStyle = document.querySelector(".choice_css");
let buttonCss = document.querySelector(".cssButton");
//click sur le boutton css



buttonCss.addEventListener('click',choiceStyle);

function choiceStyle(event)
{
 
    event.preventDefault();
  
    choicesStyle.classList.remove('hidden-css');
    choicesStyle.classList.add('active-css');

}