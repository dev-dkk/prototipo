<x-telas title="Login Coordenador">
    <div class="container d-flex justify-content-center">
            <div class="card-body">
                <img src="{{ asset('img-views/logo-if.jpeg') }}" class="logo img-fluid d-block mx-auto" style="height: 80px;">
                <h2 class="text-center mt-3">Login</h2>
                <form action="{{ route('tela.coordenador') }}">
                    <div class="form-group">
                        <label for="email">Email/Matricula</label>
                        <input class="form-control" id="email" placeholder="Coloque seu email ou matricula">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" id="password" placeholder="Senha">
                    </div>
                    <button class="btn btn-success btn-block mb-3">Entrar</button>
                </form>
            </div>
    </div>
</x-telas>
