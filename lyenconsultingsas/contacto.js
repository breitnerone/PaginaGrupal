function revisar(elemento) {
    if (elemento.value==""){
        elemento.className='error';
    } else {
        elemento.className='form-input';
    }
}

function revisaremail(elemento) {
    if (elemento.value!=""){
        var dato = elemento.value;
        var expresion = /^([a-zA-Z0-9_.-])+@(([a-zA-z0-9-])+.)+([a-zA-Z0-9-]{2,4})+$/;
        if (!expresion.test(dato)) {
            elemento.className='error';
        } else {
        elemento.className='form-input';
        }
	}
}


function validar(form) {
  if(form.nombre.value=="") { //Si este campo está vacío
    alert('No has escrito tu nombre'); // Mensaje a mostrar
    return false; //devolvemos un valor negativo
  }
  
  if(form.apellido.value=="") { //Si este campo está vacío
    alert('No has escrito tu apellido'); // Mensaje a mostrar
    return false; //devolvemos un valor negativo
  }
  
  if(form.cargo.value=="") { //Si este campo está vacío
    alert('No has escrito tu cargo'); // Mensaje a mostrar
    return false; //devolvemos un valor negativo
  }
  
  if(form.telefono.value=="") { //Si este campo está vacío
    alert('No has escrito tu teléfono'); // Mensaje a mostrar
    return false; //devolvemos un valor negativo
  }
  
  if(form.email.value=="") { //Si este campo está vacío
    alert('No has escrito tu e-Mail'); // Mensaje a mostrar
    return false; //devolvemos un valor negativo
  }
  
  if(form.empresa.value=="") { //Si este campo está vacío
    alert('No has escrito tu empresa'); // Mensaje a mostrar
    return false; //devolvemos un valor negativo
  }
  
  if(form.numero.value=="") { //Si este campo está vacío
    alert('No has escrito el número de empleados de tu empresa'); // Mensaje a mostrar
    return false; //devolvemos un valor negativo
  }
  
  if(form.pais.value=="") { //Si este campo está vacío
    alert('No has escrito el pais desde donde te encuentras ubicado'); // Mensaje a mostrar
    return false; //devolvemos un valor negativo
  }
  else
	  alert('¡Tu mensaje ha sido enviado de manera correcta!');
   
  return true; // Si esta todo bien, devolvemos Ok, positivo
}