<?php
if(!defined('R4F5CC')){
    header("Location: /");
    die("Erro: Página não encontrada");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo URL ?>app/sts/assets/imagens/icones/favicon.ico">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="description" content="<?php echo $this->dados['seo']['meta_description']; ?>">
    <meta name="keywords" content="desenvolvimento web, sites, aplicativos, Design, Gráfica, Marketing, Edição de Vídeo">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CEFH8TDMDH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-CEFH8TDMDH');
    </script>


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.typekit.net/rsa6tuu.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="<?php echo URL; ?>app/sts/assets/css/master.css">

    <title>Studio Buriti | Estúdio de Criação</title>

</head>

<body>
    
    <?php include "app/sts/Views/include/header.php" ?>

<!-- Header, menu de navegaÃ§Ã£o -->

<main class="section-primary" style="background-image: url('<?php echo URL ?>app/sts/assets/imagens/<?php echo $this->dados['abouts']['backgound_primary']; ?>')">
    <!-- Section Principal -->
    <section class="py-5">
        <div class="container">
            <div class="col-lg-6 cta-primary">
                <h1 data-home-anime="left"><?php echo $this->dados['abouts']['h1_sobre']; ?></h1>
                <p data-home-anime="right"><?php echo $this->dados['abouts']['paragrafo_1']; ?></p>
            </div>
        </div>
        <div class="container">
            <div class="col-lg-6">

                <p data-home-anime="right"><?php echo $this->dados['abouts']['paragrafo_2']; ?></p>  

                <div class="row text-center">
                    <a href="#section-secondary"><i class="bi bi-arrow-down-circle-fill"></i></a>
                </div>

            </div>
        </div>
    </section>

    <section class="section-secondary vertical-center py-5" id="section-secondary">
        <div class="container">
            <div class="row ">

                <div class="col-lg-6" data-anime="left">
                    <img src="<?php echo URL ?>app/sts/assets/imagens/ilustracao-buriti.png" class="img-fluid" alt=" ilustraÃ§Ã£o da fruta Buriti">
                </div>

                <div class="col-lg-6 vertical-center" data-anime="right">
                    
                    <h2><?php echo $this->dados['abouts']['h2_sobre']; ?></h2>

                    <p><?php echo $this->dados['abouts']['paragrafo_3']; ?></p>

                    <a href="#section-theard">
                        <i class="bi bi-arrow-down-circle-fill"></i>
                    </a>

                </div>

            </div>
        </div>

    </section>

    <section class="section-theader vertical-center py-5" id="section-theard">
        <div class="container">
            <div class="row">   
                <div class="col-lg-6 vertical-center" data-anime="left">
                    <span class="section-theader-title"><?php echo $this->dados['abouts']['title_1']; ?></span>
                    <p><?php echo $this->dados['abouts']['paragrafo_4']; ?></p>
                </div>

                <div class="col-lg-6 vertical-center" data-anime="right">

                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo URL ?>app/sts/assets/imagens/carrosel/<?php echo $this->dados['abouts']['card_1']; ?>" class="d-block w-100" alt="Card para postar em redes sociais, porÃ§Ã£o de fritas" title="Card para postar em redes sociais, porÃ§Ã£o de fritas">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo URL ?>app/sts/assets/imagens/carrosel/<?php echo $this->dados['abouts']['card_2']; ?>" class="d-block w-100" alt="Card para postar em redes sociais, Mascote da Equipe de pescaria Pega Nada" title="Card para postar em redes sociais, Mascote da Equipe de pescaria Pega Nada">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo URL ?>app/sts/assets/imagens/carrosel/<?php echo $this->dados['abouts']['card_3']; ?>" class="d-block w-100" alt="Card para postar em redes sociais, lanches do China's Beer Hall" title="Card para postar em redes sociais, lanches do China's Beer Hall">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo URL ?>app/sts/assets/imagens/carrosel/<?php echo $this->dados['abouts']['card_4']; ?>" class="d-block w-100" alt="Card para postar em redes sociais, feijoada do China's Beer Hall" title="Card para postar em redes sociais, feijoada do China's Beer Hal">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>