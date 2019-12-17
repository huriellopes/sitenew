@extends('layout.site')

@section('menu')
    @include('site.includes.menu')
@stop

@section('content')
    <div class="inicio" id="inicio">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12"></div>
            </div>
        </div>
    </div>

    <div class="sobre" id="sobre">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2>Sobre</h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 col-sm-12 tet-justify">
                    <p>
                        A empresa Huriel Lopes surgiu em novembro de 2018, com a necessidade e o intuito de prestar serviços de desenvolvimento web, mobile e consultorias para empresas de tecnologia e empresas que precisam de uma forma de comunicação com seus clientes. Huriel Lopes é graduado em Análise e Desenvolvimento de Sistemas pela Centro Universitário do Distrito Federal - UDF, nascido em brasília, é Analista de Sistemas e CEO da empresa!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="equipe" id="equipe">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2>Equipe</h2>
                </div>
            </div>

            <div class="row mt-5 justify-content-md-center">
                <!-- BEGIN CARD HURIEL LOPES -->
                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2013/07/13/10/07/man-156584_960_720.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Huriel Lopes</h5>
                            <h6 class="card-subtitle text-center">CEO e Desenvolvedor</h6>
                        </div>
                    </div>
                </div>
                <!-- END CARD HURIEL LOPES -->

                <!-- BEGIN CARD HiGO LAGO -->
                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2013/07/13/10/07/man-156584_960_720.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Higo Lago</h5>
                            <h6 class="card-subtitle text-center">Desenvolvedor</h6>
                        </div>
                    </div>
                </div>
                <!-- END CARD HiGO LAGO -->

                <!-- BEGIN CARD LEORNADO LOPES -->
                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2013/07/13/10/07/man-156584_960_720.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Leornado Matos</h5>
                            <h6 class="card-subtitle text-center">Desenvolvedor</h6>
                        </div>
                    </div>
                </div>
                <!-- END CARD LEORNADO LOPES -->
            </div>
        </div>
    </div>

    <div class="servicos" id="servicos">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2>Serviços</h2>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Desenvolvimento de WebSites</h5>
                            <p class="card-text">Desevnolvimento de websites para empresas de diversos ramos para divulgação de seus trabalhos, possibilitando assim maior visibilidade no mercado.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Desenvolvimento de Sistemas</h5>
                            <p class="card-text">Desenvolvemos sistemas web altamente seguros e fácil usuabilidade, pensando no usuário, pensando na proteção de dados de consumidores.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Desenvolvimento Mobile</h5>
                            <p class="card-text">Desenvolvimento de aplicativos mobiles, com fácil usuabilidade, agregando no trabalho da empresa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact">
        <div class="container">
            <div class="row text-center mt-5">
                <div class="col-md-12 col-sm-12">
                    <h2>Contato</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <form action="" method="POST">
                        <div class="form-row">
                            <div class="col-md-12 col-sm-12 form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 col-sm-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 col-sm-12 form-group">
                                <label for="message">Mensagem</label>
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 col-sm-12 form-group text-rigth">
                                <button type="submit" class="btn btn-outline-primary">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-sm-12">
                    <ul>
                        <li>Huriel Lopes</li>
                        <ul>
                            <li>Telefone: (61) 9 8303-8556</li>
                            <li>Email: huriel.contato@huriellopes.com</li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-12">
                    <nav class="nav flex-column">
                        <a class="nav-link" href="#inicio">Inicio</a>
                        <a class="nav-link" href="#sobre">Sobre</a>
                        <a class="nav-link" href="#equipe">Equipe</a>
                        <a class="nav-link" href="#servicos">Serviços</a>
                        <a class="nav-link" href="#contato">Contato</a>
                        <a class="nav-link" href="#">Blog</a>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12"></div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12 col-sm-12 text-center">
                    <p>&copy; Todos os Direitos Reservados - <strong>CNPJ: </strong>32.031797/0001-80 - 2019/2020</p>
                </div>
            </div>
        </div>
    </div>
@stop
