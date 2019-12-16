<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-sm-2 col-sm-12">
                <form action="{{ route('login.logar') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-12 col-sm-12">
                            @if ($errors->all())
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $error }}</strong>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 col-sm-12 form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="huriellopes@gmail.com" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 col-sm-12 form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" name="password" id="senha" />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 col-sm-12 form-group">
                            <button type="submit" class="btn btn-outline-success btn-lg">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
