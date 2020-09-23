function haci(){
	if(document.getElementById("mobil").style.display=="none"){
		document.getElementById("mobil").style.display="block";
	}else{
		document.getElementById("mobil").style.display="none";
	}	
}
function windowSize(){
	var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	if (width>768) {
		document.getElementById("mobil").style.display="none";
	}
}
window.addEventListener("resize", windowSize);

/*function bilgi(){
	alert("başvurunuz başarıyla yollandı")
	}		*/