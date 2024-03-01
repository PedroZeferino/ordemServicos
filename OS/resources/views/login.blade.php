@extends ("templates.template")
@section('contente')




@endsection
<body class="bg-white">
    <div class="row vh-100 g-0">
        <!-- lado esquerdo -->
        <div class="col-lg-5 position-relative d-none d-lg-block">
            <div class="bg-holder" style="background-image: url(./assets/imagens/homem.png);"></div>
        </div>

        <!-- lado direito -->
        <div class="col-lg-7">
            <div class="row align-items-center justify-content-center h-100 g-0 px-6 px-sm-g">
                <div class="col col-sm-6 col-lg-7 col-xl-6">
                    <!-- logo -->
                    <a href="#" class="d-flex justify-content-center mb-3">
                    <img src="{{url ('./assets/imagens/unidade.png')}}" alt="" width="60">
                    </a>
                    <!-- fim_logo -->

                    <div class="text-center mb-4">
                        <h3 class="fw-bold">Login</h3>
                        <p class="text-secondary">Acesse sua conta</p>
                    </div>

                    <!-- login por redes sociais -->
                    <button class="btn btn-lg btn-outline-secondary w-100 mb-3 btn-outline-custom">
                        <i class='bx bxl-google text-danger me-1 fs-6'></i> Entrar com Google
                    </button>
                    <button class="btn btn-lg btn-outline-secondary w-100 btn-outline-custom">
                        <i class='bx bxl-facebook text-primary me-1 fs-6' ></i> Entrar com Facebook
                    </button>
                    <!-- login por redes sociais -->

                    <!-- divisor -->
                    <div class="position-relative">
                        <hr class="text-secondary divider">
                        <div class="divider-content-center">Ou</div>
                    </div>
                    <!-- divisor -->

                    <!-- formulario -->
                    <form action="#">
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class='bx bx-user'></i>
                            </span>
                            <input type="text" class="form-control form-control-lg fs-6" placeholder="E-mail">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class='bx bx-lock-alt' ></i>
                            </span>
                            <input type="password" class="form-control form-control-lg fs-6" placeholder="Senha">
                        </div>
                        <div class="input-group mb-3 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="form-check">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Lembre-de mim </small></label>
                            </div>
                            <div>
                                <small><a href="#">Esqueceu a senha?</a></small>
                            </div>
                        </div>
                        <a class="btn btn-dark btn-lg w-100 mb-3" href="./ordemServico.blade.php">Login</a>
                    </form>
                    <!-- formulario -->

                    <div class="text-center">
                        <small>Não tem conta? <a href="#" class="fw-bold">Cadastre-se</a></small>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>