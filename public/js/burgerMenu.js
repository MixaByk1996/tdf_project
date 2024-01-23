document.addEventListener('DOMContentLoaded', function () {
    const burgerMenuIcon = document.querySelector('.burger-menu-icon');
    const burgerMenuContainer = document.querySelector('.burger-menu-container');
    const body = document.body;
    let isMenuOpen = false;

    burgerMenuIcon.addEventListener('click', function () {
        if (!isMenuOpen) {
            burgerMenuContainer.classList.add('open');
            burgerMenuContainer.classList.remove('close');
            burgerMenuIcon.classList.add('active'); // Добавляем класс 'active'
            body.style.overflow = 'hidden'; 
            isMenuOpen = true;
        } else {
            burgerMenuContainer.classList.add('close');
            burgerMenuContainer.classList.remove('open');
            burgerMenuIcon.classList.remove('active'); // Удаляем класс 'active'
            body.style.overflow = 'auto';
            isMenuOpen = false;
        }
    });

    document.addEventListener('click', function (e) {
        if (!burgerMenuContainer.contains(e.target) && !burgerMenuIcon.contains(e.target) && isMenuOpen) {
            burgerMenuContainer.classList.add('close');
            burgerMenuContainer.classList.remove('open');
            burgerMenuIcon.classList.remove('active'); // Удаляем класс 'active'
            body.style.overflow = 'auto';
            isMenuOpen = false;
        }
    });
});
