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

	setupTimer();
});

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