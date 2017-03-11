@extends('default.principal') 
@section('conteudo')
<div class="container">
    <div class="row">
        <div class="contact">
            <div class="aluno-menu col-xs-12 col-md-4">
                <h5><img class="aluno-img" src=""> Aluno</h5>
                <hr>
                <ul>
                  <li><a href="">Notas</a></li>
                  <hr>
                  <li><a href="">Disiciplinas</a></li><hr>
                  <li><a href="">Frequência</a></li>
                </ul>
            </div>
        </div>

        <div class="col-xs-12 col-md-8">
            <div class="contact">
                <h1>Fale Conosco</h1>
                <h5>e-mail salvadorpelaeducacao@gmail.com</h5>
                <form action="/email" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" required> </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="E-Mail" required> </div>
                    <div class="form-group">
                        <textarea id="mensagem" name="mensagem" class="form-control" rows="7" placeholder="Digite sua mensagem" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
