


function animationjs(){

    // start function randVal
function randVal(myVal, other){
    
    if(Array.isArray(myVal)){
        
        let ranInArray = Math.floor(Math.random() * myVal.length);
    return myVal[ranInArray];
        
        
    }else{
        
        let randnum = Math.floor(Math.random() * myVal);
        return randnum;
        
    }
    
    
}


// end function randVal

let colors = ['#5999f1','#26b85d','#375ca4','#f4e736',' #f366d8','#fa590c'];

let size = [50,40,30,20,25];



window.addEventListener("mouseover", showAnimation) ;
function showAnimation(e) {
    let x = e.clientX ;
    let y = e.clientY ;
    let cl = ['one','two','three','four'];
        for(i = 0 ; i < 1 ; i++){
            let rSize = randVal(size) ;
            let elm = document.createElement('div');
            elm.style.left = x - randVal(50) + "px";
            elm.style.top = y - randVal(50) + "px";
            elm.className = "mydiv" + " " + randVal(cl);
            elm.style.backgroundColor = randVal(colors);
              // Générer des valeurs aléatoires pour border-radius
            let borderRadius = randVal(101) + '% ' + randVal(101) + '% ' + randVal(101) + '% ' + randVal(101) + '% / ' +
            randVal(101) + '% ' + randVal(101) + '% ' + randVal(101) + '% ' + randVal(101) + '%';
            elm.style.borderRadius = borderRadius;
            elm.style.height = rSize + "px";
            elm.style.width = rSize + "px";
            document.body.appendChild(elm);
            
        }   
}
let mydiv = document.getElementsByClassName("mydiv");
let bd =document.body;

let bdColors = ['#bbb7e7','#fec5ce','# #a7a709','#b7d5ff','#52a793','#dceb9c','#343c89'];

setInterval(function(){
    for(x = 0 ; x < mydiv.length ; x++){

        mydiv[x].remove();
    }

},1000);

setInterval(function(){
            bd.style.backgroundColor =randVal(bdColors);
            },4000)
}
