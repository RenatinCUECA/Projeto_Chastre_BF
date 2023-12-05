
@extends('layouts.main')

@section('title', 'Pé de Moleque - Buffet')

@section('class', 'buffet')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Novo Buffet</h2>
            </div>
        </div>
    </div>

    <form action="{{route('buffets.store')}}" method="POST">
        @csrf()
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="name"><strong>Nome:</strong></label>  
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">

                    <div>
                        <label for="description"><strong>Cardápio:</strong></label>
                        <textarea id="description" name="description"></textarea>
                        <script type="text/javascript" src='https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js'></script>
                        <script>
                        tinymce.init({
                            selector: "#description"
                        });
                        </script>
                        </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="price"><strong>Preço por pessoa:</strong></label>
                    <input type="number" step="any"  name="price" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
    </form>
</div>

@endsection