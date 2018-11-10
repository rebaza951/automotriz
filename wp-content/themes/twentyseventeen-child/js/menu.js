jQuery(document).ready(function ($) {
	$('.nav-bar-togg').click(function(e){
		e.preventDefault();
		$('nav').fadeToggle('slow');
	});

	$('.indicador').click(function(e){
		console.log('ver form');
		e.preventDefault();

		if($('.base-frase').is(':hidden')){
			$(this).addClass("parpadea");
			$('.custom-search').fadeToggle('fast', function(){
				$('.base-frase').fadeToggle(400);
			});
		}else{
			$(this).removeClass("parpadea");
			$('.base-frase').fadeToggle('fast', function(){
				$('.custom-search').fadeToggle(400);
			});
		}
	});

	jQuery('.ir-contenido').click(function(e){
	    e.preventDefault();
	    $("html, body").animate({scrollTop: $('.contenido').offset().top }, 2000);
	});

	jQuery('.consulta-agentes').click(function(e){
	    e.preventDefault();
	    $("html, body").animate({scrollTop: $('.content-agentes').offset().top }, 2000);
	});

    $('li > a').click(function() {
	    $("li.active").removeClass("active");
	    $(this).parent().addClass("active");
	});
});