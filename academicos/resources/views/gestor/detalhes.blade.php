@extends('default.principal')
@section('conteudo')

<div class="row">
	<div class="col-md-12">
		<div class="content-box-large">
			<div class="panel-heading">
	            <div class="panel-title">Editar Usuário</div>	          
	        </div>
			<div class="panel-body">

				<form class="form-horizontal" role="form" method="post" action="/lista/update">
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
						<input type="hidden" name="iduser" value="{{{ $user->iduser }}}" />
					  <div class="form-group">
					    <label for="inputName" class="col-sm-2 control-label">Nome</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="nome" value="{{$user->name}}" placeholder="Nome" required>
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="inputSobrenome" class="col-sm-2 control-label">Sobrenome</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" value="{{$user->sobrenome}}" name="sobrenome" placeholder="Sobrenome" required>
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="inputCpf" class="col-sm-2 control-label">CPF</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" value="{{$user->cpf}}" name="cpf" placeholder="CPF" required>
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="inputTelefone" class="col-sm-2 control-label">Telefone</label>
					    <div class="col-sm-10">
					      <input type="tel" class="form-control" value="{{$user->telefone}}" name="telefone" placeholder="Telefone">
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="inputTelefone" class="col-sm-2 control-label">Perfil</label>
					    <div class="col-sm-10">
					      	<select required name="perfil" class="form-control">
							    <option value="">Selecione...</option>							    
							    <option value="1">Gestor</option>
							    <option value="2">Aluno</option>
							    <option value="3">Responsável</option>

							    
							</select>
					    </div>
					  </div>
					  
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-primary">Cadastrar</button>
					    </div>
					  </div>

				</form>
			</div>
		</div>
	</div>
</div>


@stop