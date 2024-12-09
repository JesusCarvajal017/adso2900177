function activarMenu(event) {
    const links = document.querySelectorAll('.sidebar a');
    links.forEach(link => link.classList.remove('active')); // Remueve 'active' de todos los enlaces
    event.currentTarget.classList.add('active'); // Agrega 'active' al enlace actual
}