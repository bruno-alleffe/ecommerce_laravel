@extends('site.layout')
@section('title', "Home")
@section('conteudo')

<div class="row container">

    @foreach ($produtos as $produto)

        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ $produto->imagem }}">
                    
                    @can('verProduto', $produto)
                        <a href="{{ route('site.details', $produto->slug) }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                    @else
                        
                    @endcan

                    @cannot('verProduto', $produto)
                    
                    @else
                        <a href="{{ route('site.details', $produto->slug) }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                    @endcannot
                
                </div>
                <div class="card-content">
                    <span class="card-title">{{ Str::limit($produto->nome, 15) }}</span>
                    <p>{{ Str::limit($produto->descricao, 20) }}</p>
                </div>
            </div>
        </div>

    @endforeach
</div>

<div class="row center">
    {{ $produtos->links('custom.pagination') }}
</div>
@endsection