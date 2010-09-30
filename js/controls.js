$(document).ready(function(){

	var cmsToolboxContentsHeight = $('#cms-toolbox > .contents').css('height');

	$('#cms-toolbox > .tabs > .scheduling ').click(function(e){
		var toolbox = $('#cms-toolbox');
		toolbox.stop();

		var bodyPaddingAdjustment = '-';
		var targetTop = '-'+cmsToolboxContentsHeight;
		if (toolbox.hasClass('hide')) {
			targetTop = '0';
			bodyPaddingAdjustment = '+';
		}
		toolbox.animate({ top: targetTop }, 400, 'swing', function(){ $(this).toggleClass('hide'); });
		$('body').animate({ 'padding-top': bodyPaddingAdjustment+'='+cmsToolboxContentsHeight }, 400, 'swing');
	});

	/* Controls are initially turned off; degrade gracefully so that control is still usable with no JS. */
	//$('#cms-toolbox').addClass('hide').css('top', '-'+cmsToolboxContentsHeight);


	/* Slider */




	/* Dummy Edit Controls */
	$('.cms-module-placement').mouseenter(function(e){
		$(this).children('.edit-control').stop().show().animate({ opacity: 1 }, 'fast');
	});
	$('.cms-module-placement').mouseleave(function(e){
		$(this).children('.edit-control').animate({ opacity: 0 }, 400, function(){ $(this).hide(); });
	});

	/* Controls are initially turned off; degrade gracefully so that control is still usable with no JS. */
	$('.cms-module-placement .edit-control').addClass('hide'); 

});
