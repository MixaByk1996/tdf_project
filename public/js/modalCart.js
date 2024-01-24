document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var btnsCart = document.querySelectorAll(".products-item-button"); // выбираем все кнопки с классом btn-cart
    var span = document.getElementsByClassName("close--cart--modal")[0];
    var modalContent = document.getElementsByClassName("modal-content--cart")[0];

    // Исходные стили модального окна
    modal.style.opacity = 0;
    modal.style.visibility = 'hidden';
    modal.style.transition = 'opacity 0.5s, visibility 0.5s';
    span.style.display = 'none';

    

    var addToCartButtons = document.querySelectorAll('.btn-cart');

addToCartButtons.forEach(function(button) {
    button.addEventListener('click', function(event) {
        // Предотвращаем всплытие события
        event.stopPropagation();

        // Перенаправляем пользователя на страницу корзины
        window.location.href = '/cart';
    });
});




    function toggleModal() {
        if (modal.style.opacity === "0" || modal.style.opacity === "") {
            modal.style.display = "block";
            setTimeout(function() {
                modal.style.opacity = 1;
                modal.style.visibility = 'visible';
                if (window.innerWidth < 750) {
                    span.style.display = 'flex';
                }
            }, 10);
        } else {
            modal.style.opacity = 0;
            setTimeout(function() {
                if (window.innerWidth < 750) {
                    span.style.display = 'none';
                }
            }, 100);
           
            setTimeout(function() {
                modal.style.display = "none";
                modal.style.visibility = 'hidden';
            }, 500);
        }
    }

    // Переключение модального окна при клике на кнопку btn
    btn.onclick = function(event) {
        event.stopPropagation();
        toggleModal();

        if (window.innerWidth > 750) {
            var rect = btn.getBoundingClientRect();
            modal.style.top = rect.top + "px";
            var modalWidth = modal.offsetWidth;
            modal.style.left = (rect.left - modalWidth) + "px";
        }
    };

    // Переключение модального окна при клике на каждую кнопку с классом btn-cart
    btnsCart.forEach(function(button) {
        button.onclick = function(event) {
            event.stopPropagation();
            toggleModal();
            // Если нужна специальная логика для этой кнопки, добавьте ее здесь
        };
    });

    // Закрытие модального окна при клике на кнопку закрытия
    span.onclick = function() {
        toggleModal();
    }

    // Закрытие модального окна при клике вне его содержимого
    window.onclick = function(event) {
        if (event.target == modal) {
            toggleModal();
        }
    }

    // Предотвращение закрытия модального окна при клике внутри его содержимого
    modalContent.onclick = function(event) {
        event.stopPropagation();
    }
});
