//menu mobile
var menu_mobile = document.getElementById("itens-menu-mobile");
var close_menu = document.getElementById("close_menu");
var abre_menu = document.getElementById("abre_menu");

function mostraMenu() {
    menu_mobile.style.display = "block";
    close_menu.style.display ="block";
    abre_menu.style.display = "none";
}

function fechaMenu(){
  menu_mobile.style.display = "none";
  close_menu.style.display ="none";
  abre_menu.style.display = "block";

}


//form subscrição newsletter

function validaFormulario(){
  erros = 0;
    nome = document.getElementById('nome_inserido');
    email = document.getElementById('email_inserido');

    formatacao_border_inicial = "1px solid black";
    formatacao_border_erro = "2px solid #E36464";
    formatacao_border_correct ="2px solid #8CD1BC";

    nome.style.border = formatacao_border_inicial;
    email.style.border = formatacao_border_inicial;

    if(nome.value == ''){
      nome.style.border = formatacao_border_erro;
      document.getElementById("caixa_aviso_nome").innerHTML="Preencha o seu primeiro nome";
      erros ++;
    } else{
      nome.style.border = formatacao_border_correct;
      document.getElementById("caixa_aviso_nome").innerHTML="";
    }
 
    if(email.value == ''){
      email.style.border = formatacao_border_erro;
      document.getElementById("caixa_aviso_email").innerHTML="Preencha o seu e-mail";
      erros ++;

    } 

    if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)){
      email.style.border = formatacao_border_correct;

    }else{
      email.style.border = formatacao_border_erro;
      document.getElementById("caixa_aviso_email").innerHTML="Preencha corretamente o seu e-mail";
      erros ++;

    }

    if(erros == 0) {
      return true;
    } else {
      return false;
    }
}


//botão to the top

var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 900 || document.documentElement.scrollTop > 900) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//Índice roteiros 

var roteiro_munique = document.getElementById("informacao_roteiro_munique");
var roteiro_nuremberga = document.getElementById("informacao_roteiro_nuremberga");
var roteiro_colditz = document.getElementById("informacao_roteiro_colditz");
var roteiro_nordhausen = document.getElementById("informacao_roteiro_nordhausen");
var roteiro_berlim = document.getElementById("informacao_roteiro_berlim");
var roteiro_gdansk = document.getElementById("informacao_roteiro_gdansk");
var roteiro_varsovia = document.getElementById("informacao_roteiro_varsovia");
var roteiro_cracovia = document.getElementById("informacao_roteiro_cracovia");


function clicaRoteiroMunique(){
  roteiro_munique.style.display = "block";
  roteiro_nuremberga.style.display ="none";
  roteiro_colditz.style.display = "none";
  roteiro_nordhausen.style.display = "none";
  roteiro_berlim.style.display = "none";
  roteiro_gdansk.style.display = "none";
  roteiro_varsovia.style.display = "none";
  roteiro_cracovia.style.display = "none";
}

function clicaRoteiroNuremberga(){
  roteiro_munique.style.display = "none";
  roteiro_nuremberga.style.display ="block";
  roteiro_colditz.style.display = "none";
  roteiro_nordhausen.style.display = "none";
  roteiro_berlim.style.display = "none";
  roteiro_gdansk.style.display = "none";
  roteiro_varsovia.style.display = "none";
  roteiro_cracovia.style.display = "none";
}

function clicaRoteiroColditz(){
  roteiro_munique.style.display = "none";
  roteiro_nuremberga.style.display ="none";
  roteiro_colditz.style.display = "block";
  roteiro_nordhausen.style.display = "none";
  roteiro_berlim.style.display = "none";
  roteiro_gdansk.style.display = "none";
  roteiro_varsovia.style.display = "none";
  roteiro_cracovia.style.display = "none";
}

function clicaRoteiroNordhausen(){
  roteiro_munique.style.display = "none";
  roteiro_nuremberga.style.display ="none";
  roteiro_colditz.style.display = "none";
  roteiro_nordhausen.style.display = "block";
  roteiro_berlim.style.display = "none";
  roteiro_gdansk.style.display = "none";
  roteiro_varsovia.style.display = "none";
  roteiro_cracovia.style.display = "none";
}

function clicaRoteiroBerlim(){
  roteiro_munique.style.display = "none";
  roteiro_nuremberga.style.display ="none";
  roteiro_colditz.style.display = "none";
  roteiro_nordhausen.style.display = "none";
  roteiro_berlim.style.display = "block";
  roteiro_gdansk.style.display = "none";
  roteiro_varsovia.style.display = "none";
  roteiro_cracovia.style.display = "none";
}

function clicaRoteiroGdansk(){
  roteiro_munique.style.display = "none";
  roteiro_nuremberga.style.display ="none";
  roteiro_colditz.style.display = "none";
  roteiro_nordhausen.style.display = "none";
  roteiro_berlim.style.display = "none";
  roteiro_gdansk.style.display = "block";
  roteiro_varsovia.style.display = "none";
  roteiro_cracovia.style.display = "none";
}

function clicaRoteiroVarsovia(){
  roteiro_munique.style.display = "none";
  roteiro_nuremberga.style.display ="none";
  roteiro_colditz.style.display = "none";
  roteiro_nordhausen.style.display = "none";
  roteiro_berlim.style.display = "none";
  roteiro_gdansk.style.display = "none";
  roteiro_varsovia.style.display = "block";
  roteiro_cracovia.style.display = "none";
}

function clicaRoteiroCracovia(){
  roteiro_munique.style.display = "none";
  roteiro_nuremberga.style.display ="none";
  roteiro_colditz.style.display = "none";
  roteiro_nordhausen.style.display = "none";
  roteiro_berlim.style.display = "none";
  roteiro_gdansk.style.display = "none";
  roteiro_varsovia.style.display = "none";
  roteiro_cracovia.style.display = "block";
}

function validaEmail(){
  $('.mensagem_email').html('');
  console.log('Entrei');
  email = $('input[name=email_introduzido]').val();
  console.log(email);
  $.post('valida_email.php', {'email_introduzido' : email }, function(data){
      if(data !='0'){
          $('.mensagem_email').html('este e-mail já existe');
      } 

  });
}

//slider
$(document).ready(function(){
  $('.slider').slick({
      autoplay:false,
      autoplaySpeed: 2000,
      dots: true,
      arrows: false
  });

  //menu scroll com fundo
  $(window).scroll(function(){
      var currentScroll = $(this).scrollTop();
      if (currentScroll >= 748){
          $("header nav").addClass('active_top_menu');
      } else{
          $("header nav").removeClass('active_top_menu');
      }
  }); 

  $(window).scroll(function(){
    var currentScroll = $(this).scrollTop();
    if (currentScroll >= 400){
        $("#header_dicas nav").addClass('active_top_menu');
    } else{
        $("#header_dicas nav").removeClass('active_top_menu');
    }
  });

  //Animação blocos roteiros
  $('.bloco_cards ul .card').on('mouseenter', function(){
    $(this).find('.conteudo_card_hover').fadeIn(1000);
  });

  $('.bloco_cards ul .card').on('mouseleave', function(){
    $(this).find('.conteudo_card_hover').fadeOut();
  });

  //inputs subscrição newsletter
  $(':input').on('focus', function() {
    this.dataset.placeholder = this.placeholder;
    this.placeholder = '';
  }).on('blur', function(){
    this.placeholder = this.dataset.placeholder;
  });

  // mapa vector página destinos
  var pais_visitado = {
    "PT": 1,
    "ES": 2,
    "FR": 3,
    "DE": 4,
    "PL": 5,
    "GB": 6,
    "IE": 7,
    "IT": 8,
    "GR": 9,
    "HR": 10,
    "ME": 11,
    "TR": 12,
    "CZ": 13,
    "AT": 14,
    "HU": 15,
    "NL": 16,
    "BR": 17,
    "BE": 18,
    "JO": 19,
    "VN": 20,
    "KH": 21,
    "RU": 22,
    "IL": 23,
  };

  $('#world-map').vectorMap({
    map:'world_mill',
    zoomOnScroll: false,
    scrollWheelZoom: false,
    series: {
      regions: [{
        values: pais_visitado,
        scale: ['#597B91'],
        normalizeFunction: 'polynomial',
      }]
    },
    onRegionTipShow: function(e, el, code){
      el.html(el.html()+' (País Visitado - '+pais_visitado[code]+')');
    },

  });

});

// carrossel índice roteiros
$(document).ready(function(){
  $('.indice_carrossel_responsive').slick({
    dots: false,
    infinite: false,
    speed: 200,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.slider_fotos_roteiro').slick({
    dots: true,
    arrows: false,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }

    ]
  });

});

