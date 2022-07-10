function av1(){
	a=document.getElementById("filled1").value;
	a1=a.split(",");
	for(i1 in a1){
		ele=document.getElementById(a1[i1]);
		ele.src="../img/booked.jpg";
	}
}

function av2(){
	a=document.getElementById("filled2").value;
	a2=a.split(",");
	for(i2 in a2){
		ele=document.getElementById(a2[i2]);
		ele.src="../img/booked.jpg";
	}
}

function av3(){
	a=document.getElementById("filled3").value;
	a3=a.split(",");
	for(i3 in a3){
		ele=document.getElementById(a3[i3]);
		ele.src="../img/booked.jpg";
	}
}

function av4(){
	a=document.getElementById("filled4").value;
	a4=a.split(",");
	for(i4 in a4){
		ele=document.getElementById(a4[i4]);
		ele.src="../img/booked.jpg";
	}
}

function av5(){
	a=document.getElementById("filled5").value;
	a5=a.split(",");
	for(i5 in a5){
		ele=document.getElementById(a5[i5]);
		ele.src="../img/booked.jpg";
	}
}

function av6(){
	a=document.getElementById("filled6").value;
	a6=a.split(",");
	for(i6 in a6){
		ele=document.getElementById(a6[i6]);
		ele.src="../img/booked.jpg";
	}
}


var j=1;
var res=new Array();

function select(seat){
	n=document.getElementById("no_seats");
	n1=parseInt(n.options[n.selectedIndex].text);
	if((seat.getAttribute("src")=="../img/vaccant.jpg") &&(j<=n1)){
		seat.src="../img/select.jpg";
			j++;
			res.push(seat.alt);
	}
	else if(seat.getAttribute("src")=="../img/select.jpg"){
		seat.src="../img/vaccant.jpg";
			j--;
			for(k in res){
			if(res[k]==seat.alt)
				res.splice(k,1);
		}
		
	}
	document.getElementById("selected").value=res;
}

function check(){
	var n =document.getElementById("selected").value;
	if(n.length ==0){
		alert("Please select your seats");
		return false;
	}
}
