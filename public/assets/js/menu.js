document.addEventListener('DOMContentLoaded', function() {
  const burgerMenu = document.querySelector('.burger-menu');
  const navLinks = document.querySelector('.nav-links');
  const navOverlay = document.querySelector('.nav-overlay');
  const body = document.body;

  function toggleMenu() {
      burgerMenu.classList.toggle('active');
      navLinks.classList.toggle('active');
      navOverlay.classList.toggle('active');
      body.classList.toggle('menu-open');
  }

  function closeMenu() {
      burgerMenu.classList.remove('active');
      navLinks.classList.remove('active');
      navOverlay.classList.remove('active');
      body.classList.remove('menu-open');
  }

  if (burgerMenu && navLinks && navOverlay) {
      burgerMenu.addEventListener('click', function(e) {
          e.stopPropagation();
          toggleMenu();
      });

      navOverlay.addEventListener('click', closeMenu);

      navLinks.querySelectorAll('a').forEach(link => {
          link.addEventListener('click', closeMenu);
      });

      document.addEventListener('click', function(e) {
          if (!navLinks.contains(e.target) && !burgerMenu.contains(e.target)) {
              closeMenu();
          }
      });

      document.addEventListener('keydown', function(e) {
          if (e.key === 'Escape') {
              closeMenu();
          }
      });
  }
});
