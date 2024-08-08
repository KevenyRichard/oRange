/* ----- Alternancia de Sections das categorias ----- */
// Obtém as referências dos elementos HTML
const BtnVerMais = document.getElementById('BtnVerMais');
const categoryPages = document.querySelectorAll('.categoryPage');
let currentCategory = 0;
// Adiciona o evento de clique no botão "Ver Mais"
BtnVerMais.addEventListener('click', function() {
  // Oculta a categoria atual
  categoryPages[currentCategory].classList.remove('visible');
  
  // Avança para a próxima categoria ou volta para a primeira categoria se chegou ao fim
  currentCategory = (currentCategory + 1) % categoryPages.length;

  // Exibe a próxima categoria
  categoryPages[currentCategory].classList.add('visible');
});