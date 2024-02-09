document.addEventListener('DOMContentLoaded', function () {









    
    const detailsButtons = document.querySelectorAll('.details-button');
    const orderSummary = document.querySelector('.order-summary-container');
    const profileOrdersContainer = document.querySelector('.data-profile-orders-container');
    const backButton = document.querySelector('.back-button');

    document.querySelector('.cabinet-main-text').style.opacity = 1;


    // Установка начальных стилей для анимации
    orderSummary.style.opacity = '0';
    orderSummary.style.transform = 'translateY(20px)';
    orderSummary.style.transition = 'opacity 0.5s, transform 0.5s';
    orderSummary.style.display = 'none';

    profileOrdersContainer.style.opacity = '1';
    profileOrdersContainer.style.transform = 'translateY(0)';
    profileOrdersContainer.style.transition = 'opacity 0.5s, transform 0.5s';
    profileOrdersContainer.style.display = 'block';

    // Функция для плавного переключения видимости
    function toggleVisibility(showElement, hideElement, displayStyle) {
        hideElement.style.opacity = '0';
        hideElement.style.transform = 'translateY(20px)';
        setTimeout(() => {
            showElement.style.opacity = '1';
            showElement.style.transform = 'translateY(0)';
            hideElement.style.display = 'none';
            showElement.style.display = displayStyle; // 'flex' или 'block'
        }, 500); // Задержка должна соответствовать времени анимации
    }

    detailsButtons.forEach(button => {
        button.addEventListener('click', function () {
            toggleVisibility(orderSummary, profileOrdersContainer, 'flex');
        });
    });

    backButton.addEventListener('click', function() {
        toggleVisibility(profileOrdersContainer, orderSummary, 'block');
    });
});

document.addEventListener('DOMContentLoaded', function () {
    function applyInitialStyles() {
        const profileFormContainer = document.querySelector('.data-profileform-container');
        const profileOrdersContainer = document.querySelector('.data-profile-orders-container');
        const profileFavoritesContainer = document.querySelector('.data-profile-orders-container--izbrannoe');

        profileFormContainer.style.opacity = '1';
        profileFormContainer.style.transform = 'translateY(20px)';
        profileFormContainer.style.transition = 'opacity 0.5s ease-in-out, transform 0.5s ease-in-out';

        profileOrdersContainer.style.opacity = '0';
        profileOrdersContainer.style.transform = 'translateY(20px)';
        profileOrdersContainer.style.transition = 'opacity 0.5s ease-in-out, transform 0.5s ease-in-out';

        profileFavoritesContainer.style.opacity = '0';
        profileFavoritesContainer.style.transform = 'translateY(20px)';
        profileFavoritesContainer.style.transition = 'opacity 0.5s ease-in-out, transform 0.5s ease-in-out';
        profileFavoritesContainer.style.display = 'none'; // Скрытие элемента

    }

    applyInitialStyles();

    const profileFormContainer = document.querySelector('.data-profileform-container');
    const profileOrdersContainer = document.querySelector('.data-profile-orders-container');

    const profileFavoritesContainer = document.querySelector('.data-profile-orders-container--izbrannoe');

    const detailsButtons = document.querySelectorAll('.details-button');
    const orderSummary = document.querySelector('.order-summary-container');
    const backButton = document.querySelector('.back-button');
    const dataUrlData = document.querySelector('.data-url-data');
    const dataUrlHistory = document.querySelector('.data-url-history');
    const dataUrlFavorites = document.querySelector('.data-url-favorites');
    const dataUrls = document.querySelectorAll('.data-url, .data-url-active');


    // dataUrls.forEach(url => {
    //     url.addEventListener('click', function() {
    //         // Проверяем, открыт ли элемент с классом 'data-profile-orders-container'
    //         if (profileOrdersContainer.style.display !== 'none') {
    //             // Если открыт, скрываем его
    //             profileOrdersContainer.style.display = 'none';
    //         }
    //     });
    // });

    function changeActiveElement(newActiveElement) {
        dataUrls.forEach(element => {
            element.classList.remove('data-url-active');
        });
        newActiveElement.classList.add('data-url-active');
    }

    function toggleVisibility(elementToShow, ...elementsToHide) {
        elementsToHide.forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
        });

        setTimeout(() => {
            elementToShow.style.opacity = '1';
            elementToShow.style.transform = 'translateY(0)';
            elementsToHide.forEach(element => {
                element.style.display = 'none';
            });
            elementToShow.style.display = 'block';
        }, 500);
    }

    profileFormContainer.style.display = 'block';
    profileFormContainer.style.opacity = '1';
    profileFormContainer.style.transform = 'translateY(0)';

    profileOrdersContainer.style.display = 'none';
    profileOrdersContainer.style.opacity = '0';
    profileOrdersContainer.style.transform = 'translateY(20px)';

    detailsButtons.forEach(button => {
        button.addEventListener('click', function () {
            orderSummary.style.display = 'flex';
            profileOrdersContainer.style.display = 'none';
        });
    });

    backButton.addEventListener('click', function() {
        orderSummary.style.display = 'none';
        profileOrdersContainer.style.display = 'block';
    });

    
    dataUrlData.addEventListener('click', function() {
        toggleVisibility(profileFormContainer, profileOrdersContainer, profileFavoritesContainer);
        changeActiveElement(dataUrlData);

        orderSummary.style.display = 'none';
        profileOrdersContainer.style.display = 'block';
    });

    dataUrlHistory.addEventListener('click', function() {
        toggleVisibility(profileOrdersContainer, profileFormContainer, profileFavoritesContainer);
        changeActiveElement(dataUrlHistory);

        orderSummary.style.display = 'none';
        profileOrdersContainer.style.display = 'block';
    });

    dataUrlFavorites.addEventListener('click', function() {
        toggleVisibility(profileFavoritesContainer, profileFormContainer, profileOrdersContainer);
        changeActiveElement(dataUrlFavorites);

        orderSummary.style.display = 'none';
        profileOrdersContainer.style.display = 'block';
    });
});
