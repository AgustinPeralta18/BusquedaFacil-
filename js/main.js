const app = document.getElementById('typewriter');
const typewriter = new Typewriter(app,{
    loop:true,
    delay:75
}); 

typewriter
    .typeString('Trabajo final para la Universidad Del Aconcagua')
    .pauseFor(200)
    .start();
