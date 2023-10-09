
function toggleMenu() {
    var menu = document.getElementById("menu");
    menu.classList.toggle("active");
  }
  // Variável para armazenar a imagem atualmente exibida no meio
var imagemAtual = document.getElementById("imagem-grande");
var imagemAtualURL = imagemAtual.src;

function trocarImagem(novaImagem) {
    // Obtém a miniatura clicada
    var miniaturaClicada = event.target;

    // Armazena a URL da imagem clicada em uma variável
    var novaImagemURL = miniaturaClicada.src;

    // Se a nova imagem for diferente da atual, troque as imagens
    if (novaImagemURL !== imagemAtualURL) {
        // Armazena a URL da imagem atual em uma variável temporária
        var imagemTempURL = imagemAtualURL;

        // Define a nova imagem como o src da imagem grande
        imagemAtual.src = novaImagemURL;

        // Atualiza a URL da imagem atual
        imagemAtualURL = novaImagemURL;

        // Atualiza a URL da miniatura clicada com a imagem que estava no meio anteriormente
        miniaturaClicada.src = imagemTempURL;
    }
}


 