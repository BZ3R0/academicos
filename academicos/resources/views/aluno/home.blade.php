@extends('default.principal')
@section('conteudo')
<div class="content-box-large">
		@foreach ($users as $user)
		<div class="panel-heading">
			<div class="panel-title"><h1>{{$user->name}} {{$user->sobrenome}}</h1></div>
		</div>

		<div class="panel-body">
			<div class="table-responsive">
				<table class="table">
            <tr>
              <th>Matrícula</th>
							<th>Cpf</th>
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
	</div>@stop
