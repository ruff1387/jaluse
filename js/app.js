var AFL3 = 0;

var C_Vardas = $('input#C_Vardas');
var C_Telefonas = $('input#C_Telefonas');
var C_ElPastas = $('input#C_ElPastas');
var C_Miestas = $('input#C_Miestas');
var C_Comment = $('textarea[name="zin"]');

C_Vardas.keyup(function(){ if($(this).attr('class')=='empty'){ $(this).removeClass('empty'); } });
C_Telefonas.keyup(function(){ if($(this).attr('class')=='empty'){ $(this).removeClass('empty'); } });
C_ElPastas.keyup(function(){ if($(this).attr('class')=='empty'){ $(this).removeClass('empty'); } });
C_Miestas.keyup(function(){ if($(this).attr('class')=='empty'){ $(this).removeClass('empty'); } });
C_Comment.keyup(function(){ if($(this).attr('class')=='empty'){ $(this).removeClass('empty'); } });

$('a.siu').click(function(){
  console.log(C_Comment.val());
    var check_inputs = 0;
    if(!C_Vardas.val().length) { C_Vardas.addClass('empty'); check_inputs++; }
    if(!C_Telefonas.val().length) {   C_Telefonas.addClass('empty'); check_inputs++; }
    if(!C_ElPastas.val().length) {   C_ElPastas.addClass('empty'); check_inputs++; }
    if(!C_Miestas.val()) {  C_Miestas.addClass('empty'); check_inputs++; }
    if(C_Comment.val().length == 0) {  C_Comment.addClass('empty'); check_inputs++; }
    if(!check_inputs){
      if(AFL3==1) return 1;
      $('#C-Input').addClass('d-none');
      //$('#C-Collapsed').removeClass('d-none');
      $('#loader3').removeClass('d-none');
      AF3 = 1;
      $.post("send.php", { 
        Vardas: C_Vardas.val(), 
        Email: C_ElPastas.val(),
        Telefonas: C_Telefonas.val(),
        Komentaras: C_Comment.val(),
        Town: C_Miestas.val()
      }).done(function( data ) { 
        $('#loader3').addClass('d-none');
        $('#C-Collapsed').removeClass('d-none').css({'opacity':'0'}).removeClass('d-none').animate({'opacity':'1'});
        console.log( "Data Loaded: " + data ); 
        AFL3 = 0;
      });
    }

    return 1;
});

var AFL=0;
$('input#Tavo-Vardas').keyup(function(){ if($(this).attr('class').match('empty')){ $(this).removeClass('empty'); } });
$('input#Tavo-Email').keyup(function(){ if($(this).attr('class').match('empty')){ $(this).removeClass('empty'); } });
$('input#Tavo-Number').keyup(function(){ if($(this).attr('class').match('empty')){ $(this).removeClass('empty'); } });
$('textarea#Tavo-Jusu').keyup(function(){ if($(this).attr('class').match('empty')){ $(this).removeClass('empty'); } });
$('button#Tavo-Send').click(function(){
  var check_inputs = 0;

  if(!$('input#Tavo-Vardas').val().length) { $('input#Tavo-Vardas').addClass('empty'); check_inputs++; }
  if(!$('input#Tavo-Email').val().length) {   $('input#Tavo-Email').addClass('empty'); check_inputs++; }
  if(!$('input#Tavo-Number').val().length) {   $('input#Tavo-Number').addClass('empty'); check_inputs++; }
  if($('textarea#Tavo-Jusu').val().length == 0) {  $('textarea#Tavo-Jusu').addClass('empty'); check_inputs++; }

  if(!check_inputs){
    if(AFL==1) return 1;
    $('.top-contact-input').addClass('d-none');
    $('#loader').removeClass('d-none');
    AFL = 1;
    $.post("send.php", { 
      Vardas: $('input#Tavo-Vardas').val(), 
      Email: $('input#Tavo-Email').val(),
      Telefonas: $('input#Tavo-Number').val(),
      Komentaras: $('textarea#Tavo-Jusu').val()
    }).done(function( data ) { 
      $('#loader').addClass('d-none');
      $('.collapsed-contact-input').css({'opacity':'0'}).removeClass('d-none').animate({'opacity':'1'});
      console.log( "Data Loaded: " + data ); 
      AFL = 0;
    });
  }
});

var AFL2 = 0;
jQuery('#send-email-modal input').keyup(function(){ if($(this).attr('class')=='empty'){ $(this).removeClass('empty'); } });
jQuery('#send-email-modal textarea').keyup(function(){ if($(this).attr('class')=='empty'){ $(this).removeClass('empty'); } });
jQuery('#send-email-modal button.modal-send-button').click(function() {
  var check_inputs = 0;

  if(!$('input#Vardas').val().length) { $('input#Vardas').addClass('empty'); check_inputs++; }
  if(!$('input#Email').val().length) {   $('input#Email').addClass('empty'); check_inputs++; }
  if(!$('input#Telefonas').val().length) {   $('input#Telefonas').addClass('empty'); check_inputs++; }
  if(!$('input#Adress').val().length) {  $('input#Adress').addClass('empty'); check_inputs++; }
  if($('#send-email-modal textarea').val().length == 0) {  $('#send-email-modal textarea').addClass('empty'); check_inputs++; }

  if(!check_inputs){
    if(AFL2==1) return 1;
    AFL2 = 1;
    $('#send-email-modal').hide();
    $('#loader2').removeClass('d-none');
    $.post("send.php", { 
      Vardas: $('input#Vardas').val(), 
      Email: $('input#Email').val(),
      Telefonas: $('input#Telefonas').val(),
      Adress: $('input#Adress').val(),
      Komentaras: $('#send-email-modal textarea').val()
    }).done(function( data ) {
      console.log( "Data Loaded: " + data );
      $('#loader2').addClass('d-none');
      $('.success-modal-block').css({'opacity':'0'}).removeClass('d-none').animate({'opacity':'1'});
    });
  }

  console.log('#send-email-modal: '+check_inputs);
  return 1;
});



var list = document.querySelectorAll("div[data-image]");

for (var i = 0; i < list.length; i++) {
  var url = list[i].getAttribute('data-image');
  list[i].style.backgroundImage="url('" + url + "')";
}

var currSlideNumber=1;
$('.points-musu a').click(function(){
  var clickNumber=parseInt($(this).attr('id').replace('point', ''));
  if(currSlideNumber==clickNumber) return 1;
  var currClickElem=$('#point'+currSlideNumber);
  currClickElem.removeClass('point-active');
  $(this).addClass('point-active');
  if(clickNumber == 1){
    $('.musu-pics').animate({scrollLeft: 0});
  }
  else if(clickNumber == 2){
    $('.musu-pics').animate({scrollLeft: 1170});
  }
  else if(clickNumber == 3){
    $('.musu-pics').animate({scrollLeft: 2340});
  }
  currSlideNumber=clickNumber;
  return 1;
});
var last_element = -1;
$('.aud ul li').click(function(){
  if(last_element != -1){
    last_element.removeClass('active');
  }
  $(this).addClass('active');
  last_element = $(this);
});
var last_element2 = -1;
$('.komp ul li').click(function(){
  if(last_element2 != -1){
    last_element2.removeClass('active');
  }
  $(this).addClass('active');
  last_element2 = $(this);
});
$('.pr-header').click(function(){
  if($(window).width() <= '991'){
    var elementUl = $(this).attr('id') + '-ul';
    if($('ul#'+elementUl).css('height')!='0px'){
      $('ul#'+elementUl).css({'height':'0px'});
      $('ul#'+elementUl).find('li').css({'opacity':'0'});
      $(this).attr('data-after', '↓');
    }
    else{
      $('ul#'+elementUl).css({'height':'auto'});
      $('ul#'+elementUl).find('li').animate({'opacity':'1'});
      $(this).attr('data-after', '↑');
    }
  }
});
var last_element = -1;
$('.aud ul li').click(function(){
  if(last_element != -1){
    last_element.removeClass('active');
  }
  $(this).addClass('active');
  last_element = $(this);
});
var last_element2 = -1;
$('.komp ul li').click(function(){
  if(last_element2 != -1){
    last_element2.removeClass('active');
  }
  $(this).addClass('active');
  last_element2 = $(this);
});

$('.circle-produse-right').click(function(){
  if($('.produse-slider').scrollLeft() >= 792) return 1;
  var to_slide = $('.produse-slider').scrollLeft() + 264;
      ///console.log($('.produse-slider').scrollLeft()+' : '+to_slide);
      $('.produse-slider').animate({scrollLeft: to_slide});
    });
$('.circle-produse-left').click(function(){
  if($('.produse-slider').scrollLeft() < 264) return 1;
  var to_slide = $('.produse-slider').scrollLeft() - 264;
  $('.produse-slider').animate({scrollLeft: to_slide});
});