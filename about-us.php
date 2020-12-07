<!DOCTYPE html>
<html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>About Us</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel="icon" type="image/png" href="src/images/png/anne-spectre.png" />
        <link rel='stylesheet' type='text/css' media='screen' href='src/style/css/style.css'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <header class="vertical-centered-box">
            <section id="hero">
            <nav class="navbar position-fixed navbar-expand-md navbar-light">
                <a class="navbar-brand ml-4" href="index.php"><img class="rotating logo" width="40" src="src/images/png/anne-spectre.png"><span class="text-light">nne</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 16">
                        <title>menu</title>
                        <g id="Camada_2" data-name="Camada 2">
                            <rect width="26" height="2" rx="1" />
                            <rect x="8" y="14" width="18" height="2" rx="1" />
                            <rect x="11" y="7" width="15" height="2" rx="1" />
                        </g>
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto mr-4">
                        <li class="nav-item">
                            <a class="nav-link hover-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-link" href="pricing.php">Prices</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-link active" href="about-us.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-link" href="contact.php">Contact</a>
                        </li>
                        <?php
                            session_start();            
                            if(!isset($_SESSION['ID'])){
                                echo '<li class="nav-item"><a class="nav-link hover-link" href="login/index.html">Register/Login</a></li>';
                            }else{                
                                echo '<li class="nav-item"><p class="nav-link user-tag">Olá, '.$_SESSION["ID"].'<a class="logout-tag" href="dist/sair.php">Sair</a></p>  </li>';
                            }
                        ?>
                    </ul>
                </div>
            </nav>

                <div class="hero-about hero-div jumbotron jumbotron-fluid py-5 px-5">
                    <div class="container front-hero">
                        <div class="row">
                            <div class="col-md-12 my-auto text-center">
                                <h1 class="text-light">About Us</h1>
                                <p class="lead text-light my-5 text-center">Know a little about us and why the Anne project.</p>
                            </div>

                        </div>
                    </div>
                </div>

            </section>
        </header>
        <div class="content-about functions">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 content-before-img">
                        <p class="lead text-justify">
                            We are part of a course conclusion work group and Anne is exactly the target of this, being her, our course conclusion work project. It was developed by 1 programmer, 2 designers, 2 writers and 1 leader.
                        </p>
                        <p class="lead text-justify">
                            Our ambitions? We can't say for sure, who knows where the path will lead us. But this project / work was the culmination of our evolution. We have overcome barriers seen only on the horizon.
                            "... sometimes it's the people that nobody expects, who do the things that nobody can imagine." - Alan Turing - Father of computing
                        </p>
                    </div>
                    <div class="col-md-6 figure-mask">
                        <img class="image-walp-about" src="src/images/jpg/aboutus-wallpaper.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="teams-content">
            <h1 class="text-center pb-3">Our team</h1>
            <p class="sub-text lead text-center">Anne project development team.</p>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="src/images/jpg/alice_profile.jpeg">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Alice P. Trindade</h3>
                                <h4 class="title">Writer</h4>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="https://www.instagram.com/alice_trin/" target="_blank" class="fa fa-instagram" aria-hidden="true"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="src/images/jpg/andrew_profile.jpeg">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Andrew I. R. Silva</h3>
                                <h4 class="title">Client</h4>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="https://www.facebook.com/andrew.rodrigues.357/" target="_blank" class="fa fa-facebook" aria-hidden="true"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="src/images/jpg/breno_profile.jpg">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Breno A. B. Gianotti</h3>
                                <h4 class="title">Administrator / Leader</h4>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="instagram.com/brenobrenni" target="_blank" class="fa fa-instagram" aria-hidden="true"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="src/images/jpg/bizzi_profile.jpg">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Gabriel A. Bizzi</h3>
                                <h4 class="title">Developer</h4>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="https://web.facebook.com/gabriel.alves.bizzi" target="_blank" class="fa fa-facebook" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="https://www.behance.net/gabrielbizzi" target="_blank" class="fa fa-behance" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="http://gabriel-bizzi.000webhostapp.com/" target="_blank" class="fa fa-globe" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/gabriel.bizzi/" target="_blank" class="fa fa-instagram" aria-hidden="true"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="src/images/jpg/gui_profile.jpeg">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Guilherme O. Rodrigues</h3>
                                <h4 class="title">Designer</h4>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="https://instagram.com/guill_olliver?igshid=ormaknz1nwjt" target="_blank" class="fa fa-instagram" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/Guill_0liv3r?s=09" target="_blank" class="fa fa-twitter" aria-hidden="true"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="src/images/jpg/isabela_profile.jpeg">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Isabela M. S. Santos</h3>
                                <h4 class="title">Designer</h4>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="instagram.com/snflowxr/" target="_blank" class="fa fa-instagram" aria-hidden="true"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="copy">All rights reserved for <a class="text-light" target="_blank" href="http://www.neurona.link/">Neurona</a>. &copy
                <script>
                    document.write(new Date().getFullYear())
                </script>
            </div>
            <div class="socials">
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-behance" aria-hidden="true"></i>
            </div>
        </footer>
        <script>
            $(function() {
                $(document).scroll(function() {
                    var $nav = $(".navbar");
                    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
                });
            });
        </script>
    </body>

</html>