@extends('default.principal')
@section('conteudo')
	<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title">Alunos na Turma</div>
		</div>
		<div class="panel-body">
			<form class="form-horizontal" role="form" method="post" action="/turma/adiciona/novo">
				<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
				  <div class="form-group">
				    <label for="student" class="col-sm-1 control-label">Aluno</label>
				    <div class="col-sm-4">
				      	<select name="student" class="form-control">
						    <option>Selecione...</option>	
						    @foreach($users[1] as $user)						    
						    	<option value="{{$user->iduser}}">{{$user->name}}</option>
						    @endforeach
						    <input type="hidden" name="idclass" value="{{$users[2]}}" />
						    
						</select>
				    </div>
				    <div class=" col-sm-4">
				      <button type="submit" class="btn btn-primary">Adicionar</button>
				    </div>
				  </div>
				  
				    
				 
			</form>
			<div class="table-responsive">
				<table class="table">
	              <thead>
	                <tr>
	                  <th>MATRICULA</th>
	                  <th>NOME</th>
	                  <th>SOBRENOME</th>
	                  <th>CPF</th>
	                  <th>PERFIL</th>
	                  <th>TELEFONE</th>	                  
	                  
	                </tr>
	              </thead>
	              <tbody>
	              	@foreach ($users[0] as $user)
		                <tr>
		                  <td>{{$user->matricula}}</td>
		                  <td>{{$user->name}} </td>
		                  <td>{{$user->sobrenome}}</td>
		                  <td>{{$user->cpf}}</td>
		                  @if($user->perfil == 1)
		                  	<td>Gestor</td>
		                  @elseif($user->perfil == 2)
		                  	<td>Aluno</td>
		                  @else($user->perfil)
		                  	<td>Responsável</td>
		                  @endif
		                  <td>{{$user->telefone}}</td>	                  
		                  
		                </tr>
	                @endforeach
	              </tbody>
            	</table>
			</div>
		</div>
	</div>
@stop