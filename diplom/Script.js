// JavaScript Document

$(document).ready(function(){
	$(".closee_r").click(function(){
		$('.fon_r').animate({ opacity: 'hide'}, 450);
		$('.regedit_r').animate({ opacity: 'hide'}, 450);
	});
	
	$(".closee_v").click(function(){
	$('.fon_z').animate({ opacity: 'hide'}, 450);
	});
	
	$(".close_nam_v").click(function(){
	$('.fon_k').animate({ opacity: 'hide'}, 500);
	});
	
	$(".allpod_kl").click(function(){
	$('.fon_k').animate({ opacity: 'show'}, 550);
	});
	
	$(".closee_r").click(function(){
	$('.fon_za').animate({ opacity: 'hide'}, 450);
	$('.regedit_za').animate({ opacity: 'hide'}, 450);
	});
	
	//$(".allpod_kl1").click(function(e){
		//$(e.target).parent('.par_fz').children('.pok_fzakk').slideToggle(400);
		//$('.pok_fzakk').slideToggle(400);
	//});
	
	$(".lich_cab").click(function(){
		//$('.lich_kab').css("margin-top", "-19px");
		//$('.lich_kab').animate({ opacity: 'show'}, 500);
		$('.lich_kab').slideToggle(400);
	});
	
});

function reg_r(){
	$('.regedit_v').hide(300);
	$('.fon_r, .regedit_r:hidden').show(500);
};

function zakaz_za(){
	$('.fon_za').show(500);
	$('.regedit_za').show(500);
};

function reg_v(){
	$('.regedit_r').hide(400);
	$('.regedit_v').show(500);
};

function biestr_zak(){
	$('.fon_z').animate({ opacity: 'show'}, 500);
};	

function user_zak(){
	$('.fon_za').show(500);
	$('.regedit_za').show(500);
};				
		
function clickk(){
	$('.fon_r:hidden, .regedit_v:hidden').show(500);
};
function closee(){
	$('.fon_r').animate({ opacity: 'hide'}, 450);
};
function fastzakk(){
	$('.fon_z').show(450);
};
/*$(window).on('load', function () {
    var $preloader = $('#page-preloader'),
        $spinner   = $preloader.find('.spinner');
    $spinner.fadeOut();
    $preloader.delay(350).fadeOut('slow');
});*/