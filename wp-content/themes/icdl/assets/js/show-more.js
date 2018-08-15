function collapseITSecurity(){
		$("#more-it-secure").slideDown();
}

function collapseSingleModule(){
		$("#more-single-toolkits").slideDown();
}

function collapseFiveModule(){
		$("#more-bundles").slideDown();
}

function collapseAllModule(){
		$("#show-all").slideDown();
		
}

function collapseOutITSecurity(){
	document.getElementById("more-it-secure").style.WebkitTransition = "all 2s"; 
	document.getElementById("more-it-secure").style.transition = "all 2s";
	document.getElementById("more-it-secure").style.display = "none";
}

function collapseOutSingleModule(){
	document.getElementById("more-single-toolkits").style.WebkitTransition = "all 2s"; 
	document.getElementById("more-single-toolkits").style.transition = "all 2s";
	document.getElementById("more-single-toolkits").style.display = "none";
}

function collapseOutFiveModule(){
	document.getElementById("more-bundles").style.WebkitTransition = "all 2s"; 
	document.getElementById("more-bundles").style.transition = "all 2s";
	document.getElementById("more-bundles").style.display = "none";
}

function collapseOutAllModule(){
	document.getElementById("show-all").style.WebkitTransition = "all 2s"; 
	document.getElementById("show-all").style.transition = "all 2s";
	document.getElementById("show-all").style.display = "none";
	
}


