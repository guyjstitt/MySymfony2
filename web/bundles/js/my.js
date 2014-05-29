

$(document).ready(function() {

 $("title").text("Modified using Jquery");
 
 $('#num').on('click', function() {
	var showNum = $('<span class="value"> 502-333-4283</span>');
	$('.ul-left span').last().after(showNum);
	$('#num').remove();
	});
 
 
 
});

