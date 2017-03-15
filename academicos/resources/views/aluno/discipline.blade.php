@extends('default.principal')
@section('conteudo')
<div class="content-box-large">
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table">
            <tr>
              <th>Disciplinas</th>
              <th>Professor(a)</th>
            </tr>

						@foreach ($disciplinas as $disciplina)
						<tr>
							<td><a href="grade">{{$disciplina->name}}</a></td>
							<td>{{$disciplina->teacher}}</td>
						</tr>
						@endforeach
        </table>
			</div>
		</div>
	</div>@stop
