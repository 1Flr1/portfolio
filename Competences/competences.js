var larg=document.body.clientWidth;



var result_1= parseInt(document.getElementById("niveau_1").textContent);
var result_2= parseInt(document.getElementById("niveau_2").textContent);
var result_3= parseInt(document.getElementById("niveau_3").textContent);
var result_4= parseInt(document.getElementById("niveau_4").textContent);



var niveau_1=result_1*20/100;
var niveau_2=result_2*20/100;
var niveau_3=result_3*20/100;
var niveau_4=result_4*20/100;


document.getElementById("retour-button").onclick=function() {clickFunction()};
function clickFunction()
{
    window.location.href="../Projets/projets.php"
}

document.getElementById("contact-button").onclick=function() {clickFunction2()};
function clickFunction2()
{
    window.location.href="../Contact/contact.php"
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


var competence_1 = new ProgressBar.Circle(progress1, {
    strokeWidth: 2,
    easing: 'easeInOut',
    duration: 2000,
    from: { color: '#eee' },
    to: { color: '#000' },
    step: function(state, circle, attachment) {
        circle.path.setAttribute('stroke', state.color);
    },
    trailColor: '#eee',
    trailWidth: 1,
    svgStyle: null
});

competence_1.animate(niveau_1);

var competence_2 = new ProgressBar.Circle(progress2, {
    strokeWidth: 2,
    easing: 'easeInOut',
    from: { color: '#eee' },
    to: { color: '#000' },
    step: function(state, circle, attachment) {
        circle.path.setAttribute('stroke', state.color);
    },

    duration: 2000,
    trailColor: '#eee',
    trailWidth: 1,
    svgStyle: null
});



competence_2.animate(niveau_2);

var competence_3 = new ProgressBar.Circle(progress3, {
    strokeWidth: 2,
    easing: 'easeInOut',
    duration: 2000,
    from: { color: '#eee' },
    to: { color: '#000' },
    step: function(state, circle, attachment) {
        circle.path.setAttribute('stroke', state.color);
    },
    trailColor: '#eee',
    trailWidth: 1,
    svgStyle: null
});

competence_3.animate(niveau_3);

var competence_4 = new ProgressBar.Circle(progress4, {
    strokeWidth: 2,
    easing: 'easeInOut',
    duration: 2000,
    from: { color: '#eee' },
    to: { color: '#000' },
    step: function(state, circle, attachment) {
        circle.path.setAttribute('stroke', state.color);
    },
    trailColor: '#eee',
    trailWidth: 1,
    svgStyle: null
});

competence_4.animate(niveau_4);

