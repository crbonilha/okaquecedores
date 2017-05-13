<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Cristhian Bonilha">

    <title>OK aquecedores</title>

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Minified CSS -->
    <link rel="stylesheet" href="css/style.min.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">ok aquecedores</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Serviços</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#sales">Vendas</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#maintenance">Manutenções</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Sobre</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Equipe</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">&nbsp;</div><!-- OK aquecedores -->
                <div class="intro-heading">&nbsp;</div><!-- sua casa mais quente -->
                <!-- <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a> -->
            </div>
        </div>
    </header>

    <?php include 'php_parts/model.php'; ?>

    <!-- Services -->
    <section id="services" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Serviços</h2>
                    <h3 class="section-subheading text-muted">Realizamos as seguintes instalações:</h3>
                </div>
            </div>
            <div class="row">
                <?php include 'php_parts/services.php'; ?>
            </div>
        </div>
    </section>

    <!-- Sales -->
    <section id="sales">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Vendas</h2>
                    <h3 class="section-subheading text-muted">Vendemos as seguintes peças:</h3>
                </div>
            </div>
            <div class="row">
                <?php include 'php_parts/sales.php'; ?>
            </div>
        </div>
    </section>

    <!-- Maintenance -->
    <section id="maintenance" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Manutenção</h2>
                    <h3 class="section-subheading text-muted">Manutenção Corretiva e Preventiva!</h3>
                </div>
            </div>
            <div class="row">
                <?php include 'php_parts/maintenance.php'; ?>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="section-heading">Sobre nós</h2>
                    <h3 class="section-subheading text-muted">
                        <span style="display: block; margin-bottom: 18px;">Criada em 10 de setembro de 2015, a OK aquecedores atua na prestação de serviços de instalação e manutenção de aquecedores, pressurizadores e medidores de gás.</span>
                        <span style="display: block; margin-bottom: 18px;">Com sede no bairro Boqueirão, a OK aquecedores atende Curitiba e Região Metropolitana.</span>
                        <span style="display: block; margin-bottom: 18px;">Buscamos estabelecer uma relação transparente com nossos clientes, oferecendo suporte através de um atendimento diferenciado.</span>
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="section-heading">Nossa equipe</h2>
                    <h3 class="section-subheading text-muted">
                        Temos técnicos e mão de obra especializada e comprometida com o serviço, contribuindo assim de forma positiva para o seu conforto e também realizando serviços de acordo com as normas técnicas em vigência.
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contate-nos</h2>
                    <h3 class="section-subheading text-muted" style="color: white;">Entre em contato e seja atendido o mais breve possível.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Seu nome" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Seu e-mail" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Seu telefone" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Sua mensagem" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar Mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; OK aquecedores 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li>
                            <a 
                                href="https://www.facebook.com/OK-aquecedores-1703682403193192/"
                                target="_blank" 
                            >
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <i class="fa fa-whatsapp" aria-hidden="true" style="
                            font-size: 1.5em;
                            vertical-align: middle;
                        "></i>
                        <span class="copyright">(41) 99950-1315</span>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Minified Script -->
    <script type="text/javascript" src="js/script.min.js"></script>
</body>

</html>
