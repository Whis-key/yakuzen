require('./bootstrap.js');
require('./common.js');

import {setupTimer} from './common.js';

var phoneRegex = /(09|08|\+849|\+841|\+848)[0-9]{8}/;
var errorTimeout = null;

$(document).ready(function(){

	$('.register').click(function(){
		scrollToContactForm();
	    $("#contact-form .form .form-group:first input").focus();
	});


	$('.slide-trigger').click(function(){
		var el = '#' + $(this).attr('data-trigger');

		var wid = $(el + ' .quote').width();
		
		if($(this).hasClass('b-right')){
			var rEls = parseInt($(el).attr('data-right'));
			var lEls = parseInt($(el).attr('data-left'));
			if(rEls > 0){
				var mrLeft = -1 * (lEls + 1) * (wid + 102);
				$(el).animate({marginLeft: mrLeft + 'px'}, 1000);
				$(el).attr('data-left', lEls+1);
				$(el).attr('data-right', rEls-1);
			} else {
				
			}
		} else if($(this).hasClass('b-left')){
			var rEls = parseInt($(el).attr('data-right'));
			var lEls = parseInt($(el).attr('data-left'));
			if(lEls > 0){
				var mrLeft = -1 * (lEls - 1) * (wid + 102);
				$(el).animate({marginLeft: mrLeft + 'px'}, 1000);
				$(el).attr('data-left', lEls-1);
				$(el).attr('data-right', rEls+1);
			} else {
				
			}
		}
	});


	var videos = $('#fb-video').attr('data-videos').split(';');
	
	$('.next-video').click(function(){
		var i = parseInt($('#fb-video').attr('data-index'));
		if(i<videos.length-1){
			$('#fb-video iframe').attr('src', videos[i+1]);
			$('#fb-video').attr('data-index', i+1);
		} else {
			$('#fb-video iframe').attr('src', videos[0]);
			$('#fb-video').attr('data-index', 0);
		}
	});

	$('.prev-video').click(function(){
		var i = parseInt($('#fb-video').attr('data-index'));
		if(i>0){
			$('#fb-video iframe').attr('src', videos[i-1]);
			$('#fb-video').attr('data-index', i-1);
		} else {
			$('#fb-video iframe').attr('src', videos[videos.length-1]);
			$('#fb-video').attr('data-index', videos.length - 1);
		}
	});


	$(window).resize(function(){
		setCustomerFbPOsition();
		setTimeout(function(){
			$('#quote').css({marginLeft: '0'});
		}, 100);
	})

	setCustomerFbPOsition();
	setupTimer();

	setTimeout(function(){
		setupSRight();
	}, 200);
});

function setCustomerFbPOsition(){
	if($(window).width() < 1300){
		$('.i-block .customer').css({marginLeft: '-50px'});
	} else {
		$('.i-block .customer').css({marginLeft: '0'});
	}
}

function scrollToContactForm(){
	// Scroll
    $('html,body').animate({
        scrollTop: $("#contact-form .form").offset().top - 50
    }, 'slow');
}

function phoneValidate(){
	var phone = $('#contact-form [name="phone"]').val();

	if(!phoneRegex.test(phone)){
		setTimeout(function(){
			$('#contact-form .phone-error').css('display', 'block');
		}, 10);
		scrollToContactForm();
	}
}

function setUpErrorTimeout(){
	if(errorTimeout){
		window.clearTimeout(errorTimeout);
	}

	errorTimeout = setTimeout(function(){
		$('.error-message').css('display', 'none');
	}, 10000);
}

function setupSRight(){
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	 	$('.s-right').css({paddingLeft: '80px', paddingTop: '0px'});
		$('.s-right p').css({fontSize: '20px'});

		$('.i-block .title').css({fontSize: '26px', lineHeight: '65px'});
	} else {
		$('.s-right').removeAttr('style');
		$('.s-right p').removeAttr('style');
	}
}