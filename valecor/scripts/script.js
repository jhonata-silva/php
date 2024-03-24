//CODIGO DO CABECALHO
let lastScrollTop = 0;

window.addEventListener('scroll', function() {
    let currentScroll = window.scrollY;

    if (currentScroll > lastScrollTop) {
        document.querySelector('.cabecalho').style.top = '-80px'; // Esconde o cabeçalho quando a página é rolada para baixo
    } else {
        document.querySelector('.cabecalho').style.top = '0'; // Mostra o cabeçalho quando a página é rolada para cima
    }

    if(currentScroll == 0) {
        document.querySelector('.cabecalho').style.top = '15px'; //evita do cabecalho ficar por cima da linha verde
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Para lidar com o scroll para cima
}, false);
//FIM DO CODIGO DO CABECALHO

//CODIGO DO CABECALHO 02
let lastScrollTop2 = 0;

window.addEventListener('scroll', function() {
    let currentScroll2 = window.scrollY || window.pageYOffset;

    if (currentScroll2 > lastScrollTop2) {
        document.querySelector('.cabecalho02').style.top = '-80px'; // Esconde o cabeçalho quando a página é rolada para baixo
    } else {
        document.querySelector('.cabecalho02').style.backgroundColor = '#000337';
        document.querySelector('.cabecalho02').style.top = '0'; // Mostra o cabeçalho quando a página é rolada para cima
    }

    if(currentScroll2 == 0) {
        document.querySelector('.cabecalho02').style.backgroundColor = 'transparent'; //evita do cabecalho ficar por cima da linha verde
    }

    lastScrollTop2 = currentScroll2 <= 0 ? 0 : currentScroll2; // Para lidar com o scroll para cima
}, false);
//FIM DO CODIGO DO CABECALHO 02

document.addEventListener('DOMContentLoaded', function () {
    let servicos = document.querySelectorAll('.cardServico');

    servicos.forEach(servico => {
        let frente = servico.querySelector('.fundoCard');
        let costa = servico.querySelector('.card-costa');

        // Adiciona o evento de mouseenter para cada elemento com a classe .cardServico
        servico.addEventListener('mouseenter', function () {
            // Adiciona a classe para mostrar o elemento da costa e esconder o da frente
            costa.style.display = 'block';
            frente.style.display = 'none';
        });

        // Adiciona o evento de mouseleave para cada elemento com a classe .cardServico
        servico.addEventListener('mouseleave', function () {
            // Remove a classe para mostrar o elemento da costa e esconder o da frente
            costa.style.display = 'none';
            frente.style.display = 'block';
        });
    });
});
