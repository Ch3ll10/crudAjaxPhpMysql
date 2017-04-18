function objetoAjax(){

/*esta clase de ajax es reutilisable y abriremos la conexion al derrvidor 
para que nuestro script en php se ejecutado enviandole los datos*/

	var xmlhttp=false;
	try{
		xmlhttp = new ActiveObject("Msxml2.XMLHTTP");
	}
	catch(e){
		try{
			xmlhttp =new ActiveObject("Microsoft.XMLHTTP");
		}
		catch(E){
			xmlhttp = false;
		}
	}

	if(!xmlhttp && typeof XMLHttpRequest!='undefined'){
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function Registrar(id,accion){
	nombre = document.frmClientes.nombre.value;
	contrasena = document.frmClientes.contrasena.value;

	//alert(nombre+" "+contrasena);
	
	ajax = objetoAjax();

	if(accion == 'N'){
		ajax.open("POST", "clases/registrar.php",true);
	}
	else if(accion == 'E'){
	    ajax.open("POST", "clases/actualizar.php",true);
	}

	ajax.onreadystatechange=function(){
		if(ajax.readyState==4){
			alert('Los datos fueron guardados con exito!');
			window.location.reload(true);
		}
	}
	//esta funcion es para ocultar los datos enviado por el usuario por el URL
ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
ajax.send("nombre= "+nombre+" &contrasena= "+contrasena+" &id= "+id);

}

function Eliminar(id){

	ajax2 = objetoAjax();

		ajax2.open("POST", "clases/eliminar.php", true);

	ajax2.onreadystatechange=function(){
		if(ajax2.readyState==4){
			alert('Los datos fueron eliminados con exito!');
			window.location.reload(true);
		}
	}
ajax2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
ajax2.send("id=" +id);
}




