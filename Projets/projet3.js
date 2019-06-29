document.getElementById("retour-button").onclick=function() {clickFunction()};
function clickFunction()
{
    window.location.href="projets.php"
}

document.getElementById("competences-button").onclick=function() {clickFunction2()};
function clickFunction2()
{
    window.location.href="/Competences/competences.php"
}

document.getElementById("left").onclick=function() {clickLeft()};
function clickLeft()
{
    window.location.href="projet2.php"
}

document.getElementById("right").onclick=function() {clickRight()};
function clickRight()
{
    window.location.href="projet1.php"
}

$("#header-button").click(function()
{
    $("#lien").css("display", "");
    $("#lien").css("flex-direction",""); 
    $("#lien").css("margin","");
    // $("#lien a").css("margin","");

    if (document.body.clientWidth<960)
    {

        
        $("#lien").css("flex-direction","column");
        $("#lien").css("margin", "auto"); 
        // $("#lien a").css("margin","0 auto 0 auto");
        // $("#lien a").css("flex-basis","20px");
        $("header").toggle();
        $("#div-menu-button").toggle();
        
    }

    else
    {
        $("#lien a").css("margin-right","40px");
        $("lien").css("margin-right","40px;");
        $("header").toggle();
        $("#div-menu-button").toggle();
        

    }


    
    

});

$("#menu-button").click(function()
{
    $("#lien").css("display", "");
    $("#lien").css("flex-direction",""); 
    $("#lien").css("margin","");
    $("#lien a").css("margin","");
    
    if (document.body.clientWidth<960)
    {
        // $("header").css("display", "flex");
        // $("header").css("flex-direction", "column"); 
        // $("#lien").css("margin", "auto"); 
        // $("#lien a").css("margin","0 auto 0 auto");
        $("header").toggle();
        $("#div-menu-button").toggle();
        document.getElementById("header-button").innerHTML=' <ion-icon name="close-circle-outline" style="font-size:50px;">';
        
    }
    else
    {
        $("header").css("display", "flex");
        $("header").css("flex-direction", "column");  
        $("#lien").css("display", "flex");
        $("#lien").css("flex-direction", "row"); 
        // $("#lien").css("margin", "auto 0px -21px auto");

        // $("header").toggle();
        // $("#div-menu-button").toggle();

        document.getElementById("header-button").innerHTML='Fermer <ion-icon name="close-circle-outline">';
        // $("header").toggle();
        $("#div-menu-button").toggle();
        
    }
    
  
});