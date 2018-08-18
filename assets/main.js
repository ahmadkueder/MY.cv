$(document).ready(function () {


    /**
     * @param {Element ID} element Id on Click
     * @param {Scroll To} Name of element witch scroll to  
     * **/
    function scrollTo(element, toID) {
        alert(element.id + "----" + toID);
        $('#' + element.id).click(function () {
            $('html, body').animate({
                scrollTop: $("#" + toID).offset().top
            }, 2000);
        });
    }
});
