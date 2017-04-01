@extends('default.principal')
@section('conteudo')
<div class="content-box-large">
	<div class="panel-heading">
		<div class="panel-title"><h1>Feedbacks</h1></div>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table">
            	<tr>
	              <th>Alunos</th>
	              <th> </th>
	              <th>Matrícula</th>
	            </tr>
				@foreach ($alunos as $aluno)
				<tr>
					<td><a href="feedback/{{$aluno->iduser}}">{{$aluno->name}}</a></td>
					<td>{{$aluno->sobrenome}}</td>
					<td>{{$aluno->matricula}}</td>
				</tr>
				@endforeach
        	</table>
		</div>
	</div>
</div>@stop