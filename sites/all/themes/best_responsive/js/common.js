(function($) {
	
	Drupal.behaviors.myBehavior = {
        attach: function (context, settings) {



	
			if($('.product-menu').length > 0){
				var cur_parent = $('.product-menu').find('li:first a').attr('parent-id');
				$('.image_menu').find('li').each(function(){
					var tid = $(this).find('.views-field-tid span').text();
					$(this).removeClass('active');
					if(tid == cur_parent){
						$(this).addClass('active');
					}
				});
			}
			
			$('.imageSlide').find('ul').bxSlider({
                 slideWidth: 100,
                minSlides: 4,
                maxSlides: 4,
                slideMargin:0
             });



            $('.catimageslide').find('ul').bxSlider({
                slideWidth: 998,
                minSlides: 1,
                maxSlides: 1,
                slideMargin:0,
                auto:true
            });
			 
			$('#contactus-node-form').find('input#edit-field-last-name-und-0-value').attr('placeholder','Last Name');
			$('#contactus-node-form').find('input#edit-field-email-und-0-value').attr('placeholder','Email Address');
			$('#contactus-node-form').find('input#edit-field-phone-no-und-0-value').attr('placeholder','Phone No');
	
		}
	};
	
	
})(jQuery);