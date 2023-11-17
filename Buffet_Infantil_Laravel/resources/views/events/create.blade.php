@extends('layouts.main')

@section('title', 'Pé de Moleque - Produto')

@section('class', 'cadastro')

@section('content')


<form action="enviar.php" method="post">
    <div class="reserva">
    <h1>Solicitação de Reserva</h1>

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
                <option value="padrao">Padrão</option>
                <option value="premium">Premium</option>
                <option value="luxo">Luxo</option>
            </select>
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