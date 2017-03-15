@extends('default.principal')
@section('conteudo')
<div class="content-box-large">
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table">
            <tr>
							<th>Unidade</th>
              <th>Nota</th>
            </tr>

						@foreach ($notas as $nota)
						<tr>
							<td>{{$nota->unidade}}</td>
							<td>{{$nota->nota}}</td>
						</tr>
						@endforeach
        </table>
			</div>
		</div>
	</div>@stop
