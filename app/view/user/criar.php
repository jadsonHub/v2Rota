<div class="col d-flex justify-content-center login-div">
    <div class="card card-login">
        <div class="card-body">
            <form method="POST" action="/user/criar">

                <div class="mb-4 text-center">
                    <h2>Criar conta</h2>
                </div>
              
                <div class="mb-4">
                    <label for="usuario" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name='nome'>
                </div>
            
                <div class="mb-4">
                    <label for="usuario" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf" name='cpf' >
                </div>
             
                <div class="mb-4">
                    <label for="usuario" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name='email'>
                </div>

                <div class="mb-4">
                    <label for="usuario" class="form-label">CEP</label>
                    <input type="text" class="form-control" onblur="pesquisacep(this.value);" id="cep" name='cep'>
                </div>
                <div class="mb-4">
                    <label for="usuario" class="form-label">Rua</label>
                    <input type="text" class="form-control" id="rua" name='rua'>
                </div>
                <div class="mb-4">
                    <label for="usuario" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name='cidade'>
                </div>
                <div class="mb-4">
                    <label for="usuario" class="form-label">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name='bairro'>
                </div>
                <div class="mb-4">
                    <label for="usuario" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="estado" name='estado'>
                </div>
               
                <div class="mb-4">
                </div>
                <button type="submit" class="btn btn-login text-end text-white">Cadastrar</button>
            </form>
            <br>
        </div>
    </div>
</div>