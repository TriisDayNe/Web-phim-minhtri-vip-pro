// === HAMBURGER MENU ===
    const hamburger = document.getElementById('hamburger');
    const navLinks  = document.getElementById('navLinks');

    hamburger.addEventListener('click', () => {
        const isOpen = hamburger.classList.toggle('active');
        navLinks.classList.toggle('open');
        hamburger.setAttribute('aria-expanded', isOpen);
    });

    // Close on outside click
    document.addEventListener('click', (e) => {
        if (!hamburger.contains(e.target) && !navLinks.contains(e.target)) {
            hamburger.classList.remove('active');
            navLinks.classList.remove('open');
            hamburger.setAttribute('aria-expanded', false);
        }
    });

    // === SEARCH SHORTCUT ===
    document.addEventListener('keydown', (e) => {
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
            e.preventDefault();
            const inp = document.getElementById('searchInput');
            inp.focus();
            document.getElementById('searchBox').classList.add('focused');
        }
        if (e.key === 'Escape') {
            document.getElementById('searchInput').blur();
            document.getElementById('searchBox').classList.remove('focused');
        }
    });

    document.getElementById('searchInput').addEventListener('focus', () => {
        document.getElementById('searchBox').classList.add('focused');
    });
    document.getElementById('searchInput').addEventListener('blur', () => {
        document.getElementById('searchBox').classList.remove('focused');
    });

    // === NAVBAR SCROLL ===
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 60);
        document.getElementById('scrollTop').classList.toggle('visible', window.scrollY > 400);
    }, { passive: true });

    // === DAY TABS ===
    document.querySelectorAll('.dtab').forEach(tab => {
        tab.addEventListener('click', () => {
            document.querySelectorAll('.dtab').forEach(t => {
                t.classList.remove('active');
                t.setAttribute('aria-selected', 'false');
            });
            tab.classList.add('active');
            tab.setAttribute('aria-selected', 'true');
        });
    });

    // === FILTER BUTTONS ===
    document.querySelectorAll('.fbtn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.fbtn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        });
    });

    // === 3D TILT EFFECT ===
    const tiltEls = document.querySelectorAll('.rank-card, .movie-card');
    tiltEls.forEach(el => {
        el.addEventListener('mousemove', (e) => {
            const r   = el.getBoundingClientRect();
            const cx  = r.width / 2;
            const cy  = r.height / 2;
            const rx  = ((e.clientY - r.top)  - cy) / cy * -6;
            const ry  = ((e.clientX - r.left) - cx) / cx *  6;
            el.style.transform = `perspective(900px) rotateX(${rx}deg) rotateY(${ry}deg) translateY(-6px) scale(1.02)`;
        });
        el.addEventListener('mouseleave', () => {
            el.style.transform = '';
        });
    });

    // === SCROLL TO TOP ===
    document.getElementById('scrollTop').addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // === INTERSECTION OBSERVER (card entrance animation) ===
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.movie-card, .rank-card, .sch-item').forEach(el => {
        observer.observe(el);
    });