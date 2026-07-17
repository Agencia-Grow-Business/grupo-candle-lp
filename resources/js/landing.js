// Nav ganha fundo ao rolar (apenas na landing, onde a nav é fixa/transparente)
const nav = document.querySelector('.nav:not(.nav--solid)');

if (nav) {
    const onScroll = () => {
        nav.classList.toggle('nav--scrolled', window.scrollY > 24);
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
}

// Menu mobile
const navToggle = document.querySelector('#nav-toggle');
const navLinks = document.querySelector('#nav-links');
const navBackdrop = document.querySelector('#nav-backdrop');

const setMenuOpen = (open) => {
    if (!nav || !navToggle || !navLinks) return;

    nav.classList.toggle('nav--open', open);
    navToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    navToggle.setAttribute('aria-label', open ? 'Fechar menu' : 'Abrir menu');
    document.body.classList.toggle('nav-locked', open);

    if (navBackdrop) {
        navBackdrop.hidden = !open;
    }
};

if (navToggle && navLinks) {
    navToggle.addEventListener('click', () => {
        setMenuOpen(!nav.classList.contains('nav--open'));
    });

    navLinks.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => setMenuOpen(false));
    });

    navBackdrop?.addEventListener('click', () => setMenuOpen(false));

    window.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') setMenuOpen(false);
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1080) setMenuOpen(false);
    });
}

// Barra fixa mobile: aparece após rolar além do hero e some quando o rodapé entra na tela
const mobileBar = document.querySelector('.mobile-bar');
const hero = document.querySelector('.hero');
const footer = document.querySelector('.footer');

if (mobileBar && hero) {
    const onBarScroll = () => {
        const pastHero = window.scrollY > hero.offsetHeight * 0.55;
        const footerVisible = footer
            ? footer.getBoundingClientRect().top < window.innerHeight
            : false;

        mobileBar.classList.toggle('is-visible', pastHero && !footerVisible);
    };
    onBarScroll();
    window.addEventListener('scroll', onBarScroll, { passive: true });
}

// Player do vídeo do hero: capa com play central; controles nativos (pausa,
// tela cheia) enquanto roda; ao terminar, volta para a capa com o play.
const heroVideo = document.querySelector('.hero__video');
const heroPlay = document.querySelector('.hero__play');
const heroVideoCta = document.querySelector('.hero__video-cta');

if (heroVideo && heroPlay) {
    const showPoster = () => {
        heroVideo.removeAttribute('controls');
        heroVideo.load(); // recarrega para exibir o poster novamente
        heroPlay.hidden = false;
    };

    const startPlayback = () => {
        heroPlay.hidden = true;
        heroVideo.setAttribute('controls', '');
        heroVideo.play();
    };

    heroPlay.addEventListener('click', startPlayback);
    heroVideoCta?.addEventListener('click', startPlayback);

    heroVideo.addEventListener('ended', showPoster);
}

// Reveal de entrada/saída: elementos animam ao entrar e ao sair da viewport
const revealItems = document.querySelectorAll('[data-reveal]');
const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

if (!revealItems.length || reducedMotion || !('IntersectionObserver' in window)) {
    revealItems.forEach((el) => el.classList.add('in-view'));
} else {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                entry.target.classList.toggle('in-view', entry.isIntersecting);
            });
        },
        { threshold: 0.12, rootMargin: '0px 0px -6% 0px' }
    );

    revealItems.forEach((el) => observer.observe(el));
}
