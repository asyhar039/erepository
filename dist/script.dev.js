"use strict";

// Custom JavaScript for E-Portfolio
// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    var target = document.querySelector(this.getAttribute('href'));

    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
}); // Add fade-in animation to sections on scroll

var observerOptions = {
  threshold: 0.1,
  rootMargin: '0px 0px -50px 0px'
};
var observer = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      entry.target.classList.add('fade-in-up');
    }
  });
}, observerOptions);
document.querySelectorAll('section').forEach(function (section) {
  observer.observe(section);
}); // Navbar background change on scroll

window.addEventListener('scroll', function () {
  var navbar = document.querySelector('.navbar');

  if (window.scrollY > 50) {
    navbar.classList.add('navbar-scrolled');
  } else {
    navbar.classList.remove('navbar-scrolled');
  }
}); // Add loading animation

window.addEventListener('load', function () {
  document.body.classList.add('loaded');
}); // Tooltip initialization for Bootstrap

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
}); // Hero 3D tilt interaction

var hero = document.querySelector('.hero-section');

if (hero) {
  hero.addEventListener('mousemove', function (event) {
    var x = (event.clientX / window.innerWidth - 0.5) * 12;
    var y = (event.clientY / window.innerHeight - 0.5) * 10;
    hero.style.transform = "perspective(1400px) rotateY(".concat(x, "deg) rotateX(").concat(y, "deg)");
  });
  hero.addEventListener('mouseleave', function () {
    hero.style.transform = 'perspective(1400px) rotateY(0deg) rotateX(0deg)';
  });
} // Theme toggle implementation


var themeToggle = document.getElementById('themeToggle');
var themeToggleMobile = document.getElementById('themeToggleMobile');
var body = document.body;

var updateThemeButtons = function updateThemeButtons(theme) {
  var iconDark = '<i class="fas fa-moon"></i> <span>Dark</span>';
  var iconLight = '<i class="fas fa-sun"></i> <span>Light</span>';
  [themeToggle, themeToggleMobile].forEach(function (btn) {
    if (!btn) return;
    btn.innerHTML = theme === 'light' ? iconLight : iconDark;
    btn.classList.toggle('text-white', theme !== 'light');
    btn.classList.toggle('text-slate-950', theme === 'light');
    btn.classList.toggle('border-white/15', theme !== 'light');
    btn.classList.toggle('border-slate-200/40', theme === 'light');
  });
};

var setTheme = function setTheme(theme) {
  if (theme === 'light') {
    body.classList.add('theme-light');
  } else {
    body.classList.remove('theme-light');
  }

  updateThemeButtons(theme);
  localStorage.setItem('theme', theme);
};

var savedTheme = localStorage.getItem('theme');
setTheme(savedTheme === 'light' ? 'light' : 'dark');
[themeToggle, themeToggleMobile].forEach(function (btn) {
  if (!btn) return;
  btn.addEventListener('click', function () {
    var newTheme = body.classList.contains('theme-light') ? 'dark' : 'light';
    setTheme(newTheme);
  });
}); // Card 3D tilt interaction

document.querySelectorAll('.card').forEach(function (card) {
  card.addEventListener('mousemove', function (event) {
    var rect = card.getBoundingClientRect();
    var x = (event.clientX - rect.left) / rect.width - 0.5;
    var y = (event.clientY - rect.top) / rect.height - 0.5;
    card.style.transform = "translateY(-8px) scale(1.01) rotateX(".concat(y * 6, "deg) rotateY(").concat(x * 6, "deg)");
  });
  card.addEventListener('mouseleave', function () {
    card.style.transform = '';
  });
});
var slideObserver = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      entry.target.classList.add('fade-in-up');
    }
  });
}, observerOptions);
document.querySelectorAll('.card').forEach(function (card) {
  slideObserver.observe(card);
});
//# sourceMappingURL=script.dev.js.map
