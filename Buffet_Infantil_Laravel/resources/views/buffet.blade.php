
@extends('layouts.main')

@section('title', 'Pé de Moleque - Buffet')

@section('content')

<div id="conteudo"> <!--INICIO CONTEUDO-->
    <div id="editor"></div>
        <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckedit.js"></script>
        <script>
        ClassicEditor
            .create(document.querySelector( '#editor' ) )
            .catch( error => {
                console.error ( error );
            } );
        </script>
    </div>
</div>

@endsection