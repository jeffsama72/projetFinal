$(document).ready(function() {  // La fonction cherche à savoir si tout le HTML a été chargé avant de se lancer

  // fonction pour bloquer la touche de tabulation

  $(window).on('keypress', function(event){

    var keyCode = event.keyCode || event.which;

      if (keyCode == 9){
        event.preventDefault();
        return false;
      }
  });

  // pour cacher les li et eviter que la tabulation passe au input suivant et casse le diapo

  $('.next1').click(function(){
    $('#li1').css('visibility', 'hidden');
    $('#li2').css('visibility', 'visible');
    $('#li3').css('visibility', 'hidden');
  });
  $('.next2').click(function(){
    $('#li1').css('visibility', 'hidden');
    $('#li2').css('visibility', 'hidden');
    $('#li3').css('visibility', 'visible');
  });
  $('.previous1').click(function(){
    $('#li1').css('visibility', 'visible');
    $('#li2').css('visibility', 'hidden');
    $('#li3').css('visibility', 'hidden');
  });
  $('.previous2').click(function(){
    $('#li1').css('visibility', 'hidden');
    $('#li2').css('visibility', 'visible');
    $('#li3').css('visibility', 'hidden');
  });

// code pour le slide dans la vue de la page visiteur pour l'inscription permettant de faire défiler différent formulaire 

    var compteur = 0; 
    var nbContent = $('.slider ul li').length;
    var largeurUl = nbContent * 1130; 
    $('.slider ul').css('width',largeurUl);
    compteurtotal = -(largeurUl -  1130);


    $('.suivant').click(function(event){  

      event.preventDefault();
      //compteur met à jour le margin left à appliquer
      compteur = compteur -  1130; 
      
      //applique la règle du margin avec la variable compteur. 
      $('.slider ul').css('margin-left',compteur+'px');
    });

    $('.precedent').click(function(event){

        event.preventDefault();
        // ajoute des pixels pour faire revenir en arrière le slide
        compteur = compteur +  1130; 

        $('.slider ul').css('margin-left',compteur+'px');
    }); 


  $('input[name=idStatut]').click(function(){

    if ($('#trigger1').is(":checked")) {
      $('#hidden1').css('display', 'block');
      $('.rowPad').css('padding-top', '10px');
    } else {
      $('#hidden1').css('display', 'none');
       $('.rowPad').css('padding-top', '90px');
    }

  });

  $('input[name=disponibilite]').click(function(){

    if ($('#trigger2').is(":checked")) {
      $('#hidden2').css('display', 'inline-block');
    } else {
      $('#hidden2').css('display', 'none');
    }

  });

});
