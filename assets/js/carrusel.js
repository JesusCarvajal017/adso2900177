var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {

      0: {
        slidesPerView: 1
      },
      620: {
        slidesPerView: 2
      },
      1024: {
        slidesPerView: 3,
        slidesPerGroup: 3
      }

    }

  });