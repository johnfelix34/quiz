
function togglebutclass1() {
  document.getElementById("butsub").className.replace("mdc-button--unelevated","mdc-button--raised");
}

function togglebutclass2() {
  document.getElementById("butsub").className.replace("mdc-button--raised","mdc-button--unelevated");
}

function j() {
	alert("js");
	document.getElementById("butsubk").disabled = "false";
}


function dropdhide()
{	
	document.getElementById("dropd").classList.add("hide-dropd");
	document.getElementById("dropd").classList.remove("show-dropd");	
	document.getElementById("lblnav03").classList.remove("lblnav03-focus");
}

function showdropd()
{	
	document.getElementById("lblnav03").classList.add("lblnav03-focus");
	document.getElementById("dropd").classList.remove("hide-dropd");
	document.getElementById("dropd").classList.add("show-dropd");
}