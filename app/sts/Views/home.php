<?php
if (!defined('R4F5CC')) {
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
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <meta name="description" content="<?php echo $this->dados['seo']['meta_description']; ?>">

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

        <!-- Favicon -->
        <link rel="icon" href="app/sts/assets/imagens/icones/favicon.ico">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.typekit.net/rsa6tuu.css">

        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="app/sts/assets/css/master.css"/>    
        <!--        <link href="../assets/css/master.css" rel="stylesheet" type="text/css"/>-->
        <title>Studio Buriti | Criação de Logo</title>

    </head>

    <body>

        <?php include "app/sts/Views/include/header.php" ?>

        <main>

            <div class="container">
                <div class="section-home">
                    <div class="row text-center vertical-center">
                        <div class="col-sm-12" data-home-anime="left">
                            <h2><?php echo $this->dados['seo']['h2_home']; ?></h2>
                            <p><?php echo $this->dados['seo']['paragrafo_h2']; ?></p>
                            <div class="d-grid gap-2 col-sm-3 col-6 mx-auto">
                                <button class="btn btn-callToaction" type="button">Orçamento</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

                <section class="section-theader">

                    <!-- Three columns of text below the carousel -->
                    <div class="row">
                        <!--icone_2, icone_3, h2_1_servs, h2_2_servs, h2_3_servs, , paragrafo_2_servs, paragrafo_3_servs, , link_2_servs, link_3_servs-->

                        <div class="col-md-4 p-3" data-anime="left">
                            <img class="svg-md-icon" src="<?php URL ?>app/sts/assets/imagens/<?php echo $this->dados['servs']['icone_1']; ?>" alt="Ícone que representa serviços de Design Digital">
                            <h2><?php echo $this->dados['servs']['h2_1_servs']; ?></h2>
                            <p><?php echo $this->dados['servs']['paragrafo_1_servs']; ?></p>
                            <div class="text-center">
                                <a class="btn btn-callToaction" href="<?php echo $this->dados['servs']['link_1_servs']; ?>">Saiba Mais &raquo;</a>
                            </div>
                        </div><!-- /.col-md-4 -->

                        <div class="col-md-4 p-3" data-anime="down">
                            <img class="svg-md-icon" src="<?php URL ?>app/sts/assets/imagens/<?php echo $this->dados['servs']['icone_2']; ?>" alt="Ícone que representa serviços de Design Gráfico">
                            <h2><?php echo $this->dados['servs']['h2_2_servs']; ?></h2>
                            <p><?php echo $this->dados['servs']['paragrafo_2_servs']; ?></p>
                            <div class="text-center">
                                <a class="btn btn-callToaction" href="<?php echo $this->dados['servs']['link_2_servs']; ?>">Saiba Mais &raquo;</a>
                            </div>
                        </div><!-- /.col-md-4 -->

                        <div class="col-md-4 p-3" data-anime="right">
                            <img class="svg-md-icon" src="<?php URL ?>app/sts/assets/imagens/<?php echo $this->dados['servs']['icone_3']; ?>" alt="Ícone que representa serviços de Desenvolvimento Web">
                            <h2><?php echo $this->dados['servs']['h2_3_servs']; ?></h2>
                            <p><?php echo $this->dados['servs']['paragrafo_3_servs']; ?></p>
                            <div class="text-center">
                                <a class="btn btn-callToaction" href="<?php echo $this->dados['servs']['link_3_servs']; ?>">Saiba Mais &raquo;</a>
                            </div>
                        </div><!-- /.col-md-4 -->

                    </div><!-- /.row -->


            </div><!-- /.container -->
        </section>
    </div>

    <!-- Seção com cards de produtos -->

    <section class="section-theader ">

        <div class="container">

            <?php include "app/sts/Views/include/vitrine.php" ?>

        </div>

    </section>


    <?php include "app/sts/Views/include/portfolio.php" ?>


    <section class="section-theader">

        <div class="container">

            <div class="row">

                <div class="col-12 col-md-12 vertical-center" data-anime="left">
                    <p class="section-theader-title"><?php echo $this->dados['abouts']['title_curiosidade_2']; ?></p>
                    <p><?php echo $this->dados['abouts']['desc_curiosidade_2']; ?></p>

                </div>

            </div>

        </div>

    </section>

    <section class="section-primary ">
        <div class="container text-center">
            <div class="col-md-12" data-anime="down">
                <h1 class="heading-one"><?php echo $this->dados['seo']['h1_home']; ?></h1>
                <span class="heading-one"><?php echo $this->dados['seo']['span_heading_one']; ?></span>
            </div>
        </div>
    </section>

</main>