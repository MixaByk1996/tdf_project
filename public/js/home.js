window.onload = function () {
    var feedbackTrigger = document.getElementById('t1111');
    var feedbackContainer = document.querySelector('.main-feedback-container');
    var feedbackContainerForm = document.querySelector('.feedback-container-form');
    var feedbackImage = document.querySelector('.feedback-image');

    document.querySelector('.furniture-set-firsttext').style.opacity = 1;
    document.querySelector('.furniture-set-lasttext').style.opacity = 1;
    document.querySelector('.show-catalog-main').style.opacity = 1;
    document.querySelector('.show-catalog-main').style.transform = "translateY(0)";
    document.querySelector('.furniture-set-items').style.opacity = 1;
    document.querySelector('.furniture-set-items').style.transform = "translateY(0)";

    feedbackTrigger.addEventListener('click', function () {
        toggleFeedbackContainer();
    });

    document.addEventListener('click', function (event) {
        var isClickInsideFeedbackForm = feedbackContainerForm.contains(event.target);
        var isClickOnTrigger = feedbackTrigger.contains(event.target);

        if (!isClickInsideFeedbackForm && !isClickOnTrigger) {
            feedbackContainer.style.opacity = 0;
            feedbackContainer.style.transform = "translateY(-20px)";
            setTimeout(() => {
                feedbackContainer.style.display = "none";
            }, 500); 
        }
    });

    function toggleFeedbackContainer() {
        if (feedbackContainer.style.display === "none" || feedbackContainer.style.display === "") {
            feedbackContainer.style.display = "flex";
            setTimeout(() => {
                feedbackContainer.style.opacity = 1;
                feedbackContainer.style.transform = "translateY(0)";
            }, 10); 
        } else {
            feedbackContainer.style.opacity = 0;
            feedbackContainer.style.transform = "translateY(-20px)";
            setTimeout(() => {
                feedbackContainer.style.display = "none";
            }, 500); 
        }
    }
};