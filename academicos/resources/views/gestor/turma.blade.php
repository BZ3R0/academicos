@extends('default.principal')
@section('conteudo')
@if (isset($mensagem))
	<div class="alert alert-success">
	    <strong>{{$mensagem}}</strong>
	</div>
@else
	<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title">Turmas</div>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table">
	              <thead>
	                <tr>
	                  <th>#ID</th>
	                  <th>SÉRIE</th>
	                  <th>ENSINO</th>
	                  <th>AÇÃO</th>                 
	                </tr>
	              </thead>
	              <tbody>
	              	@foreach ($courses as $course)
		                <tr>
		                  <td>{{$course->idclass}}</td>
		                  <td>{{$course->serie}}º Ano </td>
		                  <td style="text-transform: initial;">{{$course->ensino}}</td> 
		                  <td>
		                  	  <span style="margin: 5px">
		                  	  	<a style="color:blue" href="turma/adiciona/{{$course->idclass}}"><i class="fa fa-user fa-2x" aria-hidden="true"></i></a>
		                  	  </span>

		                  	  <span style="margin: 5px">
		                  	  	<a href="turma/edita/{{$course->idclass}}"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></a>
		                  	  </span>
		                  	  
		                  </td>
		                </tr>
	                @endforeach
	              </tbody>
            	</table>
			</div>
		</div>
	</div>
@endif
@stop