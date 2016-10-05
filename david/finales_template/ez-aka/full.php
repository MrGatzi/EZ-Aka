<!DOCTYPE html>
<html lang="en">

<head>

    <?php Loader::element('header_required') ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EZ - Akademie</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= $view->getThemePath() ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= $view->getThemePath() ?>/css/ezaka.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Tauri" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="<?= $c->getPageWrapperClass() ?>">

    <div class="brand homebutton"><img class="img-responsive logo" src="<?= $view->getThemePath() ?>/img/logo.png" alt="logo"></img> EZ - Akademie </div>
    <div class="address-bar">VITALE  Menschen  •  Unternehmen  •  Gemeinden</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="<?= $view->getThemePath() ?>/full.php">EZ - Akademie</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="homebutton">Startseite</a>
                    </li>
                    <li>
                        <a class="aboutbutton">Über uns</a>
                    </li>
                    <li>
                        <a class="servicesbutton">VITALE Angebote</a>
                    </li>
                    <li>
                        <a class="howtobutton">VITAL werden</a>
                    </li>
                    <li>
                        <a class="contactbutton">Kontakt</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- HOME SECTION -->
    <div class="container home">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="<?= $view->getThemePath() ?>/img/slider1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?= $view->getThemePath() ?>/img/slider2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?= $view->getThemePath() ?>/img/slider3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Herzlich Wilkommen bei der</small>
                    </h2>
                    <h1 class="brand-name">EZ - Akademie</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>
                            <strong>Eglseer und Zellermayr</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>
                          <?php
                            $a = new Area('Überschrift Block1');
                            $a->display($c);
                          ?>
                        </strong>
                    </h2>
                    <hr>
                    <hr class="visible-xs">
                    <?php
                      $a = new Area('Content Block1');
                      $a->display($c);
                    ?>
                  </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>
                          <?php
                            $a = new Area('Überschrift Block2');
                            $a->display($c);
                          ?>
                        </strong>
                    </h2>
                    <hr>
                    <?php
                      $a = new Area('Content Block2');
                      $a->display($c);
                    ?>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container home -->

    <!-- ABOUT SECTION -->
    <div class="container about">

      <div class="row">
          <div class="box">
              <div class="col-lg-12">
                  <hr>
                  <h2 class="intro-text text-center">
                      <strong>
                        <?php
                          $a = new Area('Überschrift About');
                          $a->display($c);
                        ?>
                      </strong>
                  </h2>
                  <hr>
                  <hr class="visible-xs">
                  <?php
                    $a = new Area('Content About');
                    $a->display($c);
                  ?>
                </div>
          </div>
      </div>

      <div class="row">
          <div class="box">
              <div class="col-lg-12">
                  <hr>
                  <h2 class="intro-text text-center">
                      <strong>
                        <?php
                          $a = new Area('Überschrift Team');
                          $a->display($c);
                        ?>
                      </strong>
                  </h2>
                  <hr>
                  <hr class="visible-xs">
                  <?php
                    $a = new Area('Content Team');
                    $a->display($c);
                  ?>
                </div>
          </div>
      </div>

    </div>
    <!-- /.container about -->

    <!-- SERVICES SECTION -->
    <div class="container services">

      <div class="row">
          <div class="box">
              <div class="col-lg-12">
                  <hr>
                  <h2 class="intro-text text-center">
                      <strong>
                        <?php
                          $a = new Area('Überschrift Services');
                          $a->display($c);
                        ?>
                      </strong>
                  </h2>
                  <hr>
                  <hr class="visible-xs">
                  <?php
                    $a = new Area('Content Services');
                    $a->display($c);
                  ?>
                </div>
          </div>
      </div>
    </div>
    <!-- /.container services -->

    <!-- HOWTO SECTION -->
    <div class="container howto">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">So
                        <strong>werden Sie VITAL</strong>
                    </h2>
                    <hr>
                </div>

            			<div class="container">
            				<div class="row">
            					<div class="col-lg-12 text-center">
            						<h2 class="intro-text">Und so funktioniert es:</h2>
            					</div>
            				</div>
            				<div class="row">
            					<div class="col-lg-12">
            						<ul class="timeline">
            							<li>
                            <?php
                              $a = new Area('timeline bild1');
                              $a->display($c);
                            ?>
            								<div class="timeline-panel">
                              <?php
                                $a = new Area('timeline bild1 content');
                                $a->display($c);
                              ?>
            									<!--<div class="timeline-heading">
            										<h4>Schritt 1</h4>
            										<h4 class="subheading">Kurzbeschreibung</h4>
            									</div>
            									<div class="timeline-body">
            										<p class="text-muted">Längerer Text bei Bedarf.</p>
            									</div>-->
            								</div>
            							</li>
            							<li class="timeline-inverted">
                              <?php
                                $a = new Area('timeline bild2');
                                $a->display($c);
                              ?>
            								<div class="timeline-panel">
                              <?php
                                $a = new Area('timeline bild1 content');
                                $a->display($c);
                              ?>
            								</div>
            							</li>
            							<li>
                              <?php
                                $a = new Area('timeline bild3');
                                $a->display($c);
                              ?>
            								<div class="timeline-panel">
                              <?php
                                $a = new Area('timeline bild1 content');
                                $a->display($c);
                              ?>
            								</div>
            							</li>
            							<li class="timeline-inverted">
                              <?php
                                $a = new Area('timeline bild4');
                                $a->display($c);
                              ?>
            								<div class="timeline-panel">
                              <?php
                                $a = new Area('timeline bild1 content');
                                $a->display($c);
                              ?>
            								</div>
            							</li>
            							<li>
                              <?php
                                $a = new Area('timeline bild5');
                                $a->display($c);
                              ?>
            								<div class="timeline-panel">
                              <?php
                                $a = new Area('timeline bild1 content');
                                $a->display($c);
                              ?>
            								</div>
            							</li>
            						</ul>
            					</div>
            				</div>
            			</div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- /.container howto -->

    <!-- CONTACT SECTION -->
    <div class="container contact">

        <<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>
                          <?php
                            $a = new Area('Überschrift ContactMap');
                            $a->display($c);
                          ?>
                        </strong>
                    </h2>
                    <hr>
                    <hr class="visible-xs">
                    <?php
                      $a = new Area('Content ContactMap');
                      $a->display($c);
                    ?>
                  </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Tritt mit uns in
                        <strong>Kontakt</strong>
                    </h2>
                    <hr>
                    <p>Schreiben Sie uns Ihre Meinungen, Wünsche, Anregungen oder einfach nur eine Frage.</p>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Adresse</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Telefon</label>
                                <input type="tel" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Nachricht</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Senden</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container contact-->

    <footer>
        <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <img class="img-responsive gemeinwohl" src="<?= $view->getThemePath() ?>/img/gemeinwohl.png" alt="gemeinwohl" />
                <img class="img-responsive cert" src="<?= $view->getThemePath() ?>/img/cert.png" alt="cert" />
              </div>
              <div class="col-lg-12 text-center">
                <p>Copyright &copy; EZ-Akademie 2016</p>
              </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?= $view->getThemePath() ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= $view->getThemePath() ?>/js/bootstrap.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= $view->getThemePath() ?>/js/bootstrap.min.js"></script>

    <!-- Swagmode JS -->
    <script src="<?= $view->getThemePath() ?>/js/swagmode.js"></script>

    <!-- Script to Activate the Carousel and Swagmode -->
    <script>
    //hide all except home = swag mode on
    //for one page use delete the next three lines
    //swagmode code by David Obermann
    $('.about').hide("slow");
    $('.contact').hide("slow");
    $('.home').show("slow");
    $('.services').hide("slow");
    $('.howto').hide("slow");

    swagmodeon();

    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });

    </script>

<?php Loader::element('footer_required') ?>

</div>

</body>

</html>
