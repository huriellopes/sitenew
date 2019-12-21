@extends('layout.site')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/PNotifyBrightTheme.css') }}">
@stop

@section('menu')
    @include('site.includes.menu')
@stop

@section('content')
    <div class="inicio" id="inicio">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 id="texto" class="texto"></h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <!-- BEGIN CONTENT -->
            <div class="col-md-8 col-sm-12">
                <!-- BEGIN ABOUT -->
                <div class="sobre" id="sobre">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <h2>Sobre</h2>
                                <h6 class="text-muted">Um pouco sobre a empresa</h6>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12 col-sm-12">
                                <p class="text-justify">A empresa Huriel Lopes surgiu em novembro de 2018, com a necessidade e o intuito de prestar serviços de desenvolvimento web, mobile e consultorias para empresas de tecnologia e empresas que precisam de uma forma de comunicação com seus clientes. Huriel Lopes é graduado em Análise e Desenvolvimento de Sistemas pela Centro Universitário do Distrito Federal - UDF, nascido em brasília, é Analista de Sistemas e CEO da empresa!</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- END ABOUT -->
                
                <!-- BEGIN EQUIPE -->
                <div class="equipe" id="equipe">
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-md-12 col-sm-12 text-center">
                                <h2>Equipe</h2>
                                <h6 class="text-muted">Integrantes da equipe</h6>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-4 col-sm-12 mb-3">
                                <div class="card">
                                    <img src="{{ asset('assets/img/huriellopes.png') }}" class="card-img-top" alt="Huriel Lopes" />
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-center">Huriel Lopes</h5>
                                        <h6 class="card-subtitle text-center">CEO e Desenvolvedor Web</h6>
                                        <a href="https://github.com/huriellopes" target="_blank" title="Portfolio" class="mt-2">
                                            <i class="fab fa-github fa-1x"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/in/huriellopes/" target="_blank" title="Perfil Linkedin" class="mt-2">
                                            <i class="fab fa-linkedin fa-1x"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 mb-3">
                                <div class="card">
                                    <img src="{{ asset('assets/img/higosoares.jpg') }}" class="card-img-top" alt="Higo Lago" />
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-center">Higo Lago</h5>
                                        <h6 class="card-subtitle text-center">Desenvolvedor Web</h6>
                                        <a href="https://github.com/higosoares" target="_blank" title="Portfolio" class="mt-2">
                                            <i class="fab fa-github fa-1x"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/in/higo-soares-14303115a/" target="_blank" title="Perfil Linkedin" class="mt-2">
                                            <i class="fab fa-linkedin fa-1x"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 mb-3">
                                <div class="card">
                                    <img src="{{ asset('assets/img/leonardomatos.jpg') }}" class="card-img-top" alt="Leonardo Matos" />
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-center">Leonardo Matos</h5>
                                        <h6 class="card-subtitle text-center">Desenvolvedor Web</h6>
                                        <!--<a href="" target="_blank" title="Portfolio" class="mt-2">
                                            <i class="fab fa-github fa-1x"></i>
                                        </a>-->
                                        <a href="https://www.linkedin.com/in/leonardolml/" target="_blank" title="Perfil Linkedin" class="mt-2">
                                            <i class="fab fa-linkedin fa-1x"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-4 col-sm-12 mb-3">
                                <div class="card">
                                    <img src="https://www.w3schools.com/howto/img_avatar.png" class="card-img-top" alt="Marcus Vinicius" />
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-center">Marcus Vinicius</h5>
                                        <h6 class="card-subtitle text-center">Desenvolvedor Web</h6>
                                        <!--<a href="https://github.com/huriellopes" target="_blank" title="Portfolio" class="mt-2">
                                            <i class="fab fa-github fa-1x"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/in/huriellopes/" target="_blank" title="Perfil Linkedin" class="mt-2">
                                            <i class="fab fa-linkedin fa-1x"></i>
                                        </a>-->
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-4 col-sm-12 mb-3">
                                <div class="card">
                                    <img src="{{ asset('assets/img/gabriel-guimaraes.jpg') }}" class="card-img-top" alt="Gabriel Guimarães" />
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-center">Gabriel Guimarães</h5>
                                        <h6 class="card-subtitle text-center">Desenvolvedor Mobile</h6>
                                        <a href="https://github.com/gu1ma" target="_blank" title="Portfolio" class="mt-2">
                                            <i class="fab fa-github fa-1x"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/in/gabriel-guimarães-388a2a97/" target="_blank" title="Perfil Linkedin" class="mt-2">
                                            <i class="fab fa-linkedin fa-1x"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-4 col-sm-12 mb-3">
                                <div class="card">
                                    <img src="{{ asset('assets/img/ruanaragao.jpg') }}" class="card-img-top" alt="Ruan Aragão" />
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-center">Ruan Aragão</h5>
                                        <h6 class="card-subtitle text-center">Desenvolvedor Mobile</h6>
                                        <a href="https://github.com/aragaoruan" target="_blank" title="Portfolio" class="mt-2">
                                            <i class="fab fa-github fa-1x"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/in/aragaoruan/" target="_blank" title="Perfil Linkedin" class="mt-2">
                                            <i class="fab fa-linkedin fa-1x"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- END EQUIPE -->
                
                <!-- BEGIN SERVIÇO -->
                <div class="servicos" id="servicos">
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-md-12 col-sm-12 text-center">
                                <h2>Serviços</h2>
                                <h6 class="text-muted">Serviços que realizamos</h6>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-6 col-sm-12 mb-3">
                                <div class="card">
                                    <img src="{{ asset('assets/img/desenvolvimento-sistema.png') }}" class="card-img-top" alt="Desenvolvimento de Sistemas" />
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Desenvolvimento de Sistemas</h5>
                                        <p class="card-text">Desenvolvemos sistemas web altamente seguros e fácil usuabilidade, pensando no usuário, pensando na proteção de dados de consumidores.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 mb-3">
                                <div class="card">
                                    <img src="{{ asset('assets/img/desenvolvimento-mobile.png') }}" class="card-img-top" alt="Desenvolvimento Mobile" />
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Desenvolvimento Mobile</h5>
                                        <p class="card-text">Desenvolvimento de aplicativos mobiles, com fácil usuabilidade, agregando no trabalho da empresa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- END SERVICES -->

                <!-- BEGIN CONTACT -->
                <div class="contato" id="contato">
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-md-12 col-sm-12 text-center">
                                <h2>Contato</h2>
                                <h6 class="text-muted">Entre em contato conosco</h6>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-12 col-sm-12">
                                <form action="{{ route('site.contact') }}" method="POST" autocomplete="off" id="formContact">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-12 col-sm-12 form-group">
                                            <label for="nome">Nome</label>
                                            <input type="text" id="nome" name="nome" class="form-control" autocomplete="off" />
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="col-md-12 col-sm-12 form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" autocomplete="off" />
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-12 col-sm-12 form-group">
                                            <label for="mensagem">Mensagem</label>
                                            <textarea name="mensagem" id="mensagem" class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-12 col-sm-12 form-group">
                                            <button type="submit" class="btn btn-outline-primary">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- END CONTACT -->
            </div> <!-- END CONTENT -->

            <!-- BEGIN SIDEMENU -->
            <div class="col-md-4 col-sm-12 mb-5">
                <div class="card">
                    <div class="card-body">
                        <!-- BEGIN BLOG -->
                        <div class="blog" id="blog">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <h5>Blog</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <p class="text-warning">Nenhum post/artigo encontrado</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- END BLOG -->

                        <!-- BEGIN ANUNCIOS -->
                        <div class="anuncions" id="anuncions">
                            <div class="container">
                                <div class="row mt-3">
                                    <div class="col-md-12 col-sm-12">
                                        <h5>Anúncios</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <p class="text-warning">Nenhum Anúncio encontrado</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- END ANUNCIOS -->

                        <!-- BEGIN NEWSLETTER -->
                        <!--<div class="newsletter" id="newsletter">
                            <div class="container">
                                <div class="row mt-3">
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <h5>Newsletter</h5>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <form action="" method="POST" id="formNewsletter" autocomplete="off">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" name="newsletter" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-primary" type="button" id="button-addon2">Enviar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>-->
                        </div> <!-- END NEWSLETTER -->
                    </div>
                </div>
            </div> <!-- END SIDEMENU -->
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <p class="mt-3">&copy; Todos os Direitos Reservados - <strong>CNPJ: </strong>32.031797/0001-80 | 2019/2020</p>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script src="{{ asset('assets/js/PNotify.js') }}"></script>
    <!--<script src="{{ asset('assets/js/scrollreveal.js') }}"></script>-->
    <script src="{{ asset('assets/js/script.js') }}"></script>
@stop
