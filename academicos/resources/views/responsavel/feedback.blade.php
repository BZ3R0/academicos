@extends('default.principal')
@section('conteudo')
<div class="content-box-large">
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table">
           		<tr>
	             	<th>Feedback</th>
	              	<th>Disciplinas</th>
	              	<th>Professor(a)</th>
            	</tr>

				@foreach ($feedbacks as $feedback)
				<tr>
					<td>{{$feedback->mensagem}}</td>
					<td>{{$feedback->disciplina}}</td>
					<td>{{$feedback->professor}}</td>
				</tr>
				@endforeach
    		</table>
		</div>
	</div>
</div>@stop
