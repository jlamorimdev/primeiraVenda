@extends('layouts.admin')
@section('conteudo')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Novo Cliente</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'venda/cliente','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" name="nome" class="form-control" placeholder="Nome...">
						</div>
						<div class="form-group">
							<label for="descricao">Tipo do Documento</label>
							<input type="text" name="tipo_documento" class="form-control"
							placeholder="Tipo do documento...">
						</div>
						<div class="form-group">
							<label for="num_doc">Número do Documento</label>
							<input type="text" name="num_doc" class="form-control"
							placeholder="Número do Documento...">
						</div>
						<div class="form-group">
							<label for="endereco">Endereço</label>
							<input type="text" name="endereco" class="form-control" placeholder="Endereço...">
						</div>
						<div class="form-group">
							<label for="telefone">Telefone</label>
							<input type="text" name="telefone" class="form-control" placeholder="Telefone...">
						</div>
						<div class="form-group">
							<label for="email">E-mail</label>
							<input type="text" name="email" class="form-control" placeholder="E-mail...">
						</div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Salvar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}

		</div>
	</div>
@stop
