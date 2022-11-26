<?php

namespace App\sts\Models;

if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada");
}

/**
 * Description of StsHome
 *
 * @author walla
 */
class StsHome extends Conn {

    private object $conn;
    private array $dados;

    public function index() {
        $this->conn = $this->connect();
        $this->viewSeo();
        $this->viewCarousel();
        $this->viewVitrine();
        $this->viewBrand();
        $this->viewServs();
        $this->viewAbouts();
        $this->viewMenu();
        $this->viewDropdown();
        $this->viewPortfolio();
        $this->viewPortfolio2();
        $this->viewPortfolio3();
        $this->viewPortfolio4();
        $this->viewPortfolio5();
        $this->viewPortfolio6();
        $this->viewPortfolio7();
        $this->viewPortfolio8();
        $this->viewPortfolio9();
        return $this->dados;
    }

    private function viewSeo() {
        $query_homes_seo = "SELECT meta_description, meta_title, h1_home, span_heading_one, h2_home, paragrafo_h2 FROM homes_seo LIMIT 1";
        $result_homes_seo = $this->conn->prepare($query_homes_seo);
        $result_homes_seo->execute();
        $this->dados['seo'] = $result_homes_seo->fetch();
    }
    
    private function viewCarousel() {
        $query_carousels_topo = "SELECT link_um_topo, imagem_um_topo, link_dois_topo, imagem_dois_topo, link_tres_topo, imagem_tres_topo FROM carousels_topos LIMIT 1";
        $result_carousels_topo = $this->conn->prepare($query_carousels_topo);
        $result_carousels_topo->execute();
        $this->dados['carousel'] = $result_carousels_topo->fetch();
    }

    private function viewVitrine() {
        $query_home_vitrine = "SELECT tituto_um_vitrine, desc_um_vitrine, price_um_vitrine, qtd_um_vitrine, text_um_btn_vitrine, link_um_btn_vitrine, tituto_dois_vitrine, desc_dois_vitrine, price_dois_vitrine, qtd_dois_vitrine, text_dois_btn_vitrine, link_dois_btn_vitrine, tituto_tres_vitrine, desc_tres_vitrine, price_tres_vitrine, qtd_tres_vitrine, text_tres_btn_vitrine, link_tres_btn_vitrine, tituto_quatro_vitrine, desc_quatro_vitrine, price_quatro_vitrine, qtd_quatro_vitrine, text_quatro_btn_vitrine, link_quatro_btn_vitrine, card_um_vitrine, card_dois_vitrine, card_tres_vitrine, card_quatro_vitrine FROM homes_vitrine LIMIT 1";
        $result_home_vitrine = $this->conn->prepare($query_home_vitrine);
        $result_home_vitrine->execute();
        $this->dados['vitrine'] = $result_home_vitrine->fetch();
    }

    private function viewBrand() {
        $query_home_brand = "SELECT logo_header, link_1_nav FROM sites_brand LIMIT 1";
        $result_home_brand = $this->conn->prepare($query_home_brand);
        $result_home_brand->execute();
        $this->dados['navega'] = $result_home_brand->fetch();
    }
    
    private function viewServs() {
        $query_servs = "SELECT icone_1, icone_2, icone_3, h2_1_servs, h2_2_servs, h2_3_servs, paragrafo_1_servs, paragrafo_2_servs, paragrafo_3_servs, link_1_servs, link_2_servs, link_3_servs FROM homes_servs LIMIT 1";
        $result_servs = $this->conn->prepare($query_servs);
        $result_servs->execute();
        $this->dados['servs'] = $result_servs->fetch();
    }

    private function viewAbouts() {
        $query_abouts_sobre = "SELECT backgound_primary, h1_sobre, paragrafo_1, paragrafo_2, h2_sobre, paragrafo_3, title_1, paragrafo_4, card_1, card_2, card_3, card_4, title_curiosidade_1, desc_curiosidade_1, img_curiosidade_1, title_curiosidade_2, desc_curiosidade_2, img_curiosidade_2 FROM abouts_sobre LIMIT 1";
        $result_abouts_sobre = $this->conn->prepare($query_abouts_sobre);
        $result_abouts_sobre->execute();
        $this->dados['abouts'] = $result_abouts_sobre->fetch();
    }
    
    private function viewMenu() {
        $query_menu_nav = "SELECT toggler_icon, nav_1, nav_2 , nav_3, nav_4, nav_5, nav_6, link_nav_1, link_nav_2, link_nav_3, link_nav_4, link_nav_5, link_nav_6 FROM sites_menunav LIMIT 1";
        $result_menu_nav = $this->conn->prepare($query_menu_nav);
        $result_menu_nav->execute();
        $this->dados['menu'] = $result_menu_nav->fetch();
    }
    
    private function viewDropdown() {
        $query_menu_dropdown = "SELECT drop_1, drop_2, drop_3, drop_4, drop_5, drop_6, drop_7, drop_9, drop_10, drop_11, drop_12, drop_14, drop_15, link_drop_1, link_drop_2, link_drop_3, link_drop_4, link_drop_5, link_drop_6, link_drop_7, link_drop_9, link_drop_10, link_drop_11, link_drop_12, link_drop_14, link_drop_15 FROM sites_dropdown LIMIT 1";
        $result_menu_dropdown = $this->conn->prepare($query_menu_dropdown);
        $result_menu_dropdown->execute();
        $this->dados['dropdown'] = $result_menu_dropdown->fetch();
    }
    
    private function viewPortfolio() {
        $query_portfolio = "SELECT title_h3, descript_p, link_modal, title_img, img_miniatura, alt_img, title_caption, descrip_caption, id_link_modal, h2_modal, descript_modal, display_1, img_grande, display_2, video_grande, display_3, vd_youtube_grande, title_img_grande, alt_img_grande, descript_jobs, name_cliente, category_service, tipo_contato, link_contato, icon_contato, contato_txt, link_site, site_txt FROM sites_portfolio LIMIT 1";
        $result_portfolio = $this->conn->prepare($query_portfolio);
        $result_portfolio->execute();
        $this->dados['portfolio'] = $result_portfolio->fetch();
    }
    
    private function viewPortfolio2() {
        $query_portfolio2 = "SELECT title_h3, descript_p, link_modal, title_img, img_miniatura, alt_img, title_caption, descrip_caption, id_link_modal, h2_modal, descript_modal, display_1, img_grande, display_2, video_grande, display_3, vd_youtube_grande, title_img_grande, alt_img_grande, descript_jobs, name_cliente, category_service, tipo_contato, link_contato, icon_contato, contato_txt, link_site, site_txt FROM sites_portfolio2 LIMIT 1";
        $result_portfolio2 = $this->conn->prepare($query_portfolio2);
        $result_portfolio2->execute();
        $this->dados['portfolio2'] = $result_portfolio2->fetch();
    }
    
    private function viewPortfolio3() {
        $query_portfolio3 = "SELECT title_h3, descript_p, link_modal, title_img, img_miniatura, alt_img, title_caption, descrip_caption, id_link_modal, h2_modal, descript_modal, display_1, img_grande, display_2, video_grande, display_3, vd_youtube_grande, title_img_grande, alt_img_grande, descript_jobs, name_cliente, category_service, tipo_contato, link_contato, icon_contato, contato_txt, link_site, site_txt FROM sites_portfolio3 LIMIT 1";
        $result_portfolio3 = $this->conn->prepare($query_portfolio3);
        $result_portfolio3->execute();
        $this->dados['portfolio3'] = $result_portfolio3->fetch();
    }
    
    private function viewPortfolio4() {
        $query_portfolio4 = "SELECT title_h3, descript_p, link_modal, title_img, img_miniatura, alt_img, title_caption, descrip_caption, id_link_modal, h2_modal, descript_modal, display_1, img_grande, display_2, video_grande, display_3, vd_youtube_grande, title_img_grande, alt_img_grande, descript_jobs, name_cliente, category_service, tipo_contato, link_contato, icon_contato, contato_txt, link_site, site_txt FROM sites_portfolio4 LIMIT 1";
        $result_portfolio4 = $this->conn->prepare($query_portfolio4);
        $result_portfolio4->execute();
        $this->dados['portfolio4'] = $result_portfolio4->fetch();
    }
    
    private function viewPortfolio5() {
        $query_portfolio5 = "SELECT title_h3, descript_p, link_modal, title_img, img_miniatura, alt_img, title_caption, descrip_caption, id_link_modal, h2_modal, descript_modal, display_1, img_grande, display_2, video_grande, display_3, vd_youtube_grande, title_img_grande, alt_img_grande, descript_jobs, name_cliente, category_service, tipo_contato, link_contato, icon_contato, contato_txt, link_site, site_txt FROM sites_portfolio5 LIMIT 1";
        $result_portfolio5 = $this->conn->prepare($query_portfolio5);
        $result_portfolio5->execute();
        $this->dados['portfolio5'] = $result_portfolio5->fetch();
    }
    
    private function viewPortfolio6() {
        $query_portfolio6 = "SELECT title_h3, descript_p, link_modal, title_img, img_miniatura, alt_img, title_caption, descrip_caption, id_link_modal, h2_modal, descript_modal, display_1, img_grande, display_2, video_grande, display_3, vd_youtube_grande, title_img_grande, alt_img_grande, descript_jobs, name_cliente, category_service, tipo_contato, link_contato, icon_contato, contato_txt, link_site, site_txt FROM sites_portfolio6 LIMIT 1";
        $result_portfolio6 = $this->conn->prepare($query_portfolio6);
        $result_portfolio6->execute();
        $this->dados['portfolio6'] = $result_portfolio6->fetch();
    }
    
    private function viewPortfolio7() {
        $query_portfolio7 = "SELECT title_h3, descript_p, link_modal, title_img, img_miniatura, alt_img, title_caption, descrip_caption, id_link_modal, h2_modal, descript_modal, display_1, img_grande, display_2, video_grande, display_3, vd_youtube_grande, title_img_grande, alt_img_grande, descript_jobs, name_cliente, category_service, tipo_contato, link_contato, icon_contato, contato_txt, link_site, site_txt FROM sites_portfolio7 LIMIT 1";
        $result_portfolio7 = $this->conn->prepare($query_portfolio7);
        $result_portfolio7->execute();
        $this->dados['portfolio7'] = $result_portfolio7->fetch();
    }
    
    private function viewPortfolio8() {
        $query_portfolio8 = "SELECT title_h3, descript_p, link_modal, title_img, img_miniatura, alt_img, title_caption, descrip_caption, id_link_modal, h2_modal, descript_modal, display_1, img_grande, display_2, video_grande, display_3, vd_youtube_grande, title_img_grande, alt_img_grande, descript_jobs, name_cliente, category_service, tipo_contato, link_contato, icon_contato, contato_txt, link_site, site_txt FROM sites_portfolio8 LIMIT 1";
        $result_portfolio8 = $this->conn->prepare($query_portfolio8);
        $result_portfolio8->execute();
        $this->dados['portfolio8'] = $result_portfolio8->fetch();
    }
    
    private function viewPortfolio9() {
        $query_portfolio9 = "SELECT title_h3, descript_p, link_modal, title_img, img_miniatura, alt_img, title_caption, descrip_caption, id_link_modal, h2_modal, descript_modal, display_1, img_grande, display_2, video_grande, display_3, vd_youtube_grande, title_img_grande, alt_img_grande, descript_jobs, name_cliente, category_service, tipo_contato, link_contato, icon_contato, contato_txt, link_site, site_txt FROM sites_portfolio9 LIMIT 1";
        $result_portfolio9 = $this->conn->prepare($query_portfolio9);
        $result_portfolio9->execute();
        $this->dados['portfolio9'] = $result_portfolio9->fetch();
    }
    
}
    
