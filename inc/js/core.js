$(document).ready(function(){
	
/*$('.Pattern').delay(900).animate({opacity: 1}, 300);

$('.registrationSection').animate({opacity: 1}, 400);

$('.IntroSlider').delay(43200).animate({opacity: 0}, 900, function(){
	window.location = "http://ivy.condos/register";
});

$('.IntroSlider2').delay(40000).animate({opacity: 0}, 900, function(){
	window.location = "http://ivy.condos/register";
});

$('.skipIntroBtn').click(function(){
	window.location = "http://ivy.condos/register";
});

$('.RegBtn').click(function(){
	window.location = "http://ivy.condos/register";
});*/









/* ---------- MENU ---------- */


current_page = document.location.href
if (current_page.match("ivy.condos/ivy")){
	$('.tempMenu').animate({opacity:1}, 300);
}
else if (current_page.match("ivy.condos/register")){
	$('.tempMenu').animate({opacity:1}, 300);
}
else if (current_page.match("ivy.condos/thankyou")){
	$('.tempMenu').animate({opacity:1}, 300);
}
else if (current_page.match("ivy.condos/location")){
	$('.tempMenu').animate({opacity:1}, 300);
}
else if (current_page.match("ivy.condos/floorplans")){
	$('.tempMenu').animate({opacity:1}, 300);
}
else if (current_page.match("ivy.condos/media")){
	$('.tempMenu').animate({opacity:1}, 300);
}
else if (current_page.match("ivy.condos/developers")){
	$('.tempMenu').animate({opacity:1}, 300);
}
else if (current_page.match("ivy.condos/access")){
	$('.tempMenu').animate({opacity:1}, 300);
}
else if (current_page.match("ivy.condos/privacypolicy")){
	$('.tempMenu').animate({opacity:1}, 300);
}
else
{
	
}

/* ---------- /MENU ---------- */









/* ---------- PANORAMICS ---------- */

$('.panImage2').delay(6000).animate({opacity:1}, 700);
$('.panImage2').delay(6000).animate({opacity:0}, 700);

$('.panImage2').delay(6000).animate({opacity:1}, 700);
$('.panImage2').delay(6000).animate({opacity:0}, 700);

$('.panImage2').delay(6000).animate({opacity:1}, 700);
$('.panImage2').delay(6000).animate({opacity:0}, 700);

$('.panImage2').delay(6000).animate({opacity:1}, 700);
$('.panImage2').delay(6000).animate({opacity:0}, 700);

$('.panImage2').delay(6000).animate({opacity:1}, 700);
$('.panImage2').delay(6000).animate({opacity:0}, 700);

$('.panImage2').delay(6000).animate({opacity:1}, 700);
$('.panImage2').delay(6000).animate({opacity:0}, 700);

$('.panImage2').delay(6000).animate({opacity:1}, 700);
$('.panImage2').delay(6000).animate({opacity:0}, 700);

$('.panImage2').delay(6000).animate({opacity:1}, 700);
$('.panImage2').delay(6000).animate({opacity:0}, 700);

$('.panImage2').delay(6000).animate({opacity:1}, 700);
$('.panImage2').delay(6000).animate({opacity:0}, 700);

$('.panImage2').delay(6000).animate({opacity:1}, 700);
$('.panImage2').delay(6000).animate({opacity:0}, 700);

$('.panImage2').delay(6000).animate({opacity:1}, 700);
$('.panImage2').delay(6000).animate({opacity:0}, 700);

$('.panImage2').delay(6000).animate({opacity:1}, 700);
$('.panImage2').delay(6000).animate({opacity:0}, 700);

$('.panImage2').delay(6000).animate({opacity:1}, 700);
$('.panImage2').delay(6000).animate({opacity:0}, 700);

$('.panImage2').delay(6000).animate({opacity:1}, 700);
$('.panImage2').delay(6000).animate({opacity:0}, 700);

$('.panImage2').delay(6000).animate({opacity:1}, 700);
$('.panImage2').delay(6000).animate({opacity:0}, 700);

$('.panImage2').delay(6000).animate({opacity:1}, 700);
$('.panImage2').delay(6000).animate({opacity:0}, 700);

$('.panImage2').delay(6000).animate({opacity:1}, 700);
$('.panImage2').delay(6000).animate({opacity:0}, 700);





/* ---------- /PANORAMICS ---------- */





/* ========== WORKS GRID ====== */

	var moduleHero  = $('#hero'),
		slider      = $('#slides'),
		navbar      = $('.navbar-custom'),
		filters     = $('#filters'),
		worksgrid   = $('#works-grid'),
		worksgrid2   = $('#works-grid2'),
		worksgrid3   = $('#works-grid3'),
		worksgrid4   = $('#works-grid4'),
		modules     = $('.module-hero, .module, .module-small'),
		windowWidth = Math.max($(window).width(), window.innerWidth),
		navbatTrans,
		mobileTest;	
	
// IMAGE BLOCK

	var worksgrid_mode;
	if (worksgrid.hasClass('works-grid-masonry')) {
		worksgrid_mode = 'masonry';
	} else {
		worksgrid_mode = 'packery';
	}

	$('a', filters).on('click', function() {
		var selector = $(this).attr('data-filter');

		$('.current', filters).removeClass('current');
		$(this).addClass('current');

		worksgrid.isotope({
			filter: selector
		});

		return false;
	});

	$(window).on('resize', function() {

		var windowWidth    = Math.max($(window).width(), window.innerWidth),
			itemWidht      = $('.grid-sizer').width(),
			itemHeight     = Math.floor(itemWidht * 0.95),
			itemTallHeight = itemHeight * 2;

		if (windowWidth > 500) {
			$('.work-item', worksgrid).each(function() {
				if ($(this).hasClass('tall')) {
					$(this).css({
						height : itemTallHeight
					});
				} else if ($(this).hasClass('wide')) {
					$(this).css({
						height : itemHeight
					});
				} else if ($(this).hasClass('wide-tall')) {
					$(this).css({
						height : itemTallHeight
					});
				} else {
					$(this).css({
						height : itemHeight
					});
				}
			});
		} else {
			$('.work-item', worksgrid).each(function() {
				if ($(this).hasClass('tall')) {
					$(this).css({
						height : itemTallHeight
					});
				} else if ($(this).hasClass('wide')) {
					$(this).css({
						height : itemHeight / 2
					});
				} else if ($(this).hasClass('wide-tall')) {
					$(this).css({
						height : itemHeight
					});
				} else {
					$(this).css({
						height : itemHeight
					});
				}
			});
		}

		worksgrid.imagesLoaded(function() {
			worksgrid.isotope({
				layoutMode: worksgrid_mode,
				itemSelector: '.work-item',
				transitionDuration: '0.3s',
				packery: {
					columnWidth: '.grid-sizer',
				},
			});
		});

	}).resize();
	
	
	// IMAGE BLOCK2

	var worksgrid_mode;
	if (worksgrid2.hasClass('works-grid-masonry')) {
		worksgrid_mode = 'masonry';
	} else {
		worksgrid_mode = 'packery';
	}

	$('a', filters).on('click', function() {
		var selector = $(this).attr('data-filter');

		$('.current', filters).removeClass('current');
		$(this).addClass('current');

		worksgrid2.isotope({
			filter: selector
		});

		return false;
	});

	$(window).on('resize', function() {

		var windowWidth    = Math.max($(window).width(), window.innerWidth),
			itemWidht      = $('.grid-sizer').width(),
			itemHeight     = Math.floor(itemWidht * 0.95),
			itemTallHeight = itemHeight * 2;

		if (windowWidth > 500) {
			$('.work-item', worksgrid2).each(function() {
				if ($(this).hasClass('tall')) {
					$(this).css({
						height : itemTallHeight
					});
				} else if ($(this).hasClass('wide')) {
					$(this).css({
						height : itemHeight
					});
				} else if ($(this).hasClass('wide-tall')) {
					$(this).css({
						height : itemTallHeight
					});
				} else {
					$(this).css({
						height : itemHeight
					});
				}
			});
		} else {
			$('.work-item', worksgrid2).each(function() {
				if ($(this).hasClass('tall')) {
					$(this).css({
						height : itemTallHeight
					});
				} else if ($(this).hasClass('wide')) {
					$(this).css({
						height : itemHeight / 2
					});
				} else if ($(this).hasClass('wide-tall')) {
					$(this).css({
						height : itemHeight
					});
				} else {
					$(this).css({
						height : itemHeight
					});
				}
			});
		}

		worksgrid2.imagesLoaded(function() {
			worksgrid2.isotope({
				layoutMode: worksgrid_mode,
				itemSelector: '.work-item',
				transitionDuration: '0.3s',
				packery: {
					columnWidth: '.grid-sizer',
				},
			});
		});

	}).resize();
	
	
	// IMAGE BLOCK3

	var worksgrid_mode;
	if (worksgrid3.hasClass('works-grid-masonry')) {
		worksgrid_mode = 'masonry';
	} else {
		worksgrid_mode = 'packery';
	}

	$('a', filters).on('click', function() {
		var selector = $(this).attr('data-filter');

		$('.current', filters).removeClass('current');
		$(this).addClass('current');

		worksgrid3.isotope({
			filter: selector
		});

		return false;
	});

	$(window).on('resize', function() {

		var windowWidth    = Math.max($(window).width(), window.innerWidth),
			itemWidht      = $('.grid-sizer').width(),
			itemHeight     = Math.floor(itemWidht * 0.95),
			itemTallHeight = itemHeight * 2;

		if (windowWidth > 500) {
			$('.work-item', worksgrid3).each(function() {
				if ($(this).hasClass('tall')) {
					$(this).css({
						height : itemTallHeight
					});
				} else if ($(this).hasClass('wide')) {
					$(this).css({
						height : itemHeight
					});
				} else if ($(this).hasClass('wide-tall')) {
					$(this).css({
						height : itemTallHeight
					});
				} else {
					$(this).css({
						height : itemHeight
					});
				}
			});
		} else {
			$('.work-item', worksgrid3).each(function() {
				if ($(this).hasClass('tall')) {
					$(this).css({
						height : itemTallHeight
					});
				} else if ($(this).hasClass('wide')) {
					$(this).css({
						height : itemHeight / 2
					});
				} else if ($(this).hasClass('wide-tall')) {
					$(this).css({
						height : itemHeight
					});
				} else {
					$(this).css({
						height : itemHeight
					});
				}
			});
		}

		worksgrid3.imagesLoaded(function() {
			worksgrid3.isotope({
				layoutMode: worksgrid_mode,
				itemSelector: '.work-item',
				transitionDuration: '0.3s',
				packery: {
					columnWidth: '.grid-sizer',
				},
			});
		});

	}).resize();
	
	
	// IMAGE BLOCK4

	var worksgrid_mode;
	if (worksgrid4.hasClass('works-grid-masonry')) {
		worksgrid_mode = 'masonry';
	} else {
		worksgrid_mode = 'packery';
	}

	$('a', filters).on('click', function() {
		var selector = $(this).attr('data-filter');

		$('.current', filters).removeClass('current');
		$(this).addClass('current');

		worksgrid4.isotope({
			filter: selector
		});

		return false;
	});

	$(window).on('resize', function() {

		var windowWidth    = Math.max($(window).width(), window.innerWidth),
			itemWidht      = $('.grid-sizer').width(),
			itemHeight     = Math.floor(itemWidht * 0.95),
			itemTallHeight = itemHeight * 2;

		if (windowWidth > 500) {
			$('.work-item', worksgrid4).each(function() {
				if ($(this).hasClass('tall')) {
					$(this).css({
						height : itemTallHeight
					});
				} else if ($(this).hasClass('wide')) {
					$(this).css({
						height : itemHeight
					});
				} else if ($(this).hasClass('wide-tall')) {
					$(this).css({
						height : itemTallHeight
					});
				} else {
					$(this).css({
						height : itemHeight
					});
				}
			});
		} else {
			$('.work-item', worksgrid4).each(function() {
				if ($(this).hasClass('tall')) {
					$(this).css({
						height : itemTallHeight
					});
				} else if ($(this).hasClass('wide')) {
					$(this).css({
						height : itemHeight / 2
					});
				} else if ($(this).hasClass('wide-tall')) {
					$(this).css({
						height : itemHeight
					});
				} else {
					$(this).css({
						height : itemHeight
					});
				}
			});
		}

		worksgrid4.imagesLoaded(function() {
			worksgrid4.isotope({
				layoutMode: worksgrid_mode,
				itemSelector: '.work-item',
				transitionDuration: '0.3s',
				packery: {
					columnWidth: '.grid-sizer',
				},
			});
		});

	}).resize();
	
	
	
/* ========== /WORKS GRID ====== */










/* ---------- REGISTRATION ---------- */

$(".haveAgent_status").click(function(){
	var realtor_advExpanded = $('.AdvRow ').hasClass('expanded');
	var realtor_broker = $('input:radio[name=realtor]:checked').val();
	var realtor_haveAgent = $('input:radio[name=haveAgent]:checked').val();
    if($('input:radio[name=haveAgent]:checked').val() == "yes"){
        $('#haveAgent_name').css('display', 'block');
        $('.HaveAgentRow').addClass('expanded');
        $('#haveAgent_name').animate({ opacity: 1 }, 0, "easeInSine");
    }
    if($('input:radio[name=haveAgent]:checked').val() == "no"){
        $('#haveAgent_name').css('display', 'none');
        $('#haveAgent_name').animate({ opacity: 0 }, 0, "easeInSine");
        $('.HaveAgentRow').removeClass('expanded');
    }
	
	if(realtor_broker == "yes" && realtor_haveAgent == "yes" && realtor_advExpanded == false)
	{	

		$('.securityOption').removeClass('pull');
	}
	else if(realtor_broker == "yes" && realtor_haveAgent == "yes" && realtor_advExpanded == true)
	{	

		$('.securityOption').removeClass('pull');
	}
	else if(realtor_broker == "no" && realtor_haveAgent == "no" && realtor_advExpanded == false)
	{
		$('.securityOption').removeClass('pull');
	}
	else if(realtor_broker == "no" && realtor_haveAgent == "no" && realtor_advExpanded == true)
	{
		$('.securityOption').addClass('pull');
	}
	else
	{
		$('.securityOption').removeClass('pull');
	}
});
	
$(".realtor_status").click(function(){
	var realtor_advExpanded = $('.AdvRow ').hasClass('expanded');
	var realtor_broker = $('input:radio[name=realtor]:checked').val();
	var realtor_haveAgent = $('input:radio[name=haveAgent]:checked').val();
	//alert(realtor_advExpanded+" : "+ realtor_broker+" : "+ realtor_haveAgent)
    if(realtor_broker == "yes"){
		
        $('#broker_name').css('display', 'block');
        $('.BrokerRow').addClass('expanded');
        $('#broker_name').animate({ opacity: 1 }, 0, "easeInSine");
    }
    if(realtor_broker == "no"){
        $('#broker_name').css('display', 'none');
        $('#broker_name').animate({ opacity: 0 }, 0, "easeInSine");
        $('.BrokerRow').removeClass('expanded');
    }
	
	if(realtor_broker == "yes" && realtor_haveAgent == "yes" && realtor_advExpanded == false)
	{	

		$('.securityOption').removeClass('pull');
	}
	else if(realtor_broker == "yes" && realtor_haveAgent == "yes" && realtor_advExpanded == true)
	{	

		$('.securityOption').removeClass('pull');
	}
	else if(realtor_broker == "no" && realtor_haveAgent == "no" && realtor_advExpanded == false)
	{
		$('.securityOption').removeClass('pull');
	}
	else if(realtor_broker == "no" && realtor_haveAgent == "no" && realtor_advExpanded == true)
	{
		$('.securityOption').addClass('pull');
	}
	else
	{
		$('.securityOption').removeClass('pull');
	}
});

function clearSpecificADV() {
		$('#other_field').css('display', 'none');
		$('#other_field').animate({ opacity: 0 }, 0, "easeInSine");
		$('#adv_other').removeClass('required');
		$('#brokerreferral_field').css('display', 'none');
		$('#brokerreferral_field').animate({ opacity: 0 }, 0, "easeInSine");
		$('#adv_brokerreferral').removeClass('required');
		$('.AdvRow').removeClass('expanded');
		$('.securityOption').removeClass('pull');
}

$('.selectpicker#adv').on('change', function(){
    var adv_selected = $(this).find("option:selected").val();
	var adv_broker = $('input:radio[name=realtor]:checked').val();
	var adv_haveAgent = $('input:radio[name=haveAgent]:checked').val();
    //alert(selected);
	if(adv_selected == 14)
	{
		clearSpecificADV();
		$('#other_field').css('display', 'block');
		$('#other_field').animate({ opacity: 1 }, 0, "easeInSine");
		$('#adv_other').addClass('required');
		$('.AdvRow').addClass('expanded');
		if(adv_broker == "yes" && adv_haveAgent == "yes")
		{
			$('.securityOption').removeClass('pull');
		}
		else if(adv_broker == "no" && adv_haveAgent == "no")
		{
			$('.securityOption').addClass('pull');
		}
		else
		{
			$('.securityOption').removeClass('pull');
		}
		
	}
	else if(adv_selected == 100)
	{
		clearSpecificADV();
		$('#brokerreferral_field').css('display', 'block');
		$('#brokerreferral_field').animate({ opacity: 1 }, 0, "easeInSine");
		$('#adv_brokerreferral').addClass('required');
		$('.AdvRow').addClass('expanded');
		if(adv_broker == "yes" && adv_haveAgent == "yes")
		{
			$('.securityOption').removeClass('pull');
		}
		else if(adv_broker == "no" && adv_haveAgent == "no")
		{
			$('.securityOption').addClass('pull');
		}
		else
		{
			$('.securityOption').removeClass('pull');
		}
	}
	else
	{
		clearSpecificADV();
	}
  });
  
/* ---------- /REGISTRATION ---------- */









/* ---------- LARGE IMAGES ---------- */

$('.DeveloperImageBtn1').click(function(){
	$('.LargeImagesContainer').css('display', 'block');
	$('.LargeImagesContainer .image1').css('display', 'block');
	$('.LargeImagesContainer .image1').animate({opacity: 1}, 500);
	$('.wrapper').animate({opacity: 0});
	$('.footer').animate({opacity: 0});
	});
	
$('.DeveloperImageBtn2').click(function(){
	$('.LargeImagesContainer').css('display', 'block');
	$('.LargeImagesContainer .image2').css('display', 'block');
	$('.LargeImagesContainer .image2').animate({opacity: 1}, 500);
	$('.wrapper').animate({opacity: 0});
	$('.footer').animate({opacity: 0});
	});
	
$('.DeveloperImageBtn3').click(function(){
	$('.LargeImagesContainer').css('display', 'block');
	$('.LargeImagesContainer .image3').css('display', 'block');
	$('.LargeImagesContainer .image3').animate({opacity: 1}, 500);
	$('.wrapper').animate({opacity: 0});
	$('.footer').animate({opacity: 0});
	});
	
$('.DeveloperImageBtn4').click(function(){
	$('.LargeImagesContainer').css('display', 'block');
	$('.LargeImagesContainer .image4').css('display', 'block');
	$('.LargeImagesContainer .image4').animate({opacity: 1}, 500);
	$('.wrapper').animate({opacity: 0});
	$('.footer').animate({opacity: 0});
	});
	
$('.DeveloperImageBtn5').click(function(){
	$('.LargeImagesContainer').css('display', 'block');
	$('.LargeImagesContainer .image5').css('display', 'block');
	$('.LargeImagesContainer .image5').animate({opacity: 1}, 500);
	$('.wrapper').animate({opacity: 0});
	$('.footer').animate({opacity: 0});
	});
	
$('.DeveloperImageBtn6').click(function(){
	$('.LargeImagesContainer').css('display', 'block');
	$('.LargeImagesContainer .image6').css('display', 'block');
	$('.LargeImagesContainer .image6').animate({opacity: 1}, 500);
	$('.wrapper').animate({opacity: 0});
	$('.footer').animate({opacity: 0});
	});
	
$('.DeveloperImageBtn7').click(function(){
	$('.LargeImagesContainer').css('display', 'block');
	$('.LargeImagesContainer .image7').css('display', 'block');
	$('.LargeImagesContainer .image7').animate({opacity: 1}, 500);
	$('.wrapper').animate({opacity: 0});
	$('.footer').animate({opacity: 0});
	});
	
$('.DeveloperImageBtn8').click(function(){
	$('.LargeImagesContainer').css('display', 'block');
	$('.LargeImagesContainer .image8').css('display', 'block');
	$('.LargeImagesContainer .image8').animate({opacity: 1}, 500);
	$('.wrapper').animate({opacity: 0});
	$('.footer').animate({opacity: 0});
	});

$('.LargeImagesContainer .close').click(function(){
	$('.LargeImagesContainer').css('display', 'none');
	$('.LargeImagesContainer .image1').css('display', 'none');
	$('.LargeImagesContainer .image1').animate({opacity: 0});
	$('.LargeImagesContainer .image2').css('display', 'none');
	$('.LargeImagesContainer .image2').animate({opacity: 0});
	$('.LargeImagesContainer .image3').css('display', 'none');
	$('.LargeImagesContainer .image3').animate({opacity: 0});
	$('.LargeImagesContainer .image4').css('display', 'none');
	$('.LargeImagesContainer .image4').animate({opacity: 0});
	$('.LargeImagesContainer .image5').css('display', 'none');
	$('.LargeImagesContainer .image5').animate({opacity: 0});
	$('.LargeImagesContainer .image6').css('display', 'none');
	$('.LargeImagesContainer .image6').animate({opacity: 0});
	$('.LargeImagesContainer .image7').css('display', 'none');
	$('.LargeImagesContainer .image7').animate({opacity: 0});
	$('.LargeImagesContainer .image8').css('display', 'none');
	$('.LargeImagesContainer .image8').animate({opacity: 0});
	$('.wrapper').animate({opacity: 1}, 300);
	$('.footer').animate({opacity: 1}, 300);
	});





});