require('./bootstrap.js');

var phoneRegex = /((09|08|\+849|\+841|\+848)[0-9]{8}|(01|\+841)[0-9]{9})/;
var errorTimeout = null;

var time = parseInt($('#config').attr('data-expiration'));

$('a[href="#"]').click(function(){
	return false;
});

$('.contact-submit').click(function(){
	var flag = true;

	var name = $('#contact-form [name="name"]').val();
	if(name=='' || !name){
		flag = false;
		$('#contact-form .name-error').css('display', 'block');
		scrollToContactForm();
	}

	var phone = $('#contact-form [name="phone"]').val();
	if(phone=='' || !phone){
		flag = false;
		$('#contact-form .phone-error').css('display', 'block');
		scrollToContactForm();
	}

	if(!flag){
		setUpErrorTimeout();
	} else {
		phoneValidate(function(){
			axios.post(app.baseUrl + '/dang-ky', {
				name: name, 
				phone: phone
			})
			.then(function(response){
				$('.notification').fadeIn();
				setTimeout(function(){
					$('.notification').fadeOut();
				}, 7000);

				$('#contact-form .form input').val('');
			})
			.catch(function(){
				
			});
		});
	}
});

$('#go2questions').click(function(){
	$('html,body').animate({
        scrollTop: $("#questions").offset().top - 50
    }, 'slow');
});

$(window).scroll(function(){
	var top = $(window).scrollTop();
	if(top > 1000){
		$('.back2top').fadeIn();
	} else {
		$('.back2top').fadeOut();
	}

	if($(window).scrollTop() > 50){
		$('body').addClass('fix-menu');
	} else {
		$('body').removeClass('fix-menu');
	}
});


$(window).resize(function(){
	hideElementsOnSmallScreen();
});

$('.back2top').click(function(){
	$('html,body').animate({
        scrollTop: 0
    }, 'slow');
});


$('.fb-m > span').fadeIn();

setTimeout(function(){
	$('.fb-m > span').fadeOut();
}, 3000);

$('.fb-m').hover(function(){
	$('.fb-m > span').css('display', 'inline-block');	
}, function(){
	$('.fb-m > span').css('display', 'none');
});


$('#contact-form input, #contact-form textarea').keyup(function(e){
	if(e.which==13){
		$('.contact-submit').trigger('click');
	}

	if($(this).val()){
		var clss = $(this).attr('data-class');
		$('#contact-form .' + clss).css('display', 'none');
	}
});


function scrollToContactForm(){
	// Scroll
    $('html,body').animate({
        scrollTop: $("#contact-form .form").offset().top - 150
    }, 'slow');
}

function phoneValidate(callback){
	var phone = $('#contact-form [name="phone"]').val();

	if(!phoneRegex.test(phone)){
		setTimeout(function(){
			$('#contact-form .phone-error').css('display', 'block');
		}, 10);
		scrollToContactForm();
	} else {
		console.log('Valid infomation');

		if(callback){
			callback();
		}
	}
}

function setUpErrorTimeout(){
	if(errorTimeout){
		window.clearTimeout(errorTimeout);
	}

	errorTimeout = setTimeout(function(){
		$('.error-message').fadeOut();
	}, 10000);
}

var tmOut = null;

function hideElementsOnSmallScreen(){
	if($(window).width() < 1450){
		$('.hidden-on-small-screen').fadeOut();
	} else {
		$('.hidden-on-small-screen').fadeIn();
	}
}
hideElementsOnSmallScreen();


export var setupTimer = function(){
	var d = 0;
	var h = 0;
	var m = 0;
	var s = 0;

	d = Math.floor(time / 86400);
	h = Math.floor((time - d*86400)/3600);
	m = Math.floor((time - d*86400 - h*3600)/60);
	s = time - d*86400 - h*3600 - m*60;

	$('#d').text(d ? d : '00');
	$('#h').text(h ? h : '00');
	$('#m').text(m ? m : '00');
	$('#s').text(s ? s : '00');

	if(!tmOut) {
		tmOut = setInterval(function(){
			setupTimer();
			time--;
		}, 1000);
	}
}