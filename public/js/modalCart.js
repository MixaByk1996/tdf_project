document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById("myModal");

    var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close--cart")[0];
    var body = document.body;

    modal.style.opacity = 0;
modal.style.visibility = 'hidden';
modal.style.transition = 'opacity 0.5s, visibility 0.5s';


btn.onclick = function(event) {
    event.stopPropagation();
    if (window.innerWidth < 750) {
        if (modal.style.opacity === "0" || modal.style.opacity === "") {
            modal.style.display = "block";
            setTimeout(function() {
                modal.style.opacity = 1;
                modal.style.visibility = 'visible';
            }, 10);
        } else {
            modal.style.opacity = 0;
            setTimeout(function() {
                modal.style.display = "none";
                modal.style.visibility = 'hidden';
            }, 500);
        }

    } 
    if (window.innerWidth > 750) {
        // Для устройств с экраном шире 750 пикселей
        if (modal.style.opacity === "0" || modal.style.opacity === "") {
            modal.style.display = "block";
            setTimeout(function() {
                modal.style.opacity = 1;
                modal.style.visibility = 'visible';
            }, 10);
        } else {
            modal.style.opacity = 0;
            setTimeout(function() {
                modal.style.display = "none";
                modal.style.visibility = 'hidden';
            }, 500);
        }
        var rect = btn.getBoundingClientRect();
        modal.style.top = rect.top + "px";
        var modalWidth = modal.offsetWidth;
        modal.style.left = (rect.left - modalWidth) + "px";
    }
    event.stopPropagation();
};



span.onclick = function() {
    modal.style.opacity = 0;
    setTimeout(function() {
        modal.style.display = "none";
        modal.style.visibility = 'hidden';
    }, 500);
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.opacity = 0;
        setTimeout(function() {
            modal.style.display = "none";
            modal.style.visibility = 'hidden';
        }, 500);
    }
}

});
