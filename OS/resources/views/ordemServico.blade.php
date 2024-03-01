@extends ("templates.template")
@section('contente')




@endsection
<body>
    <div class="d-flex vh-100 g-0 align-items-center justify-content-center">
        <div class="col-6 conteudoEsquerda w-50">
            <div class="text-started pb-5">
                <h6 class="fw-medium">Conheça a VPtech</h6>
                <P class="display-4 fw-bold">Software de manutenção de última geração</p>
                <h5 class="fw-medium">Prevenção, manutenção baseada em condição e previsões de confiabilidade. Adaptamos às suas necessidades.</h5>

            </div>
        </div>
        
        <div class="conteudoDireita col-lg-6 d-flex flex-column justify-content-center align-items-center mx-3" style="width: 40%; height:80%;">
            <!-- titulo -->
            <div class="text-center ">
                <h2 class="fw-bold">Ordem de serviço</h2>
                <!-- <p class="text-secondary">Faça agora seu pedido</p> -->
            </div>
            <!-- titulo -->
    
            <!-- divisor -->
            <div class="w-75">
                <hr>
            </div>

            <!-- formulario -->
            <form action="#" class="w-75 mx-auto row pt-3">

                <div class="col-6">
                    <div class="mb-3">
                        <label class="form-label"><h6 class="bold">Nome</h2></label>
                        <input type="text" class="form-control form-control-lg fs-6" placeholder="Nome Completo">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><h6 class="bold">CPF</h2></label>
                        <input type="text" class="form-control form-control-lg fs-6" placeholder="CPF">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><h6 class="bold">Telefone</h2></label>
                        <input type="text" id="telefoneInput" class="form-control form-control-lg fs-6" placeholder="Telefone">
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label class="form-label"><h6 class="bold">Modelo</h2></label>
                        <input type="text" class="form-control form-control-lg fs-6" placeholder="Modelo">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><h6 class="bold">Marca</h2></label>
                        <select class="form-control form-control-lg fs-6" placeholder="Marca">
                            <option selected>Selecione</option>
                            <option>Apple</option>
                            <option>Google</option>
                            <option>Motorola</option>
                            <option>Nokia</option>
                            <option>Samsung</option>
                            <option>Xiaomi</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><h6 class="bold">Defeito</h2></label>
                        <input type="text" class="form-control form-control-lg fs-6" placeholder="Defeito">
                    </div>
                </div>
               
                


                <div class="d-flex justify-content-between w-100 pt-5">
                    <button class="btn btn-dark text-white btn-lg w-25 mb-3">Cancelar</button>
                    <button class="btn btn-dark btn-lg w-25 mb-3 ">Enviar</button>
                </div>
            </form>
            <!-- formulario -->

        </div>

    </div>
    <script>
       
    </script>
</body>
</html>