document.addEventListener('DOMContentLoaded', function() {
    const dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(dropdown => {
        const dropbtn = dropdown.querySelector('.dropbtn');

        dropbtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Close all other dropdowns
            dropdowns.forEach(otherDropdown => {
                if (otherDropdown !== dropdown) {
                    otherDropdown.classList.remove('active');
                }
            });

            // Toggle the clicked dropdown
            dropdown.classList.toggle('active');
        });
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', function() {
        dropdowns.forEach(dropdown => {
            dropdown.classList.remove('active');
        });
    });
});