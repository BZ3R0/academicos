@extends('default.principal')
@section('conteudo')

<div class="row">
	<div class="col-md-12">
		<div class="content-box-large">
			<div class="panel-heading">
	            <div class="panel-title">Cadastro de Usuário</div>	          
	        </div>
			<div class="panel-body">

				<form class="form-horizontal" role="form" method="post" action="/cadastra/novo">
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					  <div class="form-group">
					    <label for="inputName" class="col-sm-2 control-label">Nome</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="nome" placeholder="Nome">
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="inputSobrenome" class="col-sm-2 control-label">Sobrenome</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome">
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="inputCpf" class="col-sm-2 control-label">CPF</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="cpf" placeholder="CPF">
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="inputTelefone" class="col-sm-2 control-label">Telefone</label>
					    <div class="col-sm-10">
					      <input type="tel" class="form-control" name="telefone" placeholder="Telefone">
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="inputTelefone" class="col-sm-2 control-label">Perfil</label>
					    <div class="col-sm-10">
					      	<select name="perfil" class="form-control">
							    <option>Selecione...</option>							    
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