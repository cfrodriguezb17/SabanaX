// Input dinarmico al escoger artista en el login
function mostrarInput() {
  let inputDinamico = document.getElementById("inputDinamico").value;
  if (inputDinamico == 'Artista'){
    document.getElementById("inputNickname").classList.remove('d-none');
  } else {
    if (!document.getElementById("inputNickname").classList.contains("d-none")
) {
      document.getElementById("inputNickname").classList.add("d-none");
    } 
  }
}




$(' .cont-carousel-items').slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 500,
  slidesToShow: 6,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

(function ($) {
    'use strict';

    $(document).on('ready', function () {
        // -----------------------------
        //  Screenshot Slider
        // -----------------------------
        $('.speaker-slider').slick({
            slidesToShow: 4,
            centerMode: false,
            infinite: true,
            autoplay: false,
            arrows:true,
            responsive: [
                {
                    breakpoint: 1440,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
         });


        
        // -----------------------------
        //  Count Down JS
        // -----------------------------
        $('.timer').syotimer({
            year: 2020,
            month: 12,
            day: 9,
            hour: 20,
            minute: 30
        });
        // -----------------------------
        // To Top Init
        // -----------------------------
        $('.to-top').on('click', function() {
          $('html, body').animate({ scrollTop: 0 }, 'slow');
          return false;
        });
        
        // -----------------------------
        // Magnific Popup
        // -----------------------------
        $('.image-popup').magnificPopup({
            type: 'image',
            removalDelay: 160, //delay removal by X to allow out-animation
            callbacks: {
                beforeOpen: function () {
                    // just a hack that adds mfp-anim class to markup
                    this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                    this.st.mainClass = this.st.el.attr('data-effect');
                }
            },
            closeOnContentClick: true,
            midClick: true,
            fixedContentPos: false,
            fixedBgPos: true

        });
        // -----------------------------
        // Mixitup
        // -----------------------------
        var containerEl = document.querySelector('.gallery-wrapper');
        var mixer;
        if (containerEl) {
            mixer = mixitup(containerEl);
        }
    });

    const imgInp = document.getElementById("imgInp");
    const blah = document.getElementById("blah");
    imgInp.onchange = evt => {
      const [file] = imgInp.files
      if (file) {
        blah.src = URL.createObjectURL(file);
      }
    }


})(jQuery);


