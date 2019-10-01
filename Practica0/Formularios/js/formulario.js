function validar(){

    var nombre=document.getElementById("nombre").value;

    nombre=nombre.trim();

    if(nombre=="") {
        alert("El campo nombre no esta completo");
        document.getElementById("nombre").focus;
        return false;
    }

    var edad=parseInt(document.getElementById("edad").value);

    if (isNaN(edad)) {
        alert("La edad no es un valor valido");
        document.getElementById("edad").focus;
        return false;
    }

    var movil=document.getElementById("movil").value;

    movil=movil.trim();

    if (!(/^[6]{1}[0-9]+){8}$/i.test(movil))) {
        alert("El numero de movil no es un valor valido");
        document.getElementById("movil").focus;
        return false;
    }

    var email=document.getElementById("email").value;

    if (!(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(email))) {
        alert("El email no es correcto");
        document.getElementById("email").focus;
        return false;
    }

    var pass=document.getElementById("passw").value;
    var repass=document.getElementById("repassw").value;

    if (pass=="") {
        alert("El campo esta vacio");
    }

    if (repass=="") {
        alert("El campo esta vacio");
    }

    if (pass!==repass) {
        alert("Las contraseñas no son iguales")
    }
    return true;
}