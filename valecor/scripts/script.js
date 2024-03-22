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
