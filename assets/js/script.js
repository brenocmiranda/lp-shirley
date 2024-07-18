
jQuery( function( $ ){

	/**
	 * Loading Patrimar and Novolar (3s)
	*/
	if( $('.loading').length ){
		setTimeout(() => {
			$('.loading').fadeOut();
		}, 3000);
	}

	/**
	 * Loading lib in GTM (3s)
	*/
	if (window.ID_GTM) {
		document.addEventListener('DOMContentLoaded', () => {
			setTimeout(initGTM, 3000);
		});
		$(document).on('scroll mousemove touchstart click', initGTMOnEvent);
	}
	function initGTMOnEvent(event) {
		initGTM();
		event.currentTarget.removeEventListener(event.type, initGTMOnEvent); // remove the event listener that got triggered
	}
	function initGTM() {
		if (window.gtmDidInit) {
			return false;
		}
		window.gtmDidInit = true; // flag to ensure script does not get added to DOM more than once.
		$.getScript('https://www.googletagmanager.com/gtm.js?id=' + window.ID_GTM, function(){
			dataLayer.push({ event: 'gtm.js', 'gtm.start': new Date().getTime(), 'gtm.uniqueEventId': 0 });
		});

		/* Meta Pixel Code */
		!function (f, b, e, v, n, t, s) { if (f.fbq) return; n = f.fbq = function () { n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments) }; if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0'; n.queue = []; t = b.createElement(e); t.async = !0; t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s) }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '839184691491562'); fbq('track', 'PageView');

		console.log('Init GTM in Pixel');
	}
    function sendEmail( data ) {
		return new Promise((resolve, reject) => {
			let $mail_data = data;
			$.post( "./send-form.php", $mail_data )
				.done( $data => resolve( $data ) )
				.fail( ( xhr, textStatus, errorThrown ) => reject( console.log( xhr ) ) );
		});
	}

    function mphone( v ) {
		var r = v.replace(/\D/g, "");
		r = r.replace(/^0/, "");
		if( r.length > 10 ){
			r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
		}
		else if( r.length > 5 ){
			r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
		}
		else if( r.length > 2 ){
			r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
		}
		else {
			r = r.replace(/^(\d*)/, "($1");
		}
		return r;
	}

    function isPhone( phone ){
		var pattern = /^(\()?\d{2}(\))?\s?\d{4,5}(\-|\.)?\d{4}$/i;
		return pattern.test( phone );
	}

    // Mascara de telefone
    $( '.is-phone' ).on( 'keyup', function( e ){
		var v = mphone( this.value );
		if( v != this.value ){
			this.value = v;
		}
	});

    // Slick Centro Oncológico
    $(".slick-centro-oncologico").slick({
        slidesToShow: 1,
        arrows: true,
        dots: true,
        infinite: false,
    });

	// Slick Depoimentos Vídeos
    $(".slick-depoimentos-videos").slick({
        slidesToShow: 3,
        arrows: true,
        dots: true,
        infinite: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					arrows: true,
        			dots: true,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					arrows: true,
        			dots: true,
				}
			}
		]
    });

    // Slick Depoimentos Textos
    $(".slick-depoimentos-texto").slick({
        slidesToShow: 1,
        arrows: true,
        dots: true,
        infinite: true,
		adaptiveHeight: true,
		fade: true
    });
	
	// Loading iframe Youtube
	$( 'a[href*="youtube.com"]' ).on( 'click', function( e ){
		e.preventDefault();
		let regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/,
				match = this.href.match( regExp );
		if( match && match[ 7 ].length == 11 ){
			$.colorbox({
				iframe: true,
				href: '//www.youtube-nocookie.com/embed/' + match[ 7 ] + '?autoplay=1&modestbranding=1&showinfo=0&rel=0',
				innerWidth: 960,
				innerHeight: 540,
				maxWidth: '90%',
				maxHeight: '90%',
				fixed: true
			});
		}
	});

    // Envio de formulário padrão
	$( '.submit-btn' ).on( 'click', function( e ){
		e.preventDefault();

		let $submit = $(this),
			$form = $submit.parents('form'),
			$output = $form.find('.form-output'),
			nome = $form.find('[name="nome"]').val().trim(),
			telefone = $form.find('[name="telefone"]').val().trim(),
            endereco = $form.find('[name="endereco"]').val().trim();

		if (nome == '' || telefone == '' || endereco == '') {
			alert('Preencha todos os campos.');
			return;
		}

		if (!isPhone(telefone)) {
			alert('O telefone fornecido não parece válido.');
			return;
		}

		if (!$output.length) {
			$form.prepend('<div class="form-output"></div>');
			$output = $form.find('.form-output');
		}

		$output.html('').removeClass('is-error is-success');
		$submit.addClass('sending');
		$form.addClass('sending-form');

		let data = { nome, telefone, endereco };
		console.log( 'form data', data );

		sendEmail( data ).then(function (em_data) {
			console.log('sendmail', em_data);

			if (em_data.success) {
				$submit.removeClass('sending');
				$form[0].reset();
				$(document).trigger('form-sended', [$form]);
			}

			$form.removeClass('sending-form');

			$output.html(`<p>${em_data.success ? 'Dados enviados com sucesso.' : 'Erro ao enviar seus dados. Verifique e tente novamente.'}</p>`).addClass(em_data.success ? 'is-success' : 'is-error');
		});
	});
});
