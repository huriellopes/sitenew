@extends('site.layout.site')

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
                <div class="sobre mb-5" id="sobre">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <h2 class="font-italic">Sobre</h2>
                                <h5 class="text-muted">Um pouco sobre a empresa</h5>
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
                <div class="equipe border-top mb-5" id="equipe">
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-md-12 col-sm-12 text-center">
                                <h2 class="font-italic">Equipe</h2>
                                <h5 class="text-muted">Integrantes da equipe</h5>
                            </div>
                        </div>
                        <div class="row mt-5">
                            @php
                                $usuarios = [
                                    'huriel' => [
                                        'imagem'=> asset('assets/img/huriellopes.png'), 'github' => 'https://github.com/huriellopes',
                                        'linkedin' => 'https://www.linkedin.com/in/huriellopes/','titulo' => 'Huriel Lopes',
                                        'subtitulo' => 'CEO e Desenvolvedor Web'
                                    ],
                                    'higo' => [
                                        'imagem'=> asset('assets/img/higosoares.jpg'), 'github' => 'https://github.com/higosoares',
                                        'linkedin' => 'https://www.linkedin.com/in/higo-soares-14303115a/', 'titulo' => 'Higo Lago',
                                        'subtitulo' => 'Desenvolvedor Web'
                                    ],
                                    'leo' => [
                                        'imagem'=> asset('assets/img/leonardomatos.jpg'), 'github' => '',
                                        'linkedin' => 'https://www.linkedin.com/in/leonardolml/', 'titulo' => 'Leonardo Matos',
                                        'subtitulo' => 'Desenvolvedor Web'
                                    ],
                                    'marcus' => [
                                        'imagem'=> 'https://www.w3schools.com/howto/img_avatar.png', 'github' => '',
                                        'linkedin' => '','titulo' => 'Marcus Vinicius',
                                        'subtitulo' => 'Desenvolvedor Web'
                                    ],
                                    'gabriel' => [
                                        'imagem'=> asset('assets/img/gabriel-guimaraes.jpg'), 'github' => '',
                                        'linkedin' => 'https://www.linkedin.com/in/gabriel-guimarães-388a2a97/', 'titulo' => 'Gabriel Guimarães',
                                        'subtitulo' => 'Desenvolvedor Mobile'
                                    ],
                                    'ruan' => [
                                        'imagem'=> asset('assets/img/ruanaragao.jpg'), 'github' => 'https://github.com/aragaoruan',
                                        'linkedin' => 'https://www.linkedin.com/in/aragaoruan/', 'titulo' => 'Ruan Aragão',
                                        'subtitulo' => 'Desenvolvedor Mobile'
                                    ]
                                ];
                            @endphp
                            @foreach($usuarios as $usuario)
                                <div class="col-md-4 col-sm-12 mb-3">
                                    @cardUser
                                        @slot('imagem', $usuario['imagem'])
                                        @slot('github', $usuario['github'])
                                        @slot('linkedin', $usuario['linkedin'])
                                        @slot('titulo', $usuario['titulo'])
                                        @slot('subtitulo', $usuario['subtitulo'])
                                    @endcardUser
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div> <!-- END EQUIPE -->

                <!-- BEGIN SERVIÇO -->
                <div class="servicos border-top mb-5" id="servicos">
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-md-12 col-sm-12 text-center">
                                <h2 class="font-italic">Serviços</h2>
                                <h5 class="text-muted">Serviços que realizamos</h5>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-6 col-sm-12 mb-3">
                                <div class="card">
                                    <div class="card-foto">
                                        <img src="{{ asset('assets/img/desenvolvimento-sistema.png') }}" class="card-img-top" alt="Desenvolvimento de Sistemas" />
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title text-center">
                                            <h5>Desenvolvimento de Sistemas</h5>
                                        </div>
                                        <p class="card-text">
                                            Realizamos o desenvolvimentos de sistemas web com foco em segurança da informação, performace, usabilidade e confiabilidade para entregarmos um produto de qualidade.
                                            Todo o processo para a entrega dos sistemas e escolha das ferramentas que atendam as necessidades dos usuários são bem planejados a fim de para garantir um bom funcionamento e manutenções futuras.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 mb-3">
                                <div class="card">
                                    <div class="card-foto">
                                        <img src="{{ asset('assets/img/desenvolvimento-mobile.png') }}" class="card-img-top" alt="Desenvolvimento Mobile" />
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title text-center">
                                            <h5>Desenvolvimento Mobile</h5>
                                        </div>
                                        <p class="card-text">
                                            Visando a necessidades de termos sempre toda a informação na palma da mão, também realizamos o desenvolvimento de aplicativos móveis.
                                            Pensamos bastante na experiência do experiência como principal foco no aplicativo tendo como base uma boa performace, adequação com os diversos tipos
                                            de celulares, segurança e integração com outros sistemas, e assim, garantindo uma melhor satisfação ao interagir com sua empresa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- END SERVICES -->

                <!-- BEGIN CONTACT -->
                <div class="contato border-top" id="contato">
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-md-12 col-sm-12 text-center">
                                <h2 class="font-italic">Contato</h2>
                                <h5 class="text-muted">Entre em contato conosco</h5>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-12 col-sm-12">
                                <form action="{{ route('site.contact') }}" method="POST" autocomplete="off" id="formContact">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-12 col-sm-12 form-group">
                                            <label for="nome">Nome</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="far fa-user"></i>
                                                    </span>
                                                </div>
                                                <input type="text" id="nome" name="nome" class="form-control" autocomplete="off"
                                                placeholder="Nome"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 col-sm-12 form-group">
                                            <label for="email">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="fas fa-envelope"></i>
                                                    </span>
                                                </div>
                                                <input type="email" id="email" name="email" class="form-control" autocomplete="off"
                                                placeholder="Email"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-12 col-sm-12 form-group">
                                            <label for="mensagem">Mensagem</label>
                                            <textarea name="mensagem" id="mensagem" class="form-control" cols="30" rows="10"
                                            placeholder="Mensagem"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-12 col-sm-12 form-group">
                                            <button type="submit" class="btn btn-dark"><i class="fas fa-paper-plane"></i> Enviar</button>
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
                        <!--</div> --> <!-- END NEWSLETTER -->
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
