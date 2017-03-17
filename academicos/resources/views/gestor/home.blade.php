@extends('default.principal') 
@section('conteudo')
	@if (isset($mensagem))
		<div class="alert alert-success">
		    <strong>{{$mensagem}}</strong>
		</div>
	@else
		<div class="content-box-large">
			<h2>Pagina Inicial</h2>
		</div> 
		
	@endif
@stop
