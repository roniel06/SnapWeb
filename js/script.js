var fot=[];
var fotAux;



//Funcion para lanzar la camara, Funcionando.

function activateCamera() {

	var video = document.querySelector("#camaraOn");
	navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMEdia;
    if (navigator.getUserMedia) {
        navigator.getUserMedia({video: true}, handleVideo, videoError);
    }
    function handleVideo(stream) {
        video.src = window.URL.createObjectURL(stream);
    }
    function videoError(e) {
        alert("La camara No esta funcionando Permita el acceso")
    }
}


//Funcion para capturar el streaming
function tomarFoto() {

	    var video = document.querySelector("#camaraOn");
			canvas=document.getElementById("fotoTomada");
			let {left,top}= video.getBoundingClientRect();

	    canvas.width=1080;
	    canvas.height=650;

	    canvas.getContext("2d").drawImage(video,0,0,1080,650);
			canvas.style.left=`${left}px`;
			canvas.style.top=`${top}px`;
			canvas.style.position="absolute";
			canvas.toDataURL("image/png");
			fotAux=canvas.toDataURL("image/png");

			canvas.style.visibility="visible";
			btnGuard= document.getElementById("btnGuard");
			btnGuard.style.visibility="visible";

			btnFotoTomada= document.getElementById("btnTake");
			btnFotoTomada.style.visibility="hidden";
			btnFotoTomada.disabled=true;

}


//Guarda la foto en el caso cuando se haya tomado.
function guardarFoto(){

	var obtImg=fotAux;
	if (obtImg == "" || obtImg == null){
		alert("Primero tome la foto y luego guarde!");
	}
	else{
	fot.push(obtImg);
	alert("Guardado con exito!");

}
//Esconde el canvas despues de la fotoTomada
hideCanvasAfterFoto();
//Activa Nuevamente la camara.
activateCamera();
}

//Esconde el canvas
function hideCanvasAfterFoto(){
		canvas=document.getElementById("fotoTomada");
		canvas.style.visibility="hidden";

		btnGuard=document.getElementById("btnGuard");
		btnGuard.style.visibility="hidden";


		btnFotoTomada= document.getElementById("btnTake");
		btnFotoTomada.style.visibility="visible";
		btnFotoTomada.disabled="false";

}



function callPhoto(){
	imgGuard= document.getElementById("imgGuard");
	imgGuard.setAttribute("src",fot[0]);
}
