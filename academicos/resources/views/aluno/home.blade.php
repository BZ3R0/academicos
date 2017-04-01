@extends('default.principal')
@section('conteudo')
<div class="content-box-large">
		@foreach ($users as $user)
		<div class="panel-heading">
			<div class="panel-title"><h1>{{$user->name}} {{$user->sobrenome}}</h1></div>
		</div>

		<div class="panel-body">
			<div class="table-responsive">
        <div class="col-xs-2 col-md-2">
          <h3>Matrícula</h3> {{$user->matricula}} <br>
          <h3>CPF</h3> {{$user->cpf}} <br>
          <h3>Telefone</h3> {{$user->telefone}}
        </div>
        <div style="margin-top:20px;" class="col-xs-12 col-md-10">
  				<table class="table">
              <tr>
                <th>Responsáveis</th>
  							<th>Faltas</th>
  							<th>Telefone</th>
              </tr>

  						<tr>
  							<td>{{$user->matricula}}</td></a>
  							<td>{{$user->cpf}}</td>
  							<td>{{$user->telefone}}</td>
  						</tr>
  						@endforeach
          </table>
        </div>
			</div>
		</div>
	</div>@stop
