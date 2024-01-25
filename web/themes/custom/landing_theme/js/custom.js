/**
 * @file
 * Global utilities.
 *
 */
(function ($) {
  "use strict";

  // Variable para controlar si la alerta ya se ha mostrado.
  var alertShown = false;

  Drupal.behaviors.landing_theme = {
    attach: function (context, settings) {
      // Verifica si la alerta ya se ha mostrado.
      if (!alertShown) {
        // Muestra la alerta.
        console.log("Hola Drupal!");
        // Marca que la alerta ya se ha mostrado.
        alertShown = true;
      }

      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 3,
          },
          1000: {
            items: 5,
          },
        },
      });

    //   $(".loop").owlCarousel({
    //     center: true,
    //     items: 2,
    //     loop: true,
    //     margin: 10,
    //     responsive: {
    //       600: {
    //         items: 4,
    //       },
    //     },
    //   });
    //   $(".nonloop").owlCarousel({
    //     center: true,
    //     items: 2,
    //     loop: false,
    //     margin: 10,
    //     responsive: {
    //       600: {
    //         items: 4,
    //       },
    //     },
    //   });
    },
  };
})(jQuery);
