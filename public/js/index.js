$(function () {

    $("#my-nav").addClass("nav-transparent");

    $(window).scroll(function () { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
            $("#my-nav").addClass("nav-colored");
            $("#my-nav").removeClass("nav-transparent"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
            $("#my-nav").addClass("nav-transparent"); // if not, change it back to transparent
            $("#my-nav").removeClass("nav-colored");
        }
    });

    //$('select').material_select();
    $('.sidenav').sidenav();

    $('.carousel').carousel({
        duration: 200,
        fullWidth: true,
        indicators: true,
        autoplay: true
    });

    function diapo(elt, nb) {

        var i = 0;

        $(elt).first().delay(2000).fadeToggle(2000, function suivante() {

            i++;

            if (i >= nb /*!($(this).next().length)*/ ) {

                $(elt).show(0.0005);
                diapo(elt, nb);

            }

            $(this).next().delay(2000).fadeToggle(2000, suivante);


        });

    }

    diapo('.imgPanorama', 3);




    /*$('#buttonsearch').on('submit', function (event) {

        var prix_max = $('#prix_max').val();
        var prix_min = $('#prix_min').val();
        var available = $('#available').val();

        if (!prix_min) {
            prix_min = 0;
        }
        if (!prix_min) {
            prix_max = 0;
        }

        console.log(' prix_min = ' + prix_min + '\n prix_max = ' + prix_max + '\n available = ' + available);
        event.preventDefault();

        $.ajax({

            type: "POST",
            url: "/chambres/searchChambreThroughIndex",
            data: {
                available: available,
                prix_min: prix_min,
                prix_max: prix_max
            },
            success: function (result) {

                //$("#contenu_chambres").html(result);
            },
            error: function (result) {
                console.log("Ajax error ====== >>>> ");
                //$("#contenu_chambres").html('<h2 text-align: center; style="font-family: Lobster;"> Une erreur est survenu </h2>');
            }
        });
    });*/

});
