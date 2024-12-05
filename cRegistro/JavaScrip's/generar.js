function makeIDDIReccion() {
    const formulario = document.getElementById("registro");
    const formData = new FormData(formulario);
    
    var numDireccion = formData.get("numerotxt");
    if (numDireccion.length <= 1) {
        numDireccion = "0" + String(numDireccion);
    } else if (numDireccion.length >=3 ){
        alert("El numero de la direccion solo debe tener 1 o 2 dijitos");
    }else if (numDireccion == "sn") {
        numDireccion = "sn";
    }
    
    var idDireccion = formData.get('calletxt').substring(0,2) + 
    formData.get('coloniatxt').substring(0,1) +
    formData.get('municipiotxt').substring(0,1) +
    formData.get('estadotxt').substring(0,2) + "-" + 
    numDireccion + "-" +
    formData.get('codPostlatxt');

    document.getElementById('Direccion').value  = idDireccion;
}


function makeIDPersona() {
    const formulario = document.getElementById("registro");
    const formData = new FormData(formulario);
    var idPersona = formData.get('nombretxt').substring(0,2) + 
    formData.get('apPatxt').substring(0,1) +
    formData.get('apMatxt').substring(0,1) +
    formData.get('fchNac').substring(2,4) + '-' +
    formData.get('fchNac').substring(5,7) + '-' +
    formData.get('fchNac').substring(8,10)
    ;
    document.getElementById('persona').value = idPersona;
}