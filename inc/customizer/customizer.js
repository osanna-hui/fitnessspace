jQuery(document).ready( function( $ ) {
	console.log('ready');

	var currentslider = jQuery('#customize-control-slider_type_id select option:selected').val();

	var sliderControls = jQuery('#customize-control-slider_image_id01, #customize-control-slider_image_id02, #customize-control-slider_image_id03, #customize-control-slider_image_id04');
	
	if(currentslider == 'video'){  
		sliderControls.addClass('hideslider'); 

	}

	jQuery('#customize-control-slider_type_id select').on('change', function(){ 
		console.log('change');
		if(jQuery(this).find('option:selected').val() == 'ImageSlider'){

			$('#customize-control-slider_image_id01, #customize-control-slider_image_id02, #customize-control-slider_image_id03, #customize-control-slider_image_id04').removeClass('hideslider');
		}
		if(jQuery(this).find('option:selected').val() == 'video' ){
			$('.customize-control-image').css('display', 'none');
		}
	});

	jQuery('#customize-control-slider_type_id select').on('change', function(){ 
		console.log('change');
		if(jQuery(this).find('option:selected').val() == 'Video'){

			$('#customize-control-video_id').removeClass('hideslider');
		}
		if(jQuery(this).find('option:selected').val() == 'video' ){
			$('#customize-control-slider_image_id01, #customize-control-slider_image_id02, #customize-control-slider_image_id03, #customize-control-slider_image_id04').css('display', 'none');
		}
	});


} );
