var $butonis=$('#mostraris'),
	$form=$('#faccess'),
	$form1=$('#faddpost'),
	$list=$('#id_contenedor'),
	$maside=$('#menu_aside'),
	$user=$('#user'),
	$pass=$('#pass'),
	$ti=$('#i_titulo'),
	$fr=$('#i_frase'),
	$li=$('#i_link'),
	$art=$('.articulo').first();


//Aparecer el formulario ydesaparecer aside & articulos
function fisesion(){
	
	$form.slideToggle(); //Aparecera o desaparece los elementos que no estan 
	$maside.slideToggle();
	$list.slideToggle();
	//return false;
}

//Para la entrada del ususario y contraseña

function bienvenida(){
	var user=$user.val(),
		pass=$pass.val();
if (user=='MELANIE'  && pass=='hola') {
	//alert('Bienvenido SR(A):'+user);
	$('#isesion').remove(); //quitar boton de inicio sesion
	$form.remove(); //quita el formulario
	$('#sun').show(); //mostrar boton de bienvenida
	$('#sun').text('Hola '+ user+'!!'); //mensaje de bienvenida en header
	$maside.slideToggle();
	$list.slideToggle();
	$('#addpost').show();
}
else{
	alert('Usuario o constraseña invalidos, ingrese de nuevo');
}

}

function csesion(){
	$('#opcs').html('<div id="bcs" onclick="adios();"> Cerrar Sesión </div>');
}


function adios(){
	alert("Regresa Pronto...");
		location:href='index.html';  //Location es para redireccionar a la página que yo le indique
}

function faddpost(){
	$form1.slideToggle();

}

function addpost(){
	var titulo=$ti.val(),
		frase=$fr.val(),
		link=$li.val(),
		$clon=$art.clone(); //Para clonar cada articulo

		alert('Se agregara el siguiente post\n'+titulo+'\n'+frase+'\n'+link);

		$clon.find('.titulo a').text(titulo);
		$clon.find('.frase p').text(frase);
		$clon.hide();
		$list.prepend($clon); //para que coloque nuestro clon en donde debe colocarlo
		faddpost();
		$clon.fadeIn(); //que lo aparezca 
		$clon.slideDown(); //de efecto que aparece de arriba hacia abajo
		$ti.val('');
		$fr.val('');
		$li.val('');

		return false;
}

