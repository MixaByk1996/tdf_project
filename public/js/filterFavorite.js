document.addEventListener('DOMContentLoaded', function() {
    const blockOne = document.querySelector('.block__one');
    const blockTwo = document.querySelector('.block__two');



var productItems = document.querySelectorAll('.products-item--1, .products-item--2, .products-item--3');

productItems.forEach(function(item) {
item.addEventListener('click', function() {
    window.location.href = '/product';
});
});

function setActiveSvg(selectedSvg) {
        const svgs = [svgOne, svgTwo, svgThree];
        svgs.forEach(svg => {
            svg.setAttribute('fill', svg === selectedSvg ? '#EA600A' : 'white');
        });
    }



    const blockThree = document.querySelector('.block__three');
    document.querySelector('.catalog-main-text').style.opacity = 1;


    blockOne.style.opacity = 1;
    blockTwo.style.opacity = 1;
    blockThree.style.opacity = 1;

    blockOne.style.transform = "translateY(0)";
    blockTwo.style.transform = "translateY(0)";
    blockThree.style.transform = "translateY(0)";


    const svgOne = document.getElementById('svgOne');
    const svgTwo = document.getElementById('svgTwo');
    const svgThree = document.getElementById('svgThree');

    svgOne.addEventListener('click', function() {
        setActiveSvg(svgOne);
        blockOne.style.display = 'none';
        blockTwo.style.display = 'flex';
        blockThree.style.display = 'none';
    });

    svgTwo.addEventListener('click', function() {
        setActiveSvg(svgTwo);

        blockOne.style.display = 'flex';
        blockTwo.style.display = 'none';
        blockThree.style.display = 'none';
    });

    svgThree.addEventListener('click', function() {
        setActiveSvg(svgThree);

        blockOne.style.display = 'none';
        blockTwo.style.display = 'none';
        blockThree.style.display = 'flex';
    });
});