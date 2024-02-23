window.onload = function () {
    const filterButton = document.querySelector('.catalog-filters-button');
    const filterBlock = document.querySelector('.catalog-filters-block');
    let timeoutId; // Variable to store timeout ID

    function toggleFilter(event) {
        event.stopPropagation(); // Stop the click event from propagating
        clearTimeout(timeoutId); // Clear any existing timeout

        if (!filterBlock.classList.contains('hidden-filter')) {
            // If filterBlock is visible, hide it
            filterBlock.classList.add('hidden-filter');
            filterButton.style.backgroundColor = '';
            filterBlock.style.display = 'none';
            console.log(2);
        } else {
            // If filterBlock is hidden, show it
            filterBlock.classList.remove('hidden-filter');
            filterButton.style.background = '#8a3d0d';
            timeoutId = setTimeout(() => {
                filterBlock.style.display = 'flex';
            }, 500);
            console.log(1);
        }
    }
    $('body').on('change', '.pagination', function () {
        var url = $(this).find(":selected").attr('data-url');
        console.log(url);
        window.location.href = url;
    });
    filterButton.addEventListener('click', toggleFilter);
}


// let buttons_to_card = window.document.getElementsByClassName('products-item-button');
// for (let i = 0; i < buttons_to_card.length; i++) {
//     let item = buttons_to_card[i];
//     item.addEventListener('click', function (e){
//         e.preventDefault();
//     })
// }
