<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Pessoas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
    <link rel="stylesheet" type="text/css" href="/css/estilo.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  </head>

  <body>
<form action="{{ route('cadastro.store')}}" method="POST" >
    @csrf
    <center>
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Novo Cadastro</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatorios</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control">

            {{--- Formulario Nome ---}}
            <div class="py-3" >
                <div class="container">
                  
                  <div class="row">
                    <div class="col-md-12 p-4">
                      <form>
        <div class="form-row">

            <div class="form-group col-md-6">
                    <label>Nome: *</label>
                    <div class="input-group">
                            <input id="nome" type="text" class="form-control" name="nome"
                                    value="{{old('nome')}}" required>
                        </div>
                    </div>
                
            <div class="form-group col-md-6">
                    <label>E-mail: *</label>
                    <div class="input-group">
                            <input id="email" type="text" class="form-control" name="email"
                                    value="{{old('email')}}" required>
                        </div>
                    </div>
                

                <div class="form-group col-md-6">
                    <label>Telefone: *</label>
                    <div class="input-group">
                        <input id="telefone" type="text" class="form-control" name="telefone"
                                value="{{old('telefone')}}" required>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label>Data de Nascimento: *</label>
                    <div class="input-group">
                        <input id="dataNascimento" type="date" class="form-control" name="dataNascimento"
                                value="{{old('dataNascimento')}}" required>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label>CEP: *</label>
                    <div class="input-group">
                        <input id="cep" type="text" class="form-control" name="cep"
                                value="{{old('cep')}}" required>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label>Estado: *</label>
                    <div class="input-group">
                        <input id="estado" type="text" class="form-control" name="estado"
                                value="{{old('estado')}}" required>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label>Cidade: *</label>
                    <div class="input-group">
                        <input id="cidade" type="text" class="form-control" name="cidade"
                                value="{{old('cidade')}}" required>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label>Bairro: *</label>
                    <div class="input-group">
                        <input id="bairro" type="text" class="form-control" name="bairro"
                                value="{{old('bairro')}}" required>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label>Rua: *</label>
                    <div class="input-group">
                        <input id="rua" type="text" class="form-control" name="rua"
                                value="{{old('rua')}}" required>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label>Número: *</label>
                    <div class="input-group">
                        <input id="numero" type="text" class="form-control" name="numero"
                                value="{{old('numero')}}" required>
                    </div>
                </div>

            
        </div>

                  </form>
                </div>
              </div>
            </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-secondary" href="#">Cancelar</a>
        </div>
    </div>
</form>
@include('sweetalert::alert') 

  </body>
</html>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
