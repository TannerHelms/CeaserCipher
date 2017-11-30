$(document).ready(function() {
	$("#F14").hide();
	
	$("h1").click(function() {
		
		$("h2").slideToggle(2000);
		
	});
	$("h4").click(function() {
		$("#F14").slideToggle(3000);
	});
	
});
