// Aguarda o carregamento completo do documento HTML
document.addEventListener('DOMContentLoaded', function() {
    
    // Pega o elemento do botão usando seu ID
    const botaoPortfolio = document.getElementById('botaoPortfolio');

    // Pega o elemento da barra aquamarine usando seu ID
    const barraAquamarine = document.getElementById('barraAquamarine');

    // Adiciona um "ouvinte de evento" (event listener) de clique no botão
    botaoPortfolio.addEventListener('click', function() {
        // Quando o botão for clicado, adiciona a classe 'barra-sobe' à barra aquamarine
        // Isso fará com que a transição CSS definida em 'style.css' seja ativada
        barraAquamarine.classList.add('barra-sobe');
    });

});