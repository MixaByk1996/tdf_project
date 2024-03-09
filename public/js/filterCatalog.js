      document.addEventListener('DOMContentLoaded', async function () {
          const blockOne = document.querySelector('.block__one');
          const blockTwo = document.querySelector('.block__two');
          const svgOne = document.getElementById('svgOne');
          const svgTwo = document.getElementById('svgTwo');
          const svgThree = document.getElementById('svgThree');
          const blockThree = document.querySelector('.block__three');

          blockOne.style.display = 'none';
          blockTwo.style.display = 'flex';
          blockThree.style.display = 'none';


          let response =  fetch('/api/get-svg', {
              method: 'GET',
              headers: {
                  'Content-Type': 'application/json;charset=utf-8'
              },
          })


          var productItems = document.querySelectorAll('.products-item--1, .products-item--2, .products-item--3');


        // function toggleDisplay(elementId, initialState) {
        //     const element = document.getElementById(elementId);
        //     let state = initialState;
        //     return function() {
        //         state = !state;
        //         element.style.display = state ? 'none' : 'flex';
        //     };
        // }

        // const toggles = [
        //     { svgId: 'producer_svg', divId: 'producer_div' },
        //     { svgId: 'serie_svg', divId: 'serie_div' },
        //     { svgId: 'category_svg', divId: 'category_div' },
        //     { svgId: 'system_svg', divId: 'system_div' },
        //     { svgId: 'angle_svg', divId: 'angle_div' },
        //     { svgId: 'beo_svg', divId: 'beo_div' }
        // ];

        // toggles.forEach(({ svgId, divId }) => {
        //     const svgElement = document.getElementById(svgId);
        //     if (svgElement) {
        //         svgElement.addEventListener('click', toggleDisplay(divId, true));
        //         console.log('2')
        //     }
        // });

          function setActiveSvg(selectedSvg) {
              const svgs = [svgOne, svgTwo, svgThree];
              svgs.forEach(svg => {
                  svg.setAttribute('fill', svg === selectedSvg ? '#EA600A' : 'white');
              });
          }

          productItems.forEach(function (item) {
              var id = item.getElementsByTagName('p')[0].innerHTML;
              console.log(id)
              item.addEventListener('click', function () {
                  window.location.href = '/product/' + id;
              });
          });

          function set_svg(name) {
              let response = fetch('/api/set-svg', {
                  method: 'POST',
                  headers: {
                      'Content-Type': 'application/json;charset=utf-8'
                  },
                  body: JSON.stringify({
                      name: name
                  })
              });
          }



          let clear_button = document.getElementById('clear_filter_button');
          clear_button.addEventListener('click', function (e) {

              let items = document.getElementsByClassName('filters-container-typechar-chekbox');
              for (let i = 0; i < items.length; i++) {
                  items[i].checked = false;
              }
          })






          document.querySelector('.catalog-main-text').style.opacity = 1;
          document.querySelector('.catalog-filters-block').style.opacity = 1;
          document.querySelector('.catalog-filters-block').transform = "translateY(0)";

          blockOne.style.opacity = 1;
          blockTwo.style.opacity = 1;
          blockThree.style.opacity = 1;

          blockOne.style.transform = "translateY(0)";
          blockTwo.style.transform = "translateY(0)";
          blockThree.style.transform = "translateY(0)";

          // let response = await fetch('/api/set-status/' + id, {
          //     method: 'POST',
          //     headers: {
          //         'Content-Type': 'application/json;charset=utf-8'
          //     },
          //     body: JSON.stringify({
          //         is_active : status
          //     })
          // });

          svgOne.addEventListener('click', function () {
              setActiveSvg(svgOne);
              set_svg('svgOne');
              blockOne.style.display = 'none';
              blockTwo.style.display = 'flex';
              blockThree.style.display = 'none';
          });

          svgTwo.addEventListener('click', function () {
              setActiveSvg(svgTwo);
              set_svg('svgTwo');
              blockOne.style.display = 'flex';
              blockTwo.style.display = 'none';
              blockThree.style.display = 'none';
          });

          svgThree.addEventListener('click', function () {
              setActiveSvg(svgThree);
              set_svg('svgThree');
              blockOne.style.display = 'none';
              blockTwo.style.display = 'none';
              blockThree.style.display = 'flex';
          });

          let data = (await response).json();
          let name_svg = '';
          data.then(name => {
              console.log(name.name)
              if(name.name === 'svgOne'){
                  blockOne.style.display = 'none';
                  blockTwo.style.display = 'flex';
                  blockThree.style.display = 'none';
              }else if (name.name === 'svgTwo'){
                  blockOne.style.display = 'flex';
                  blockTwo.style.display = 'none';
                  blockThree.style.display = 'none';
              }else if(name.name === 'svgThree'){
                  blockOne.style.display = 'none';
                  blockTwo.style.display = 'none';
                  blockThree.style.display = 'flex';
              }
          } );


      });

