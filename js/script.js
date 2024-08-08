/* ----- Botão Dark MODE -----*/
function changeBackground() {
    // Obtém uma referência para a checkbox
    var checkbox = document.getElementById("chk");
    
    // Obtém uma referência para o elemento <video> e <source>
    var meuVideo = document.getElementById("oRangeBackground");
    var meuVideoSource = document.getElementById("oRangeBackgroundSource");

     // Obtém uma referência para o container de vídeo
    var videoContainer = document.getElementById("conteiner");
    var animeSlider = document.querySelector(".animeSlider");
    
    // Verifica o estado da checkbox
    if (checkbox.checked) {
        // Adiciona a classe fade-out para animação de fadeOut
        videoContainer.classList.add("fade-out");
        //Diminui a opacidade do slider
        animeSlider.style.opacity = 0.83;
        // Define o vídeo a ser exibido quando a checkbox está marcada
        meuVideoSource.src = "img/oRangeMoodBackgroundAnimated.mp4";
    } 
    else {
        // Adiciona a classe fade-out para animação de fadeOut
        videoContainer.classList.add("fade-out");
        //Aumentar a opacidade do slider
        animeSlider.style.opacity = 1;
        // Define o vídeo a ser exibido quando a checkbox está desmarcada
        meuVideoSource.src = "img/oRangeBackgroundAnimated.mp4";
    }
    
    // Atualiza o elemento <video> para carregar o novo vídeo
    meuVideo.load();

    // Remove a classe fade-out e adiciona a classe keep-visible após um pequeno intervalo
    setTimeout(function() {
    videoContainer.classList.remove("fade-out");
    videoContainer.classList.add("keep-visible");
    }, 500);
  }

/* ----- Menu Responsivo modif.- Créditos a (matheusmanuel - Github) -----*/
let ul = document.querySelector('#tb-menu ul');
let icoMenu = document.querySelector('#ico-menu i');
let container = document.querySelector('#conteiner #slider');
var titulo = document.querySelector("#page-title");

function menuShow() {
    if (ul.classList.contains('open')) {
        ul.classList.remove('open');
        container.classList.remove('hide');
        titulo.classList.remove('hide');
    }
    else {
        ul.classList.add('open');
        container.classList.add('hide');
        titulo.classList.add('hide');
    }
}