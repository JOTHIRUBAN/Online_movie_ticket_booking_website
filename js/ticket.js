n="";

function call()
{
	alert(n);
}
function set(){
	window.n=document.getElementById("h4").innerText;
	call();
}

function func(){
	document.getElementById("h2").value=n;
	alert(n);
}
