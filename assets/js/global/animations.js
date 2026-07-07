// ESTUDAR

document.addEventListener("DOMContentLoaded", () => {
    // 1. Seleciona todos os elementos que têm a classe de esconder
    const elementsToAnimate = document.querySelectorAll('.hidden-scroll');

    // 2. Configura as regras do "observador"
    const observerOptions = {
        root: null, // Usa a tela do navegador como referência
        rootMargin: "0px", 
        threshold: 0.35 // Dispara a animação quando 15% do elemento estiver visível
    };

    // 3. Cria a lógica que adiciona a classe de exibição
    const scrollObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show-scroll');
                // Opcional: para a animação rodar apenas UMA vez, descomente a linha abaixo:
                // observer.unobserve(entry.target); 
            } else {
                // Se quiser que o elemento suma de novo ao rolar para cima, mantenha essa linha:
                entry.target.classList.remove('show-scroll');
            }
        });
    }, observerOptions);

    // 4. Diz ao observador para vigiar cada um dos elementos
    elementsToAnimate.forEach(element => scrollObserver.observe(element));
});

const transition = document.querySelector('.transition');

document.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();

        transition.classList.add('active');

        setTimeout(() => {
            window.location.href = link.href;
        }, 500);
    });
});