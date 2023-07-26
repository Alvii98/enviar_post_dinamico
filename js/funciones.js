window.addEventListener("click", function(event){
    
    if(event.target.tagName != 'TD') return

    const form = document.createElement('form'),
    input_nombre = document.createElement('input'),
    input_edad = document.createElement('input'),
    input_pais = document.createElement('input'),
    submitButton = document.createElement('button');

    form.name = 'form_post';
    form.method = 'POST'
    form.action = 'datos.php'
    form.style.position = 'absolute'
    form.style.left = '-9999px'
    
    input_nombre.type = 'text';
    input_nombre.value = event.target.parentNode.childNodes[1].textContent
    input_nombre.name = 'nombre';
    
    input_edad.type = 'text';
    input_edad.value = event.target.parentNode.childNodes[3].textContent
    input_edad.name = 'edad';
    
    input_pais.type = 'text';
    input_pais.value = event.target.parentNode.childNodes[5].textContent
    input_pais.name = 'pais';
    
    submitButton.type = 'submit';
    submitButton.textContent = 'Enviar';
    
    form.appendChild(input_nombre);
    form.appendChild(input_edad);
    form.appendChild(input_pais);
    form.appendChild(submitButton);

    document.body.appendChild(form)

    if (form.checkValidity()) {
        form.submit();
    }else{
        this.alert('No se pudo enviar form.')
    }
    document.body.removeChild(form)
})