// Nav ganha fundo ao rolar (apenas na landing, onde a nav é fixa/transparente)
const nav = document.querySelector('.nav:not(.nav--solid)');

if (nav) {
    const onScroll = () => {
        nav.classList.toggle('nav--scrolled', window.scrollY > 32);
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
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
