<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Guilherme Lima David">
    <title>Produtos e serviços</title>

    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <header>
        <div class="bg bg-pibji d-flex justify-content-end">

            <div class="mr-5 div-logo">
                <a href="../index.php">
                    <img class="img-fluid" src="../img/logoSocialPIBJIblack.png" alt="Logo SocialPIBJI">
                </a>
            </div>

        </div>
    </header>

    <main class="container">
        <div class="row div-produtos-servicos">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
                <h2>Produtos e Serviços</h2>
            </div>
        </div>

        <section class="section-produtos-servicos text-justify">
            <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <p>
                    <span style="font-weight: 600;">
                        Qualquer transação realizada a partir desta página é de total
                        responsabilidade do fornecedor e
                        contratante.
                    </span>
                </p>
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <button type="button" class="btn btn-primary btn-options" id="buttonformPES">Inscreva-se</button>
                </div>
            </div>
        </section>

        <section class="section-produtos-servicos mt-5">
            <div class="row div-produtos-servicos">
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3 px-5">
                    <h3>Lista de Produtos e Serviços</h3>
                </div>
            </div>

            <div class="row mb-3">
                <div class="form-group col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-4">
                    <div class="card card-serv-prod">
                        <div class="card-body">
                            <h5 class="card-title">Lucas Lima Souza</h5>
                            <h6 class="card-subtitle mb-2 text-muted"><span class="font-weight-bold">Serviço:</span> Pintura</h6>
                            <p class="card-text">Trabalho como pintor de ambientes internos e externos.</p>
                            <a href="#" class="card-link"><i class="fab fa-whatsapp fa-1x"></i> 11999999999</a>
                            <a href="#" class="card-link">1199999999</a>
                        </div>
                    </div>
                </div>

                <div class="form-group col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-4">
                    <div class="card card-serv-prod">
                        <div class="card-body">
                            <h5 class="card-title">José Silva</h5>
                            <h6 class="card-subtitle mb-2 text-muted"><span class="font-weight-bold">Serviço:</span> Aulas de Inglês</h6>
                            <p class="card-text">Sou professor de inglês e estou dando aulas onlines.</p>
                            <a href="#" class="card-link"><i class="fab fa-whatsapp fa-1x"></i> 11999999999</a>
                            <a href="#" class="card-link">1199999999</a>
                        </div>
                    </div>
                </div>

                <div class="form-group col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-4">
                    <div class="card card-serv-prod">
                        <div class="card-body">
                            <h5 class="card-title">Pedro Santos</h5>
                            <h6 class="card-subtitle mb-2 text-muted"><span class="font-weight-bold">Serviço:</span> Mecânico</h6>
                            <p class="card-text">Trabalho numa borracharia e estamos na ativa.</p>
                            <a href="#" class="card-link"><i class="fab fa-whatsapp fa-1x"></i> 11999999999</a>
                            <a href="#" class="card-link">1199999999</a>
                        </div>
                    </div>
                </div>

                <div class="form-group col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-4">
                    <div class="card card-serv-prod">
                        <div class="card-body">
                            <h5 class="card-title">Alberto Nunes</h5>
                            <h6 class="card-subtitle mb-2 text-muted"><span class="font-weight-bold">Produto:</span> Fotos</h6>
                            <p class="card-text">Vendo fotos diversas emolduradas.</p>
                            <a href="#" class="card-link"><i class="fab fa-whatsapp fa-1x"></i> 11999999999</a>
                            <a href="#" class="card-link">1199999999</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>


    <!-- Modal -->
    <div class="modal fade" id="modalProdutosServicos" tabindex="-1" role="dialog"
        aria-labelledby="modalProdutosServicosLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalProdutosServicosLabel">Produtos e Serviços</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="form-group col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label for="inputNome">Nome Completo</label>
                            <input type="text" class="form-control" id="inputNome" name="inputNome" placeholder="Ex. João Dias Santos">
                        </div>
                        <div class="form-group col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label for="inputApelido">Nome Anunciado</label>
                            <input type="text" class="form-control" id="inputApelido" name="inputApelido" placeholder="Como Deseja ser Chamado no Anúncio">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <label for="inputTel1">Telefone</label>
                            <input type="text" class="form-control" id="inputTel1" name="inputTel1" placeholder="(XX) XXXXX-XXXX">
                        </div>
                        <div class="form-group col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <label for="inputTel2">Whatsapp</label>
                            <input type="text" class="form-control" id="inputTel2" name="inputTel2" placeholder="(XX) XXXXX-XXXX">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label for="inputURL">URL do seu Site / Rede Social / Meio de Divulgação</label>
                            <input type="email" class="form-control" id="inputURL"  name="inputURL" placeholder="https://www.youtube.com/channel/UCk73RPtGSKhPA-Mttf7iBOA">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label for="inputTipoAnuncio">O que você quer anunciar?</label>
                            <select class="form-control" id="inputTipoAnuncio" name="inputTipoAnuncio">
                                <option value="">Selecione</option>
                                <option value="1">Produto</option>
                                <option value="2">Serviço</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label for="inputTipoProdServ">Tipo Produto ou Serviço</label>
                            <input type="text" class="form-control" id="inputTipoProdServ" name="inputTipoProdServ" placeholder="Ex. Pintor">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <label for="inputDescricao">Descrição do serviço oferecido</label>
                            <textarea class="form-control textareasForm" id="inputDescricao" name="inputDescricao" placeholder="Ex. Trabalho pinturas de ambientes internos e externos."></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3 mb-3 px-5 form-check">
                            <input class="form-check-input" type="checkbox" id="formSendPES" name="formSendPES" unchecked>
                            <label class="form-check-label" for="formSendPES">
                                Sim, eu concordo em divulgar meus dados pessoais e estou ciente que a PIBJI não se
                                responsabiliza por qualquer negócio realizado a partir desta página.
                            </label>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary btn-options" id="buttonAcceptPES" style="display: none;"
                        onclick="$('#modalProdutosServicos').modal('hide')">Enviar</button>
                </div>
            </div>
        </div>
    </div>


    <footer class="container mb-5">
        <nav class="d-flex">
            <ul class="navbar-nav flex-row">
                <li class="dav-item my-3 ml-2">
                    <a href="https://api.whatsapp.com/send?phone=5511988711411&text=Oi%2C%20Conheci%20voc%C3%AAs%20atrav%C3%A9s%20do%20SocialPIBJI%2C%20queria%20saber%20mais%20sobre%20a%20Igreja%20e%20como%20ela%20funciona." target="_blank" class="navbar-brand"><i class="fab fa-whatsapp fa-1x"></i></a>
                </li>
                <li class="dav-item my-3 ml-2">
                    <a href="https://www.instagram.com/conexaopibji/" target="_blank" class="navbar-brand"><i class="fab fa-instagram fa-1x"></i></a>
                </li>
                <li class="dav-item my-3 ml-2">
                    <a href="https://www.youtube.com/channel/UCk73RPtGSKhPA-Mttf7iBOA" target="_blank" class="navbar-brand"><i class="fab fa-youtube fa-1x"></i></a>
                </li>
            </ul>
        </nav>
    </footer>

    
    <script src="../js/jquery/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e41ecfb143.js" crossorigin="anonymous"></script>

    <script src="../js/functions.js"></script>

</body>

</html>