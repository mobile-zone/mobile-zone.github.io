<?php

include "configuration/manipulation.php";
$articles = afficherArticle();


?>

<!DOCTYPE html>
<html lang="fr">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>blogTechnologie - Accueil</title>
    <meta name="keywords" content="Technologie">
    <meta name="description" content="Nous partageons des articles d'actualités et de gadgets.">
    <meta name="author" content="">
    <meta property="og:url" content="https://mobile-zone.github.io/">
    <meta property="og:image" content="https://mobile-zone.github.io/images/numerique.jpg">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="css/colors.css" rel="stylesheet">

    <!-- Version Tech CSS for this template -->
    <link href="css/version/tech.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        body {
          padding: 25px;
          background-color: white;
          color: black;
          font-size: 25px;
        }
        
        .dark-mode {
          background-color: black;
          color: white;
          transition: 2000ms ease-in-out;
        }
    </style>

</head>
<body>

    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/version/tech-logo.png" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tech-category-01.html">Gadgets</a>
                            </li>                   
                            <li class="nav-item">
                                <a class="nav-link" href="tech-category-02.html">Vidéos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tech-category-03.html">Micrologiciel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tech-contact.html">Contactez-nous</a>
                            </li>
                            </ul>
                           
                            <a onclick="myFunction()"><small><i class="fa fa-gear"></i></small><span class="sr-only">(current)</span></a>
                            <a class="nav-link" href="login.php"><small><i class="fa fa-users"></i></small><span class="sr-only">(current)</span></a>
                           
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->
        
      
        <section class="section first-section">
        
            <div class="container-fluid">

                <div class="masonry-blog clearfix">
                <?php $i = 0; foreach ($articles as $article){
                $i++;
                ?>
                    <div class="first-slot">

                        <div class="masonry-box post-media">
                             <img src="<?= $article->photo ?>" alt="" class="img-fluid" style= "height: 350px">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="" title=""><?= $article->categorie ?></a></span>
                                        <h4 style="font-size: 20px;"><a href="" title=""><?= $article->titre ?></a></h4>
                                        <small><?= $article->pubdate ?></a></small>
                                        <small><?= $article->auteur ?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end first-side -->        
                    <?php if($i == 2) { break; } }?>        
        </section>

        <section class="section" id="interrupteur-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left"><a href="#" id="interrupteur-3"><u>Actualités récentes</u></a></h4>
                            </div><!-- end blog-top -->

                            <div class="blog-list clearfix">
                           <?php include "Actualites_recentes.php"; ?>
                                <hr class="invis">
                                <br>
                                <br>
                                <h2><a href="#" id="interrupteur-2">Page d'actualités en cours de construction</a></h2>

                                <hr class="invis">
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="widget">
                            <div class="footer-text text-left">
                                <a href="index.html"><img src="images/version/tech-footer-logo.png" alt="" class="img-fluid"></a>
                                <p>blogTechnologie est un blog technologique, nous partageons des articles d'actualités et de gadgets.</p>
                                
                                <hr class="invis">

                                <div class="newsletter-widget text-left">
                                    <form class="form-inline">
                                        <input type="text" class="form-control" placeholder="Entrez votre adresse e-mail">
                                        <button type="submit" class="btn btn-primary">Soumettre</button>
                                    </form>
                                </div><!-- end newsletter -->
                            </div><!-- end footer-text -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="copyright" style="color: white">&copy; <small>blogTechnologie.</small></div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop">Haut</div>
        
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        function myFunction() {
            var element = document.body;
            var section = document.querySelector("#interrupteur-1");
            var h2= document.querySelector("#interrupteur-2");
            var h4= document.querySelector("#interrupteur-3");
            element.classList.toggle("dark-mode");
            section.classList.toggle("dark-mode");
            h2.classList.toggle("dark-mode");
            h4.classList.toggle("dark-mode");
         }</script>

</body>
</html>