/* SUBMENUS */

const subMenuContainers = document.querySelectorAll('.menu-item-has-children');

subMenuContainers.forEach(submenu => {
    const subMenuToggle = submenu.querySelector('a');

    subMenuToggle.addEventListener('click', (button) => {
        submenu.classList.toggle('active');
    })
})

/* MOBILE MENU */

const mobMenuToggle = document.querySelector('.mobile-menu-toggle');
const mobMenuContainer = document.querySelector('.mobile-menu-container');

mobMenuToggle.addEventListener('click', (button) => {
    mobMenuContainer.classList.toggle('active');
    mobMenuToggle.classList.toggle('active');
})
