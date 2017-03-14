@extends('default.principal')
@section('conteudo')
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
	                  <th>TELEFONE</th>
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
	                  <td>{{$user->telefone or '-'}}</td>
	                  <td><a href="/lista/acao/{{$user->iduser}}">
			        	  Ver
			        	</a></td>
	                </tr>
	                @endforeach
	              </tbody>
            	</table>
			</div>
		</div>
	</div>
@stop