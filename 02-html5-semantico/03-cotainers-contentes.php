<!DOCTYPE html>
<!--
  Autor : Jairo R. Sousa
-->
<?php define ('BASE','http://localhost/ws_html5/02-html5-semantico/');?>
<html>
<head>
    <title>Curso Work Series - HTML5 do Jeito Certo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/oocss.css"/>
</head>

<body>
<header class="container bg-gray">
    <div class="content">
     <h1 class="main_logo">
         <a href="<?= BASE; ?>">
             Curso  Work Series - HTML5 do Jeito Certo!
         </a>

     </h1>

    <ul class="main_nav">
        <li><a href="<?= BASE; ?>/html5-semantico">Semântica</a> </li>
        <li><a href="<?= BASE; ?>/estilo-com-oocss">OOCSS</a> </li>
        <li><a href="<?= BASE; ?>/formulario-com-html5">Forms</a> </li>
        <li><a href="<?= BASE; ?>/audio-e-video">Midia </a></li>
        <li><a href="<?= BASE; ?>/geolocation-e-estore">API's</a> </li>
        <li><a href="<?= BASE; ?>/micro-dados"> Micro Dados</a></li>
        <li><a  class="btn btn-green radius boxshadow" href="#">Comprar</a> </li>
        <li><a href="<?= BASE; ?>/"> </li>
    </ul>
        <div class="clear"></div>
    </div>
</header>
         <!--conteudo-->
<footer class="bg-ligth container">

    <h1 class="fontzero">UpInside treinamentos</h1>
    <section class="main_footer content">

        <nav class="main_nav">
            <h1 class="title">Mais sobre o ws html5</h1>
            <ul>
                <li><a href="#apresentacao">Assista o video</a> </li>
                <li><a href="#apresentacao">Assista o video</a> </li>
                <li><a href="#apresentacao">Assista o video</a> </li>
            </ul>
        </nav>
        <article class="main_social">
            <h1 class="title">UpInside nas redes socias</h1>
            <ul>
                <li><a target="_blank" rel="nofollow" href="http://www.facebook.com">Facebook</a> </li>
                <li><a target="_blank" rel="nofollow" href="http://www.facebook.com">Google+</a> </li>
                <li><a target="_blank" rel="nofollow" href="http://www.facebook.com">Twitter</a> </li>

            </ul>
        </article>
        <article>
            <h1 class="fontzero">Plataforma UpInside</h1>
            <p><b>Plataforma EAD:</b>www.fbend.info</p>
            <p><b>E-mail:</b>contato@fbend.</p>
            <hr>
            <p>&copy;<?=date('Y');?> - FBend, Todos os Direito Reservados</p>
        </article>
        <div class="clear"></div>
    </section>
</footer>
</body>
</html>