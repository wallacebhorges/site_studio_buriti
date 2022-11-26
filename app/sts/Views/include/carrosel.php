<?php
if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada");
}
?>

<div id="Carousel-primary" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#Carousel-primary" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#Carousel-primary" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#Carousel-primary" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <a href="<?php echo $this->dados['carousel']['link_um_topo']; ?>">
                    <img src="<?php echo URL ?>app/sts/assets/imagens/carrosel/<?php echo $this->dados['carousel']['imagem_um_topo']; ?>" 
                         class="img-fluid d-block" alt="Banner sobre Design Gráfico"></a>
            </div>


            <div class="carousel-item">
                <a href="<?php echo $this->dados['carousel']['link_dois_topo']; ?>">
                    <img src="<?php echo URL ?>app/sts/assets/imagens/carrosel/<?php echo $this->dados['carousel']['imagem_dois_topo']; ?>" 
                         class="img-fluid d-block" alt="Banner sobre Design Gráfico"></a>
            </div>

            <div class="carousel-item">
                <a href="<?php echo $this->dados['carousel']['link_tres_topo']; ?>">
                    <img src="<?php echo URL ?>app/sts/assets/imagens/carrosel/<?php echo $this->dados['carousel']['imagem_tres_topo']; ?>" 
                         class="img-fluid d-block" alt="Banner sobre Design Gráfico"></a>
            </div>

        </div> 

        <a class="carousel-control-prev" data-bs-target="#Carousel-primary" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Anterior</span>
        </a> 
        <a class="carousel-control-next" data-bs-target="#Carousel-primary" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Avançar</span>
        </a> 

    </div> 


