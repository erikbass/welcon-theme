/* INCORPORADORA e URBANISMO */
jQuery(document).ready(function() { 	
	/* iniciando posicionado */
		jQuery(".andamento li:first-child .blocks").animate({height : 290, width : 363, left : 0}, 100);
		jQuery(".andamento li:first-child .blocks .imgBlock").animate({height : 241, width : 363}, 100);

		jQuery(".andamento li:nth-child(2) .blocks").animate({height : 140,width : 735, top : 0, left: 373}, 100);
		jQuery(".andamento li:nth-child(2) .blocks .imgBlock").animate({height : 140, width : 500}, 100);
		
		jQuery(".andamento li:nth-child(3) .blocks").animate({height : 140, opacity : 1, width : 735, top : 150, left : 373}, 100);
		jQuery(".andamento li:nth-child(3) .blocks .imgBlock").animate({height : 140, width : 500}, 100);
	/* */
	if (jQuery(".andamento li:nth-child(4)").length < 1){
		jQuery(".andamento .prev").hide();
		jQuery(".andamento .next").hide();
	}				 
	
	jQuery('.andamento .prev').click(function() {				 
		var elementoPai = jQuery(this).parent().siblings('ul');
		//Move o item
		jQuery(elementoPai).animate({'left' : 0}, 100, function(){				
			// Block 03 - some
				jQuery(elementoPai).find('li:nth-child(3) .blocks').animate({left : -363, opacity : 0}, 100);
				jQuery(elementoPai).find('li:nth-child(3) .blocks').animate({top : 290}, 100);
				jQuery(elementoPai).find('li:nth-child(3) .blocks').animate({left : 373}, 100);
			// Block 02 -> Block 03
				jQuery(elementoPai).find('li:nth-child(2) .blocks').animate({height : 140, opacity : 1}, 100).animate({width : 735, top : 150, left : 373}, 100);
				jQuery(elementoPai).find('li:nth-child(2) .blocks .imgBlock').animate({height : 140}, 100).animate({width : 500}, 100);
			// Block 01 -> Block 02
				jQuery(elementoPai).find('li:first-child .blocks').animate({height: 140, width: 735, top: 0, left: 373},100);
				jQuery(elementoPai).find('li:first-child .blocks .imgBlock').animate({height : 140}, 100).animate({width : 500}, 100);
			// Block 04 -> Block 01
				jQuery(elementoPai).find('li:nth-child(4) .blocks').animate({height : 290, width : 363, left : 0, top:0, opacity:1}, 100);
				jQuery(elementoPai).find('li:nth-child(4) .blocks .imgBlock').animate({height : 241}, 100).animate({width : 363}, 100);
			//				
			//Move o último item e o coloca como o primeiro
				jQuery(elementoPai).find('li:first-child').before(jQuery(elementoPai).find('li:last'));
		});		
		return false;				 
	});
	 
	jQuery('.andamento .next').click(function() {				 
		var elementoPai = jQuery(this).parent().siblings('ul');
		//Move o item
		jQuery(elementoPai).animate({'left' : 0}, 100, function () {			
			// Block 01 - some
				jQuery(elementoPai).find('li:first-child .blocks').animate({left : -363, opacity : 0}, 100);
				jQuery(elementoPai).find('li:first-child .blocks').animate({top : 290}, 100);
				jQuery(elementoPai).find('li:first-child .blocks').animate({left : 373}, 100);
			// Block 02 -> Block 01
				jQuery(elementoPai).find('li:nth-child(2) .blocks').animate({height : 290, width : 363, left : 0}, 100);
				jQuery(elementoPai).find('li:nth-child(2) .blocks .imgBlock').animate({height : 241, width : 363}, 100);
			// Block 03 -> Block 02
				jQuery(elementoPai).find('li:nth-child(3) .blocks').animate({height : 140,width : 735, top : 0},100);
				jQuery(elementoPai).find('li:nth-child(3) .blocks .imgBlock').animate({height : 140, width : 500}, 100);
			// Block 04 -> Block 03
				jQuery(elementoPai).find('li:nth-child(4) .blocks').animate({height : 140, opacity : 1, width : 735, top : 150, left : 373}, 100);
				jQuery(elementoPai).find('li:nth-child(4) .blocks .imgBlock').animate({height : 140, width : 500}, 100);
			//			
			//Move o último item e o coloca como o primeiro
				jQuery(elementoPai).find('li:last').after(jQuery(elementoPai).find('li:first-child'));
		});
		return false;				 
	});
});

/* LANÇAMENTOS */
	jQuery(document).ready(function() { 	
		/* iniciando posicionado */
			jQuery(".lancamentos li .blocks").animate({height : 290, width : 363, top: 0, opacity: 0}, 100);
			jQuery(".lancamentos li .blocks .imgBlock").animate({height : 241, width : 363}, 100);

			jQuery(".lancamentos li:first-child .blocks").animate({left : 0, opacity:1}, 100);
			jQuery(".lancamentos li:nth-child(2) .blocks").animate({left : 373, opacity: 1}, 100);		
			jQuery(".lancamentos li:nth-child(3) .blocks").animate({left : 746, top:0, opacity: 1}, 100);
			jQuery(".lancamentos li:nth-child(4) .blocks").animate({opacity:0, left: 1119}, 100);
			jQuery(".lancamentos li:nth-child(5) .blocks").animate({opacity: 0, left: -373}, 100);
			jQuery(".lancamentos li:nth-child(6) .blocks").animate({opacity: 0}, 100);
			jQuery(".lancamentos li:nth-child(7) .blocks").animate({opacity: 0}, 100);
			jQuery(".lancamentos li:nth-child(8) .blocks").animate({opacity: 0}, 100);
			jQuery(".lancamentos li:nth-child(9) .blocks").animate({opacity: 0}, 100);
			jQuery(".lancamentos li:nth-child(10) .blocks").animate({opacity: 0}, 100);
			jQuery(".lancamentos li:nth-child(11) .blocks").animate({opacity: 0}, 100);
			jQuery(".lancamentos li:nth-child(12) .blocks").animate({opacity: 0}, 100);
			jQuery(".lancamentos li:nth-child(13) .blocks").animate({opacity: 0}, 100);
			jQuery(".lancamentos li:nth-child(14) .blocks").animate({opacity: 0}, 100);
			jQuery(".lancamentos li:nth-child(15) .blocks").animate({opacity: 0}, 100);			

			jQuery(".lancamentos li .blocks .txtBlock").animate({height : 50, width: 260}, 100);
		/* */
		if (jQuery(".lancamentos li:nth-child(4)").length < 1){
			jQuery(".lancamentos .prev").hide();
			jQuery(".lancamentos .next").hide();
		}				 
	});

	jQuery(document).ready(function() {
		//Velocidade da rotação e contador
		var speed = 5000;
		var run = setInterval('rotate()', speed);
		 
		//Se o usuário clica no botão ANTERIOR
		jQuery('.lancamentos .prev').click(function() {	 
			var elementoPai = jQuery(this).parent().siblings('ul');
			//Move o item
			jQuery(elementoPai).animate({'left' : 0}, 100, function () {			
							
				//Move o último item e o coloca como o primeiro
				jQuery(elementoPai).find('li:first-child').before(jQuery(elementoPai).find('li:last-child'));

				jQuery(".lancamentos li:first-child .blocks").animate({left : 0, opacity:1}, 100);
				jQuery(".lancamentos li:nth-child(2) .blocks").animate({left : 373, opacity: 1}, 100);		
				jQuery(".lancamentos li:nth-child(3) .blocks").animate({left : 746, top:0, opacity: 1}, 100);
				jQuery(".lancamentos li:nth-child(4) .blocks").animate({opacity:0, left: 1119}, 100);
				jQuery(".lancamentos li:nth-child(5) .blocks").animate({opacity: 0, left: -373}, 100);
				jQuery(".lancamentos li:nth-child(6) .blocks").animate({opacity: 0}, 100);
				jQuery(".lancamentos li:nth-child(7) .blocks").animate({opacity: 0}, 100);
				jQuery(".lancamentos li:nth-child(8) .blocks").animate({opacity: 0}, 100);
				jQuery(".lancamentos li:nth-child(9) .blocks").animate({opacity: 0}, 100);
				jQuery(".lancamentos li:nth-child(10) .blocks").animate({opacity: 0}, 100);
				jQuery(".lancamentos li:nth-child(11) .blocks").animate({opacity: 0}, 100);
				jQuery(".lancamentos li:nth-child(12) .blocks").animate({opacity: 0}, 100);
				jQuery(".lancamentos li:nth-child(13) .blocks").animate({opacity: 0}, 100);
				jQuery(".lancamentos li:nth-child(14) .blocks").animate({opacity: 0}, 100);
				jQuery(".lancamentos li:nth-child(15) .blocks").animate({opacity: 0}, 100);
			});
			return false;	
		});
		 
		//Se o usuário clica no botão PROXIMO
		jQuery('.lancamentos .next').click(function() {				 
			var elementoPai = jQuery(this).parent().siblings('ul');
			//Move o item
			jQuery(elementoPai).animate({'left' : 0}, 100, function () {			
				//Move o último item e o coloca como o primeiro
				jQuery(elementoPai).find('li:last').after(jQuery(elementoPai).find('li:first-child'));

				jQuery(".lancamentos li:first-child .blocks").animate({left : 0, opacity:1}, 100);
				jQuery(".lancamentos li:nth-child(2) .blocks").animate({left : 373, opacity: 1}, 100);		
				jQuery(".lancamentos li:nth-child(3) .blocks").animate({left : 746, top:0, opacity: 1}, 100);
				jQuery(".lancamentos li:nth-child(4) .blocks").animate({opacity:0, left: 1119}, 100);
				jQuery(".lancamentos li:nth-child(5) .blocks").animate({opacity: 0, left: -373}, 100);
				jQuery(".lancamentos li:nth-child(6) .blocks").animate({opacity: 0}, 100);
				jQuery(".lancamentos li:nth-child(7) .blocks").animate({opacity: 0}, 100);
				jQuery(".lancamentos li:nth-child(8) .blocks").animate({opacity: 0}, 100);
				jQuery(".lancamentos li:nth-child(9) .blocks").animate({opacity: 0}, 100);
				jQuery(".lancamentos li:nth-child(10) .blocks").animate({opacity: 0}, 100);
				jQuery(".lancamentos li:nth-child(11) .blocks").animate({opacity: 0}, 100);
				jQuery(".lancamentos li:nth-child(12) .blocks").animate({opacity: 0}, 100);
				jQuery(".lancamentos li:nth-child(13) .blocks").animate({opacity: 0}, 100);
				jQuery(".lancamentos li:nth-child(14) .blocks").animate({opacity: 0}, 100);
				jQuery(".lancamentos li:nth-child(15) .blocks").animate({opacity: 0}, 100);
			});
			return false;				 
		});
		 
		//Se o usuário está com o mouse sob a imagem, para a rotacao, caso contrário, continua		
		jQuery('.lancamentos').hover(	 
			function() {
				clearInterval(run);
			},
			function() {
				run = setInterval('rotate()', speed);
			}
		);
	});
		 
	//O temporatizador chamará essa função e a rotação será feita
	function rotate() {
		if (jQuery(".lancamentos li:nth-child(4)").length > 0){
			jQuery('.lancamentos .next').click();
		}
	}