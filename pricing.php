<!DOCTYPE html>
<html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Pricing</title>
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
                            <a class="nav-link hover-link active" href="pricing.php">Prices</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-link" href="about-us.php">About us</a>
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
                                <h1 class="text-light">Prices</h1>
                                <p class="lead text-light my-5 text-center">
                                  Want to do a few scans for a home office job? Or do you want unlimited scans for a large company? Choose one of the plans you like best, make the payment and you will receive the download to download and later install Anne!</p>
                            </div>

                        </div>
                    </div>
                </div>

            </section>
        </header>
        
        <div class="functions pricing-table-content">
            <div class="container">
              <div class="row">
                <div class="pricing-tables attached">
                  <div class="row">
                    <div class="col-sm-4 col-md-4">
                      <div class="plan first">
                        <div class="head">
                          <h2>Starter</h2>
                        </div>
                        <ul class="item-list">
                          <li><strong>5</strong> Scan Websites</li>
                          <li>
                            <strong>Open Source</strong> No</li>
                          <li><strong>Repair Vulnerabilities</strong> No </li>
                          <li><strong>Support</strong> No</li>
                        </ul>
                        <div class="price">
                          <h3><span class="symbol">$</span>5</h3>
                          <h4>per month</h4>
                        </div>
                        <script  src="https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js"
                          data-preference-id="516119354-34f0479b-da27-4734-80ef-82e4164b47a2">
                          </script>
                          
                          
                      </div>
                    </div>
                    <div class="col-sm-4 col-md-4 ">
                      <div class="plan recommended">
                        <div class="head">
                          <h2>Full</h2>
                        </div>
                        <ul class="item-list">
                          <li><strong>15</strong> Scan Websites</li>
                          <li><strong>Open Source</strong> No</li>
                          <li><strong>Repair Vulnerabilities</strong> Yes</li>
                          <li><strong>Support</strong> Yes</li>
                        </ul>
                        <div class="price">
                          <h3><span class="symbol">$</span>15</h3>
                          <h4>per month</h4>
                        </div>
                        <script  src="https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js"
                          data-preference-id="516119354-34f0479b-da27-4734-80ef-82e4164b47a2">
                          </script>
                      </div>
                    </div>
                    <div class="col-sm-4 col-md-4  ">
                      <div class="plan last">
                        <div class="head">
                          <h2>Pro</h2>
                        </div>
                        <ul class="item-list">
                          <li><strong>Ilimited</strong> Scan Websites</li>
                          <li><strong>Open Source</strong> Yes</li>
                          <li><strong>Repair Vulnerabilities</strong> Yes</li>
                          <li><strong>Support</strong> Yes</li>
                        </ul>
                        <div class="price">
                          <h3><span class="symbol">$</span>29</h3>
                          <h4>per month</h4>
                        </div>
                        <script  src="https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js"
                          data-preference-id="516119354-34f0479b-da27-4734-80ef-82e4164b47a2">
                          </script>
                      </div>
                    </div>
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