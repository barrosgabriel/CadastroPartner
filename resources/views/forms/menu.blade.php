<body style="background-color: #f3f5fa">
    <div class="col-8 mx-auto">
        <div class="card-deck" style="margin-top: 50px" style="margin:auto">
            <div class="card text-center shadow p-3 mb-5 bg-white rounded" style="width:280px">
                <img class="card-img-top" src="{{ asset('assets/img/cadastro.png') }}" alt="">
                <div class="card-body">
                    
                    <a href="{{route('cadastro.create')}}" type="button" class="btn btn-outline-primary  stretched-link">Cadastro</a>
                </div>
            </div>
            <div class="card text-center shadow p-3 mb-5 bg-white rounded" style="width:280px">
                <img class="card-img-top" src="{{ asset('assets/img/lupa.png') }}" alt="">
                <div class="card-body">
                    
                    <a href="{{route('cadastro.show')}}" type="button" class="btn btn-outline-primary  stretched-link">Listagem</a>
                </div>
            </div>
            
        </div>
        </div>
</body>

