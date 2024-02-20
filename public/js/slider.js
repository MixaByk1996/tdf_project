// document.addEventListener('DOMContentLoaded', function () {
    
//     function initSlider() {
//         var slideIndex = 1;
//         showSlides(slideIndex);

//         // Переключение на предыдущий слайд
//         document.querySelector('.prev').addEventListener('click', function() {
//             showSlides(slideIndex -= 1);
//         });

//         // Переключение на следующий слайд
//         document.querySelector('.next').addEventListener('click', function() {
//             showSlides(slideIndex += 1);
//         });

//         function showSlides(n) {
            
//             var i;
//             var slides = document.getElementsByClassName("furniture-set-item");
//             if (n > slides.length) {
//                 slideIndex = 1;
//             }    
//             if (n < 1) {
//                 slideIndex = slides.length;
//             }
//             for (i = 0; i < slides.length; i++) {
//                 slides[i].style.display = "none";  
//             }
//             slides[slideIndex-1].style.display = "block";  
//         }
//     }

// \    function checkWindowSize() {
//         if (window.innerWidth <= 800) {
//             initSlider();
//         } else {
// \            var slides = document.getElementsByClassName("furniture-set-item");
//             for (var i = 0; i < slides.length; i++) {
//                 slides[i].style.display = "block";  
//             }
//         }
//     }

//     checkWindowSize();

//     window.addEventListener('resize', checkWindowSize);
// });
