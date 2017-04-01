@extends('default.principal')
@section('conteudo')
<!--o Código está fixo 
mas será implementado a consulta em breve-->
<div class="content-box-large">
	<div class="panel-heading">
		<div class="panel-title"><h1>Notas</h1></div>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table">
           		<tr>
	              	<th>Disciplinas</th>
	              	<th>1 unidade</th>
	              	<th>2 unidade</th>
	              	<th>3 unidade</th>
	              	<th>4 unidade</th>
	              	<th>Média</th>
	              	<th>Professor(a)</th>
            	</tr>
				
				<tr>
					<td>História</td>
					<td>8</td>
					<td>7</td>
					<td>6,5</td>
					<td>8</td>
					<td>7,3</td>
					<td>Julia</td>
				</tr>
				<tr>
					<td>Português</td>
					<td>9</td>
					<td>9,3</td>
					<td>10</td>
					<td>10</td>
					<td>9,5</td>
					<td>Juca</td>
				</tr>
				<tr>
					<td>Matemática</td>
					<td>3</td>
					<td>7</td>
					<td>9</td>
					<td>8,3</td>
					<td>6,8</td>
					<td>Manuel</td>
				</tr>

    		</table>
		</div>
	</div>
</div>@stop
