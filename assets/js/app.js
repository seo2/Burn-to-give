

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


// $('.panel-title a').on('click',function(){
// 		// $('.sign span.more').addClass('hide');
// 		// $('.sign span.less').removeClass('hide');

// 	if($('.sign span.more').hasClass('hide')){
// 		//alert("hide");
// 		$('.sign span.more').removeClass('hide');
// 		//$('.sign span.less').addClass('hide');
// 	//	$('.sign span').addClass('hide');

// 	}else{
// 		$('.sign span.more').addClass('hide');
// 		//$('.sign span.less').removeClass('hide');
// 	}
// });



// $(document).ready(function() {

// var btns = $('div.tutos a');
// var total = btns.length;

// var container = $('div.js-video');

// // Iteramos sobre cada índice del Nodelist en variable "btns".
// for( var i = 0; i < total; i++ ) {

// 	var ancla = $(btns[i]);

// 	ancla.click(function(e){

// 		e.preventDefault();
// 		var actual = $(this).index();
// 		var videoIndex = actual + 1;

// 		$.ajax({
// 		  url: "video" + videoIndex + ".html",
// 		  type: 'GET',
// 		  dataType:"html",
// 		  success: function(respuesta) {
// 		    //console.log('funcionó.');
// 		    container.html(respuesta);
// 		  },
// 		  error: function() {
// 		    alert( "Ha ocurrido un error. Por favor, inténtalo más tarde." );
// 		  }
// 		});

// 	});

// }

// })

/*

// AJAX con Javascript: para usarlo, comentar el código de más arriba y descomentar este código.

window.addEventListener("DOMContentLoaded", function() {

var btn_1 = document.querySelector('div.tutos a#v1');
var btn_2 = document.querySelector('div.tutos a#v2');
var btn_3 = document.querySelector('div.tutos a#v3');
var btn_4 = document.querySelector('div.tutos a#v4');

var doc_1 = "video1.html";
var doc_2 = "video2.html";
var doc_3 = "video3.html";
var doc_4 = "video4.html";

init( btn_1, doc_1 );
init( btn_2, doc_2 );
init( btn_3, doc_3 );
init( btn_4, doc_4 );

});

function init( boton, documento ) {

	// 2. Referencia al contenedor que recibirá el documento nuevo
	var articulo = document.querySelector("article.videos div.vid");

	// 3. Registrar el click sobre el botón.
	boton.addEventListener( "click", function(e) {
		//a. Cancelar comportamiento por defecto.
		e.preventDefault();

		//b. Inicializar el Objeto XMLHttpRequest
		var xhr = new XMLHttpRequest();

		//c. Configurar la petición
		xhr.open( "GET", documento );

		//d. Enviar la petición al servidor.
		xhr.send( null );

		//e. Evaluar el estado de la propiedad readyState a través del evento readyStateChange.
		// Registrar evento readystatechange

		xhr.addEventListener("readystatechange", function() {

			if( xhr.readyState === 4 && xhr.status === 200 ) {

				articulo.innerHTML = xhr.responseText;

			}

		});

	});

}

*/








