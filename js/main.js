function docReady(cb) {
  if (document.readyState !== 'loading') cb();
  else window.addEventListener('DOMContentLoaded', cb);
}

docReady(() => {
  const scrollBtn = document.querySelector('.scroll-top');
  const bottomLimit = document.body.scrollHeight - 600;

  // Navbar transparancy toggler.
  if (document.body.className.includes('home')) {
    const pageHeader = document.querySelector('.page-header');

    window.addEventListener('scroll', () => {
      if (scrollY < innerHeight) {
        pageHeader.classList.add('transparent');
      } else {
        pageHeader.classList.remove('transparent');
      }

      scrollUpToggler();
    });
  } else {
    window.addEventListener('scroll', scrollUpToggler);
  }

  scrollBtn.addEventListener('click', () =>
    scroll({
      top: 0,
      left: 0,
      behavior: 'smooth'
    })
  );

  if (document.body.className.includes('blogpost')) {
    // Slick carousel.
    $('.more-articles').slick({
      centerMode: true,
      centerPadding: '200px',
      slidesToShow: 3,
      prevArrow:
        '<button type="button" class="slick-arrow slick-prev"><i class="fas fa-chevron-left"></i></button>',
      nextArrow:
        '<button type="button" class="slick-arrow slick-next"><i class="fas fa-chevron-right"></i></button>',
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '80px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 992,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '120px',
            slidesToShow: 2
          }
        },
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 2
          }
        },
        {
          breakpoint: 576,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });
  }

  function scrollUpToggler() {
    if (scrollY + innerHeight > bottomLimit) {
      scrollBtn.classList.add('show');
    } else {
      scrollBtn.classList.remove('show');
    }
  }
});
