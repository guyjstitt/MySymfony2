

$(document).ready(function() {

 $("title").text("Modified using Jquery");
 
 $('button').on('click', function() {
	var showNum = $('<span class="value"> 502-333-4283</span>');
	$('.ul-left').append(showNum);
	$('button').remove();
	});
 
 
 
});

