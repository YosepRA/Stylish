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

  function scrollUpToggler() {
    if (scrollY + innerHeight > bottomLimit) {
      scrollBtn.classList.add('show');
    } else {
      scrollBtn.classList.remove('show');
    }
  }
});
