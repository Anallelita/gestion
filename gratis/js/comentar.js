var myRequest = getXMLHTTPRequest();
function getXMLHTTPRequest(){
	var resquest = false;
	if (window.XMLHttpRequest)
		{
		 resquest=new XMLHttpRequest();
		}else{
			if (window.ActiveXObject)
				{
					try
						{
							resquest=new ActiveXObject("Msml2.XMLHTTP");
						}
					catch(err1)
						{
							try
								{
									resquest=new ActiveXObject("Microsoft.XMLHTTP");
								}
							catch(err2)
								{
									resquest=false;
								}
						}
				}
		}
	return resquest;
}

function enviar_comentario(){
	var user = document.getElementById("usuario").value;
	var email = document.getElementById("email").value;
	var post = document.getElementById("post").value;
	
	var url="action/crear_comentario.php?user="+user+"&email"+email+"&comentario"+post+"&post";
	
	myRequest.open("GET", url, true);
	myRequest.onreadystatechange =  respuestaAJAX;
	myRequest.send(null);
}
function  respuestaAJAX(){
	if(myRequest.readyState==4){
		if(myRequest.readyState==200){
		document.getElementById('respuesta').innerHTML=myRequest.responseText;
		}else{
		document.getElementById('respuesta').innerHTML=myRequest.status;
		}
	}else{
		document.getElementById('respuesta').innerHTML="<img src='untitled.PNG' />";
	}
}
