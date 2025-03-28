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
const mobMenuClose = document.querySelector('.close-mobile-menu');
const mobMenuContainer = document.querySelector('.mobile-menu-container');

// "Show the dialog" button opens the dialog modally
mobMenuToggle.addEventListener("click", () => {
    mobMenuContainer.showModal();
    document.body.classList.add('mob-menu-open');
});

mobMenuClose.addEventListener('click', () => {
    mobMenuContainer.close();

});

mobMenuContainer.addEventListener("close", (event) => {
    document.body.classList.remove('mob-menu-open');
});

window.addEventListener('resize', () => {
    if (document.body.classList.contains('mob-menu-open') && window.innerWidth >= 640) {
        mobMenuContainer.close();
    }
})

/* mobMenuToggle.addEventListener('click', (button) => {
    mobMenuContainer.classList.toggle('active');
    mobMenuToggle.classList.toggle('active');
    document.body.classList.toggle('mob-menu-open');
})

window.addEventListener('resize', () => {
    if (mobMenuContainer.classList.contains('active') && window.innerWidth >= 640) {
        mobMenuContainer.classList.remove('active');
        mobMenuToggle.classList.remove('active');
        document.body.classList.remove('mob-menu-open');
    }
}) */

function throttle(func, limit) {
    let inThrottle;
    return function (...args) {
        if (!inThrottle) {
            func.apply(this, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    }
}

function checkScroll() {
    console.log('tick');
    if (window.scrollY > 200) {
        document.body.classList.add('scrolled');
    } else {
        document.body.classList.remove('scrolled');
    }
}

window.addEventListener('scroll', throttle(checkScroll, 50));

