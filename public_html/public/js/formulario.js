const evento = document.getElementById('send')
const enviarFormulario =() => {
        let nombre = document.getElementById('nombres').value;
        let apellido = document.getElementById('apellidos').value;
        let numero= 51941683636;
var win= window.open(`https://wa.me/${numero}?text=Hola%20ST%20América%0ATe%20Saluda%0ANombre%20de%20empresa/persona:%20${nombre}%0APara%20solicitar%20información%20sobre%20el%20siguiente%20servicio%0AServicio:
%20${apellido}`,'_blank');       
}
evento.addEventListener('click', enviarFormulario)