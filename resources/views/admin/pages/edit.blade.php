@extends('adminlte::page')

@section('title', 'Editar Página')

@section('content_header')
    <h1>Editar Página</h1>
@endsection

@section('content')

@if($errors->any())

    <div class="alert alert-danger">
        <ul>
            <h4><i class="icon fas fa-ban"></i>Ocorreu um erro!</h4>
            @foreach ($errors->all() as $erro)
                <li>{{$erro}}</li>
            @endforeach
        </ul>
    </div>

@endif

<div class="card">
    <div class="card-body">
        <form action="{{route('pages.update', ['page' => $page->id])}}" method="POST" class="form-horizontal">
            @method('PUT')
            @csrf
        
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Título da Página</label>
                <div class="col-sm-4">
                    <input type="text" name="title" value="{{$page->title}}" class="form-control @error('title') is-invalid @enderror">
                </div>
            </div>
        
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Corpo</label>
                <div class="col-sm-4">
                    <textarea name="body" class="form-control">{{$page->body}}</textarea>
                </div>
            </div>
        
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <input type="submit" value="Salvar" class="btn btn-success">
                </div>
            </div>
        
        </form>
    </div>
</div>

@endsection