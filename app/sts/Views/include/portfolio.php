<?php
if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada");
}
?>

<!-- Portfolio-->
<div id="portfolio" class="section-theader text-center">
    <h3 class="section-theader-title pt-5" data-anime="down"><?php echo $this->dados['portfolio']['title_h3']; ?></h3>
    <p class="lead text-muted pb-5" data-anime="down"><?php echo $this->dados['portfolio']['descript_p']; ?></p>

    <div id="portfolio">

        <div class="container-fluid p-0">
            <div class="row g-0">

                <div class="col-4 col-sm-4 col-md-4 col-lg-4 " data-anime="down">
                    <a class="portfolio-box" data-bs-toggle="modal" data-bs-target="#<?php echo $this->dados['portfolio']['link_modal']; ?>">
                        <img class="img-fluid" src="app/sts/assets/imagens/portfolio/<?php echo $this->dados['portfolio']['img_miniatura']; ?>" alt="<?php echo $this->dados['portfolio']['alt_img']; ?>" title="<?php echo $this->dados['portfolio']['title_img']; ?>" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50"><?php echo $this->dados['portfolio']['title_caption']; ?></div>
                            <div class="project-name"><?php echo $this->dados['portfolio']['descrip_caption']; ?></div>
                        </div>
                    </a>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4 " data-anime="down">
                    <a class="portfolio-box" data-bs-toggle="modal" href="#<?php echo $this->dados['portfolio2']['link_modal']; ?>">
                        <img class="img-fluid" src="app/sts/assets/imagens/portfolio/<?php echo $this->dados['portfolio2']['img_miniatura']; ?>" alt="<?php echo $this->dados['portfolio2']['alt_img']; ?>" title="<?php echo $this->dados['portfolio2']['title_img']; ?>" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50"><?php echo $this->dados['portfolio2']['title_caption']; ?></div>
                            <div class="project-name"><?php echo $this->dados['portfolio2']['descrip_caption']; ?></div>
                        </div>
                    </a>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4 " data-anime="down">
                    <a class="portfolio-box" data-bs-toggle="modal" href="#<?php echo $this->dados['portfolio3']['link_modal']; ?>">
                        <img class="img-fluid" src="app/sts/assets/imagens/portfolio/<?php echo $this->dados['portfolio3']['img_miniatura']; ?>" alt="<?php echo $this->dados['portfolio3']['alt_img']; ?>" title="<?php echo $this->dados['portfolio3']['title_img']; ?>" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50"><?php echo $this->dados['portfolio3']['title_caption']; ?></div>
                            <div class="project-name"><?php echo $this->dados['portfolio3']['descrip_caption']; ?></div>
                        </div>
                    </a>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4 " data-anime="down">
                    <a class="portfolio-box" data-bs-toggle="modal" href="#<?php echo $this->dados['portfolio4']['link_modal']; ?>">
                        <img class="img-fluid" src="app/sts/assets/imagens/portfolio/<?php echo $this->dados['portfolio4']['img_miniatura']; ?>" alt="<?php echo $this->dados['portfolio4']['alt_img']; ?>" title="<?php echo $this->dados['portfolio4']['title_img']; ?>" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50"><?php echo $this->dados['portfolio4']['title_caption']; ?></div>
                            <div class="project-name"><?php echo $this->dados['portfolio4']['descrip_caption']; ?></div>
                        </div>
                    </a>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4 " data-anime="down">
                    <a class="portfolio-box" data-bs-toggle="modal" href="#<?php echo $this->dados['portfolio5']['link_modal']; ?>">
                        <img class="img-fluid" src="app/sts/assets/imagens/portfolio/<?php echo $this->dados['portfolio5']['img_miniatura']; ?>" alt="<?php echo $this->dados['portfolio5']['alt_img']; ?>" title="<?php echo $this->dados['portfolio5']['title_img']; ?>" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50"><?php echo $this->dados['portfolio5']['title_caption']; ?></div>
                            <div class="project-name"><?php echo $this->dados['portfolio5']['descrip_caption']; ?></div>
                        </div>
                    </a>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4 " data-anime="down">
                    <a class="portfolio-box" data-bs-toggle="modal" href="#<?php echo $this->dados['portfolio6']['link_modal']; ?>">
                        <img class="img-fluid" src="app/sts/assets/imagens/portfolio/<?php echo $this->dados['portfolio6']['img_miniatura']; ?>" alt="<?php echo $this->dados['portfolio6']['alt_img']; ?>" title="<?php echo $this->dados['portfolio6']['title_img']; ?>" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50"><?php echo $this->dados['portfolio6']['title_caption']; ?></div>
                            <div class="project-name"><?php echo $this->dados['portfolio6']['descrip_caption']; ?></div>
                        </div>
                    </a>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4 " data-anime="down">
                    <a class="portfolio-box" data-bs-toggle="modal" href="#<?php echo $this->dados['portfolio7']['link_modal']; ?>">
                        <img class="img-fluid" src="app/sts/assets/imagens/portfolio/<?php echo $this->dados['portfolio7']['img_miniatura']; ?>" alt="<?php echo $this->dados['portfolio7']['alt_img']; ?>" title="<?php echo $this->dados['portfolio7']['title_img']; ?>" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50"><?php echo $this->dados['portfolio7']['title_caption']; ?></div>
                            <div class="project-name"><?php echo $this->dados['portfolio7']['descrip_caption']; ?></div>
                        </div>
                    </a>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4 " data-anime="down">
                    <a class="portfolio-box" data-bs-toggle="modal" href="#<?php echo $this->dados['portfolio8']['link_modal']; ?>">
                        <img class="img-fluid" src="app/sts/assets/imagens/portfolio/<?php echo $this->dados['portfolio8']['img_miniatura']; ?>" alt="<?php echo $this->dados['portfolio8']['alt_img']; ?>" title="<?php echo $this->dados['portfolio8']['title_img']; ?>" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50"><?php echo $this->dados['portfolio8']['title_caption']; ?></div>
                            <div class="project-name"><?php echo $this->dados['portfolio8']['descrip_caption']; ?></div>
                        </div>
                    </a>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4 " data-anime="down">
                    <a class="portfolio-box" data-bs-toggle="modal" href="#<?php echo $this->dados['portfolio9']['link_modal']; ?>">
                        <img class="img-fluid" src="app/sts/assets/imagens/portfolio/<?php echo $this->dados['portfolio9']['img_miniatura']; ?>" alt="<?php echo $this->dados['portfolio9']['alt_img']; ?>" title="<?php echo $this->dados['portfolio9']['title_img']; ?>" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50"><?php echo $this->dados['portfolio9']['title_caption']; ?></div>
                            <div class="project-name"><?php echo $this->dados['portfolio9']['descrip_caption']; ?></div>
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </div>

</div>
<!-- Portfolio item 1 modal popup-->
<div class="portfolio-modal modal fade" id="<?php echo $this->dados['portfolio']['id_link_modal']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal">
                <img src="app/sts/assets/imagens/icones/close-icon.svg" alt="Close modal" />
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="featurette-heading"><?php echo $this->dados['portfolio']['h2_modal']; ?></h2>
                            <p class="item-intro text-muted"><?php echo $this->dados['portfolio']['descript_modal']; ?></p>

                            <img class="img-fluid d-block mx-auto" style="display:<?php echo $this->dados['portfolio']['display_1']; ?>" src="app/sts/assets/imagens/portfolio/<?php echo $this->dados['portfolio']['img_grande']; ?>" title="<?php echo $this->dados['portfolio']['title_img_grande']; ?>" alt="<?php echo $this->dados['portfolio']['alt_img_grande']; ?>" />

                            <!-- ESTRUTURA DE VÍDEO NA RAIZ -->
                            <div class="ratio ratio-16x9" style="display:<?php echo $this->dados['portfolio']['display_2']; ?>">
                                <video controls="controls" name="media">
                                    <source src="app/sts/assets/videos/<?php echo $this->dados['portfolio']['video_grande']; ?>" type="video/mp4">
                                </video>
                            </div>
                            <div class="ratio ratio-16x9" style="display:<?php echo $this->dados['portfolio']['display_3']; ?>">
                                <iframe src="https://www.youtube.com/embed/<?php echo $this->dados['portfolio']['vd_youtube_grande']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                                        picture-in-picture" allowfullscreen>
                                </iframe>
                            </div>

                            <br>
                            <!-- ESTRUTURA DE VÍDEO NO YOUTUBE -->

                            <p><?php echo $this->dados['portfolio']['descript_jobs']; ?></p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Cliente: </strong>
                                    <?php echo $this->dados['portfolio']['name_cliente']; ?>
                                </li>
                                <li>
                                    <strong>Categoria:</strong>
                                    <?php echo $this->dados['portfolio']['category_service']; ?>
                                </li>
                                <li>
                                    <strong><?php echo $this->dados['portfolio']['tipo_contato']; ?>:</strong> <!-- Aqui, o tipo de contato no DB -->

                                    <a href="<?php echo $this->dados['portfolio']['link_contato']; ?>" class="ms-0 link-color-3" target="_blank">
                                        <i class="bi bi-<?php echo $this->dados['portfolio']['icon_contato']; ?>"></i>
                                        &nbsp;
                                        <span><?php echo $this->dados['portfolio']['contato_txt']; ?></span>
                                    </a>

                                    <strong class="ms-2">Site:</strong>
                                    <a href="<?php echo $this->dados['portfolio']['link_site']; ?>" class="link-color-3" target="_blank">
                                        <span><?php echo $this->dados['portfolio']['site_txt']; ?></span>
                                    </a>
                                </li>

                            </ul>

                            <button class="btn btn-secondary btn-xl" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Fechar Projeto
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="<?php echo $this->dados['portfolio2']['id_link_modal']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="app/sts/assets/imagens/icones/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="featurette-heading"><?php echo $this->dados['portfolio2']['h2_modal']; ?></h2>
                            <p class="item-intro text-muted"><?php echo $this->dados['portfolio2']['descript_modal']; ?></p>

                            <img class="img-fluid d-block mx-auto" style="display:<?php echo $this->dados['portfolio2']['display_1']; ?>" src="app/sts/assets/imagens/portfolio/<?php echo $this->dados['portfolio2']['img_grande']; ?>" title="<?php echo $this->dados['portfolio2']['title_img_grande']; ?>" alt="<?php echo $this->dados['portfolio2']['alt_img_grande']; ?>" />

                            <!-- ESTRUTURA DE VÍDEO NA RAIZ -->
                            <div class="ratio ratio-16x9" style="display:<?php echo $this->dados['portfolio2']['display_2']; ?>">
                                <video controls="controls" name="media">
                                    <source src="app/sts/assets/videos/<?php echo $this->dados['portfolio2']['video_grande']; ?>" type="video/mp4">
                                </video>
                            </div>
                            <div class="ratio ratio-16x9" style="display:<?php echo $this->dados['portfolio2']['display_3']; ?>">
                                <iframe src="https://www.youtube.com/embed/<?php echo $this->dados['portfolio2']['vd_youtube_grande']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                                        picture-in-picture" allowfullscreen>
                                </iframe>
                            </div>

                            <br>

                            <p><?php echo $this->dados['portfolio2']['descript_jobs']; ?></p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Cliente: </strong>
                                    <?php echo $this->dados['portfolio2']['name_cliente']; ?>
                                </li>
                                <li>
                                    <strong>Categoria:</strong>
                                    <?php echo $this->dados['portfolio2']['category_service']; ?>
                                </li>
                                <li>
                                    <strong><?php echo $this->dados['portfolio2']['tipo_contato']; ?>:</strong> <!-- Aqui, o tipo de contato no DB -->

                                    <a href="<?php echo $this->dados['portfolio2']['link_contato']; ?>" class="ms-0 link-color-3" target="_blank">
                                        <i class="bi bi-<?php echo $this->dados['portfolio2']['icon_contato']; ?>"></i>
                                        &nbsp;
                                        <span><?php echo $this->dados['portfolio2']['contato_txt']; ?></span>
                                    </a>

                                    <strong class="ms-2">Site:</strong>
                                    <a href="<?php echo $this->dados['portfolio2']['link_site']; ?>" class="link-color-3" target="_blank">
                                        <span><?php echo $this->dados['portfolio2']['site_txt']; ?></span>
                                    </a>
                                </li>

                            </ul>

                            <button class="btn btn-secondary btn-xl" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Fechar Projeto
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="<?php echo $this->dados['portfolio3']['id_link_modal']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="app/sts/assets/imagens/icones/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="featurette-heading"><?php echo $this->dados['portfolio3']['h2_modal']; ?></h2>
                            <p class="item-intro text-muted"><?php echo $this->dados['portfolio3']['descript_modal']; ?></p>

                            <img class="img-fluid d-block mx-auto" style="display:<?php echo $this->dados['portfolio3']['display_1']; ?>" src="app/sts/assets/imagens/portfolio/<?php echo $this->dados['portfolio3']['img_grande']; ?>" title="<?php echo $this->dados['portfolio3']['title_img_grande']; ?>" alt="<?php echo $this->dados['portfolio3']['alt_img_grande']; ?>" />

                            <!-- ESTRUTURA DE VÍDEO NA RAIZ -->
                            <div class="ratio ratio-16x9" style="display:<?php echo $this->dados['portfolio3']['display_2']; ?>">
                                <video controls="controls" name="media">
                                    <source src="app/sts/assets/videos/<?php echo $this->dados['portfolio3']['video_grande']; ?>" type="video/mp4">
                                </video>
                            </div>
                            <div class="ratio ratio-16x9" style="display:<?php echo $this->dados['portfolio3']['display_3']; ?>">
                                <iframe src="https://www.youtube.com/embed/<?php echo $this->dados['portfolio3']['vd_youtube_grande']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                                        picture-in-picture" allowfullscreen>
                                </iframe>
                            </div>

                            <br>
                            <!-- ESTRUTURA DE VÍDEO NO YOUTUBE -->

                            <p><?php echo $this->dados['portfolio3']['descript_jobs']; ?></p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Cliente: </strong>
                                    <?php echo $this->dados['portfolio3']['name_cliente']; ?>
                                </li>
                                <li>
                                    <strong>Categoria:</strong>
                                    <?php echo $this->dados['portfolio3']['category_service']; ?>
                                </li>
                                <li>
                                    <strong><?php echo $this->dados['portfolio3']['tipo_contato']; ?>:</strong> <!-- Aqui, o tipo de contato no DB -->

                                    <a href="<?php echo $this->dados['portfolio3']['link_contato']; ?>" class="ms-0 link-color-3" target="_blank">
                                        <i class="bi bi-<?php echo $this->dados['portfolio3']['icon_contato']; ?>"></i>
                                        &nbsp;
                                        <span><?php echo $this->dados['portfolio3']['contato_txt']; ?></span>
                                    </a>

                                    <strong class="ms-2">Site:</strong>
                                    <a href="<?php echo $this->dados['portfolio3']['link_site']; ?>" class="link-color-3" target="_blank">
                                        <span><?php echo $this->dados['portfolio3']['site_txt']; ?></span>
                                    </a>
                                </li>

                            </ul>

                            <button class="btn btn-secondary btn-xl" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Fechar Projeto
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="<?php echo $this->dados['portfolio4']['id_link_modal']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="app/sts/assets/imagens/icones/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="featurette-heading"><?php echo $this->dados['portfolio4']['h2_modal']; ?></h2>
                            <p class="item-intro text-muted"><?php echo $this->dados['portfolio4']['descript_modal']; ?></p>

                            <img class="img-fluid d-block mx-auto" style="display:<?php echo $this->dados['portfolio4']['display_1']; ?>" src="app/sts/assets/imagens/portfolio/<?php echo $this->dados['portfolio4']['img_grande']; ?>" title="<?php echo $this->dados['portfolio4']['title_img_grande']; ?>" alt="<?php echo $this->dados['portfolio4']['alt_img_grande']; ?>" />

                            <!-- ESTRUTURA DE VÍDEO NA RAIZ -->
                            <div class="ratio ratio-16x9" style="display:<?php echo $this->dados['portfolio4']['display_2']; ?>">
                                <video controls="controls" name="media">
                                    <source src="app/sts/assets/videos/<?php echo $this->dados['portfolio4']['video_grande']; ?>" type="video/mp4">
                                </video>
                            </div>
                            <div class="ratio ratio-16x9" style="display:<?php echo $this->dados['portfolio4']['display_3']; ?>">
                                <iframe src="https://www.youtube.com/embed/<?php echo $this->dados['portfolio4']['vd_youtube_grande']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                                        picture-in-picture" allowfullscreen>
                                </iframe>
                            </div>

                            <br>
                            <!-- ESTRUTURA DE VÍDEO NO YOUTUBE -->

                            <p><?php echo $this->dados['portfolio4']['descript_jobs']; ?></p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Cliente: </strong>
                                    <?php echo $this->dados['portfolio4']['name_cliente']; ?>
                                </li>
                                <li>
                                    <strong>Categoria:</strong>
                                    <?php echo $this->dados['portfolio4']['category_service']; ?>
                                </li>
                                <li>
                                    <strong><?php echo $this->dados['portfolio4']['tipo_contato']; ?>:</strong> <!-- Aqui, o tipo de contato no DB -->

                                    <a href="<?php echo $this->dados['portfolio4']['link_contato']; ?>" class="ms-0 link-color-3" target="_blank">
                                        <i class="bi bi-<?php echo $this->dados['portfolio4']['icon_contato']; ?>"></i>
                                        &nbsp;
                                        <span><?php echo $this->dados['portfolio4']['contato_txt']; ?></span>
                                    </a>

                                    <strong class="ms-2">Site:</strong>
                                    <a href="<?php echo $this->dados['portfolio4']['link_site']; ?>" class="link-color-3" target="_blank">
                                        <span><?php echo $this->dados['portfolio4']['site_txt']; ?></span>
                                    </a>
                                </li>

                            </ul>

                            <button class="btn btn-secondary btn-xl" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Fechar Projeto
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="<?php echo $this->dados['portfolio5']['id_link_modal']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="app/sts/assets/imagens/icones/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="featurette-heading"><?php echo $this->dados['portfolio5']['h2_modal']; ?></h2>
                            <p class="item-intro text-muted"><?php echo $this->dados['portfolio5']['descript_modal']; ?></p>

                            <img class="img-fluid d-block mx-auto" style="display:<?php echo $this->dados['portfolio5']['display_1']; ?>" src="app/sts/assets/imagens/portfolio/<?php echo $this->dados['portfolio5']['img_grande']; ?>" title="<?php echo $this->dados['portfolio5']['title_img_grande']; ?>" alt="<?php echo $this->dados['portfolio5']['alt_img_grande']; ?>" />

                            <!-- ESTRUTURA DE VÍDEO NA RAIZ -->
                            <div class="ratio ratio-16x9" style="display:<?php echo $this->dados['portfolio5']['display_2']; ?>">
                                <video controls="controls" name="media">
                                    <source src="app/sts/assets/videos/<?php echo $this->dados['portfolio5']['video_grande']; ?>" type="video/mp4">
                                </video>
                            </div>
                            <div class="ratio ratio-16x9" style="display:<?php echo $this->dados['portfolio5']['display_3']; ?>">
                                <iframe src="https://www.youtube.com/embed/<?php echo $this->dados['portfolio5']['vd_youtube_grande']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                                        picture-in-picture" allowfullscreen>
                                </iframe>
                            </div>

                            <br>
                            <!-- ESTRUTURA DE VÍDEO NO YOUTUBE -->

                            <p><?php echo $this->dados['portfolio5']['descript_jobs']; ?></p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Cliente: </strong>
                                    <?php echo $this->dados['portfolio5']['name_cliente']; ?>
                                </li>
                                <li>
                                    <strong>Categoria:</strong>
                                    <?php echo $this->dados['portfolio5']['category_service']; ?>
                                </li>
                                <li>
                                    <strong><?php echo $this->dados['portfolio5']['tipo_contato']; ?>:</strong> <!-- Aqui, o tipo de contato no DB -->

                                    <a href="<?php echo $this->dados['portfolio5']['link_contato']; ?>" class="ms-0 link-color-3" target="_blank">
                                        <i class="bi bi-<?php echo $this->dados['portfolio5']['icon_contato']; ?>"></i>
                                        &nbsp;
                                        <span><?php echo $this->dados['portfolio5']['contato_txt']; ?></span>
                                    </a>

                                    <strong class="ms-2">Site:</strong>
                                    <a href="<?php echo $this->dados['portfolio5']['link_site']; ?>" class="link-color-3" target="_blank">
                                        <span><?php echo $this->dados['portfolio5']['site_txt']; ?></span>
                                    </a>
                                </li>

                            </ul>

                            <button class="btn btn-secondary btn-xl" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Fechar Projeto
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="<?php echo $this->dados['portfolio6']['id_link_modal']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="app/sts/assets/imagens/icones/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="featurette-heading"><?php echo $this->dados['portfolio6']['h2_modal']; ?></h2>
                            <p class="item-intro text-muted"><?php echo $this->dados['portfolio6']['descript_modal']; ?></p>

                            <img class="img-fluid d-block mx-auto" style="display:<?php echo $this->dados['portfolio6']['display_1']; ?>" src="app/sts/assets/imagens/portfolio/<?php echo $this->dados['portfolio6']['img_grande']; ?>" title="<?php echo $this->dados['portfolio6']['title_img_grande']; ?>" alt="<?php echo $this->dados['portfolio6']['alt_img_grande']; ?>" />

                            <!-- ESTRUTURA DE VÍDEO NA RAIZ -->
                            <div class="ratio ratio-16x9" style="display:<?php echo $this->dados['portfolio6']['display_2']; ?>">
                                <video controls="controls" name="media">
                                    <source src="app/sts/assets/videos/<?php echo $this->dados['portfolio6']['video_grande']; ?>" type="video/mp4">
                                </video>
                            </div>
                            <div class="ratio ratio-16x9" style="display:<?php echo $this->dados['portfolio6']['display_3']; ?>">
                                <iframe src="https://www.youtube.com/embed/<?php echo $this->dados['portfolio6']['vd_youtube_grande']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                                        picture-in-picture" allowfullscreen>
                                </iframe>
                            </div>

                            <br>
                            <!-- ESTRUTURA DE VÍDEO NO YOUTUBE -->

                            <p><?php echo $this->dados['portfolio6']['descript_jobs']; ?></p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Cliente: </strong>
                                    <?php echo $this->dados['portfolio6']['name_cliente']; ?>
                                </li>
                                <li>
                                    <strong>Categoria:</strong>
                                    <?php echo $this->dados['portfolio6']['category_service']; ?>
                                </li>
                                <li>
                                    <strong><?php echo $this->dados['portfolio6']['tipo_contato']; ?>:</strong> <!-- Aqui, o tipo de contato no DB -->

                                    <a href="<?php echo $this->dados['portfolio6']['link_contato']; ?>" class="ms-0 link-color-3" target="_blank">
                                        <i class="bi bi-<?php echo $this->dados['portfolio6']['icon_contato']; ?>"></i>
                                        &nbsp;
                                        <span><?php echo $this->dados['portfolio6']['contato_txt']; ?></span>
                                    </a>

                                    <strong class="ms-2">Site:</strong>
                                    <a href="<?php echo $this->dados['portfolio6']['link_site']; ?>" class="link-color-3" target="_blank">
                                        <span><?php echo $this->dados['portfolio6']['site_txt']; ?></span>
                                    </a>
                                </li>

                            </ul>

                            <button class="btn btn-secondary btn-xl" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Fechar Projeto
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="<?php echo $this->dados['portfolio7']['id_link_modal']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="app/sts/assets/imagens/icones/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="featurette-heading"><?php echo $this->dados['portfolio7']['h2_modal']; ?></h2>
                            <p class="item-intro text-muted"><?php echo $this->dados['portfolio7']['descript_modal']; ?></p>

                            <img class="img-fluid d-block mx-auto" style="display:<?php echo $this->dados['portfolio7']['display_1']; ?>" src="app/sts/assets/imagens/portfolio/<?php echo $this->dados['portfolio7']['img_grande']; ?>" title="<?php echo $this->dados['portfolio7']['title_img_grande']; ?>" alt="<?php echo $this->dados['portfolio7']['alt_img_grande']; ?>" />

                            <!-- ESTRUTURA DE VÍDEO NA RAIZ -->
                            <div class="ratio ratio-16x9" style="display:<?php echo $this->dados['portfolio7']['display_2']; ?>">
                                <video controls="controls" name="media">
                                    <source src="app/sts/assets/videos/<?php echo $this->dados['portfolio7']['video_grande']; ?>" type="video/mp4">
                                </video>
                            </div>
                            <div class="ratio ratio-16x9" style="display:<?php echo $this->dados['portfolio7']['display_3']; ?>">
                                <iframe src="https://www.youtube.com/embed/<?php echo $this->dados['portfolio7']['vd_youtube_grande']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                                        picture-in-picture" allowfullscreen>
                                </iframe>
                            </div>

                            <br>
                            <!-- ESTRUTURA DE VÍDEO NO YOUTUBE -->

                            <p><?php echo $this->dados['portfolio7']['descript_jobs']; ?></p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Cliente: </strong>
                                    <?php echo $this->dados['portfolio7']['name_cliente']; ?>
                                </li>
                                <li>
                                    <strong>Categoria:</strong>
                                    <?php echo $this->dados['portfolio7']['category_service']; ?>
                                </li>
                                <li>
                                    <strong><?php echo $this->dados['portfolio7']['tipo_contato']; ?>:</strong> <!-- Aqui, o tipo de contato no DB -->

                                    <a href="<?php echo $this->dados['portfolio7']['link_contato']; ?>" class="ms-0 link-color-3" target="_blank">
                                        <i class="bi bi-<?php echo $this->dados['portfolio7']['icon_contato']; ?>"></i>
                                        &nbsp;
                                        <span><?php echo $this->dados['portfolio7']['contato_txt']; ?></span>
                                    </a>

                                    <strong class="ms-2">Site:</strong>
                                    <a href="<?php echo $this->dados['portfolio7']['link_site']; ?>" class="link-color-3" target="_blank">
                                        <span><?php echo $this->dados['portfolio7']['site_txt']; ?></span>
                                    </a>
                                </li>

                            </ul>

                            <button class="btn btn-secondary btn-xl" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Fechar Projeto
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="<?php echo $this->dados['portfolio8']['id_link_modal']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="app/sts/assets/imagens/icones/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="featurette-heading"><?php echo $this->dados['portfolio8']['h2_modal']; ?></h2>
                            <p class="item-intro text-muted"><?php echo $this->dados['portfolio8']['descript_modal']; ?></p>

                            <img class="img-fluid d-block mx-auto" style="display:<?php echo $this->dados['portfolio8']['display_1']; ?>" src="app/sts/assets/imagens/portfolio/<?php echo $this->dados['portfolio8']['img_grande']; ?>" title="<?php echo $this->dados['portfolio8']['title_img_grande']; ?>" alt="<?php echo $this->dados['portfolio8']['alt_img_grande']; ?>" />

                            <!-- ESTRUTURA DE VÍDEO NA RAIZ -->
                            <div class="ratio ratio-16x9" style="display:<?php echo $this->dados['portfolio8']['display_2']; ?>">
                                <video controls="controls" name="media">
                                    <source src="app/sts/assets/videos/<?php echo $this->dados['portfolio8']['video_grande']; ?>" type="video/mp4">
                                </video>
                            </div>
                            <div class="ratio ratio-16x9" style="display:<?php echo $this->dados['portfolio8']['display_3']; ?>">
                                <iframe src="https://www.youtube.com/embed/<?php echo $this->dados['portfolio8']['vd_youtube_grande']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                                        picture-in-picture" allowfullscreen>
                                </iframe>
                            </div>

                            <br>
                            <!-- ESTRUTURA DE VÍDEO NO YOUTUBE -->

                            <p><?php echo $this->dados['portfolio8']['descript_jobs']; ?></p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Cliente: </strong>
                                    <?php echo $this->dados['portfolio8']['name_cliente']; ?>
                                </li>
                                <li>
                                    <strong>Categoria:</strong>
                                    <?php echo $this->dados['portfolio8']['category_service']; ?>
                                </li>
                                <li>
                                    <strong><?php echo $this->dados['portfolio8']['tipo_contato']; ?>:</strong> <!-- Aqui, o tipo de contato no DB -->

                                    <a href="<?php echo $this->dados['portfolio8']['link_contato']; ?>" class="ms-0 link-color-3" target="_blank">
                                        <i class="bi bi-<?php echo $this->dados['portfolio8']['icon_contato']; ?>"></i>
                                        &nbsp;
                                        <span><?php echo $this->dados['portfolio8']['contato_txt']; ?></span>
                                    </a>

                                    <strong class="ms-2">Site:</strong>
                                    <a href="<?php echo $this->dados['portfolio8']['link_site']; ?>" class="link-color-3" target="_blank">
                                        <span><?php echo $this->dados['portfolio8']['site_txt']; ?></span>
                                    </a>
                                </li>

                            </ul>

                            <button class="btn btn-secondary btn-xl" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Fechar Projeto
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="<?php echo $this->dados['portfolio9']['id_link_modal']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="app/sts/assets/imagens/icones/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="featurette-heading"><?php echo $this->dados['portfolio9']['h2_modal']; ?></h2>
                            <p class="item-intro text-muted"><?php echo $this->dados['portfolio9']['descript_modal']; ?></p>

                            <img class="img-fluid d-block mx-auto" style="display:<?php echo $this->dados['portfolio9']['display_1']; ?>" src="app/sts/assets/imagens/portfolio/<?php echo $this->dados['portfolio9']['img_grande']; ?>" title="<?php echo $this->dados['portfolio9']['title_img_grande']; ?>" alt="<?php echo $this->dados['portfolio9']['alt_img_grande']; ?>" />

                            <!-- ESTRUTURA DE VÍDEO NA RAIZ -->
                            <div class="ratio ratio-16x9" style="display:<?php echo $this->dados['portfolio9']['display_2']; ?>">
                                <video controls="controls" name="media">
                                    <source src="app/sts/assets/videos/<?php echo $this->dados['portfolio9']['video_grande']; ?>" type="video/mp4">
                                </video>
                            </div>
                            <div class="ratio ratio-16x9" style="display:<?php echo $this->dados['portfolio9']['display_3']; ?>">
                                <iframe src="https://www.youtube.com/embed/<?php echo $this->dados['portfolio9']['vd_youtube_grande']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                                        picture-in-picture" allowfullscreen>
                                </iframe>
                            </div>

                            <br>
                            <!-- ESTRUTURA DE VÍDEO NO YOUTUBE -->

                            <p><?php echo $this->dados['portfolio9']['descript_jobs']; ?></p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Cliente: </strong>
                                    <?php echo $this->dados['portfolio9']['name_cliente']; ?>
                                </li>
                                <li>
                                    <strong>Categoria:</strong>
                                    <?php echo $this->dados['portfolio9']['category_service']; ?>
                                </li>
                                <li>
                                    <strong><?php echo $this->dados['portfolio9']['tipo_contato']; ?>:</strong> <!-- Aqui, o tipo de contato no DB -->

                                    <a href="<?php echo $this->dados['portfolio9']['link_contato']; ?>" class="ms-0 link-color-3" target="_blank">
                                        <i class="bi bi-<?php echo $this->dados['portfolio9']['icon_contato']; ?>"></i>
                                        &nbsp;
                                        <span><?php echo $this->dados['portfolio9']['contato_txt']; ?></span>
                                    </a>

                                    <strong class="ms-2">Site:</strong>
                                    <a href="<?php echo $this->dados['portfolio9']['link_site']; ?>" class="link-color-3" target="_blank">
                                        <span><?php echo $this->dados['portfolio9']['site_txt']; ?></span>
                                    </a>
                                </li>

                            </ul>

                            <button class="btn btn-secondary btn-xl" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Fechar Projeto
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>