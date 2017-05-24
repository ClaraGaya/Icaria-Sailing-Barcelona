$(document).ready(function(){

	$('a.smooth').click(function(){
		$('html, body').animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top
		}, 500);
		return false;
	});	
	
	$('#smooth').click(function(){
        alert("testing");
    });

	$(function(){
	  $('#home-carousel').carousel();
	});

});