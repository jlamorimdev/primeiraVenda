@extends('layouts.admin')
@section('conteudo')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Produto: {{ $produto->nome }}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
</div>

			{!!Form::model($produto, ['method'=>'PATCH', 'route'=>['produto.update', $produto->idproduto], 'files' => 'true'])!!}
      {{Form::token()}}

			<div class="row">

				<div class="col-lg-6 col-sm-6 col-xs-12">
					<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" name="nome" required value="{{ $produto->nome }}" class="form-control" placeholder="Nome...">
					</div>
				</div>

				<div class="col-lg-6 col-sm-6 col-xs-12">
					<div class="form-group">
					<label for="categoria">Categoria</label>
					<select class="form-control" name="idcategoria">
						@foreach($categorias as $cat)

							@if($cat->idcategoria == $produto->idcategoria)
							<option value="{{$cat->idcategoria}}" selected>
								{{$cat->nome}}
							</option>

							@else
							<option value="{{$cat->idcategoria}}">
								{{$cat->nome}}
							</option>

							@endif
						@endforeach
					</select>
					</div>
				</div>

				<div class="col-lg-6 col-sm-6 cox-xs-12">
					<div class="form-group">
					<label for="codigo">Código</label>
					<input type="text" name="codigo" required value="{{ $produto->codigo }}" class="form-control"
					placeholder="Código do Produto...">
					</div>
				</div>

				<div class="col-lg-6 col-sm-6 cox-xs-12">
					<div class="form-group">
					<label for="estoque">Estoque</label>
					<input type="text" name="estoque" required value="{{ $produto->estoque }}" class="form-control" placeholder="Estoque...">
					</div>
				</div>

				<div class="col-lg-6 col-sm-6 cox-xs-12">
					<div class="form-group">
					<label for="descricao">Descrição</label>
					<input type="text" name="descricao"  value="{{ $produto->descricao}}" class="form-control" placeholder="Descrição...">
					</div>
				</div>



				<div class="col-lg-6 col-sm-6 cox-xs-12">
					<div class="form-group">
					<label for="imagem">Imagem</label>
					<input type="file" name="imagem"
					class="form-control">
					@if(($produto->imagem)!="")
						<img src="{{asset('imagens/produtos/' . $produto->imagem)}}" width="180px">
					@endif
					</div>
				</div>

			</div>

			<div class="form-group">
				<button class="btn btn-primary" type="submit">Salvar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			{!!Form::close()!!}
@stop
