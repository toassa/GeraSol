let count = 1;
//document.getElementById("radio1").checked = true;


setInterval( function(){
    nextImage();
}, 5000)

function nextImage(){
    
    count++;
    if(count>4){
        count = 1;
    }
    document.getElementById("radio"+count).checked = true;

}

function corzinha(){ 
    var pagat = window.location.href;
    var index = "http://200.145.153.175/raissamartinelli/php/site_gera/index.html";
// <<<<<<< HEAD
    var historia = "http://200.145.153.175/raissamartinelli/php/site_gera/utils/sobre_nos.html";
// =======
    var historia = "http://200.145.153.175/raissamartinelli/php/site_gera/utils/projeto.html";
// >>>>>>> 9b47dd4add0e70c6bb628c869282b8b3b27ae9ea
    var projetos = "http://200.145.153.175/raissamartinelli/php/site_gera/utils/equipe.html";
    var contato= "http://200.145.153.175/raissamartinelli/php/site_gera/utils/contato.html";
    if (index==pagat){
        document.getElementById("home_button").style.color="white";
    }
    if (historia==pagat)
    {
        document.getElementById("history_button").style.color="white";
    }
    if (projetos==pagat)
    {
        document.getElementById("products_button").style.color="white";
    }
    if (contato==pagat)
    {
        document.getElementById("contact_button").style.color="white";
    }
//https://codepen.io/laugusta/pen/ZBjzVW
}
window.addEventListener('scroll', function(){
    var menu = document.querySelector('.butawn');
    menu.classList.toggle('estica', window.scrollY > 250);
  })
  window.addEventListener('scroll', function(){
    var menu = document.querySelector('.img_topo_feb');
    menu.classList.toggle('aparece', window.scrollY > 250);
  })
/*function aparecerTexto() {
  document.getElementById("div").innerHTML = "<ion-icon name='mail-outline' id ='contact_button'></ion-icon><br><h5>lalala<h5>";
}
function reset() {
  document.getElementById("div").innerHTML = "<ion-icon name='mail-outline' id ='contact_button'></ion-icon>";
}
 
html---------------------------------
<div clas="lalalal" onmouseover="aparecerTexto();" onmouseout="reset();" id="div">lalala</div>
*/
