document.addEventListener('DOMContentLoaded', () => {
    const card = document.getElementById('presentationCard');
    
    // Añadir clase para mostrar la tarjeta con animación
    setTimeout(() => {
        card.classList.add('show');
    }, 100);

    // Efecto de rotación al pasar el mouse
    card.addEventListener('mouseenter', () => {
        card.style.transform = 'rotateY(10deg)';
    });

    card.addEventListener('mouseleave', () => {
        card.style.transform = 'rotateY(0deg)';
    });
});
