document.addEventListener('DOMContentLoaded', function() {

const filterButton = document.querySelector('.catalog-filters-button');
const filterBlock = document.querySelector('.catalog-filters-block');

function toggleFilter() {
    filterBlock.style.transform = 'translateY(-40%)'; 
    if (filterBlock.style.display === 'none' || filterBlock.style.display === '') {
        filterBlock.style.display = 'flex';
        filterButton.style.background = '#8a3d0d';
        setTimeout(() => {
            filterBlock.style.transform = 'translateY(0)';
        }, 10);
    } else {
        filterBlock.style.transform = 'translateY(0%)'; 
        filterButton.style.backgroundColor = ''; 
        setTimeout(() => {
            filterBlock.style.display = 'none';
        }, 0); 
    }
}

filterButton.addEventListener('click', toggleFilter);
});