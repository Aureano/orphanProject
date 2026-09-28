
let countea = 0;
let countrd = 0;
let countde = 0;
let countad = 0;
let targetea = 250;
let targetrd = 250;
let targetde = 850;
let targetad = 15;

let interval = setInterval(() => {

countea++;

const ea = document.getElementById('ea');
ea.textContent= countea+ "+";

if(countea >= targetea){

    clearInterval(interval);
}
},1);





let intervalrd = setInterval(() => {

countrd++;

const rd = document.getElementById('rd');
rd.textContent= countrd+ "K+";

if(countrd >= targetrd){

    clearInterval(intervalrd);
}
},1);




let intervalde = setInterval(() =>{
    countde++;

    const de= document.getElementById('de');

    de.textContent= countde+ "+";

    if(countde >= targetde){
        clearInterval(intervalde);
    }
},1);




let intervalad = setInterval(() =>{
    countad++;

    const ad= document.getElementById('ad');

    ad.textContent= countad;

    if(countad >= targetad){
        clearInterval(intervalad);
    }
},1);
