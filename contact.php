<!DOCTYPE html>
<html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Contact</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel="icon" type="image/png" href="src/images/png/anne-spectre.png" />
        <link rel='stylesheet' type='text/css' media='screen' href='src/style/css/style.css'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
                            <a class="nav-link hover-link" href="about-us.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-link active" href="contact.php">Contact</a>
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

                <div class="hero-contact hero-div jumbotron jumbotron-fluid py-5 px-5">
                    <div class="container front-hero">
                        <div class="row">
                            <div class="col-md-12 my-auto text-center">
                                <h1 class="text-light">Contact</h1>
                                <p class="lead text-light my-5 text-center">
                                    Want to take any questions? Chat about the project or plan something for the future with the schedule? Contact us!</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="form-contact">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <form method="POST" action="dist/email.php">
                                    <div class="form-row form-contact-content">
                                        <div class="col-md-6">
                                            <input type="name" class="form-control" name="name" id="name" aria-describedby="nome" placeholder="Your Name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Your e-mail" required>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn mt-3 shadow downs-btn">Submit</button>
                                      </div>
                                </form>
                            </div>
                            <div class="col-md-12 py-5 row justify-content-center">
                                <div class="socials-content-middle">
                                    <a href="#" target="_blank" class="hover-link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#" target="_blank" class="hover-link"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" target="_blank" class="hover-link"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4 text-justify align-self-center d-flex">
                                <div class="col-md-12 socials-content-left">
                                    <p><i class="fa fa-phone" aria-hidden="true"> </i> +55 (11) 9 4081-9379</p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"> </i> Rua Soledade de Minas - 89</p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"> </i> anne@neurona.link</p>
                                    <p><i class="fa fa-instagram" aria-hidden="true"></i> @anne.neurona</p>
                                    <p><i class="fa fa-facebook" aria-hidden="true"></i> Anne.Neurona</p>
                                    <p><i class="fa fa-behance" aria-hidden="true"></i> /AnneNeurona</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div id="google-maps" class="mt-4">
                                    <iframe class="shadow" width="100%" height="400px" src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; border-radius: 10px;" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        
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