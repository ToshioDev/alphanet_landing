document.addEventListener('DOMContentLoaded', function () {
  var toggle = document.querySelector('.menu-toggle');
  var nav = document.querySelector('.main-navigation');

  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      nav.classList.toggle('active');
    });
  }
});
