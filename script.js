// Custom JavaScript for Portofolio Mahasiswa Pendidikan Profesi Guru

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Add fade-in animation to sections on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in-up');
        }
    });
}, observerOptions);

document.querySelectorAll('section').forEach(section => {
    observer.observe(section);
});

// Navbar background change on scroll
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar') || document.querySelector('nav');
    if (!navbar) return;
    if (window.scrollY > 50) {
        navbar.classList.add('navbar-scrolled');
    } else {
        navbar.classList.remove('navbar-scrolled');
    }
});

// Add loading animation
window.addEventListener('load', () => {
    document.body.classList.add('loaded');
});

// Tooltip initialization for Bootstrap
const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});

// Hero 3D tilt interaction
const hero = document.querySelector('.hero-section');
if (hero) {
    hero.addEventListener('mousemove', event => {
        const x = (event.clientX / window.innerWidth - 0.5) * 12;
        const y = (event.clientY / window.innerHeight - 0.5) * 10;
        hero.style.transform = `perspective(1400px) rotateY(${x}deg) rotateX(${y}deg)`;
    });
    hero.addEventListener('mouseleave', () => {
        hero.style.transform = 'perspective(1400px) rotateY(0deg) rotateX(0deg)';
    });
}

// Theme toggle implementation
const themeToggle = document.getElementById('themeToggle');
const themeToggleMobile = document.getElementById('themeToggleMobile');
const body = document.body;
const updateThemeButtons = (theme) => {
    const iconDark = '<i class="fas fa-moon"></i> <span>Dark</span>';
    const iconLight = '<i class="fas fa-sun"></i> <span>Light</span>';
    [themeToggle, themeToggleMobile].forEach(btn => {
        if (!btn) return;
        btn.innerHTML = theme === 'light' ? iconLight : iconDark;
        btn.classList.toggle('text-white', theme !== 'light');
        btn.classList.toggle('text-slate-950', theme === 'light');
        btn.classList.toggle('border-white/15', theme !== 'light');
        btn.classList.toggle('border-slate-200/40', theme === 'light');
    });
};

const setTheme = (theme) => {
    if (theme === 'light') {
        body.classList.add('theme-light');
    } else {
        body.classList.remove('theme-light');
    }
    updateThemeButtons(theme);
    localStorage.setItem('theme', theme);
};

const savedTheme = localStorage.getItem('theme');
setTheme(savedTheme === 'light' ? 'light' : 'dark');

[themeToggle, themeToggleMobile].forEach(btn => {
    if (!btn) return;
    btn.addEventListener('click', () => {
        const newTheme = body.classList.contains('theme-light') ? 'dark' : 'light';
        setTheme(newTheme);
    });
});

// Card 3D tilt interaction
document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('mousemove', event => {
        const rect = card.getBoundingClientRect();
        const x = (event.clientX - rect.left) / rect.width - 0.5;
        const y = (event.clientY - rect.top) / rect.height - 0.5;
        card.style.transform = `translateY(-8px) scale(1.01) rotateX(${y * 6}deg) rotateY(${x * 6}deg)`;
    });
    card.addEventListener('mouseleave', () => {
        card.style.transform = '';
    });
});

const slideObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in-up');
        }
    });
}, observerOptions);

document.querySelectorAll('.card').forEach(card => {
    slideObserver.observe(card);
});