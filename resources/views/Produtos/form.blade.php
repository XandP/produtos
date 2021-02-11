@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-left">
        <div class="col-md-8" style="width:75vw">
            <div class="card" style="width:75vw">
                <div class="card-header">{{ __('Produtos') }}</div>

                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					@if(Request::is('*/change'))
					<form action="{{ url('produtos/update') }}/{{$produtos->id}}" method="post" enctype="multipart/form-data">
					 @csrf
					  <div class="form-group">
						<label for="NomeTitulo">Nome do produto</label>
						<input type="text" class="form-control" name="NomeTitulo" id="NomeTitulo" placeholder="Insira o nome do produto" value="{{ $produtos->NomeTitulo}}" required>
					  </div>					  
					  <div class="form-group">
						<label for="EAN">EAN</label>
						<input type="number" max="9999999999999" class="form-control" name="EAN"  placeholder="Insira o EAN do produto" value="{{ $produtos->EAN}}" required>
					  </div>
					  <div class="form-group">
						<label for="Descr">Descrição curta</label>
						<input type="text" class="form-control" name="Descr"  placeholder="Descrição curta do produto" value="{{ $produtos->Descr}}" required>
					  </div>
					  <div class="form-group">
						<label for="DescrLonga">Descrição Longa</label>
						<input type="text" class="form-control" name="DescrLonga"  placeholder="Descrição longa do produto" value="{{ $produtos->DescrLonga}}" required>
					  </div>
					  <div class="form-group">
						<label for="Estado">Estado</label>
						<p><select id="Estado" name="Estado" value="{{ $produtos->Estado}}" required>
							<option value="" >Selecione uma opção</option>
							<option value="Ativo">Ativo</option>
							<option value="Inativo">Inativo</option>
						</select><p>
					  </div>
					  <div class="form-group">
						<label for="Estado">Imagem</label>					  
							<input type="file" id="Foto" name="Foto" accept="image/*"value="{{ $produtos->Foto}}" required>	
					  </div>
					  
					  <button type="submit" class="btn btn-success">Enviar</button>
					</form>
					
					  <a href="{{url('produtos')}}" class="btn btn-warning">Cancelar</a>

@else
	
					 <form action="{{ url('produtos/add') }}" method="post" enctype="multipart/form-data">
					 @csrf
					  <div class="form-group">
						<label for="NomeTitulo">Nome do produto</label>
						<input type="text" class="form-control" name="NomeTitulo" id="NomeTitulo" placeholder="Insira o nome do produto" required>
					  </div>					  
					  <div class="form-group">
						<label for="EAN">EAN</label>
						<input type="number" max="9999999999999" class="form-control" name="EAN"  placeholder="Insira o EAN do produto" required>
					  </div>
					  <div class="form-group">
						<label for="Descr">Descrição curta</label>
						<input type="text" class="form-control" name="Descr"  placeholder="Descrição curta do produto" required>
					  </div>
					  <div class="form-group">
						<label for="DescrLonga">Descrição Longa</label>
						<input type="text" class="form-control" name="DescrLonga"  placeholder="Descrição longa do produto" required>
					  </div>
					  <div class="form-group">
						<label for="Estado">Estado</label>
						<p><select id="Estado" name="Estado" required>
							<option value="" selected>Selecione uma opção</option>
							<option value="Ativo">Ativo</option>
							<option value="Inativo">Inativo</option>
						</select><p>
					  </div>
					  <div class="form-group">
						<label for="Estado">Imagem</label>					  
							<input type="file" id="Foto" name="Foto" accept="image/*" required>	
					  </div>
					  
					  <button type="submit" class="btn btn-success">Enviar</button>
					  <a href="{{url('produtos')}}" class="btn btn-warning">Cancelar</a>
					</form>
@endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
