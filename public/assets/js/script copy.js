/* // Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Form submission handling
const supportForm = document.querySelector('.support-form form');
if (supportForm) {
    supportForm.addEventListener('submit', function(e) {
        e.preventDefault();
        // Add form submission logic here
        alert('Thank you for your message. We will get back to you soon!');
        this.reset();
    });
}

// Newsletter subscription
const newsletterForm = document.querySelector('.newsletter');
if (newsletterForm) {
    newsletterForm.addEventListener('submit', function(e) {
        e.preventDefault();
        // Add newsletter subscription logic here
        alert('Thank you for subscribing to our newsletter!');
        this.reset();
    });
}

// Responsive navigation menu
const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelector('.nav-links');

if (navToggle) {
    navToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
}

document.addEventListener('DOMContentLoaded', function() {
    // Burger Menu Toggle
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
        // Toggle menu when clicking burger
        burgerMenu.addEventListener('click', function(e) {
            e.stopPropagation();
            toggleMenu();
        });

        // Close menu when clicking overlay
        navOverlay.addEventListener('click', closeMenu);

        // Close menu when clicking links
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!navLinks.contains(e.target) && !burgerMenu.contains(e.target)) {
                closeMenu();
            }
        });

        // Close menu when pressing Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeMenu();
            }
        });
    }

    // Smooth scroll for navigation links
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
});

// Add animation on scroll
window.addEventListener('scroll', () => {
    const elements = document.querySelectorAll('.animate-on-scroll');
    elements.forEach(element => {
        const position = element.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.3;
        
        if (position < screenPosition) {
            element.classList.add('animated');
        }
    });
});

const searchBox = document.querySelector('.search-box');
const searchInput = searchBox.querySelector('input');
const searchIcon = searchBox.querySelector('svg');

searchIcon.addEventListener('click', () => {
    searchInput.classList.toggle('show');
    if (searchInput.classList.contains('show')) {
        searchInput.focus();
    }
});

const navbar = document.querySelector(".navbar");
let lastScrollY = window.scrollY;

window.onscroll = () => {
    if (Math.abs(window.scrollY - lastScrollY) > 10) {
        if (window.scrollY > lastScrollY) {
            navbar.classList.add("hidden"); // إخفاء الهيدر
        } else {
            navbar.classList.remove("hidden"); // إظهار الهيدر
        }
    }
    lastScrollY = window.scrollY;
};

 */
document.addEventListener('DOMContentLoaded', () => {
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

    // Form submission handling
    const supportForm = document.querySelector('.support-form form');
    if (supportForm) {
        supportForm.addEventListener('submit', function (e) {
            e.preventDefault();
            // Add form submission logic here
            alert('Thank you for your message. We will get back to you soon!');
            this.reset();
        });
    }

    // Newsletter subscription
    const newsletterForm = document.querySelector('.newsletter');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function (e) {
            e.preventDefault();
            // Add newsletter subscription logic here
            alert('Thank you for subscribing to our newsletter!');
            this.reset();
        });
    }

    // Responsive navigation menu
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');
    if (navToggle && navLinks) {
        navToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    }

    // Burger Menu Toggle
    const burgerMenu = document.querySelector('.burger-menu');
    const navOverlay = document.querySelector('.nav-overlay');
    const body = document.body;

    function toggleMenu() {
        if (burgerMenu && navLinks && navOverlay) {
            burgerMenu.classList.toggle('active');
            navLinks.classList.toggle('active');
            navOverlay.classList.toggle('active');
            body.classList.toggle('menu-open');
        }
    }

    function closeMenu() {
        if (burgerMenu && navLinks && navOverlay) {
            burgerMenu.classList.remove('active');
            navLinks.classList.remove('active');
            navOverlay.classList.remove('active');
            body.classList.remove('menu-open');
        }
    }

    if (burgerMenu && navLinks && navOverlay) {
        burgerMenu.addEventListener('click', function (e) {
            e.stopPropagation();
            toggleMenu();
        });

        navOverlay.addEventListener('click', closeMenu);

        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        document.addEventListener('click', function (e) {
            if (!navLinks.contains(e.target) && !burgerMenu.contains(e.target)) {
                closeMenu();
            }
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                closeMenu();
            }
        });
    }

    // Add animation on scroll
    window.addEventListener('scroll', () => {
        const elements = document.querySelectorAll('.animate-on-scroll');
        elements.forEach(element => {
            const position = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;

            if (position < screenPosition) {
                element.classList.add('animated');
            }
        });
    });

    // Search box toggle
    const searchBox = document.querySelector('.search-box');
    if (searchBox) {
        const searchInput = searchBox.querySelector('input');
        const searchIcon = searchBox.querySelector('svg');

        searchIcon.addEventListener('click', () => {
            searchInput.classList.toggle('show');
            if (searchInput.classList.contains('show')) {
                searchInput.focus();
            }
        });
    }

    // Navbar hide/show on scroll
    const navbar = document.querySelector('.navbar');
    let lastScrollY = window.scrollY;

    window.addEventListener('scroll', () => {
        if (navbar) {
            if (Math.abs(window.scrollY - lastScrollY) > 10) {
                if (window.scrollY > lastScrollY) {
                    navbar.classList.add('hidden'); // Hide navbar
                } else {
                    navbar.classList.remove('hidden'); // Show navbar
                }
            }
            lastScrollY = window.scrollY;
        }
    });
});
