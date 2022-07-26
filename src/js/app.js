document.addEventListener('DOMContentLoaded', function () {

    eventListener();
    darkMode();
});

function darkMode() {

    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    // console.log(prefiereDarkMode.matches);
    if (prefiereDarkMode.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', function () {
        if (prefiereDarkMode.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });

    const btndarkMode = document.querySelector('.Darkmode__btn')

    btndarkMode.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode')
    });
}


function eventListener() {
    const mobilMenu = document.querySelector('.mobil__menu')

    mobilMenu.addEventListener('click', navegacionResponsive);

    //muestra campo condicionales
    const metodoContacto = document.querySelectorAll('input[name="contacto[contacto]"]');
    metodoContacto.forEach(input => input.addEventListener('click', mostrarMetodoContacto));
}


function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    if (navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar');
    } else {
        navegacion.classList.add('mostrar');
    }
}

function mostrarMetodoContacto(e) {
    const contactoDiv = document.querySelector('#contacto');
    if (e.target.value === 'telefono') {
        contactoDiv.innerHTML = `
        <br>
        <label for="telefono">Numero de Telefono</label>
        <input data-cy="input-telefono" type="tel" placeholder="Tu telefono" id="telefono" name="contacto[telefono]">
        
        <p>Elija la fecha y la hora para la llamada</p>

            <label for="fecha">Fecha</label>
            <input data-cy="input-fecha" type="date" id="fecha" name="contacto[fecha]">
            <label for="hora">Hora</label>
            <input data-cy="input-hora" type="time" id="hora" min="09:00" max="18:00" name="contacto[hora]">`
    } else {
        contactoDiv.innerHTML = ` 
        <label for="email">E-mail</label>
        <input data-cy="input-email" type="email" placeholder="Tu Email" id="email" name="contacto[email]" required> `
    }
}