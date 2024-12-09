function obtenerIntegrantes() {
    fetch('json/equipo.json')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => mostrarIntegrantes(data))
        .catch(error => console.error('Hubo un problema con la petición Fetch:', error));
}
function mostrarIntegrantes(Integrantes) {
    const container = document.getElementById('integrantes');
    
    Integrantes.forEach(miembro => {
        const perfilHTML = `
            <div class="col-lg-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h2">${miembro.nombre}</h1>
                        <ul class="list-inline">
                            <li class="list-inline-item"><strong>Rol: </strong>${miembro.rol}</li>
                        </ul>
                        <img src="${miembro.imagen}" alt="" width="200"></div>
                        <h6>Descripción:</h6>
                        <p>${miembro.descripcion}</p>
                        <h6>Contribuciones:</h6>
                        <ul class="pb-3">
                            ${miembro.contribuciones.map(contribucion => `<li>${contribucion}</li>`).join('')}
                        </ul>
                        <h6>Contacto:</h6>
                        <ul class="pb-3">
                            <li><strong>Correo: </strong><a href="mailto:${miembro.contacto.correo}">${miembro.contacto.correo}</a></li>
                             <li><strong>GitHub:</strong> <a href="https://github.com/${miembro.contacto.github}">${miembro.contacto.github}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        `;
        container.innerHTML += perfilHTML;
    });
}
document.addEventListener('DOMContentLoaded', obtenerIntegrantes);
