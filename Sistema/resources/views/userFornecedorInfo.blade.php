@extends('layouts.modelo')


@section('conteudo')

    @navegar()
    @endnavegar
    
        @userInfoFornecedor()
            @slot('fornecedor')
                {{$fornecedor[0]->name}}
            @endslot

            @slot('idade')
                {{$idade}}
            @endslot

            @slot('servico')
                {{$fornecedor[0]->nomeServico}}
            @endslot

            @slot('rua')
                {{$fornecedor[0]->rua}}
            @endslot

            @slot('bairro')
                {{$fornecedor[0]->bairro}}
            @endslot

            @slot('numero')
                {{$fornecedor[0]->numero}}
            @endslot

            @slot('telefone')
                {{$fornecedor[0]->telefone}}
            @endslot

            @slot('quantidade')
                {{$fornecedor[0]->solicitada}}
            @endslot

            @slot('media')
                {{$fornecedor[0]->media}}
            @endslot

        @enduserInfoFornecedor


    @rodape()
    @endrodape
@endsection