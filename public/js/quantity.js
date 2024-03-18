document.addEventListener('DOMContentLoaded', function() {
    document.body.addEventListener('click', function(event) {
        if (event.target.classList.contains('increase') || event.target.classList.contains('decrease')) {
            const quantityControls = event.target.parentElement;
            const quantitySpan = quantityControls.querySelector('.quantity');
            let quantity = parseInt(quantitySpan.textContent, 10);

            if (event.target.classList.contains('increase')) {
                quantity++;
            } else if (event.target.classList.contains('decrease') && quantity > 1) {
                quantity--;
            }

            quantitySpan.textContent = quantity + ' комплект' + (quantity > 1 ? 'а' : '');
        }
    });
});
