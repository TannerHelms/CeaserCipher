$(document).ready(function() {
	$("#F14").hide();
	
	
	$("h1").click(function() {
		
		$("h2").slideToggle(2000);
		
	});
	$("#a1").click(function() {
		$("#F14").slideToggle(3000);
	});

	
});

function animationFunction() {
    var x = document.getElementById("circleball");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    var x = document.getElementById("circleball1");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

