function validaremail(elemento) 
{
    if (elemento.value!=="")
    {
    var dato = elemento.value;
    var expresion = /^([a-zA-Z0-9_.-])+@(([a-zA-z0-9-])+.)+([a-zA-Z0-9-]{2,4})+$/;
    if (!expresion.test(dato)) 
    {
    elemento.className='error';
    } 
    else 
    {
    elemento.className='form-input';
    }
    }
}

function validar(form) 
{
  if(form.nombre.value==="") 
  {
    alert('Por favor digite su nombre');
    return false; 
  }
  
  if(form.apellido.value==="") 
  { 
    alert('Por favor digite su apellido');
    return false; 
  }
  
  if(form.cargo.value==="") 
  { 
    alert('Por favor digite su cargo o profesión');
    return false; 
  }
  
  if(form.telefono.value==="") 
  { 
    alert('Por favor digite su número de teléfono');
    return false; 
  }
  
  if(form.email.value==="") 
  { 
    alert('Por favor digite su dirección de correo electrónico');
    return false; 
  }
  
  if(form.empresa.value==="") 
  { 
    alert('Por favor digite el nombre de su empresa');
    return false; 
  }
  
  if(form.numero.value==="") 
  { 
    alert('Por favor digite el número de empleados de su empresa');
    return false; 
  }
  
  if(form.pais.value==="") 
  { 
    alert('Por favor digite el pais donde se encuentra ubicado');
    return false; 
  }
  else
  {
    alert('¡Su mensaje ha sido enviado de manera correcta!');
  } 
  return true;
}