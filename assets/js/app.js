var lang = $('body').data('lang');
console.log(lang);

// ===== Scroll to Top ====
$(window).scroll(function() {
  if ($(this).scrollTop() >= 400) {        // If page is scrolled more than 50px
      $('#return-to-top').fadeIn(500);    // Fade in the arrow
  } else {
      $('#return-to-top').fadeOut(1000);   // Else fade out the arrow
  }
});

$('#return-to-top').click(function() {      // When arrow is clicked
  $('body,html').animate({
      scrollTop : 0                       // Scroll to top of body
  }, 500);
});


$('.slider-iconos').owlCarousel({
    loop:true,
   // stagePadding: 50,
   autoWidth:true,
    lazyLoad: true,
    margin:10,
    nav:true,
    center: false,
    dots: false,
    autoWidth: true,
    autoplay: true,
   responsive:{
        0:{
            items:1,
            margin: 5
        },
        430:{
            items:4
        },
        768:{
            items:5
        }
    }
});

function myFacebookLogin() {
  FB.login(function(response){
  	if (response.authResponse) {
     console.log('Welcome!  Fetching your information.... ');
     FB.api('/me?fields=id,name,gender,email', function(response) {
       //console.log(response);
       //console.log('Good to see you, ' + response.name + '.');
       var id = response.id;
       $.ajax({
		  type: "POST",
		  url: 'ajax/save-user-fb.php',
		  data: response,
		  success: function(data){
		  	if(data == 'ok'){
		  		window.location.href = "datos.php?_fbid="+id;
		  	}else if(data == 'existe'){
		  		window.location.href = "index.php"
		  	}
		  }
		});
     });
    } else {
     console.log('User cancelled login or did not fully authorize.');
    }
  }, {scope: 'email, public_profile'});
}

function sharefbimage() {

	var img = $("#img-share").attr('src');
	var id = $("#img-share").attr('data-id');
	var url_img = "http://burntogive.com/app/fb_image.php?p="+id;

	console.log('http://burntogive.com/app/home.php?p=' + id);

    FB.ui(
    {
        method: 'share',
        name: 'Burn a calorie feed a child',
        href: 'http://burntogive.com/app/home.php?p=' + id,
        picture: url_img,
        caption: '#BURNTOGIVE',
        description: 'Burn a calorie feed a child'
    },
    function (response) {
        if (response) {
            console.log(response);
			window.location.href = "index.php";
        } else {
            console.log('error');
        }
    });
}

var v = jQuery("#form-register").validate({
	submitHandler: function(form) {
		jQuery(form).ajaxSubmit({
			beforeSubmit: function(){
				//mostrar login
			},
			success: function(data){
				console.log(data);
				if(data == 'ok'){
					swal({
					      title: "Usuario creado con éxito!",
					      //text: "Debes ingresar con tus datos",
					      type: "success",
					      button: "Ingresar",
					      showCancelButton: true
					}).then(
					      // Redirect the user
					      function(){
					      window.location.href = "index.php";
					});

				}else if(data == 'ok-fb'){
					swal({
					      title: "Usuario creado con éxito!",
					      //text: "Ya puedes ingresar con Facebook",
					      type: "success",
					      button: "Ingresar",
					      showCancelButton: true
					    }).then(
					      // Redirect the user
					      function(){
					      window.location.href = "index.php";
					      });

				}else if(data == 'existe'){
					swal("Usuario ya existe!", "", "warning");
				}
			}
		});
	}
});

var v = jQuery("#form-register-ini").validate({
	rules: {
    email: "required",
    email2: {
      equalTo: "#email"
    }
  },
	submitHandler: function(form) {
		
			$('#form-register-ini button').addClass('disabled');
			if(lang=='en'){
			
				$('#form-register-ini button').html('Loading');
			}else{
			
				$('#form-register-ini button').html('Cargando');
			}	        
	        
		jQuery(form).ajaxSubmit({
			beforeSubmit: function(){
				//mostrar login
			},
			success: function(data){
				console.log(data);
				if(data == 'ok'){
					window.location.href = "index.php";
				}else if(data == 'existe'){
					swal("Usuario ya existe!", "", "warning");
				}
			}
		});
	}
});



$("input.fecha").mask("99-99-9999");

var v1 = jQuery("#form-login").validate({
			submitHandler: function(form) {
				jQuery(form).ajaxSubmit({
					beforeSubmit: function(){
						//mostrar login
					},
					success: function(data){
						if(data == 'ok'){
							window.location.href = "index.php";
						}
						
					}
				});
			}
		});

var v2 = jQuery("#formEnviarCalorias").validate({
	submitHandler: function(form) {
		numCalorias = $('#numCalorias').val();
		if(numCalorias>3000){
			if(lang=='en'){
				swal("", "Maximum calories per day is 3,000", "warning");
			}else{
				swal("", "El máximo de calorías diarias a ingresar son 3.000.", "warning");
			}
			$('#numCalorias').val('');
		}else{
			jQuery(form).ajaxSubmit({
			beforeSubmit: function(){
				//mostrar login
			},
			success: function(data){
				console.log(data);
				if(data >= 1){
					//window.location.href = "index.php";
					console.log("mostrar modal");
					var calorias = $("#numCalorias").val();
					$("#num-calorias2").html(calorias);
					$("#userID").val(data);
					//$("#modal-share").modal();

		  			window.location.href = "share-image.php?_p="+data;
				}else{
					if(data == 0){
						if(lang=='en'){
							swal("You reached the maximum calories per day of 3,000", "Please come back tomorrow after your next workout!", "warning");
						}else{
							swal("Sobrepasaste el máximo de 3.000 calorías diarias a ingresar.", "Vuelve a ingresar mañana después de hacer ejercicio!", "warning");
						}
					}
				}

			}
		});
		}
	}
});




function openNav() {
    document.getElementById("myNav").style.width = "100%";
    $('html').css('height','100%');
    $('html').css('overflow','hidden');
    $('body').css('height','100%');
    $('body').css('overflow','hidden');
    
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    $('html').css('height','auto');
    $('html').css('overflow','auto');
    $('body').css('height','auto');
    $('body').css('overflow','auto');
}


function imagenSecundaria(){

	var idUser = $("#userID").val();

	  $.ajax({
		  type: "POST",
		  url: 'ajax/upload.php',
		  data: {userID: idUser, op: 'generica'},
		  beforeSend: function() {
	    	//mostrar loading
	    	console.log("enviar post");
	  		},
		  success: function(data){
		  	console.log(data);
		  	//alert(data);
	  	    if(data >= 1){
	  			window.location.href = "share-post.php?_p="+data;
	  		}else{
	  			swal("Lo sentimos", "Ha ocurrido un error, inténtalo más tarde", "warning");
	  		}
		  }
		});

}

function calcular_calorias(clicked_id){
	//console.log(clicked_id);
	var str = $("#"+clicked_id+" img").attr("src");
	var img = str.replace("iconos/", "iconos/ico-");
	$('#icono-activo').attr('src',img);

	var factor = $("#con-"+clicked_id).attr("data-min");
	if(lang=='en'){
		var deporte = $("#con-"+clicked_id).attr("data-depen");
	}else{
		var deporte = $("#con-"+clicked_id).attr("data-dep");
	}
	console.log(deporte);
	$("p.deporte").html(deporte);
	$("#factor").val(factor);

	doneTyping();
}

//setup before functions
var typingTimer;                //timer identifier
var doneTypingInterval = 200;  //time in ms, 5 second for example
var $input = $('#minutos');

//on keyup, start the countdown
$input.on('keyup', function () {
  clearTimeout(typingTimer);
  typingTimer = setTimeout(doneTyping, doneTypingInterval);
});

//on keydown, clear the countdown
$input.on('keydown', function () {
  clearTimeout(typingTimer);
});

//user is "finished typing," do something
function doneTyping () {
  //do something
  //console.log("calcular ahora");
  var factor = $("#factor").val();
  var min = $("#minutos").val();

  var totalCalorias = Math.round(parseFloat(factor) * parseFloat(min));

  //console.log(totalCalorias);
  if(!isNaN(totalCalorias)){
  	$("#calCalorias").val(totalCalorias);
  }

}
$('#modal-calcula').on('show.bs.modal', function () {
    $('.slider-iconos').owlCarousel({
	    loop:true,
	   // stagePadding: 50,
	   autoWidth:true,
	    lazyLoad: true,
	    margin:10,
	    nav:true,
	    center: false,
	    dots: false,
	    autoWidth: true,
	    autoplay: true,
	   responsive:{
	        0:{
	            items:1,
	            margin: 5
	        },
	        430:{
	            items:4
	        },
	        768:{
	            items:5
	        }
	    }
	});
});

$('#modal-calcula').on('hidden.bs.modal', function () {
    // do something…
    console.log('pasar valor de calorias');
    var calCalorias = $("#calCalorias").val();
    if(parseInt(calCalorias) > 0){
    	$("#numCalorias").val(calCalorias);
    }else{
    	$("#numCalorias").val('');
    }
});


(function() {

	var bar = $('.bar');
	var percent = $('.percent');
	var status = $('#status');

	$('#form-upload').ajaxForm({


	    beforeSend: function() {
	        $('.pordefecto').addClass('hide');
	        $('#elegir').addClass('hide');
	        $('#confirmar').addClass('disabled');

			if(lang=='en'){
				$('#confirmar span.txt').html('Loading');
			}else{
				$('#confirmar span.txt').html('Cargando');
			}	        
	        
	        $('#confirmar span.percent').removeClass('hide');
	        status.empty();
	        var percentVal = '0%';
	        bar.width(percentVal)
	        percent.html(percentVal);
	    },
	    uploadProgress: function(event, position, total, percentComplete) {
	        var percentVal = percentComplete + '%';
	        bar.width(percentVal)
	        percent.html(percentVal);
	    },
	    success: function() {
	        var percentVal = '100%';
	        bar.width(percentVal)
	        percent.html(percentVal);

	        $('#confirmar span.percent').addClass('hide');
			if(lang=='en'){
	        	$('#confirmar span.txt').html('Wait');
			}else{
	        	$('#confirmar span.txt').html('Espere');
			}	   
	    },
		complete: function(xhr) {
			var res = xhr.responseText;
			
		  	//alert(res);
			if(res >= 1){
				window.location.href = "share-post.php?_p="+res;
			}else{
				swal("Lo sentimos", "Ha ocurrido un error, inténtalo más tarde "+res, "warning");
			}
		}
	});

})();


function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
//             $('#fotoperfil').attr('src', e.target.result);
            $('.img-wrap').css('background-image', 'url('+e.target.result+')');

            $('#nofoto').hide();
            $('#fotito').fadeIn();
            $('#confirmar').removeClass('hide');
            $('.elegirfoto').addClass('hide');
            $('.elegirotra').removeClass('hide');
        }

        reader.readAsDataURL(input.files[0]);
    }
}


/*
$("#fileToUpload").change(function(){
    readURL(this);
});
*/


$('.share-ig').on('click', function(){
	$('#sharepaso1').addClass('hide');
	$('#sharepaso2').removeClass('hide');
});


$('.selector-idioma a').on('click', function(){
	
	idioma = $(this).data('lang');
	  $.ajax({
		  type: "POST",
		  url: 'ajax/lang.php',
		  data: {lang: idioma},
		  beforeSend: function() {
	    	//mostrar loading
	    	console.log("Cambiar idioma");
	  		},
		  success: function(data){
		  	console.log(data);
		  	    if(data =='ok'){
		  			location.reload();
		  		}
		  }
		});	
});


'use strict';
// var original 	= document.querySelectorAll('img')[0];
var rotated 	= document.getElementById("lafotito");
// var span 		= document.querySelector('span');
document.getElementById('fileToUpload').addEventListener('change', function(event){
  log('File changed', true);
  var file = event.target.files[0];
  if(file === undefined){
//     original.parentElement.style.display = 'none';
    rotated.parentElement.style.display = 'none';
    log('No file selected');
    return;
  }
  getOrientation(file, showImage);
	$('#nofoto').hide();
	$('#fotito').fadeIn();
	$('#confirmar').removeClass('hide');
	$('.elegirfoto').addClass('hide');
	$('.elegirotra').removeClass('hide');
});
// Based on: https://stackoverflow.com/a/32490603/5503625
function getOrientation(file, callback) {
  log('getOrientation()');
  if(!window.FileReader){
    return log('FileReader is not supported');
  }
  if(!window.FileReader.prototype.readAsArrayBuffer){
    return log('readAsArrayBuffer is not supported');
  }
  var reader = new FileReader();
  reader.onload = function(e) {
    if(!window.DataView){
      return log('DataView is not supported');
    }
    if(!window.DataView.prototype.getUint16){
      return log('getUint16 is not supported');
    }
    if(!window.DataView.prototype.getUint32){
      return log('getUint32 is not supported');
    }
    var view = new DataView(e.target.result);
    if (view.getUint16(0, false) != 0xFFD8) return callback(file, -2);
    var length = view.byteLength, offset = 2;
    while (offset < length) {
      var marker = view.getUint16(offset, false);
      offset += 2;
      if (marker == 0xFFE1) {
        if (view.getUint32(offset += 2, false) != 0x45786966) return callback(file, -1);
        var little = view.getUint16(offset += 6, false) == 0x4949;
        offset += view.getUint32(offset + 4, little);
        var tags = view.getUint16(offset, little);
        offset += 2;
        for (var i = 0; i < tags; i++)
          if (view.getUint16(offset + (i * 12), little) == 0x0112)
            return callback(file, view.getUint16(offset + (i * 12) + 8, little));
      }
      else if ((marker & 0xFF00) != 0xFF00) break;
      else offset += view.getUint16(offset, false);
    }
    return callback(file, -1);
  };
  reader.readAsArrayBuffer(file);
}
function log(data, clear){
/*
  if(clear){
    span.innerHTML = '';
  }
  span.innerHTML += '<br>' + data;
*/
}
function showImage(file, exifOrientation) {
  log('showImage()');
  log('EXIF orientation ' + exifOrientation);
  if(!window.FileReader){
    return log('FileReader is not supported');
  }
  if(!window.FileReader.prototype.readAsDataURL){
    return log('readAsDataURL is not supported');
  }
  var reader = new FileReader();
  reader.onload = function(event){

    rotated.src = event.target.result;
    $('#lafotito').css('background-image', 'url('+event.target.result+')');

    rotated.parentElement.style.display = 'block';
    var degrees = 0;
    var portraitCheck = false;
    switch(exifOrientation){
      case 1:
        // Normal
        break;
      case 2:
        // Horizontal flip
        break;
      case 3:
        // Rotated 180°
        degrees = 180;
        break;
      case 4:
        // Vertical flip
        break;
      case 5:
        // Rotated 90° -> Horizontal flip
        break;
      case 6:
        // Rotated 270°
        degrees = 90;
        portraitCheck = true;
        break;
      case 7:
        // Rotated 90° -> Vertical flip
        break;
      case 8:
        // Rotated 90°
        degrees = 270;
        portraitCheck = true;
        break;
    }
    
    console.log(degrees);
    
    $('#lafotito').css('transform', 'rotate('+degrees+'deg)');
  };
  reader.readAsDataURL(file);
}



