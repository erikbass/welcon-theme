jQuery(document).ready(function() { 	
	/* iniciando posicionado */
		jQuery(".block li:first-child .blocks").animate({height : 290, width : 363, left : 0}, 100);
		jQuery(".block li:first-child .blocks .imgBlock").animate({height : 241, width : 363}, 100);

		jQuery(".block li:nth-child(2) .blocks").animate({height : 140,width : 735, top : 0, left: 373}, 100);
		jQuery(".block li:nth-child(2) .blocks .imgBlock").animate({height : 140, width : 500}, 100);
		
		jQuery(".block li:nth-child(3) .blocks").animate({height : 140, opacity : 1, width : 735, top : 150, left : 373}, 100);
		jQuery(".block li:nth-child(3) .blocks .imgBlock").animate({height : 140, width : 500}, 100);
	/* */

	if (jQuery(".block li:nth-child(4)").length < 1){
		jQuery(".prev").hide();
		jQuery(".next").hide();
	}				 
	//Se o usuário clica no botão ANTERIOR
	jQuery('.prev').click(function() {				 
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
		//Cancela o comportamento do click
		return false;				 
	});
	 
	//Se o usuário clica no botão PROXIMO
	jQuery('.next').click(function() {				 
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