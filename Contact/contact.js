

document.getElementById("accueil-button").onclick=function() {clickFunction()};
function clickFunction()
{
    window.location.href="../index.php"
}




var larg=document.body.clientWidth;

$("#apropos").click(function()
{
    if (document.body.clientWidth<769)
    {
        $("footer").toggle();
        $("#apropos").toggle();
        document.getElementById("footer-button").innerHTML='<ion-icon name="close-circle-outline" style="font-size:50px;">';
    }

    else
    {
        $("footer").toggle();
        $("#apropos").toggle();
        document.getElementById("footer-button").innerHTML='Fermer <ion-icon name="close-circle-outline"></ion-icon></button>';
        
    }

});

$("#footer-button").click(function()
{

    $("footer").toggle();
    $("#apropos").toggle();

});

$("#header-button").click(function()
{
    $("#lien").css("display", "");
    $("#lien").css("flex-direction",""); 
    $("#lien").css("margin","");
    // $("#lien a").css("margin","");

    if (document.body.clientWidth<769)
    {

        
        $("#lien").css("flex-direction","column");
        $("#lien").css("margin", "auto"); 
        // $("#lien a").css("margin","0 auto 0 auto");
        // $("#lien a").css("flex-basis","20px");
        $("header").toggle();
        $("#div-menu-button").toggle();
        // document.getElementById("nom").style.paddingTop = "93px";
    }

    else
    {
        $("#lien a").css("margin-right","40px");
        $("lien").css("margin-right","40px;");
        $("header").toggle();
        $("#div-menu-button").toggle();
        document.getElementById("nom").style.paddingTop = "179px";

    }


    
    

});

$("#menu-button").click(function()
{
    $("#lien").css("display", "");
    $("#lien").css("flex-direction",""); 
    $("#lien").css("margin","");
    $("#lien a").css("margin","");
    
    if (document.body.clientWidth<769)
    {
        // $("header").css("display", "flex");
        // $("header").css("flex-direction", "column"); 
        // $("#lien").css("margin", "auto"); 
        // $("#lien a").css("margin","0 auto 0 auto");
        $("header").toggle();
        $("#div-menu-button").toggle();
        document.getElementById("header-button").innerHTML=' <ion-icon name="close-circle-outline" style="font-size:50px;">';
        // document.getElementById("nom").style.paddingTop = "214px";
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
        document.getElementById("nom").style.paddingTop = "179px";
    }
    
  
});


