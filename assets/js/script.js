$( document ).ready(function() {
  //console.log( "ready!" );
  $('.filtre a').click(function(){
    var href = $(this).attr('href').substring(1,3);
    //console.log(href);
    switch (href) {
      case '17':
        //console.log('Pains');
        $('.liste-produits .17').siblings().toggleClass("hiddening");
        $('.filtre .reset').removeClass("hiddening");
        break;
      case '18':
        //console.log('Vienoiseries');
        $('.liste-produits .19').siblings().toggleClass("hiddening");
        $('.filtre .reset').removeClass("hiddening");
        break;
      case '19':
        //console.log('Confiseries');
        $('.liste-produits .19').siblings().toggleClass("hiddening");
        $('.filtre .reset').removeClass("hiddening");
        break;
      default:
        $('.liste-produits *').removeClass("hiddening");
        $('.filtre .reset').addClass("hiddening");
    }
  });
});
