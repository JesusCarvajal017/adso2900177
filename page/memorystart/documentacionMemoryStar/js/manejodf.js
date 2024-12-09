const docs = document.querySelectorAll('.docs');
docs.forEach(doc => {
    doc.addEventListener('click', function() {
        document.getElementById('contenedorIframes').scrollIntoView({ behavior: 'smooth' });
    });
});

const docsDos = document.querySelectorAll('.docsDos');
docsDos.forEach(doc => {
    doc.addEventListener('click', function() {
        document.getElementById('contenedorIframesDos').scrollIntoView({ behavior: 'smooth' });
    });
});

function mostrarIntroduccion() {
    const iframes = document.querySelectorAll('.iframes');
    iframes.forEach(iframe => {
        iframe.classList.add('oculto');
    });
    document.getElementById("introduccion").classList.remove('oculto');
}
function mostrarResumen() {
    const iframes = document.querySelectorAll('.iframes');
    iframes.forEach(iframe => {
        iframe.classList.add('oculto');
    });
    document.getElementById("resumen").classList.remove('oculto');
}

function mostrarDescripcion(){
    const iframes = document.querySelectorAll('.iframes');
    iframes.forEach(iframe => {
        iframe.classList.add('oculto');
    });
    document.getElementById("descripcion").classList.remove('oculto');
}

function mostrarSolucion(){
    const iframes = document.querySelectorAll('.iframes');
    iframes.forEach(iframe => {
        iframe.classList.add('oculto');
    });
    document.getElementById("solucion").classList.remove('oculto');
}

function mostrarPlanTrabajo(){
    const iframes = document.querySelectorAll('.iframes');
    iframes.forEach(iframe => {
        iframe.classList.add('oculto');
    });
    document.getElementById("planTrabajo").classList.remove('oculto');
}

function mostrarEquipoTrabajo(){
    const iframes = document.querySelectorAll('.iframes');
    iframes.forEach(iframe => {
        iframe.classList.add('oculto');
    });
    document.getElementById("equipoTrabajo").classList.remove('oculto');
}

function mostrarPresupuesto(){
    const iframes = document.querySelectorAll('.iframes');
    iframes.forEach(iframe => {
        iframe.classList.add('oculto');
    });
    document.getElementById("presupuesto").classList.remove('oculto');
}

function mostrarPlanMantenimiento(){
    const iframes = document.querySelectorAll('.iframes');
    iframes.forEach(iframe => {
        iframe.classList.add('oculto');
    });
    document.getElementById("mantenimiento").classList.remove('oculto');
}

function mostrarCronogramaPagos(){
    const iframes = document.querySelectorAll('.iframes');
    iframes.forEach(iframe => {
        iframe.classList.add('oculto');
    });
    document.getElementById("cronogramaPagos").classList.remove('oculto');
}

function mostrarHistoriasUsuario(){
    const iframes = document.querySelectorAll('.iframes');
    iframes.forEach(iframe => {
        iframe.classList.add('oculto');
    });
    document.getElementById("HistoriasUsuario").classList.remove('oculto');
}

function mostrarRequerimientos(){
    const iframes = document.querySelectorAll('.iframes');
    iframes.forEach(iframe => {
        iframe.classList.add('oculto');
    });
    document.getElementById("Requerimientos").classList.remove('oculto');
}
function mostrarMer(){
    const iframes = document.querySelectorAll('.iframes');
    iframes.forEach(iframe => {
        iframe.classList.add('oculto');
    });
    document.getElementById("Mer").classList.remove('oculto');
}
function mostrarCasosUso(){
    const iframes = document.querySelectorAll('.iframes');
    iframes.forEach(iframe => {
        iframe.classList.add('oculto');
    });
    document.getElementById("CasosUso").classList.remove('oculto');
}
function mostrarFicha(){
    const iframes = document.querySelectorAll('.iframes');
    iframes.forEach(iframe => {
        iframe.classList.add('oculto');
    });
    document.getElementById("ficha").classList.remove('oculto');
}
function mostrarRiesgo(){
    const iframes = document.querySelectorAll('.iframes');
    iframes.forEach(iframe => {
        iframe.classList.add('oculto');
    });
    document.getElementById("riesgo").classList.remove('oculto');
}