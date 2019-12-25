{{--<div class="card">--}}
{{--    <div class="card-foto">--}}
{{--        <img src="{!! $imagem !!}" alt="user">--}}
{{--        <div class="card-social">--}}
{{--            <ul>--}}
{{--                <li>--}}
{{--                    <a class="btn default btn-outline image-popup-vertical-fit" href="{!! $github !!}" target="_blank" title="Portfolio">--}}
{{--                        <i class="fab fa-github fa-1x"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a class="btn default btn-outline" href="{!! $linkedin !!}" target="_blank" title="Perfil Linkedin">--}}
{{--                        <i class="fab fa-linkedin fa-1x"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="card-body text-center">--}}
{{--        <h5 class="card-title">{!! $titulo !!}</h5>--}}
{{--        <p class="card-subtitle text-muted">{!! $subtitulo !!}</p>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="card">
    <img src="{{ asset('assets/img/bg-card-equipe.jpg') }}" alt="capa" class="w-100 rounded-top">
    <div class="card-foto rounded-circle">
        <img src="{!! $imagem !!}" alt="user" class="rounded-circle img-fluid">
        <div class="card-social">
            <ul>
                <li>
                    <a class="btn btn-outline" href="{!! $github !!}" target="_blank" title="Portfolio">
                        <i class="fab fa-github fa-1x"></i>
                    </a>
                </li>
                <li>
                    <a class="btn btn-outline" href="{!! $linkedin !!}" target="_blank" title="Perfil Linkedin">
                        <i class="fab fa-linkedin fa-1x"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card-body text-center">
        <div class="card-title mb-0"><h6>{!! $titulo !!}</h6></div>
        <div class="card-subtitle text-muted">{!! $subtitulo !!}</div>
        <p><small>Lorem ipsum dolor sit amet, this is a consectetur adipisicing elit</small></p>
    </div>
</div>
