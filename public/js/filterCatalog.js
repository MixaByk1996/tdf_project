      document.addEventListener('DOMContentLoaded', async function () {
          const blockOne = document.querySelector('.block__one');
          const blockTwo = document.querySelector('.block__two');

          var productItems = document.querySelectorAll('.products-item--1, .products-item--2, .products-item--3');
          const svgOne = document.getElementById('svgOne');
          const svgTwo = document.getElementById('svgTwo');
          const svgThree = document.getElementById('svgThree');

          let response =  fetch('/api/get-svg', {
              method: 'GET',
              headers: {
                  'Content-Type': 'application/json;charset=utf-8'
              },
          })

          var producer_svg = document.getElementById('producer_svg');
          let producer_click = false;
          producer_svg.addEventListener('click', function (){
              producer_click = !producer_click;
              let producer_click_val = document.getElementById('producer_div');
              producer_click_val.style = producer_click ? 'display : none' : 'display : flex';
          })

          var serie_svg = document.getElementById('serie_svg');
          let serie_click = false;
          serie_svg.addEventListener('click', function (){
              serie_click = !serie_click;
              let serie_val = document.getElementById('serie_div');
              serie_val.style = serie_click ? 'display : none' : 'display : flex';
          })

          var category_svg = document.getElementById('category_svg');
          let category_click = false;
          category_svg.addEventListener('click', function (){
              category_click = !category_click;
              let category_val = document.getElementById('category_div');
              category_val.style = category_click ? 'display : none' : 'display : flex';
          })


          var system_svg = document.getElementById('system_svg');
          let system_click = false;
          system_svg.addEventListener('click', function (){
              system_click = !system_click;
              let system_val = document.getElementById('system_div');
              system_val.style = system_click ? 'display : none' : 'display : flex';
          })

          var angle_svg = document.getElementById('angle_svg');
          let angle_click = false;
          angle_svg.addEventListener('click', function (){
              angle_click = !angle_click;
              let angle_val = document.getElementById('angle_div');
              angle_val.style = angle_click ? 'display : none' : 'display : flex';
          })

          var beo_svg = document.getElementById('beo_svg');
          let beo_click = false;
          beo_svg.addEventListener('click', function (){
              beo_click = !beo_click;
              let beo_val = document.getElementById('beo_div');
              beo_val.style = beo_click ? 'display : none' : 'display : flex';
          })

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

          const blockThree = document.querySelector('.block__three');




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

