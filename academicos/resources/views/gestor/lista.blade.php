@extends('default.principal')
@section('conteudo')
@if (isset($mensagem))
	<div class="alert alert-success">
	    <strong>{{$mensagem}}</strong>
	</div>
@else
	<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title">Usuários ativos</div>
		</div>
		<div class="panel-body">
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
	                  <!-- <th>STATUS</th> -->
	                  <th>AÇÕES</th>
	                  
	                </tr>
	              </thead>
	              <tbody>
	              	@foreach ($users as $user)
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
		                  <!-- @if($user->status == 1)
		                  	<td>Ativo</td>
		                  @elseif($user->status == 2)
		                  	<td>Removido</td>
		                  @endif -->
		                  <td>
		                  	  <span style="margin: 5px">
		                  	  	<a href="lista/edita/{{$user->iduser}}"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></a>
		                  	  </span>

		                  	  <span style="margin: 5px">
		                  	  	<a style="color:red" href="lista/remove/{{$user->iduser}}"><i class="fa fa-times fa-2x" aria-hidden="true"></i></a>
		                  	  </span>

		                  </td>
		                </tr>
	                @endforeach
	              </tbody>
            	</table>
			</div>
		</div>
	</div>
@endif
@stop