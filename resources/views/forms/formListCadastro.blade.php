<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

<style>
    .add {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 45px;
        right: 10px;
        background-color: black;
        color: #fff;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        z-index: 1000;
    }


</style>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tabelaLista').DataTable({
                select: false,
                responsive: false,
                "order": [
                    [0, "desc"]
                ],
                "lengthMenu": [10],
                "info": false,
                "sLengthMenu": false,
                "bLengthChange": false,
                "oLanguage": {

                    "sEmptyTable": "Nenhum registro encontrado",
                    "sInfo": "Mostrando de START até END de TOTAL registros",
                    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "sInfoFiltered": "(Filtrados de MAX registros)",
                    "sInfovacinacaoFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "MENU resultados por página",
                    "sLoadingRecords": "Carregando...",
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sSearch": "Pesquisar",
                    "oPaginate": {
                        "sNext": "Próximo",
                        "sPrevious": "Anterior",
                        "sFirst": "Primeiro",
                        "sLast": "Último"
                    },
                    "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                        "sSortDescending": ": Ordenar colunas de forma descendente"
                    }
                }
            });
    });

    </script>
                <body>
                    <div class="card">
                            <div class="card-header">
                                <h4 class="col-12 modal-title text-center">Consulta de cadastros</h4>
                             </div>
                             <div class="card-body">
                    <div class="table"style="margin-top:0;" >
                        <table class="table table-striped dataTable" style="width: 100%;margin-top:0;" id="tabelaLista">
                            <thead align="center">
                                <tr>
                                    <th>Id:</th>
                                    <th>Nome:</th>
                                    <th>E-mail:</th>
                                    <th>Telefone:</th>
                                    <th>Data de Nascimento:</th>
                                    <th>Cep:</th>
                                    <th>Estado:</th>
                                    <th>Cidade:</th>
                                    <th>Bairro:</th>
                                    <th>Rua:</th>
                                    <th>Editar:</th>
                                    <th>Excluir</th>
                                    

                                </tr>
                            </thead>
                            <tbody align="center">
                                @foreach($cadastro as $cadastro)
                                <tr>
                                    <td>{{$cadastro->id}}
                                    <td>{{$cadastro->nome}}</td>
                                    <td>{{$cadastro->email}}</td>
                                    <td>{{$cadastro->telefone}}</td>
                                    <td>{{$cadastro->dataNascimento}}</td>
                                    <td>{{$cadastro->cep}}</td>
                                    <td>{{$cadastro->estado}}</td>
                                    <td>{{$cadastro->cidade}}</td>
                                    <td>{{$cadastro->bairro}}</td>
                                    <td>{{$cadastro->rua}}</td>
                                    {{-- <td>{{$cadastro->numero}}</td> --}}
                                    
                                    <td>
                                        <a href="{{route('cadastro.edit', $cadastro->id)}}" style="color: #3490dc; text-decoration: none; background-color: transparent;">
                                                Editar
                                                <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('cadastro.destroy', $cadastro->id)}}" onclick="return confirm('Tem certeza que deseja deletar este paciente?');">
                                            Deletar
                                        </a>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        

                        
                    </div>
                    </div>
                    </div>
                    @include('sweet::alert')

                </body>
