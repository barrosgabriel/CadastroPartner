
    <form action="{{ route('cadastro.update') }}" method="post" class="form-horizontal" id="formEventos">
        @csrf
        @method('put')
        <div id="container">
                {{-- Formulario Id --}}

            
                <div class="form-group col-md-6">
                    <label>Id</label>
                    <div class="input-group">
                        <input id="id" type="text" readonly="true" class="form-control @error('id') is-invalid @enderror" name="id"
                                value="{{ $Cadastro->id }}" autocomplete="id" autofocus placeholder="Id">
                    </div>
                </div>

                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="nome" class="control-label">Nome: *</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="nome" name="nome"
                                                value="{{ old('nome',$Cadastro->nome) }}" >

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>E-mail: *</label>
                                        <div class="input-group">
                                            <input id="email" type="text" class="form-control" name="email"
                                            value="{{ old('email',$Cadastro->email) }}" >
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Telefone: *</label>
                                        <div class="input-group">
                                            <input id="telefone" type="text" class="form-control" name="telefone"
                                            value="{{ old('telefone',$Cadastro->telefone) }}" >
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Data de Nascimento: *</label>
                                        <div class="input-group">
                                            <input id="dataNascimento" type="date" class="form-control" name="dataNascimento" placeholder="dd/mm/aaaa"
                                            value="{{ old('dataNascimento',$Cadastro->dataNascimento) }}" >
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>CEP: *</label>
                                        <div class="input-group">
                                            <input id="cep" type="text" class="form-control" name="cep"
                                            value="{{ old('cep',$Cadastro->cep) }}" >
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Estado: *</label>
                                        <div class="input-group">
                                            <input id="estado" type="text" class="form-control" name="estado"
                                            value="{{ old('estado',$Cadastro->estado) }}" >
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Cidade: *</label>
                                        <div class="input-group">
                                            <input id="cidade" type="text" class="form-control" name="cidade"
                                            value="{{ old('cidade',$Cadastro->cidade) }}" >
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Bairro: *</label>
                                        <div class="input-group">
                                            <input id="bairro" type="text" class="form-control" name="bairro"
                                            value="{{ old('bairro',$Cadastro->bairro) }}" >
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Rua: *</label>
                                        <div class="input-group">
                                            <input id="rua" type="text" class="form-control" name="rua"
                                            value="{{ old('rua',$Cadastro->rua) }}" >
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Número: *</label>
                                        <div class="input-group">
                                            <input id="numero" type="text" class="form-control" name="numero"
                                            value="{{ old('numero',$Cadastro->numero) }}" >
                                        </div>
                                    </div>
                                    
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a class="btn btn-secondary" href="#">Cancelar</a>
            </div>
        </div>
        </form>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" style=""></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous" style=""></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
            </script>

    </body>
</html>
