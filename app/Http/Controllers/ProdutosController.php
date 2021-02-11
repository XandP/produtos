<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Redirect;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index() {
		$produtos = Produto::get();
		return view('Produtos.list', ['produtos' => $produtos]);
	}
	
	public function new(){
		return view('produtos.form');
	}
	public function add( Request $request){
		$nomeTitulo = $request->NomeTitulo;
		$EAN = $request->EAN;
		$Descr = $request->Descr;
		$DescrLonga = $request->DescrLonga;
		$Estado = $request->Estado;
		$imagem = $request->file('Foto');
		$NomeImagem= time().'.'.$imagem->extension();
		$imagem->move(public_path('Imagens'),$NomeImagem);
		
		$produtos = new Produto();
		$produtos->NomeTitulo = $nomeTitulo;
		$produtos->Foto = $NomeImagem;
		$produtos->EAN = $EAN;
		$produtos->Descr = $Descr;
		$produtos->DescrLonga = $DescrLonga;
		$produtos->Estado = $Estado;
		$produtos->save();

		return Redirect::to('/produtos');
	}
	
	public function change( $id){
		$produtos = Produto::findOrFail($id);
	return view('produtos.form',['produtos' => $produtos]);
	}
	
	public function update ($id, request $request){
$nomeTitulo = $request->NomeTitulo;
		$EAN = $request->EAN;
		$Descr = $request->Descr;
		$DescrLonga = $request->DescrLonga;
		$Estado = $request->Estado;
		$imagem = $request->file('Foto');
		$NomeImagem= time().'.'.$imagem->extension();
		$imagem->move(public_path('Imagens'),$NomeImagem);
		
		$produtos = Produto::findOrFail($id);
		$produtos->NomeTitulo = $nomeTitulo;
		$produtos->Foto = $NomeImagem;
		$produtos->EAN = $EAN;
		$produtos->Descr = $Descr;
		$produtos->DescrLonga = $DescrLonga;
		$produtos->Estado = $Estado;
		$produtos->update();
		
		\Session::flash('msg_update', 'Atualizado com sucesso!');
		return Redirect::to('/produtos');
	}
	
	public function delete($id){
	
	$produtos = Produto::findOrFail( $id );
	$produtos->delete();
	return Redirect::to('/produtos');
	}
	
	
}

		// $produto = new Produto;
		// $produto = $produto->create( $request->all());	
		// return Redirect::to('/produtos');