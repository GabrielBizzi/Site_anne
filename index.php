<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
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
                            <a class="nav-link hover-link active" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-link" href="pricing.php">Prices</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-link" href="about-us.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-link" href="contact.php">Contact</a>
                        </li>
                        <?php
                        session_start();
                        if (!isset($_SESSION['ID'])) {
                            echo '<li class="nav-item"><a class="nav-link hover-link" href="login/index.html">Register/Login</a></li>';
                        } else {
                            echo '<li class="nav-item"><p class="nav-link user-tag">Olá, ' . $_SESSION["ID"] . '<a class="logout-tag" href="dist/sair.php">Sair</a></p>  </li>';
                        }
                        ?>
                    </ul>
                </div>
            </nav>

            <div class="hero-div jumbotron jumbotron-fluid py-5 px-5">
                <div class="container front-hero">
                    <div class="row">
                        <div class="col-md-12 my-auto text-center">
                            <h1 class="text-light">Anne: The Artificial Intelligence</h1>
                            <p class="lead text-light my-5 text-left">Through artificial intelligence technologym we can have knowledge beyound superficiallity, knowledge that revolutionizes the world.</p>

                            <?php
                            session_start();
                            if (!isset($_SESSION['ID'])) {
                                echo '<a href="login/index.html" class="btn shadow download-button">Download</a>';
                                echo '<a href="login/index.html" class="btn shadow about-us-button">Documentation</a>';
                            } else {
                                echo '<a href="pricing.php" class="btn shadow download-button">Download</a>';
                                echo '<a href="src/docs/Anne_Documentation.docx" download="Anne_Documentation.docx" class="btn shadow about-us-button">Documentation</a>';
                            }
                            ?>

                        </div>
                        <div class="col-md-12 d-flex flex-column align-items-center my-auto anne-spectre">
                            <img class="image-web" src="src/images/jpg/front-end.jpeg">
                        </div>

                    </div>
                </div>
            </div>

        </section>
    </header>
    <div class="functions">
        <div class="container-fluid px-5">
            <div class="row align-items-center">
                <div class="col-md-5 content-first">
                    <h1 class="sub-tittle text-left mb-4">Discover what <img src="src/images/png/anne-spectre.png" width="30" height="35" style="margin-bottom: 12px; margin-right: -2px;">nne has.</h1>
                    <p class="lead text-left mb-4">Anne has a great ability to analyze vulnerabilities, map them and, in the same instance, present the user with statistics from the Web system.</p>
                    <a href="#" class="btn shadow downs-btn">Learn More</a>
                </div>
                <div class="col-md-7">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 mb-5">
                                <div class="container-sublime">
                                    <img src="src/images/svg/credit-card.svg" alt="Payment">
                                    <div class="flex-sublime">
                                        <span>1</span>
                                        <p class="lead">Paying</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-5">
                                <div class="container-sublime">
                                    <img src="src/images/svg/data-analysis.svg" alt="Data Statistics">
                                    <div class="flex-sublime">
                                        <span>2</span>
                                        <p class="lead">Statistics</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-5">
                                <div class="container-sublime">
                                    <img src="src/images/svg/guide.svg" alt="Open Source">
                                    <div class="flex-sublime">
                                        <span>3</span>
                                        <p class="lead">Open Source</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 content-margin-bottom">
                                <div class="container-sublime">
                                    <img src="src/images/svg/radar.svg" alt="Brute Scan">
                                    <div class="flex-sublime">
                                        <span>4</span>
                                        <p class="lead">Brute Scan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 content-margin-bottom">
                                <div class="container-sublime">
                                    <img src="src/images/svg/shield.svg" alt="Safety">
                                    <div class="flex-sublime">
                                        <span>5</span>
                                        <p class="lead">Safety</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 content-margin-bottom">
                                <div class="container-sublime">
                                    <img src="src/images/svg/settings.svg" alt="Flexible">
                                    <div class="flex-sublime">
                                        <span>6</span>
                                        <p class="lead">Flexible</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="info-more">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <img class="security-dev" src="src/images/svg/web-security.svg" width="600" alt="">
                </div>
                <div class="col-md-5 info-more-content">
                    <h1 class="sub-tittle text-right mb-4">Keep websites safe during development.</h1>
                    <p class="lead text-justify mb-4">
                        Keep your web development system safe! Everything we want, we want the good and the best. A single scan and you will find errors / vulnerabilities! If there is.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="info-more-two">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 order-2">
                    <img class="security-dev" src="src/images/svg/report-svg.svg" width="500" alt="">
                </div>
                <div class="col-md-5 info-more-content order-1">
                    <h1 class="sub-tittle text-left mb-4">Get vulnerability reporting.</h1>
                    <p class="lead text-justify mb-4">
                        Stay on top of the reports that Anne will make from your web system. It may be something not so critical, but if it is ... Good! Let me use Anne here to see if your web system is secure. Want to see it too? Download Anne and get inside!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="chimp">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center my-auto">
                    <h1 class="py-4 text-light">Did you find it cool?</h1>
                    <p class="lead py-3 text-light">
                        Want to see how it works or want to go straight to the download? Below is "one blue and one red pill", the choice is yours!</p>
                    <?php
                    session_start();
                    if (!isset($_SESSION['ID'])) {
                        echo '<a href="login/index.html" class="btn shadow download-button">Download</a>';
                        echo '<a href="login/index.html" class="btn shadow about-us-button">Documentation</a>';
                    } else {
                        echo '<a href="pricing.php" class="btn shadow download-button">Download</a>';
                        echo '<a href="src/docs/Anne_Documentation.docx" download="Anne_Documentation.docx" class="btn shadow about-us-button">Documentation</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="copy">All rights reserved for <a class="text-light" target="_blank" href="http://www.neurona.link/">Neurona</a>. &copy <script>
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
        AOS.init();
    </script>
    <script>
        $(function() {
            $(document).scroll(function() {
                var $nav = $(".navbar");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });
    </script>

    <script>
        ! function(a, b) {
            "use strict";

            function c(a) {
                a = a || {};
                for (var b = 1; b < arguments.length; b++) {
                    var c = arguments[b];
                    if (c)
                        for (var d in c) c.hasOwnProperty(d) && ("object" == typeof c[d] ? deepExtend(a[d], c[d]) : a[d] = c[d])
                }
                return a
            }

            function d(d, g) {
                function h() {
                    if (y) {
                        r = b.createElement("canvas"), r.className = "pg-canvas", r.style.display = "block", d.insertBefore(r, d.firstChild), s = r.getContext("2d"), i();
                        for (var c = Math.round(r.width * r.height / g.density), e = 0; c > e; e++) {
                            var f = new n;
                            f.setStackPos(e), z.push(f)
                        }
                        a.addEventListener("resize", function() {
                            k()
                        }, !1), b.addEventListener("mousemove", function(a) {
                            A = a.pageX, B = a.pageY
                        }, !1), D && !C && a.addEventListener("deviceorientation", function() {
                            F = Math.min(Math.max(-event.beta, -30), 30), E = Math.min(Math.max(-event.gamma, -30), 30)
                        }, !0), j(), q("onInit")
                    }
                }

                function i() {
                    r.width = d.offsetWidth, r.height = d.offsetHeight, s.fillStyle = g.dotColor, s.strokeStyle = g.lineColor, s.lineWidth = g.lineWidth
                }

                function j() {
                    if (y) {
                        u = a.innerWidth, v = a.innerHeight, s.clearRect(0, 0, r.width, r.height);
                        for (var b = 0; b < z.length; b++) z[b].updatePosition();
                        for (var b = 0; b < z.length; b++) z[b].draw();
                        G || (t = requestAnimationFrame(j))
                    }
                }

                function k() {
                    i();
                    for (var a = d.offsetWidth, b = d.offsetHeight, c = z.length - 1; c >= 0; c--)(z[c].position.x > a || z[c].position.y > b) && z.splice(c, 1);
                    var e = Math.round(r.width * r.height / g.density);
                    if (e > z.length)
                        for (; e > z.length;) {
                            var f = new n;
                            z.push(f)
                        } else e < z.length && z.splice(e);
                    for (c = z.length - 1; c >= 0; c--) z[c].setStackPos(c)
                }

                function l() {
                    G = !0
                }

                function m() {
                    G = !1, j()
                }

                function n() {
                    switch (this.stackPos, this.active = !0, this.layer = Math.ceil(3 * Math.random()), this.parallaxOffsetX = 0, this.parallaxOffsetY = 0, this.position = {
                        x: Math.ceil(Math.random() * r.width),
                        y: Math.ceil(Math.random() * r.height)
                    }, this.speed = {}, g.directionX) {
                        case "left":
                            this.speed.x = +(-g.maxSpeedX + Math.random() * g.maxSpeedX - g.minSpeedX).toFixed(2);
                            break;
                        case "right":
                            this.speed.x = +(Math.random() * g.maxSpeedX + g.minSpeedX).toFixed(2);
                            break;
                        default:
                            this.speed.x = +(-g.maxSpeedX / 2 + Math.random() * g.maxSpeedX).toFixed(2), this.speed.x += this.speed.x > 0 ? g.minSpeedX : -g.minSpeedX
                    }
                    switch (g.directionY) {
                        case "up":
                            this.speed.y = +(-g.maxSpeedY + Math.random() * g.maxSpeedY - g.minSpeedY).toFixed(2);
                            break;
                        case "down":
                            this.speed.y = +(Math.random() * g.maxSpeedY + g.minSpeedY).toFixed(2);
                            break;
                        default:
                            this.speed.y = +(-g.maxSpeedY / 2 + Math.random() * g.maxSpeedY).toFixed(2), this.speed.x += this.speed.y > 0 ? g.minSpeedY : -g.minSpeedY
                    }
                }

                function o(a, b) {
                    return b ? void(g[a] = b) : g[a]
                }

                function p() {
                    console.log("destroy"), r.parentNode.removeChild(r), q("onDestroy"), f && f(d).removeData("plugin_" + e)
                }

                function q(a) {
                    void 0 !== g[a] && g[a].call(d)
                }
                var r, s, t, u, v, w, x, y = !!b.createElement("canvas").getContext,
                    z = [],
                    A = 0,
                    B = 0,
                    C = !navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i),
                    D = !!a.DeviceOrientationEvent,
                    E = 0,
                    F = 0,
                    G = !1;
                return g = c({}, a[e].defaults, g), n.prototype.draw = function() {
                    s.beginPath(), s.arc(this.position.x + this.parallaxOffsetX, this.position.y + this.parallaxOffsetY, g.particleRadius / 2, 0, 2 * Math.PI, !0), s.closePath(), s.fill(), s.beginPath();
                    for (var a = z.length - 1; a > this.stackPos; a--) {
                        var b = z[a],
                            c = this.position.x - b.position.x,
                            d = this.position.y - b.position.y,
                            e = Math.sqrt(c * c + d * d).toFixed(2);
                        e < g.proximity && (s.moveTo(this.position.x + this.parallaxOffsetX, this.position.y + this.parallaxOffsetY), g.curvedLines ? s.quadraticCurveTo(Math.max(b.position.x, b.position.x), Math.min(b.position.y, b.position.y), b.position.x + b.parallaxOffsetX, b.position.y + b.parallaxOffsetY) : s.lineTo(b.position.x + b.parallaxOffsetX, b.position.y + b.parallaxOffsetY))
                    }
                    s.stroke(), s.closePath()
                }, n.prototype.updatePosition = function() {
                    if (g.parallax) {
                        if (D && !C) {
                            var a = (u - 0) / 60;
                            w = (E - -30) * a + 0;
                            var b = (v - 0) / 60;
                            x = (F - -30) * b + 0
                        } else w = A, x = B;
                        this.parallaxTargX = (w - u / 2) / (g.parallaxMultiplier * this.layer), this.parallaxOffsetX += (this.parallaxTargX - this.parallaxOffsetX) / 10, this.parallaxTargY = (x - v / 2) / (g.parallaxMultiplier * this.layer), this.parallaxOffsetY += (this.parallaxTargY - this.parallaxOffsetY) / 10
                    }
                    var c = d.offsetWidth,
                        e = d.offsetHeight;
                    switch (g.directionX) {
                        case "left":
                            this.position.x + this.speed.x + this.parallaxOffsetX < 0 && (this.position.x = c - this.parallaxOffsetX);
                            break;
                        case "right":
                            this.position.x + this.speed.x + this.parallaxOffsetX > c && (this.position.x = 0 - this.parallaxOffsetX);
                            break;
                        default:
                            (this.position.x + this.speed.x + this.parallaxOffsetX > c || this.position.x + this.speed.x + this.parallaxOffsetX < 0) && (this.speed.x = -this.speed.x)
                    }
                    switch (g.directionY) {
                        case "up":
                            this.position.y + this.speed.y + this.parallaxOffsetY < 0 && (this.position.y = e - this.parallaxOffsetY);
                            break;
                        case "down":
                            this.position.y + this.speed.y + this.parallaxOffsetY > e && (this.position.y = 0 - this.parallaxOffsetY);
                            break;
                        default:
                            (this.position.y + this.speed.y + this.parallaxOffsetY > e || this.position.y + this.speed.y + this.parallaxOffsetY < 0) && (this.speed.y = -this.speed.y)
                    }
                    this.position.x += this.speed.x, this.position.y += this.speed.y
                }, n.prototype.setStackPos = function(a) {
                    this.stackPos = a
                }, h(), {
                    option: o,
                    destroy: p,
                    start: m,
                    pause: l
                }
            }
            var e = "particleground",
                f = a.jQuery;
            a[e] = function(a, b) {
                return new d(a, b)
            }, a[e].defaults = {
                minSpeedX: .1,
                maxSpeedX: .7,
                minSpeedY: .1,
                maxSpeedY: .7,
                directionX: "center",
                directionY: "center",
                density: 1e4,
                dotColor: "#666666",
                lineColor: "#666666",
                particleRadius: 7,
                lineWidth: 1,
                curvedLines: !1,
                proximity: 100,
                parallax: !0,
                parallaxMultiplier: 5,
                onInit: function() {},
                onDestroy: function() {}
            }, f && (f.fn[e] = function(a) {
                if ("string" == typeof arguments[0]) {
                    var b, c = arguments[0],
                        g = Array.prototype.slice.call(arguments, 1);
                    return this.each(function() {
                        f.data(this, "plugin_" + e) && "function" == typeof f.data(this, "plugin_" + e)[c] && (b = f.data(this, "plugin_" + e)[c].apply(this, g))
                    }), void 0 !== b ? b : this
                }
                return "object" != typeof a && a ? void 0 : this.each(function() {
                    f.data(this, "plugin_" + e) || f.data(this, "plugin_" + e, new d(this, a))
                })
            })
        }(window, document),

        function() {
            for (var a = 0, b = ["ms", "moz", "webkit", "o"], c = 0; c < b.length && !window.requestAnimationFrame; ++c) window.requestAnimationFrame = window[b[c] + "RequestAnimationFrame"], window.cancelAnimationFrame = window[b[c] + "CancelAnimationFrame"] || window[b[c] + "CancelRequestAnimationFrame"];
            window.requestAnimationFrame || (window.requestAnimationFrame = function(b) {
                var c = (new Date).getTime(),
                    d = Math.max(0, 16 - (c - a)),
                    e = window.setTimeout(function() {
                        b(c + d)
                    }, d);
                return a = c + d, e
            }), window.cancelAnimationFrame || (window.cancelAnimationFrame = function(a) {
                clearTimeout(a)
            })
        }();


        particleground(document.getElementById('particles-background'), {
            dotColor: 'rgba(255, 255, 255, 0.5)',
            lineColor: 'rgba(255, 255, 255, 0.05)',
            minSpeedX: 0.075,
            maxSpeedX: 0.15,
            minSpeedY: 0.075,
            maxSpeedY: 0.15,
            density: 3000, // Uma partícula a cada n pixels
            curvedLines: false,
            proximity: 40, // Quão próximos dois pontos precisam estar antes de se unirem
            parallaxMultiplier: 15, // Baixar o número é uma parallax mais extrema
            particleRadius: 2, // Tamanho do ponto
        });
    </script>
</body>

</html>