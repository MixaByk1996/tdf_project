document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById("myModal2");
    // var btn = document.getElementById("myBtn");
    var btn2 = document.getElementById("myBtn22");

    var span = document.getElementsByClassName("close--cart--modal2")[0];
    var modalContent = document.getElementsByClassName("modal-content--cart2")[0];
    var btn__cart = document.getElementsByClassName("btn-cart2");

    modal.style.opacity = 0;
    modal.style.visibility = 'hidden';
    modal.style.transition = 'opacity 0.5s, visibility 0.5s';
    span.style.display = 'none';

    var addToCartButtons = document.querySelectorAll('.btn-cart2');

    addToCartButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.stopPropagation();
            var is_user_check = document.getElementById('is_user_check');
            console.log(is_user_check.value);
            if(is_user_check.value == '1'){
                window.location.href = '/cart';
            }
            else {
                document.getElementById("auth-modal").setAttribute("class","auth-modal-frame");
            }
        });
    });

    function applyBlur() {
        var content = document.querySelector('.blur__modal');
        if (content) {
            content.style.filter = 'blur(8px)';
        }
    }

    function removeBlur() {
        var content = document.querySelector('.blur__modal');
        if (content) {
            content.style.filter = 'none';
        }
    }

    function toggleModal() {
        if (modal.style.opacity === "0" || modal.style.opacity === "") {
            modal.style.display = "block";
            setTimeout(function() {
                modal.style.opacity = 1;
                modal.style.visibility = 'visible';
                applyBlur();
                if (window.innerWidth < 1300) {
                    span.style.display = 'flex';
                }
            }, 10);
        } else {
            modal.style.opacity = 0;
            setTimeout(function() {
                removeBlur();
                if (window.innerWidth < 1300) {
                    span.style.display = 'none';
                }
            }, 100);

            setTimeout(function() {
                modal.style.display = "none";
                modal.style.visibility = 'hidden';
            }, 500);
        }
    }

    // btn.onclick = function(event) {
    //     event.stopPropagation();
    //     toggleModal();

    //     if (window.innerWidth > 1300) {
    //         var rect = btn.getBoundingClientRect();
    //         modal.style.top = rect.top + "px";
    //         var modalWidth = modal.offsetWidth;
    //         modal.style.left = (rect.left - modalWidth) + "px";
    //     }
    // };

    btn2.onclick = function(event) {
        event.stopPropagation();
        toggleModal();

        if (window.innerWidth > 1300) {
            var rect = btn2.getBoundingClientRect();
            modal.style.top = rect.top + "px";
            var modalWidth = modal.offsetWidth;
            modal.style.left = (rect.left - modalWidth) + "px";
        }
    };

    span.onclick = function() {
        toggleModal();
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            toggleModal();
        }
    }

    modalContent.onclick = function(event) {
        event.stopPropagation();
    }

    document.addEventListener('click', function(event) {
        if (modal.style.opacity === "1" && !modal.contains(event.target) && event.target !== btn) {
            toggleModal();
        }
    });

    document.addEventListener('click', function(event) {
        if (modal.style.opacity === "1" && !modal.contains(event.target) && event.target !== btn2) {
            toggleModal();
        }
    });


    for (var i = 0; i < btn__cart.length; i++) {
        btn__cart[i].addEventListener('click', function(event) {
            toggleModal();
        });
    }
});
