let count = 1;
//document.getElementById("radio1").checked = true;


setInterval( function(){
    nextImage();
}, 6000)

function nextImage(){
    
    count++;
    if(count>4){
        count = 1;
    }
    document.getElementById("radio"+count).checked = true;

}

function corzinha(){ 
    var pagat = window.location.href;
    var index = "http://200.145.153.91/raissamartinelli/php/site_gera/index.html";
    var historia = "http://200.145.153.91/raissamartinelli/php/site_gera/utils/historia.html";
    var projetos = "http://200.145.153.91/raissamartinelli/php/site_gera/utils/projetos.html";
    var contato= "http://200.145.153.91/raissamartinelli/php/site_gera/utils/contato.html";
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
