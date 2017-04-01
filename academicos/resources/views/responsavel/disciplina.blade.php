@extends('default.principal')
@section('conteudo')
<div class="content-box-large">
	<div class="panel-heading">
		<div class="panel-title"><h1>Disciplinas</h1></div>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table">
           		<tr>
	              	<th>Disciplinas</th>
	              	<th>Professor(a)</th>
            	</tr>

				@foreach ($disciplinas as $disciplina)
				<tr>
					<td>{{$disciplina->disciplina}}</td>
					<td>{{$disciplina->professor}}</td>
				</tr>
				@endforeach
    		</table>
		</div>
	</div>
</div>@stop
