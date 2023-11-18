@extends('layouts.main')

@section('title', 'Pé de Moleque - Produto')

@section('class', 'cadastro')

@section('content')


<form action="enviar.php" method="post">
    <div class="reserva">
    <div class="titulo">
    <h1>Solicitação de Reserva</h1>
    </div>
    <fieldset>
        <legend>Data e Hora</legend>
            <div class="data-hora">
                <label for="data">Data:</label>
                <input type="date" name="data" id="data">
            </div>
            <div class="data-hora">
                <label for="hora">Hora:</label>
                <input type="time" name="hora" id="hora">
            </div>
    </fieldset>
    <fieldset>
        <legend>Opções de Buffet</legend>
        <div class="pacote">
            <label for="pacote">Pacote de comidas:</label>
            <select name="pacote" id="pacote">
                <option value="classico">Clássico</option>
                <option value="premium">Premium</option>
                <option value="luxo">Luxo</option>
                <option value="null">Buffet personalizado</option>
                </select>
                <div>
                <label for="editor">Faça seu próprio Buffet personalizado! </label>
                <textarea id="editor"></textarea>
                <script type="text/javascript" src='https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js'></script>
                <script>
                tinymce.init({
                    selector: "#editor"
                });
                </script>
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>Aniversariante & convidados</legend>
        <div class="convidados">
            <label for="convidados">Quantidade de convidados:</label>
            <input type="number" name="convidados" id="convidados" min="10" max="100" placeholder="0">
        </div>
        <div class="aniversariante">
            <div>
                <label for="nome">Nome do aniversariante:</label>
                <input type="text" name="nome" id="nome" placeholder="Exemplo: Bruno Duarte">
            </div>
            <div>
                <label for="idade">Idade a ser comemorada:</label>
                <input type="number" name="idade" id="idade" placeholder="Exemplo: 9">
            </div>

            <input type="submit" value="Enviar">
            </div>
        </div>
    </fieldset>
</form>

@endsection