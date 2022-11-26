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


  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo URL; ?>app/sts/assets/css/bootstrap.css">
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://use.typekit.net/rsa6tuu.css">
  <!-- SimpleLightbox plugin CSS-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="<?php echo URL; ?>app/sts/assets/css/master.css">

  <title><?php echo $this->dados['seo']['meta_title']; ?></title>

</head>

<body>