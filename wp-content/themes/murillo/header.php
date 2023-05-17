<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<head>
    <?php wp_head(); $id_page = get_the_ID(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <link rel="apple-touch-icon" sizes="57x57" href="<?= get_template_directory_uri() ?>/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= get_template_directory_uri() ?>/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri() ?>/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= get_template_directory_uri() ?>/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= get_template_directory_uri() ?>/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= get_template_directory_uri() ?>/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= get_template_directory_uri() ?>/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= get_template_directory_uri() ?>/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ?>/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= get_template_directory_uri() ?>/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= get_template_directory_uri() ?>/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= get_template_directory_uri() ?>/favicon/manifest.json">
    <meta name="msapplication-TileImage" content="<?= get_template_directory_uri() ?>/favicon/ms-icon-144x144.png">
    <style> body {background: #000;}</style>
    <!-- FONTE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;0,800;1,400;1,700&display=swap" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VBZDYCTWX3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-VBZDYCTWX3');
    </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="application/ld+json">
    {
    "@context": "https://murillotorres.com/wp-content/themes/murillo/img/fotografo-murillo-torres-piracicaba-sp.webp",
    "@type": "ImageObject",
    "url": "ImgURLhere",
    "height": 350,
    "width": 350
    }
    </script>
</head>
<body id="body">

<header>
    <div class="header">
        <div class="container">
            <a href="<?= esc_url(home_url('/')); ?>" class="logotipo" alt="Murillo Torres" title="Murillo Torres">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 409.5 129" xml:space="preserve"> <g> <path d="M79,27.1c3.1,3.4,4.7,8,4.7,14v25.7H70.2V42.7c0-2.8-0.8-5-2.3-6.5c-1.5-1.6-3.6-2.3-6.1-2.3c-2.7,0-4.8,0.8-6.4,2.5 c-1.6,1.7-2.3,4-2.3,7v23.5H39.5V42.7c0-2.8-0.7-5-2.2-6.5c-1.5-1.6-3.5-2.3-6.1-2.3c-2.7,0-4.8,0.8-6.4,2.5 c-1.6,1.6-2.4,4-2.4,7.1v23.5H8.8V22.6h13.6v7.5c1.2-2.5,2.9-4.4,5.4-5.9c2.4-1.4,5.2-2.1,8.5-2.1c3.4,0,6.4,0.8,9,2.3 c2.6,1.6,4.5,3.8,5.9,6.7c1.5-2.8,3.6-4.9,6.3-6.6c2.7-1.6,5.6-2.5,8.8-2.5C71.6,22.1,75.9,23.8,79,27.1z"/> <path d="M132.5,22.6v44.3h-13.6v-8c-1.3,2.6-3.2,4.7-5.7,6.2c-2.5,1.5-5.4,2.3-8.8,2.3c-5.1,0-9.1-1.7-12.1-5.1 c-3-3.4-4.5-8-4.5-14V22.6h13.5v24c0,3,0.8,5.4,2.3,7c1.6,1.7,3.7,2.5,6.3,2.5c2.8,0,4.9-0.9,6.5-2.6c1.6-1.7,2.4-4.2,2.4-7.5V22.6 H132.5z"/> <path d="M157.8,24.5c2.7-1.6,5.6-2.4,8.7-2.4v14.5h-3.9c-3.6,0-6.4,0.8-8.4,2.3c-2,1.5-3,4.1-3,7.8v20.2h-13.6V22.6h13.6v8.3 C153,28.2,155.1,26.1,157.8,24.5z"/> <path d="M169,5c1.5-1.3,3.4-2,5.9-2c2.4,0,4.4,0.7,5.9,2c1.5,1.3,2.2,3.1,2.2,5.1c0,2-0.7,3.7-2.2,5c-1.5,1.3-3.4,2-5.9,2 c-2.4,0-4.4-0.7-5.9-2c-1.5-1.3-2.2-3-2.2-5C166.7,8,167.5,6.3,169,5z M181.6,22.6v44.3H168V22.6H181.6z"/> <path d="M200.3,8.1v58.7h-13.6V8.1H200.3z"/> <path d="M219,8.1v58.7h-13.6V8.1H219z"/> <path d="M256.7,24.7c3.5,1.8,6.2,4.5,8.2,7.9c2,3.4,3,7.5,3,12.1s-1,8.6-3,12.1c-2,3.4-4.7,6.1-8.2,7.9c-3.5,1.8-7.4,2.7-11.8,2.7 c-4.4,0-8.3-0.9-11.8-2.7c-3.5-1.8-6.2-4.5-8.2-7.9c-2-3.4-3-7.5-3-12.1s1-8.6,3-12.1c2-3.4,4.7-6.1,8.2-7.9 c3.5-1.8,7.4-2.7,11.8-2.7C249.3,22,253.2,22.9,256.7,24.7z M238.3,36.6c-1.8,1.9-2.7,4.6-2.7,8.1c0,3.5,0.9,6.2,2.7,8.1 c1.8,1.9,4,2.8,6.5,2.8c2.6,0,4.8-0.9,6.5-2.8c1.7-1.9,2.6-4.5,2.6-8.1c0-3.5-0.9-6.3-2.6-8.1c-1.7-1.9-3.9-2.8-6.5-2.8 C242.3,33.7,240.1,34.7,238.3,36.6z"/> </g> <g> <path d="M30.8,112.7v11.7h-6.1c-5.2,0-9.2-1.3-12.1-3.8c-2.9-2.6-4.3-6.8-4.3-12.7V91.5h-6V80.1h6V69.2h13.6v10.9h8.9v11.4h-8.9 V108c0,1.7,0.4,3,1.1,3.7c0.7,0.7,1.9,1,3.6,1H30.8z"/> <path d="M66.7,82.3c3.5,1.8,6.2,4.5,8.2,7.9c2,3.4,3,7.5,3,12.1s-1,8.6-3,12.1c-2,3.4-4.7,6.1-8.2,7.9c-3.5,1.8-7.4,2.7-11.8,2.7 c-4.4,0-8.3-0.9-11.8-2.7c-3.5-1.8-6.2-4.5-8.2-7.9c-2-3.4-3-7.5-3-12.1s1-8.6,3-12.1c2-3.4,4.7-6.1,8.2-7.9 c3.5-1.8,7.4-2.7,11.8-2.7C59.3,79.6,63.3,80.5,66.7,82.3z M48.4,94.1c-1.8,1.9-2.7,4.6-2.7,8.1c0,3.5,0.9,6.2,2.7,8.1 c1.8,1.9,4,2.8,6.5,2.8c2.6,0,4.8-0.9,6.5-2.8c1.7-1.9,2.6-4.5,2.6-8.1c0-3.5-0.9-6.3-2.6-8.1c-1.7-1.9-3.9-2.8-6.5-2.8 C52.4,91.3,50.2,92.2,48.4,94.1z"/> <path d="M100.8,82c2.7-1.6,5.6-2.4,8.7-2.4v14.5h-3.9c-3.6,0-6.4,0.8-8.4,2.3c-2,1.5-3,4.1-3,7.8v20.2H80.7V80.1h13.6v8.3 C96,85.7,98.2,83.6,100.8,82z"/> <path d="M131.2,82c2.7-1.6,5.6-2.4,8.7-2.4v14.5H136c-3.6,0-6.4,0.8-8.4,2.3c-2,1.5-3,4.1-3,7.8v20.2H111V80.1h13.6v8.3 C126.3,85.7,128.5,83.6,131.2,82z"/> <path d="M183,104.7h-30.7c0.2,3.3,1,5.7,2.5,7.2c1.5,1.5,3.5,2.2,5.9,2.2c2,0,3.7-0.5,5-1.5c1.3-1,2.2-2.3,2.6-3.9h14.4 c-0.6,3.1-1.9,5.9-3.8,8.4c-2,2.5-4.4,4.4-7.5,5.8c-3,1.4-6.4,2.1-10.1,2.1c-4.3,0-8.2-0.9-11.5-2.7c-3.4-1.8-6-4.5-7.9-7.9 c-1.9-3.4-2.9-7.5-2.9-12.1c0-4.7,0.9-8.7,2.8-12.1c1.9-3.4,4.5-6,7.9-7.9c3.4-1.8,7.2-2.7,11.6-2.7c4.4,0,8.3,0.9,11.6,2.7 c3.3,1.8,5.9,4.3,7.7,7.6c1.8,3.3,2.7,7,2.7,11.2C183.4,102.2,183.3,103.4,183,104.7z M167.3,92.5c-1.6-1.5-3.6-2.2-6-2.2 c-2.5,0-4.5,0.7-6.2,2.2c-1.6,1.5-2.6,3.6-2.8,6.5h17.3C169.7,96.1,169,93.9,167.3,92.5z"/> <path d="M215.8,83.8c3.4,2.8,5.5,6.5,6.3,11.1h-12.7c-0.4-1.8-1.2-3.2-2.5-4.2c-1.3-1-2.9-1.5-4.9-1.5c-1.5,0-2.7,0.3-3.5,1 c-0.8,0.7-1.2,1.6-1.2,2.8c0,1.4,0.7,2.4,2.2,3.1c1.5,0.7,3.7,1.4,6.9,2.1c3.4,0.8,6.2,1.6,8.3,2.4c2.2,0.8,4,2.2,5.6,4 c1.6,1.9,2.4,4.3,2.4,7.5c0,2.5-0.7,4.8-2.1,6.7c-1.4,2-3.4,3.5-6,4.6c-2.6,1.1-5.7,1.7-9.2,1.7c-6,0-10.8-1.3-14.4-4 c-3.6-2.6-5.8-6.4-6.6-11.3h13.1c0.2,1.9,1,3.4,2.4,4.4c1.4,1,3.2,1.5,5.4,1.5c1.5,0,2.7-0.4,3.5-1.1c0.8-0.7,1.2-1.7,1.2-2.8 c0-1.5-0.7-2.6-2.2-3.3c-1.5-0.7-3.8-1.4-7.1-2.1c-3.3-0.7-6-1.4-8.1-2.2c-2.1-0.8-3.9-2.1-5.5-3.8c-1.5-1.8-2.3-4.2-2.3-7.3 c0-4,1.5-7.2,4.5-9.6c3-2.5,7.3-3.7,12.8-3.7C208,79.6,212.5,81,215.8,83.8z"/> <path d="M237.8,110.8v13.6h-14v-13.6H237.8z"/> <path d="M275,84.3c3.9,3.1,6.3,7.5,7.3,13h-14.4c-0.4-1.9-1.3-3.4-2.6-4.4c-1.3-1.1-3-1.6-5-1.6c-2.4,0-4.3,0.9-5.9,2.8 c-1.5,1.9-2.3,4.6-2.3,8.2c0,3.6,0.8,6.3,2.3,8.2c1.5,1.9,3.5,2.8,5.9,2.8c2,0,3.7-0.5,5-1.6c1.3-1.1,2.2-2.5,2.6-4.4h14.4 c-1,5.5-3.4,9.8-7.3,13c-3.9,3.1-8.6,4.7-14.4,4.7c-4.3,0-8.2-0.9-11.5-2.7c-3.4-1.8-6-4.5-7.9-7.9c-1.9-3.4-2.9-7.5-2.9-12.1 c0-4.7,0.9-8.7,2.8-12.1c1.9-3.4,4.5-6,7.9-7.9c3.4-1.8,7.2-2.7,11.6-2.7C266.3,79.6,271.1,81.1,275,84.3z"/> <path d="M317.6,82.3c3.5,1.8,6.2,4.5,8.2,7.9c2,3.4,3,7.5,3,12.1s-1,8.6-3,12.1c-2,3.4-4.7,6.1-8.2,7.9c-3.5,1.8-7.4,2.7-11.8,2.7 c-4.4,0-8.3-0.9-11.8-2.7c-3.5-1.8-6.2-4.5-8.2-7.9c-2-3.4-3-7.5-3-12.1s1-8.6,3-12.1c2-3.4,4.7-6.1,8.2-7.9 c3.5-1.8,7.4-2.7,11.8-2.7C310.2,79.6,314.2,80.5,317.6,82.3z M299.3,94.1c-1.8,1.9-2.7,4.6-2.7,8.1c0,3.5,0.9,6.2,2.7,8.1 c1.8,1.9,4,2.8,6.5,2.8s4.8-0.9,6.5-2.8c1.7-1.9,2.6-4.5,2.6-8.1c0-3.5-0.9-6.3-2.6-8.1c-1.7-1.9-3.9-2.8-6.5-2.8 S301.1,92.2,299.3,94.1z"/> <path d="M401.8,84.7c3.1,3.4,4.7,8,4.7,14v25.7H393v-24.1c0-2.8-0.8-5-2.3-6.5c-1.5-1.6-3.6-2.3-6.2-2.3c-2.7,0-4.8,0.8-6.4,2.5 c-1.6,1.7-2.3,4-2.3,7v23.5h-13.6v-24.1c0-2.8-0.7-5-2.2-6.5c-1.5-1.6-3.5-2.3-6.1-2.3c-2.7,0-4.8,0.8-6.4,2.5 c-1.6,1.6-2.4,4-2.4,7.1v23.5h-13.6V80.1h13.6v7.5c1.2-2.5,2.9-4.4,5.4-5.9c2.4-1.4,5.2-2.1,8.5-2.1c3.4,0,6.4,0.8,9,2.3 c2.6,1.6,4.5,3.8,5.9,6.7c1.5-2.8,3.6-4.9,6.3-6.6c2.7-1.6,5.6-2.5,8.8-2.5C394.4,79.6,398.7,81.3,401.8,84.7z"/> </g> </svg>
            </a> 
            <div class="menu-open"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M 2 5 L 2 7 L 22 7 L 22 5 L 2 5 z M 2 11 L 2 13 L 22 13 L 22 11 L 2 11 z M 2 17 L 2 19 L 22 19 L 22 17 L 2 17 z"></path></svg></div>
            <div class="menu-close"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50"> <path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"></path> </svg></div>
            <nav>
                <ul class="menu-mobile">
                    <li><a href="<?= esc_url(home_url('/')); ?>">Home</a></li>
                    <li><a href="<?= esc_url(home_url('/quem-sou-eu')); ?>">Quem sou eu</a></li>
                    <li><a href="<?= esc_url(home_url('/portfolio')); ?>">Portfólio</a></li>
                    <li><a href="<?= esc_url(home_url('/login')); ?>" class="btn btn-outline-white">Área do Cliente</a></li>
                    <li><a href="<?= esc_url(home_url('/orcamento')); ?>" class="btn">Solicite um orçamento</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>