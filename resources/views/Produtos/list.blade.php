@extends('layouts.app')

@section('content')


<div class="container" >
    <div class="row justify-content-left">
        <div class="col-md-8" style="width:75vw">
            <div class="card" style="width:75vw">
                <div class="card-header">Produtos Cadastrados</div>

                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">Foto</th>
      <th scope="col">Nome</th>
      <th scope="col">EAN</th>
      <th scope="col">Descrição</th>
      <th scope="col">Descrição Longa</th>
      <th scope="col">Estado</th>
      <th scope="col"></th>
      <th scope="col"><a class="btn btn-success" href="{{ url('produtos/new') }}" style="font-size:132%" title="Adicionar Produto"> ＋</a></th>
    </tr>
  </thead>
  <tbody>




                    <h1> Lista de Produtos </h1>
					@foreach($produtos as $u)    <tr>
  
      <td><img src="Imagens/{{ $u->Foto}}" width="100px" ></img></td>
      <td>{{ $u->NomeTitulo}} </td>
      <td>{{ $u->EAN}}</td>
      <td>{{ $u->Descr}} </td>
      <td>{{ $u->DescrLonga}}</td>
      <td>{{ $u->Estado}}</td>
      <td>
	 <a href="produtos/{{ $u->id}}/change" class="btn btn-warning" title="Editar Produto">🖉</a> 
	  </td> 
	  <td>
	  <form action="produtos/delete/{{$u->id}}" method="post">
	  @csrf
	  @method('delete')
	 <button class="btn btn-danger"title="Deletar Produto">✖</button>
	 </form>
	  </td>
    </tr>
					@endforeach
					 </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
