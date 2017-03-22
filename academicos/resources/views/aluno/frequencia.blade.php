@extends('default.principal')
@section('conteudo')
<div class="content-box-large">
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table">
            <tr>
							<th>Falta</th>
              <th>Data</th>
							<th>Justificativa</th>
            </tr>

						@foreach ($frequencias as $frequencia)
						<tr>
							<td>{{$frequencia->falta}}</td>
							<td>{{$frequencia->data}}</td>
							<td>{{$frequencia->justificativa}}</td>
						</tr>
						@endforeach
        </table>
			</div>
		</div>
	</div>@stop
