<?php

define('__REALPATH__', __DIR__);

$domain = ''; // Pour le prof
$uri = str_replace($domain, '', $_SERVER['REQUEST_URI']);
$segments = explode('/', $uri);

require_once __REALPATH__ . '/includes/tools/functions.php';

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Default meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

        <meta name='author' content='Quentin Sar, Netinq'>
        <meta name='owner' content='Quentin Sar'>
        <meta name='subject' content="Quentin Sar">

        <meta name='identifier-URL' content='exercice.sarquentin.fr'>
        <meta name="description" content="Le volley-ball, ou volleyball1, est un sport collectif, il s'agit d'un des sports les plus pratiqués dans le monde.">
        <meta name='reply-to' content='contact@exercice.sarquentin.fr'>

        <meta name='language' content='FR'>
        <meta name='target' content='all'>
        <meta name='theme-color' content='#FAEC71'>

        <link rel='shortcut icon' type='image/png' href='./assets/media/images/logo.png'>
        <link rel="apple-touch-icon" href="../assets/media/images/logo.png" />

        <!-- Twitter Card meta -->
        <meta name='twitter:card' content='summary'>
        <meta name="twitter:site" content="@Netinq" />
        <meta name="twitter:title" content="Le volley-ball, un sport de rêve" />
        <meta name='twitter:url' content='https://exercice.sarquentin.fr' />
        <meta name='twitter:domain' content='exercice.sarquentin.fr' />
        <meta name="twitter:description" content="Le volley-ball, ou volleyball1, est un sport collectif, il s'agit d'un des sports les plus pratiqués dans le monde." />
        <meta name="twitter:image" content="<?= __REALPATH__.'/assets/media/images/meta.png' ?>" />

        <!-- Open Graph meta -->
        <meta property='og:title' content='Le volley-ball, un sport de rêve' />
        <meta property="og:description" content="Le volley-ball, ou volleyball1, est un sport collectif, il s'agit d'un des sports les plus pratiqués dans le monde." />
        <meta property="og:image" content="<?= __REALPATH__ .'/assets/media/images/meta.png' ?>" />
        <meta property='og:type' content='website' />
        <meta property='og:url' content='https://exercice.sarquentin.fr' />
        <meta property='og:site_name' content='Go Volley' />
        <meta property='author' content='Quentin Sar' />
        <meta property='profile:gender' content='male' />
        <meta property="og:locale" content="fr_FR" />

        <!-- IOS meta -->
        <meta name="apple-mobile-web-app-title" content="Go Volley">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

        <title>Le volley-ball, un sport de rêve</title>

        <!-- STATIC Stylesheet -->
        <link rel="stylesheet" type="text/css" href="./assets/css/master.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/reboot.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/layouts/header.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/layouts/<?= ($uri=='/') ? 'header-home.css' : 'header-other.css'?>">
        <link rel="stylesheet" type="text/css" href="./assets/css/common/home.css">

        <!-- STATIC Scripts -->
        <!-- <script src="{{asset('js/app.js')}}"></script> -->

    </head>
    <body>
      <?php require __REALPATH__ . '/includes/common/head.php';
      echo get_page($uri, $segments);
      require __REALPATH__ . '/includes/common/footer.php'; ?>
    </body>
</html>
