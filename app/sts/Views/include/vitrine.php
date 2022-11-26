<?php
if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada");
}
?>



<div class="container">

    <div class="row">

        <div class="col-6 col-sm-6 col-md-6 col-lg-3 pt-3">

            <div class="card">

                <img src="app/sts/assets/imagens/cards/<?php echo $this->dados['vitrine']['card_um_vitrine']; ?>" class="card-img-top" alt="Imagem Ilustrativa de Cartão de Visita">

                <div class="card-body min-h">

                    <a class="card-title"><strong><?php echo $this->dados['vitrine']['tituto_um_vitrine']; ?></strong></a>
                    <p class="card-text"><?php echo $this->dados['vitrine']['desc_um_vitrine']; ?></p>

                </div>

                <div class="price-box text-center">
                    <span class="product-price">
                        <?php echo $this->dados['vitrine']['price_um_vitrine']; ?>
                    </span>
                    <br>
                    <small><?php echo $this->dados['vitrine']['qtd_um_vitrine']; ?></small>
                </div>

                <div class="text-center my-3">
                    <a href="app/sts/Views/<?php echo $this->dados['vitrine']['link_um_btn_vitrine']; ?>" class="btn btn-primary">
                        <?php echo $this->dados['vitrine']['text_um_btn_vitrine']; ?>
                    </a>
                </div>
            </div>

        </div>

        <div class="col-6 col-sm-6 col-md-6 col-lg-3 pt-3">

            <div class="card">
                <img src="app/sts/assets/imagens/cards/<?php echo $this->dados['vitrine']['card_dois_vitrine']; ?>" class="card-img-top" alt="Imagem Ilustrativa de Capinhas Personalizadas de celular">

                <div class="card-body min-h">

                    <a class="card-title"><strong><?php echo $this->dados['vitrine']['tituto_dois_vitrine']; ?></strong></a>
                    <p class="card-text"><?php echo $this->dados['vitrine']['desc_dois_vitrine']; ?></p>

                </div>

                <div class="price-box text-center">
                    <span class="product-price">
                        <?php echo $this->dados['vitrine']['price_dois_vitrine']; ?>
                    </span>
                    <br>
                    <small><?php echo $this->dados['vitrine']['qtd_dois_vitrine']; ?></small>
                </div>

                <div class="text-center my-3">
                    <a href="app/sts/Views/<?php echo $this->dados['vitrine']['link_dois_btn_vitrine']; ?>" class="btn btn-primary"><?php echo $this->dados['vitrine']['text_dois_btn_vitrine']; ?></a>
                </div>

            </div>
        </div>

        <div class="col-6 col-sm-6 col-md-6 col-lg-3 pt-3">
            <div class="card">
                <img src="app/sts/assets/imagens/cards/<?php echo $this->dados['vitrine']['card_tres_vitrine']; ?>" class="card-img-top" alt="Imagem Ilustrativa de Sacola Kraft">


                <div class="card-body min-h">

                    <a class="card-title"><strong><?php echo $this->dados['vitrine']['tituto_tres_vitrine']; ?></strong></a>
                    <p class="card-text"><?php echo $this->dados['vitrine']['desc_tres_vitrine']; ?></p>

                </div>

                <div class="price-box text-center">
                    <span class="product-price">
                        <?php echo $this->dados['vitrine']['price_tres_vitrine']; ?>
                    </span>
                    <br>
                    <small><?php echo $this->dados['vitrine']['qtd_tres_vitrine']; ?></small>
                </div>

                <div class="text-center my-3">
                    <a href="<?php echo $this->dados['vitrine']['link_tres_btn_vitrine']; ?>" class="btn btn-primary"><?php echo $this->dados['vitrine']['text_tres_btn_vitrine']; ?></a>
                </div>

            </div>
        </div>

        <div class="col-6 col-sm-6 col-md-6 col-lg-3 pt-3">
            <div class="card">
                <img src="app/sts/assets/imagens/cards/<?php echo $this->dados['vitrine']['card_quatro_vitrine']; ?>" class="card-img-top" alt="Imagem Ilustrativa de Folder">

                <div class="card-body min-h">

                    <a class="card-title"><strong><?php echo $this->dados['vitrine']['tituto_quatro_vitrine']; ?></strong></a>
                    <p class="card-text"><?php echo $this->dados['vitrine']['desc_quatro_vitrine']; ?></p>

                </div>

                <div class="price-box text-center">
                    <span class="product-price">
                        <?php echo $this->dados['vitrine']['price_quatro_vitrine']; ?>
                    </span>
                    <br>
                    <small><?php echo $this->dados['vitrine']['qtd_quatro_vitrine']; ?></small>
                </div>

                <div class="text-center my-3">
                    <a href="app/sts/Views/<?php echo $this->dados['vitrine']['link_quatro_btn_vitrine']; ?>" class="btn btn-primary"><?php echo $this->dados['vitrine']['text_quatro_btn_vitrine']; ?></a>
                </div>

            </div>
        </div>

    </div>

</div>
