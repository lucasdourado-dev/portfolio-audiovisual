document.addEventListener("DOMContentLoaded", () => {
    const elementsToAnimate = document.querySelectorAll('.hidden-scroll');

    const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: 0.25 // Dispara logo que 15% do elemento entra na tela
    };

    const scrollObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            const rect = entry.boundingClientRect;

            if (entry.isIntersecting) {
                // Se está visível na tela, ativa a animação/exibição
                entry.target.classList.add('show-scroll');
            } else {
                // Se SAIU da tela, testamos por onde ele saiu:
                // Se rect.top > 0, significa que ele saiu pela parte INFERIOR da tela (rolando para cima).
                if (rect.top > 0) {
                    entry.target.classList.remove('show-scroll');
                }
                // Se rect.top <= 0, significa que ele saiu pelo TOPO da tela.
                // Nesse caso, NÃO removemos a classe 'show-scroll', mantendo-o visível 
                // e evitando animações indesejadas na parte superior.
            }
        });
    }, observerOptions);

    elementsToAnimate.forEach(element => scrollObserver.observe(element));
});

// Delegação de clique para tratar transição entre páginas
document.addEventListener('click', (e) => {
    const link = e.target.closest('a');
    if (!link) return;

    const href = link.getAttribute('href');
    // Ignora âncoras internas, links sem href, protocolos especiais e links que abrem em nova aba
    if (!href || href.startsWith('#') || href.startsWith('mailto:') || href.startsWith('tel:') || link.target === '_blank') return;

    // Não interfere quando o usuário usa modifiers para abrir em nova aba/ação
    if (e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return;

    // Não interferir com lightboxes/third-party (ex: Fancybox)
    if (link.hasAttribute('data-fancybox')) return;

    const transition = document.querySelector('.transition-leaving');
    if (!transition) return; // se o elemento não existir, não bloqueia a navegação

    e.preventDefault();
    transition.classList.add('active');

    setTimeout(() => {
        window.location.href = link.href;
    }, 500);
});

window.addEventListener('pageshow', (event) => {
    if (event.persisted) {
        const transition = document.querySelector('.transition-leaving');
        if (transition) transition.classList.remove('active');
    }
});

const intro = document.querySelector(".intro-blur");

const start = window.innerHeight * 0.2; // começa em 20% da tela
const end = window.innerHeight * 0.5;   // termina em 80%

window.addEventListener("scroll", () => {
    const scroll = window.scrollY;

    let progress = (scroll - start) / (end - start);
    progress = Math.max(0, Math.min(progress, 1));

    intro.style.filter = `blur(${progress * 20}px)`;
    intro.style.opacity = 1 - progress;
});

