<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAO-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="scripts\script.js"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Inicio</title>
</head>

<body>

    <?php include 'php\cabecalho.php'; ?> <!--Chamada do CABEÇALHO-->

    <!--Destaque-->
    <section class="hero-img">
        <div class="overlay">
            <div class="container largura">
                <!-- Hero Section -->
                <div class="row align-items-center espacamentoSuperior">
                    <div class="col-xl-5">
                        <div class="">
                            <!-- Caption -->
                            <h1>Valecor Seguros</h1>
                            <p class="">
                                Somos a corretora que você procura para cuidar e proteger sua família e seu patrimônio
                            </p>
                            <!-- List -->
                            <div class="d-flex">
                                <a href="#" class="btn coteja" target="_blank" title="">Cote Já</a>
                                <a href="#" class="btn btn-custom d-flex align-items-center ms-2" title="">
                                    Saiba Mais
                                    <i class="material-icons ms-1">chevron_right</i>
                                </a>
                            </div>
                            <div class="mt-5 d-flex">
                                <span class="me-4 d-flex align-items-center"><i class="material-icons">check_circle</i> Confiança</span>
                                <span class="me-4 d-flex align-items-center"><i class="material-icons">check_circle</i> Eficiência</span>
                                <span class="me-4 d-flex align-items-center"><i class="material-icons">check_circle</i> Dedicação</span>
                            </div>
                        </div>
                    </div>



                    <div class="offset-xl-1 col-xl-6 col-md-12 d-flex justify-content-end">
                        <div>
                            <a href="#" target="_blank" title=""><img src="img\corretor-de-seguros.png" alt="" class="img-fluid rounded-3 smooth-shadow-md" width="525" height="646"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Fim Destaque-->

    <!--Cards-->
    <section class="card">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 col-lg-4">
                    <div class="bloco01">
                        <div>
                            <i class="material-icons icon-card">person</i>
                            <p>As melhores soluções para você</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="bloco02">
                        <div>
                            <i class="material-icons icon-card-black">store</i>
                            <p>As melhores soluções para seu negócio</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="bloco03">
                        <div>
                            <i class="material-icons icon-card">groups</i>
                            <p>As melhores soluções para seu colaborador</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Fim de Cards-->

    <!--Sobre-->
    <section class="sobre espacamentoSobre">
        <div class="container align-items-center largura">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6">
                    <a href="#" target="_blank" title=""><img src="img/secao-2.png" alt="" class="img-fluid rounded-3 
                        smooth-shadow-md" width="525" height="646"></a>
                </div>
                <div class="col-md-12 col-lg-6">
                    <h3>SERVIÇO EXCEPCIONAL</h3>
                    <h2>Descubra a diferença da Valecor Seguros</h2>
                    <p>Nossos especialistas trazem consigo conhecimento profundo do setor para fornecer a clareza e as estratégias necessárias para enfrentar o futuro com confiança.</p>

                    <p>Sabemos que Competência e Expertise no gerenciamento de riscos é a estratégia mais eficaz para proteger e expandir seu patrimônio, por isso, nossos serviços são os ideais para você que quer se manter seguro, protegido e multiplicando seu dinheiro.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim de Sobre -->

    <!-- Seção de Serviços -->
<section class="servicos">
    <div class="container largura servicosContainer">
        <div>
            <h2>Nossos Serviços</h2>
            <p>Proteção, essa palavra nos move para lhe proporcionar um futuro com mais tranquilidade</p>
            <div class="row align-items-center">
                <div class="colunaImg">
                    <div class="cardServico servico01 col-md-4 col-lg-3">
                        <div class="fundoCard">
                            <p>Seguro<br> Viagem</p>
                        </div>
                        <div class="card-costa text-center">
                            <p>O seguro fundamental para proteger seu veículo e de terceiros contra imprevistos. Confira com os nossos especialistas a apólice certa para você</p>
                        </div>
                    </div>
                    <div class="cardServico servico02 col-md-4 col-lg-3">
                        <div class="fundoCard">
                            <p>Seguro<br> Empresarial</p>
                        </div>
                    </div>
                    <div class="cardServico servico03 col-md-4 col-lg-3">
                        <div class="fundoCard">
                            <p>Seguro<br> Residencial</p>
                        </div>
                    </div>
                    <div class="cardServico servico04 col-md-4 col-lg-3">
                        <div class="fundoCard">
                            <p>Seguro<br> Saude</p>
                        </div>
                    </div>
                </div>
                <div class="colunaImg">
                    <div class="cardServico servico05 col-md-4 col-lg-3">
                        <div class="fundoCard">
                            <p>Seguro<br> Viagem</p>
                        </div>
                    </div>
                    <div class="cardServico servico06 col-md-4 col-lg-3">
                        <div class="fundoCard">
                            <p>Seguro<br> Vida</p>
                        </div>
                    </div>
                    <div class="cardServico servico07 col-md-4 col-lg-3">
                        <div class="fundoCard">
                            <p>consorcio</p>
                        </div>
                    </div>
                    <div class="cardServico servico08 col-md-4 col-lg-3">
                        <div class="fundoCard">
                            <p>investimento</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fim de Serviços -->


    <!-- CTA -->
    <section class="CTA d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row containerCTA">
                <div class="col-md-12 col-lg-4">
                    <h2>Aqui você está seguro</h2>
                </div>
                <div class="col-md-12 col-lg-8">
                    <p>Proteja o que é mais importante para seguir em frente</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim de CTA -->
    <!--contato-->
    <section class="contatoHome">
        <div class="container align-items-center larguraHome">
            <div class="row espacamentoSobr align-items-center">
                <div class="col-md-12 col-lg-6">
                    <a href="#" target="_blank" title=""><img src="img\young-businessman-happy-expression-e1675660386350.png" alt="" width="700px" height="891px" class="imgHome img-fluid rounded-3 smooth-shadow-md"></a>
                </div>
                <div class="col-md-12 col-lg-6">
                    <i class="material-icons icone-perguntas">admin_panel_settings</i>
                    <h2 class="py-4">Perguntas? Estamos Prontos</h2>
                    <p>Nós valorizamos a comunicação e o contato próximo com nossos clientes e estamos sempre disponíveis para atendê-los. Se você tiver alguma dúvida ou precisar de mais informações sobre nossos serviços, entre em contato conosco clicando no botão abaixo:</p>

                    <a href="#" class="btn btnContato my-4" target="_blank" title=""><i class="bi bi-cart-check-fill"></i> Saiba Mais</a>

                </div>
            </div>
        </div>
    </section>
    <!-- Fim de Contato -->

    <!-- Parceiros -->
    <section class="parceiros">
        <div class="container largura">
            <div class="row align-items-center">
                <div class="col-md-4 col-lg-3">
                    <h2>Nossos Parceiros</h2>
                </div>
                <div class="col-md-8 col-lg-9 d-flex flex-wrap justify-content-end">
                    <img src="img/Parceiros/allianz-logo-0-e1675696089626.png" alt="Allianz" class="img-fluid imgParceiros mr-4 mb-4">
                    <img src="img/Parceiros/amil-logo-8-e1675695744393.png" alt="Amil" class="img-fluid imgParceiros mr-4 mb-4">
                    <img src="img/Parceiros/bradesco-seguros.png" alt="Bradesco Seguros" class="img-fluid imgParceiros mb-4">
                </div>
            </div>
        </div>
    </section>
    <!-- Fim de Parceiros -->

    <?php include 'php\rodape.php'; ?>

    <!--Script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>