window.onLoad = function () {
    start();
};

    
var largeur = 760;
var hauteur = 400;
var size = 70;
var direction;
var nourriture;
var score;
var tabSnake;

	
function start() {
        
    tabSnake = [];
    //ajoute un element en fin du tableau
    tabSnake.push({
        x: 1,
        y:0
    });
    creerNourriture();
    score = 0;
    //traitement javascript
    setInterval(dessiner, 150);
}
start();
        
$(document).keydown(function(ev){
    if(ev.which == "39"){
        direction = "droite";
    }
    else if(ev.which == "37"){
        direction = "gauche";
    }
    else if(ev.which == "38"){
        direction = "haut";
    }
    else if(ev.which == "40"){
        direction = "bas";
    }
})
	
function creerNourriture()
{
    var random = Math.random();
    nourriture = {
        x: Math.round(random*(largeur-size)/size),
        y: Math.round(random*(hauteur-size)/size)
        };
}
	
function dessiner()
{
    var c = document.getElementById("canvas");
    var ctx = c.getContext("2d");
    ctx.fillStyle = "white";
    ctx.fillRect(0, 0,largeur, hauteur);		
    var tx = tabSnake[0].x;
    var ty = tabSnake[0].y;

    if(direction == "droite") tx++;
    else if(direction == "gauche") tx--;
    else if(direction == "haut") ty--;
    else if(direction == "bas") ty++;

    if(tx == nourriture.x && ty == nourriture.y)
    {
        var caseSnake = {
            x: tx, 
            y: ty
        };
        score=score + 5;
        creerNourriture();
    }
    else
    {
        var caseSnake = tabSnake.pop();
        caseSnake.x = tx; 
        caseSnake.y = ty;
    }	
    //ajoute un ou plusieurs éléments au début d'un tableau
    tabSnake.unshift(caseSnake);
		
    for(var i = 0; i < tabSnake.length; i++)
    {
        var c = tabSnake[i];
        ctx.fillStyle = "#FA5858";
        ctx.fillRect(c.x*size, c.y*size, size, size);
    }	
    ctx.fillStyle = "#FA5858";
    ctx.fillRect(nourriture.x*size, nourriture.y*size, size, size);
    $('#score').text(score);
        
    // Si on touche les bords on perd
    if ( (tx == (largeur/size)) || (ty == hauteur/size ) || (tx == -1 ) || (ty == -1 ) ){
       
        $.ajax({
            url:"http://localhost:8888/membres/newscore.php",
            type:"POST",
            //data qu'on envoie
            data:{
                score: score,
                nom:"snake"
            }
        }).success(function(data){
            console.log(data);
        }).error(function(xhr, x, y){
            console.log(x);
            console.log(y);
        });
        
        $("#reponse").text("vous avez perdu !!");
        $("#boutonRejouer").css("display","block");
        return false;
            
    }
}
	


function rechargerPage(){
    location.reload();
}