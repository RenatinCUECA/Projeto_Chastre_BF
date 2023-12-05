@extends('layouts.main')

@section('title', 'Pé de Moleque - Reserva')

@section('class', 'cadastro')

@section('content')

<form action="{{ route('events.store')}}" method="post" enctype="multipart/form-data">
    @csrf()
    <div class="reserva">
    <div class="titulo">
    <h1>Solicitação de Reserva</h1>
    </div>
    <fieldset>
        <legend></legend>
            <div class="form-group">
                <label for="image">Imagem do Buffet:</label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
    </fieldset>
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
            <label for="buffet">Pacote de comidas:</label>
            <select name="buffet" id="buffet_select" onchange="handleSelectChange()">
                @foreach ($buffets as $buffet)
                <option value="{{$buffet->name}}">{{$buffet->name}}</option>
                @endforeach
                <option value="personalizado">Buffet personalizado</option>
                </select>
                <div id="opt_editor">
                <label for="editor">Faça seu próprio Buffet personalizado! </label>
                <textarea id="editor"></textarea>
                <script type="text/javascript" src='https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js'></script>
                <script>
                tinymce.init({
                    selector: "#editor"
                });
                </script>
                </div>
                <script>
                    function handleSelectChange() {
                        const select = document.getElementById('buffet_select');
                        const editor = document.getElementById('opt_editor');
                        
                        if (select.value === 'personalizado') {
                            editor.style.display = "block";
                        } else {
                            editor.style.display = "none";
                        }
                    }

                    handleSelectChange();
                </script>
                
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>Aniversariante & convidados</legend>
        <div class="convidados">
            <label for="qtd_convidados">Quantidade de convidados:</label>
            <input type="number" name="qtd_convidados" id="qtd_convidados" min="1" placeholder="0">
        </div>
        <div class="aniversariante">
            <div>
                <label for="nome">Nome do aniversariante:</label>
                <input type="text" name="nome" id="nome" placeholder="Exemplo: Bruno Duarte">
            </div>
            <div>
                <label for="idade">Idade a ser comemorada:</label>
                <input type="number" name="idade" id="idade" min="1" placeholder="Exemplo: 9">
            </div>

            <input type="submit" value="Enviar">
            </div>
        </div>
    </fieldset>
</form>

@endsection