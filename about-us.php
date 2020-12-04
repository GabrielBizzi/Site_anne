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
                                <p class="lead text-light my-5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum aliquam rerum eaque debitis suscipit inventore ullam natus tempore, eum quas! Eum consequatur explicabo ratione exercitationem suscipit, dolorem non beatae!</p>
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
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente autem assumenda quae consequatur pariatur voluptas. Modi, omnis inventore, recusandae, incidunt consequuntur excepturi natus odio illo cupiditate iure obcaecati perferendis pariatur?
                        </p>
                        <p class="lead text-justify">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente autem assumenda quae consequatur pariatur voluptas. Modi, omnis inventore, recusandae, incidunt consequuntur excepturi natus odio illo cupiditate iure obcaecati perferendis pariatur?
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
            <p class="sub-text lead text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias expedita asperiores aliquid illo possimus, labore perferendis? Unde officia, dolorem amet quis at odit, mollitia pariatur, possimus illum esse ut recusandae.</p>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Alice P. Trindade</h3>
                                <h4 class="title">Writer</h4>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fa fa-facebook" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-linkedin" aria-hidden="true"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="https://picsum.photos/130/130?image=839">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Andrew I. R. Silva</h3>
                                <h4 class="title">Client</h4>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fa fa-facebook" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-linkedin" aria-hidden="true"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="https://picsum.photos/130/130?image=856">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Breno A. B. Gianotti</h3>
                                <h4 class="title">Administrator / Leader</h4>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fa fa-facebook" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-linkedin" aria-hidden="true"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Gabriel A. Bizzi</h3>
                                <h4 class="title">Developer</h4>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fa fa-facebook" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-linkedin" aria-hidden="true"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="https://picsum.photos/130/130?image=836">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Guilherme O. Rodrigues</h3>
                                <h4 class="title">Designer</h4>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fa fa-facebook" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-linkedin" aria-hidden="true"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="https://picsum.photos/130/130?image=856">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Isabela M. S. Santos</h3>
                                <h4 class="title">Designer</h4>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fa fa-facebook" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-linkedin" aria-hidden="true"></a>
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