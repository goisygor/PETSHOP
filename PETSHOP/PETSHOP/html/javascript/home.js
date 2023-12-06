$(document).ready(function () {
    var $default2 = $("#default2");
    var $navSize = $("#nav-size");

    // Inicializa os dropdowns diretamente nos elementos
    $('.dropdown-toggle').dropdown();

    $(window).scroll(function () {
        var scrollTop = $(this).scrollTop();

        // Altera a classe de $default2 conforme o scroll
        if (scrollTop > 100 && $default2.hasClass("navbar-light bg-light default2")) {
            $default2.removeClass("navbar-light bg-light default2").addClass("navbar-dark bg-dark fixed-top");
        } else if (scrollTop <= 100 && $default2.hasClass("navbar-dark bg-dark fixed-top")) {
            $default2.removeClass("navbar-dark bg-dark fixed-top").addClass("navbar-light bg-light default2");
        }

        // Altera a classe de $navSize conforme o scroll
        if (scrollTop > 100 && $navSize.hasClass("container-fuil")) {
            $navSize.removeClass("container-fuil").addClass("container");
        } else if (scrollTop <= 100 && $navSize.hasClass("container")) {
            $navSize.removeClass("container").addClass("container-fuil");
        }

        // Mostra ou esconde #logo-small dependendo do scroll
        if (scrollTop > 100) {
            $('#logo-small').css('display', 'block');
        } else {
            $('#logo-small').css('display', 'none');
        }
    });
});
