const subMenuContainers = document.querySelectorAll('.menu-item-has-children');

subMenuContainers.forEach(submenu => {
    const subMenuToggle = submenu.querySelector('a');
    const subMenu = submenu.querySelector('sub-menu');

    subMenuToggle.addEventListener('click', (button) => {
        submenu.classList.toggle('active');
    })
})