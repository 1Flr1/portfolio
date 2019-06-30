var larg=document.body.clientWidth;

$('html').fadeIn(1000);


document.getElementById("retour-button").onclick=function() {clickFunction()};
function clickFunction()
{
    $('html').fadeOut(1000);

    window.setTimeout(retour_function, 1100);
    function retour_function()
    {
    window.location.href="../index.php"
    }
}

document.getElementById("competences-button").onclick=function() {clickFunction2()};
function clickFunction2()
{
    $('html').fadeOut(1000);

    window.setTimeout(competences_function, 1100);
    function competences_function()
    {
    window.location.href="../Competences/competences.php"
    }
}

document.getElementById("projet1").onclick=function() {clickProjet1()};
function clickProjet1()
{
    $('html').fadeOut(1000);

    window.setTimeout(click_function1, 1100);
    function click_function1()
    {
    window.location.href="projet1.php"
    }
}

document.getElementById("projet2").onclick=function() {clickProjet2()};
function clickProjet2()
{
    $('html').fadeOut(1000);

    window.setTimeout(click_function2, 1100);
    function click_function2()
    {
    window.location.href="projet2.php"
    }
}

document.getElementById("projet3").onclick=function() {clickProjet3()};
function clickProjet3()
{
    $('html').fadeOut(1000);

    window.setTimeout(click_function3, 1100);
    function click_function3()
    {
    window.location.href="projet3.php"
    }
}

$("#apropos").click(function()
{
    if (document.body.clientWidth<960)
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


