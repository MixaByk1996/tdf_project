document.addEventListener('DOMContentLoaded', function() {
    if (window.matchMedia("(max-width: 500px)").matches) {

    const itemsContainer = document.querySelector('.furniture-set-items');
    let items = Array.from(itemsContainer.querySelectorAll('.furniture-set-item'));
  
    // Изначально устанавливаем активным первый элемент
    let activeIndex = 1;
    // items[activeIndex].classList.add('active');

    const applyStylesToSpans = (item, addStyles) => {
        const spans = item.querySelectorAll('span');
        spans.forEach(span => {
            if (addStyles) {
                span.style.color = '#5D5D5D';
                span.style.fontSize = '8px';
                span.style.lineHeight = '12px';
                span.style.transition = 'opacity 0.5s ease-out, color 0.5s ease-out, font-size 0.5s ease-out, line-height 0.5s ease-out';
                item.style.opacity = '0.5'; 
            } else {
                span.style.color = '';
                span.style.fontSize = '';
                span.style.lineHeight = '';
                span.style.transition = 'opacity 0.5s ease-in, color 0.5s ease-in, font-size 0.5s ease-in, line-height 0.5s ease-in';
                item.style.opacity = '1'; 
            }
        });

        item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';

    };

    // Добавляем базовые стили анимации к контейнеру элементов
    itemsContainer.style.transition = 'transform 0.5s ease-out';

    // Применяем стили к span только для неактивных элементов
    items.forEach((item, index) => {
        if (index !== activeIndex) {
            applyStylesToSpans(item, true);
        }
    });

    const updateActiveItemAndRearrange = (clickedIndex) => {
        // Если клик был по неактивному элементу, перемещаем его перед активным
        if (clickedIndex !== activeIndex) {
            // Убираем стили с предыдущего активного элемента
            applyStylesToSpans(items[activeIndex], true);
            
            // Перемещаем кликнутый элемент на место активного
            itemsContainer.insertBefore(items[clickedIndex], items[activeIndex]);
            // Обновляем список элементов после перемещения
            items = Array.from(itemsContainer.querySelectorAll('.furniture-set-item'));
            // Обновляем индексы после перемещения
            activeIndex = items.indexOf(items[clickedIndex]);

            // Добавляем анимацию перемещения
            itemsContainer.style.transform = 'scale(1.05)';
            setTimeout(() => {
                itemsContainer.style.transform = 'scale(1)';
            }, 250);
        }
    
        // Вычисляем и обновляем активный элемент как предыдущий от текущего
        const newIndex = (activeIndex - 1 + items.length) % items.length;
        // items[activeIndex].classList.remove('active');
        applyStylesToSpans(items[activeIndex], true); // добавляем стили к предыдущему активному элементу
        activeIndex = newIndex;
        // items[activeIndex].classList.add('active');
        applyStylesToSpans(items[activeIndex], false); // убираем стили с нового активного элемента
    };
    

    itemsContainer.addEventListener('click', function(event) {
        const targetItem = event.target.closest('.furniture-set-item');
        if (targetItem) {
            const clickedIndex = items.indexOf(targetItem);
            updateActiveItemAndRearrange(clickedIndex);
        }
    });
}
});
