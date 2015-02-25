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
                 slideWidth: 400,
                minSlides: 3,
                maxSlides: 3,
                slideMargin:10
             });
			 
			$('#contactus-node-form').find('input#edit-field-last-name-und-0-value').attr('placeholder','Last Name');
			$('#contactus-node-form').find('input#edit-field-email-und-0-value').attr('placeholder','Email Address');
			$('#contactus-node-form').find('input#edit-field-phone-no-und-0-value').attr('placeholder','Phone No');
	
		}
	};
	
	
})(jQuery);