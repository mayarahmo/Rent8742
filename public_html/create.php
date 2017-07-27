<?php include_once ('rootdirectory.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Rentabilidade Passiva - O site feito para te ajudar a ganhar dinheiro.</title>
    <!-- Boatstrap proper mobile options -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <!-- BOOSTRAP -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- FOLHA DE ESTILOS PRINCIPAL -->
    <link rel="stylesheet" href="includes/css/style.css">

    <!-- LOGGED-BAR STYLESHEET -->
    <link rel="stylesheet" href="includes/css/logged-bar.scss">

    <!--[if lt IE 9]>
    <![endif]-->

    <!--&lt;!&ndash; Go to www.addthis.com/dashboard to customize your tools &ndash;&gt; <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-527a74bb5779b67e"></script>-->

</head>

<body>
<?php
include_once ('logged-bar.php');

?>
<a href="#topo"><img id="anchor" src="includes/media/anchor.png"/></a>

<div id="content">
    <div class="col-xs-12 col-md-7 col-md-offset-1 content div-border-effect">
        <h1 class="post-title">Adicionar um post</h1>
        <form method="get" enctype="application/x-www-form-urlencoded" action="/">

            <p><label> Title: &nbsp;<input type="text" name="title" required></label></p>

            <p><label> Corpo:</label><BR />
                <textarea name="body" cols="80" rows="20"></textarea></p>
            <button type="submit">Adicionar</button>
        </form>
    </div>
</div>

<footer class="col-md-12 col-xs-12">
    <div class="col-md-6 col-xs-12 col-md-offset-1"><blockquote>"O rentabilidade passiva foi criado para te ajudar a ganhar dinheiro enquanto você dorme. Este site reune informação útil para te ajudar a ganhar dinheiro.".</blockquote></div>
    <div class="col-md-5 col-xs-12"><img class="col-md-offset-4" id="footer-img" src="includes/media/footer.png"/></div>
    <div class="row copyright"></div>
</footer>

<!-- JQUERY PARA O BOOSTRAP JAVASCRIPT FUNCIONAR -->
<script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
<!-- JAVASCRIPT DO BOOTSTRAp -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/includes/jquery/slideshow/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>