
var Moove = document.querySelector(".event-model ");
var khafaya = document.querySelector(".invisible ");
var Hayed = document.querySelector(".remove ");


Moove.addEventListener('click',function(){
    khafaya.classList.remove('invisible');
})

Hayed.addEventListener('click',function(){
    khafaya.classList.add('invisible');
});


