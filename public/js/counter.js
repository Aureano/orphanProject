
let count = 0;
let targetea = 250;
let targetrd = 250;
let targetde = 850;
let targetad = 15;

let interval = setInterval(() => {

count++;

const ea = document.getElementById('ea');
ea.textContent= count+ "+";

if(count >= targetea){

    clearInterval(interval);
}
},1);


let intervalrd = setInterval(() => {

count++;

const rd = document.getElementById('rd');
rd.textContent= count+ "K+";

if(count >= targetrd){

    clearInterval(intervalrd);
}
},100);
