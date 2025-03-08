const subMenuContainers = document.querySelectorAll('.menu-item-has-children');

subMenuContainers.forEach(submenu => {
    const subMenuToggle = submenu.querySelector('a');

    subMenuToggle.addEventListener('click', (button) => {
        submenu.classList.toggle('active');
    })
})